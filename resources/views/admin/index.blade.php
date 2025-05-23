@extends('layouts.layout')
@section('contenu')
<section id="menu">
  <div class="logo">
    <img src="{{ asset('img/logo.png')}}" alt="logo">
    <h2>QCM Génie</h2>
  </div>
  <div class="items">
    <li class="active"><a href="{{ route('users.index')}}"><i class='bx bx-tachometer'></i> Acceuil</a></li>
    <li> <a data-bs-toggle="modal" data-bs-target="#modeladd"><i class='bx bx-user-plus'></i>Ajouter</a></li>
    <br><br><br><br><br><br><br><br><br><br>
    <li><a href="{{ route('users.edit', Auth::user()->id)}}"><i class='bx bxs-user'></i> Mon profile</a></li>
    <li><a class="navigation-link" href="{{ route('logout')}}" onclick="event.preventDefault();
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
  <h3 class="i-name">Acceuil</h3>
  <div class="values">
    <div class="val-box">
      <i class='bx bxs-user'></i>
      <div>
        <h3>{{ $nbr_user }}</h3>
        <span>Total d'utilisateur</span>
      </div>
    </div>
    <div class="val-box">
    <i class='bx bxs-file-pdf'></i>
      <div>
        <h3>{{ $nbr_cour }}</h3>
        <span>Total des cours</span>
      </div>
    </div>
  </div>
  <div class="board">
    <table id="myTable" width="100%" class="table table-striped table-responsive table-hover table-borderless">
      <thead>
        <tr style="background:#8a39e15d;">
          <td>ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td></td>
        </tr>
      </thead>
      <tbody>

        @if(isset($user))
        @foreach($user as $users)
        @if($users->is_admin == NULL)
        <tr>
          <td>{{$users->id}}</td>
          <td>{{$users->name}}</td>
          <td>{{$users->email}}</td>
          <td class="text-center">
            <a href="{{ route('users.edit',$users->id)}}"><i class='bx bxs-edit-alt' data-toggle="tooltip" title="Modifier" style="font-size:25px ;color:#E49B0F"></i></a>
            <form action="{{ route('users.destroy', $users->id)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button type="submit"><i class='bx bxs-trash-alt' data-toggle="tooltip" title="Supprimer" style="font-size:25px ;color:#8B0000;"></i></button>
            </form>
          </td>
        </tr>
        @endif
        @endforeach
        @endif

      </tbody>
    </table>
  </div>

</section>
@if(Session::get('completed'))
<script>
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
    },
    buttonsStyling: false
  })
  swalWithBootstrapButtons.fire({
    title: "<strong>Utilisateur enregesté</strong>",
    icon: 'success',
    confirmButton: 'btn btn-success',
    showConfirmButton: true,
  })
</script>
@endif
@if(Session::get('deleted'))
<script>
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
    },
    buttonsStyling: false
  })
  swalWithBootstrapButtons.fire({
    title: "<strong>Utilisateur supprimé</strong>",
    icon: 'success',
    confirmButton: 'btn btn-success',
    showConfirmButton: true,
  })
</script>
@endif
<!-- Modal ajouter -->
<div class="modal fade" id="modeladd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="background:#2e0249;">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
      <form method="post" action="{{ route('users.store') }}">
        <div class="modal-body">
          <div class="form-group">
            @csrf

            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="text" class="form-control" name="password" />
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


<!-- Modal modification -->
<div class="modal fade" id="modeledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="background:#2e0249;">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
      <form method="post" action="{{ route('users.store') }}">
        <div class="modal-body">
          <div class="form-group">
            @csrf

            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="text" class="form-control" name="password" />
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
<script>
  $('#menu-btn').click(function() {
    $('#menu').toggleClass("active");
  })
</script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
@endsection