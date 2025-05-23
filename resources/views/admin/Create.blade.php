@extends('admin.layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header bg-secondary">
   <h3> Ajouter utilisateur</h3>
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
      @else
      
    @endif
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-2 btn-block btn-success"><i class='bx bxs-save'></i>Enregistrer</button>
      </form>
  </div>
</div>
@endsection
