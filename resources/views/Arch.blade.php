@extends('layout')
@section('titre', 'Architucture')
@section('contenu')
    <div class="start_btn"><button>Commencer Quiz</button></div>
    <div class="info_box">
        <div class="info_title">
            <span> quel que consseile pour le Quiz </span>
        </div>
        <div class="info_list">
            <div class="info">1.Pour chaque question vous avez<sapn> 15 seconde.</sapn>
            </div>
            <div class="info">2.Une fois que vous avez sélectionné votre réponse, elle ne peut pas être annulée.</div>
            <div class="info">3.Vous pouvez sélectionner n'importe quelle option une fois le temps terminer.</div>
            <div class="info">4.Vous obtiendrez des points sur la base de vos bonnes réponses.</div>
        </div>
        <div class="buttons">
            <button class="quit">Quiter le Quiz</button>
            <button class="restart">centinuer</button>
        </div>
    </div>
    <br>
    <div class="border-box">

        <br>
        <header>
            <div class="title">Architucture des ordinateure</div>
            <div class="timer">
                <div class="tiem_text">temps restant</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!--<span>La mémoire qui permet l’opération de lecture et d’écriture simultanées est :</span>-->
            </div>
            <div class="option_list">
                <!--<div class="option" >
            <span >ROM</span>
            <div class="icon cross"><i class="fas fa-times"></i></div>
         </div>
      <div class="option">
            <span>RAM</span>
            <div class="icon tick"><i class="fas fa-check"></i></div>
        </div>
    <div class="option">
            <span>EPROM</span>
            <div class="icon cross"><i class="fas fa-times"></i></div>
    </div>
<div class="option">
            <span>EEPROM</span>
            <div class="icon cross"><i class="fas fa-times"></i></div>
        </div>
    </div>-->
        </section>
        <footer>
            <div class="total_que">
                <!--<span><p>1</p><p>in</p><p>12</p> quistions</span>-->
            </div>
            
            <button class="next_btn">suivant</button>
        </footer>
    </div>
    <div class="result_box">
        <div class="icon">

            <i class="fas fa-crown"></i>
        </div>

        <div class="complete_text">Vous avez terminé le quiz</div>
        <div class="score_text">
            <!--<span>and sorry,you got only <p>2</p> out of  <p>11</p></span>-->
        </div>
        <br>
        <div class="buttons">
            <button class="quit">Quiter le quiz</button>
        </div>

    </div>
    <script src="{{ asset('js/Arch/file.js')}}"></script>
    <script src="{{ asset('js/Arch/file1.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    @endsection