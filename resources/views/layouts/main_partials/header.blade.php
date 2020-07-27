@extends('layouts.main_partials.head')
  <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="/"><img src="img/logoMercatodo.jpg" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <nav class="navbar navbar-light bg-light">
                 <form class="form-inline">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                 </form>
              </nav>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item submenu dropdown">
                <a href="#" class="btn btn-outline-dark" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categorías</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="tecnologia.html">Tecnología</a></li>
                  <li class="nav-item"><a class="nav-link" href="electrodomesticos.html">Electrodomésticos</a></li>
                  <li class="nav-item"><a class="nav-link" href="moda.html">Moda</a></li>
                  <li class="nav-item"><a class="nav-link" href="viveres.html">Víveres</a></li>
                  <li class="nav-item"><a class="nav-link" href="reposteria.html">Repostería</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="btn btn-outline-danger" data-toggle="secundary" role="button" aria-haspopup="true"
                  aria-expanded="false">Grandes Ofertas</a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              
                <!-- Example single danger button -->
             <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"> </a>
              <a class="dropdown-item" href="{{ route('login') }}">{{ __('Inicar Sesion') }}</a>
              <a class="dropdown-item" href="{{ route('register') }}">{{ __('Registrar') }}</a>
              <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
              </a>

            </div>
         </div>



         <div>
      </div>
    </nav>
</div>