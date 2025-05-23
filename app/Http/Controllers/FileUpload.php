<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cour;
use App\Models\element;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Exception;

class FileUpload extends Controller
{
    /**
     * Affiche la page étudiante avec les cours et statistiques
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cour = cour::all();
        $nbr_cour = cour::count();
        $nbr_user = User::where('is_admin', NULL)->count();
        
        return view('etudiant', compact('cour', 'nbr_cour', 'nbr_user'));
    }
    
    /**
     * Affiche la page d'accueil avec les cours triés par date
     *
     * @return \Illuminate\View\View
     */
    public function indexof()
    {
        $cours = cour::orderBy('created_at', 'DESC')->get();
        return view('home', compact('cours'));
    }
    
    /**
     * Affiche le formulaire de création de cours
     *
     * @return \Illuminate\View\View
     */
    public function createForm()
    {
        // Récupérer tous les éléments pour le menu déroulant
        $elements = element::all();
        return view('home', compact('elements'));
    }
    
    /**
     * Gère le téléchargement de fichiers et la création de cours
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function fileUpload(Request $req)
    {
        // Validation améliorée avec vérification de l'existence de l'élément
        $req->validate([
            'titre' => 'required|string|max:255',
            'cour' => 'required|file|mimes:csv,txt,xlx,xls,pdf,pptx|max:20480', // 20MB max
            'element_id' => 'required|exists:elements,id' // Vérifie que l'element_id existe dans la table elements
        ], [
            'titre.required' => 'Le titre est obligatoire',
            'cour.required' => 'Veuillez sélectionner un fichier',
            'cour.mimes' => 'Format de fichier non supporté. Formats acceptés: csv, txt, xlx, xls, pdf, pptx',
            'element_id.required' => 'Veuillez sélectionner un élément',
            'element_id.exists' => 'L\'élément sélectionné n\'existe pas'
        ]);

        // Double vérification de l'existence de l'élément (optionnel mais recommandé)
        $elementExists = element::find($req->element_id);
        if (!$elementExists) {
            return back()
                ->with('error', 'L\'élément sélectionné n\'existe pas dans la base de données.')
                ->withInput();
        }

        // Vérification que le fichier est bien présent et valide
        if (!$req->hasFile('cour') || !$req->file('cour')->isValid()) {
            return back()
                ->with('error', 'Le fichier est invalide ou corrompu.')
                ->withInput();
        }

        try {
            $fileModel = new cour();
            
            // Traitement du fichier
            $fileName = time() . '_' . $req->cour->getClientOriginalName();
            $filePath = $req->file('cour')->storeAs('uploads', $fileName, 'public');
            
            // Attribution des valeurs
            $fileModel->titre = $req->titre;
            $fileModel->element_id = $req->element_id;
            $fileModel->file_path = '/storage/' . $filePath;
            
            // Sauvegarde en base de données
            $fileModel->save();
            
            return back()
                ->with('success', 'Le fichier a été téléchargé avec succès.')
                ->with('file', $fileName);
        } catch (Exception $e) {
            // Log de l'erreur pour le débogage
            Log::error('Erreur lors de l\'upload du fichier: ' . $e->getMessage());
            
            return back()
                ->with('error', 'Une erreur est survenue lors du téléchargement: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Supprime un cours et son fichier associé
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $cour = cour::findOrFail($id);
            
            // Supprimer également le fichier physique
            $filePath = str_replace('/storage/', 'public/', $cour->file_path);
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            
            $cour->delete();
            
            return redirect()->route('home')
                ->with('success', 'Le cours a été supprimé avec succès');
        } catch (Exception $e) {
            Log::error('Erreur lors de la suppression du cours: ' . $e->getMessage());
            
            return redirect()->route('home')
                ->with('error', 'Erreur lors de la suppression du cours: ' . $e->getMessage());
        }
    }
    
    /**
     * Télécharge un fichier de cours
     *
     * @param  int  $id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Illuminate\Http\RedirectResponse
     */
    public function download($id)
    {
        try {
            $cour = cour::findOrFail($id);
            $filePath = str_replace('/storage/', 'public/', $cour->file_path);
            
            if (!Storage::exists($filePath)) {
                return back()->with('error', 'Le fichier n\'existe pas ou a été supprimé.');
            }
            
            $fileName = basename($cour->file_path);
            return Storage::download($filePath, $fileName);
        } catch (Exception $e) {
            Log::error('Erreur lors du téléchargement du fichier: ' . $e->getMessage());
            
            return back()->with('error', 'Erreur lors du téléchargement du fichier: ' . $e->getMessage());
        }
    }
}