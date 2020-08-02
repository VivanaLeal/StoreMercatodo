@extends('layouts.admin_layout')

@section('title')
  Admin MercaTodo
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

  <div class="form-group">
    <label for="inputApellidos">APELLIDOS</label>
    <input type="text" class="form-control" name="inputApellidos" placeholder="Escribe tus apellidos">
  <div class="form-group">
    <label for="inputDirección">DIRECIÓN</label>
    <input type="text" class="form-control" name="inputAddress2" placeholder="calle-#">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCiudad">CIUDAD</label>
      <input type="text" class="form-control" name="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputDepartamento">DEPARTAMENTO</label>
      <select id="inputState" class="form-control">
        <option selected>Amazonas</option>
        <option>Antioquia</option>
        <option>Arauca</option>
        <option>Atlántico</option>
        <option>Bolivar</option>
        <option>Boyacá</option>
        <option>Caldas</option>
        <option>Caquetá</option>
        <option>Casanare</option>
        <option>Cauca</option>
        <option>Cesar</option>
        <option>Chocó</option>
        <option>Córdoba</option>
        <option>Cundinamarca</option>
        <option>Gûaínia</option>
        <option>Guaviare</option>
        <option>La Guajira</option>
        <option>Magdalena</option>
        <option>Nariño</option>
        <option>...</option>
      </select>
    </div>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">REGISTRAR</button>
</form>
</div>
@endsection