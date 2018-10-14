<ul class="sidebar-menu">
  <li class="header">Navegación</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="{{ request()->is('home') ? 'active' : '' }}">
  {{-- <li class="{{ setActiveRoute('home') }}"> --}}
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i> 
      <span>Inicio</span>
    </a>
  </li>

  <li class="treeview {{ request()->is('prestamos.index') ? 'active' : '' }} ">
  {{-- <li class="treeview {{ setActiveRoute('prestamos.index') }} "> --}}
    <a href="#"><i class="fa fa-bars"></i> <span>Préstamos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('prestamos.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('prestamos.index') }}" > --}}
        <a href="{{ route('prestamos.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los préstamos
      </a>
    </li>
      <li>
        @if (request()->is('/admin/prestamos/*'))
          <a href="{{ route('prestamos.index','#create') }}"><i class="fa fa-pencil"></i> Crear un préstamo</a>
        @else
          <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil"></i> Crear un préstamo</a>
        @endif
      </li>
    </ul>
  </li>

  <li class="treeview ">
  {{-- <li class="treeview {{ setActiveRoute(['users.index','users.create']) }} "> --}}
    <a href="#"><i class="fa fa-users"></i> <span>Usuarios</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('usuarios.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('users.index') }}" > --}}
        <a href="{{ route('usuarios.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los usuarios
      </a>
    </li>
      <li class="{{ request()->is('usuarios.create') ? 'active' : '' }}">
      {{-- <li class="{{ setActiveRoute('users.create') }}"> --}}
          <a href="{{ route('usuarios.create') }}"><i class="fa fa-pencil"></i> Crear un usuario</a>
      </li>
    </ul>
  </li>

  {{-- EQUIPOS --}}

  <li class="treeview ">
  {{-- <li class="treeview {{ setActiveRoute(['users.index','users.create']) }} "> --}}
    <a href="#"><i class="fa fa-sitemap"></i> <span>Equipos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('equipos.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('equipos.index') }}" > --}}
        <a href="{{ route('equipos.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los equipos
      </a>
    </li>
      <li class="{{ request()->is('equipos.create') ? 'active' : '' }}">
      {{-- <li class="{{ setActiveRoute('equipos.create') }}"> --}}
          <a href="{{ route('equipos.create') }}"><i class="fa fa-pencil"></i> Crear un equipo</a>
      </li>
    </ul>
  </li>

</ul>