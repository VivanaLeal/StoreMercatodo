@extends('layouts.admin_layout')


@section('title','Administrador')

@section('content')
<!-- INCIO TABLA DE DATOS DE USUARIOS--->
  <!-- /.row -->
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b><em>LISTA DE USUARIOS REGISTRADOS</em></b></h3>
                
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
    
                <div class="col-12">
                <a href="{{url('/create')}}"><button type="button" class="btn btn-primary btn-sm">{{('Agregar Usuario')}}</button></a>
                </div>
                </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>USUARIO</th>
                      <th>EMAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)   
                    <tr>
                      <td>{{$user->id }}</td>
                      <td>{{$user->name }}</td>
                      <td>{{$user->email }}}</td>
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
<!-- FINAL TABLA DE DATOS DE USUARIOS--->
@endsection