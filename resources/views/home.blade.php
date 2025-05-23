@extends('layouts.layout')
@section('contenu')

<section id="menu">
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}" alt="logo">
        <h2>QCM Génie</h2>
    </div>
    <div class="items">
        <li class="active"><a href="{{route('home')}}"><i class='bx bx-book-alt'></i>Liste des cours</a></li>
        <li> <a data-bs-toggle="modal" data-bs-target="#modeladd"><i class='bx bxs-file-plus'></i>Ajouter</a></li>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <li> <a class="navigation-link" href="{{ route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">


                <i class='bx bx-log-out'></i> Deconnecter

            </a>
            <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none;">
                @csrf
            </form>
        </li>
    </div>
</section>
<section id="interface">
    <div class="navigation">
        <div class="n1">
            <i id="menu-btn" class='bx bx-menu'></i>
        </div>
    </div>


    <div class="board">
        <table id="myTable" width="100%" class="table table-striped table-responsive table-hover table-borderless">
            <thead>
                <tr class="text-center" style="background:#8a39e15d;">
                    <td class="text-center">ID</td>
                    <td class="text-center">Titre</td>
                    <td class="text-center">Element</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cours)
                <tr class="text-center">
                    <td>{{$cours->id}}</td>
                    <td>{{$cours->titre}}</td>
                    @if($cours->element_id == 1)
                    <td>Java</td>
                    @endif
                    @if($cours->element_id == 2)
                    <td>C</td>
                    @endif
                    @if($cours->element_id == 3)
                    <td>C++</td>
                    @endif
                    @if($cours->element_id == 4)
                    <td>Html</td>
                    @endif
                    @if($cours->element_id == 5)
                    <td>JavaScript</td>
                    @endif
                    @if($cours->element_id == 7)
                    <td>Algorithmique</td>
                    @endif
                    @if($cours->element_id == 8)
                    <td>Archetecture</td>
                    @endif
                    @if($cours->element_id == 9)
                    <td>Css</td>
                    @endif
                    @if($cours->element_id == 10)
                    <td>Electronique numérique</td>
                    @endif
                    @if($cours->element_id == 11)
                    <td>Mathématiques appliquées</td>
                    @endif
                    @if($cours->element_id == 12)
                    <td>Oracle</td>
                    @endif
                    @if($cours->element_id == 13)
                    <td>Php</td>
                    @endif
                    @if($cours->element_id == 14)
                    <td>Réseaux informatique</td>
                    @endif
                    @if($cours->element_id == 15)
                    <td>Structure de donnée</td>
                    @endif
                    @if($cours->element_id == 16)
                    <td>Système d'exploitation</td>
                    @endif
                    @if($cours->element_id == 17)
                    <td>Systèmes d'information</td>
                    @endif
                    @if($cours->element_id == 18)
                    <td>UML</td>
                    @endif
                    <td class="text-center">
                        <a class="btn-delet" href="{{$cours->file_path}}" target="_blank"><i class='bx bx-show' data-toggle="tooltip" title="Voir" style="font-size:25px ;color:#E49B0F;"></i></a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('cours.destroy', $cours->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delet" type="submit"><i class='bx bxs-trash-alt' data-toggle="tooltip" title="Supprimer" style="font-size:25px ;color:#8B0000;"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>

<!-- Modal ajouter -->
<div class="modal fade" id="modeladd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white" style="background:#2e0249;">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un cour</h5>
                <button type="button" class="btn-close" style="color: #fff;" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form action="{{route('homes')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        @csrf

                        <label for="titre">Titre du chapitre :</label><br>
                        <input type="text" class="form-control" name="titre" id="titre"><br>
                    </div>
                    <div class="form-group">
                        <label for="chooseFile">Choisir le PDF:</label><br>
                        <input type="file" class="form-control" name="cour" id="chooseFile">
                    </div>
                    <div class="form-group">
                        <label for="select">Element :</label><br>
                        <select name="element_id" id="select" class="form-control">
                            <option value="">Choisir un element</option>
                            <option value="1">Java</option>
                            <option value="2">C</option>
                            <option value="3">C++</option>
                            <option value="4">Html</option>
                            <option value="5">JavaScript</option>
                            <option value="7">Algorithmique</option>
                            <option value="8">Archetecture des ordinateur</option>
                            <option value="9">Css</option>
                            <option value="10">Electronique numérique</option>
                            <option value="11">Mathématiques appliquées</option>
                            <option value="12">Oracle</option>
                            <option value="13">Php</option>
                            <option value="14">Réseaux informatique</option>
                            <option value="15">Structure de donnée</option>
                            <option value="16">Système d'exploitation</option>
                            <option value="17">Systèmes d'information</option>
                            <option value="18">UML</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end Modal -->

<!--loading page-->

<!--end loading-->
@if(Session::get('deleted'))
<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: "<strong>Cour supprimé</strong>",
        icon: 'success',
        confirmButton: 'btn btn-success',
        showConfirmButton: true,
    })
</script>
@endif
@if(Session::get('success'))
<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: "<strong>Cour ajouté</strong>",
        icon: 'success',
        confirmButton: 'btn btn-success',
        showConfirmButton: true,
    })
</script>
@endif
<!--resposive menu-->
<script>
    $('#menu-btn').click(function() {
        $('#menu').toggleClass("active");
    })
</script>
<!--table-->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<!--link tr to edit-->
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
@endsection