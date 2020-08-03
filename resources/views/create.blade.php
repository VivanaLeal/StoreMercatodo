@extends('layouts.admin_layout')

@section('title')
  CREAR NUEVO USUARIO
@endsection

@section('content')
<div class="container">
<form action="/admin"method="POST">
@csrf
@method('PUT')

  <div class="form-group">
    <label for="inputName">NOMBRES</label>
    <input type="text" class="form-control" name="inputName" placeholder="Escribe tu nombre">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="inputPassword4">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">REGISTRAR</button>
</form>
</div>
</div>
@endsection