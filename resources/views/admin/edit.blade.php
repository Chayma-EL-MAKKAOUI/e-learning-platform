@extends('layouts.layout')
@section('contenu')
<section id="menu">
    <div class="logo">
      <img src="{{ asset('img/logo.png')}}" alt="logo">
      <h2>QCM Génie</h2>
    </div>
    <div class="items">
      <li class="active"><a href="{{ route('users.index')}}"><i class='bx bx-tachometer'></i> Acceuil</a></li>
      <li><a data-bs-toggle="modal" data-bs-target="#modeladd"><i class='bx bx-user-plus'></i>Ajouter</a></li>
      <br><br><br><br><br><br><br><br><br><br><br>
      <li><a href="{{ route('users.edit', Auth::user()->id)}}"><i class='bx bxs-user'></i> Mon profile</a></li>
      <li><a href="{{ route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i> Deconnecter</a></li>
    </div>
  </section>
  <section id="interface">
  <div class="card">
  <div class="card-header" style="background:#2e0249;">
   <h3 class="text-white"> Modifier</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('users.update', $user->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
      </div>
      <button type="submit" class="btn btn-block btn-success btn-edit">Enregistrer</button>
    </form>
  </div>
</div>
</section>
  <!--message success-->
  @if(Session::get('completed'))
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                },
                buttonsStyling: false
              })
              swalWithBootstrapButtons.fire({
                title: "<strong>Utilisateur modifié</strong>",
                icon: 'success',
                confirmButton: 'btn btn-success',
                showConfirmButton: true,
              })
  </script>
  @endif
  <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
  </script>
@endsection