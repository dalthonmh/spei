<ul class="sidebar-menu">
  <li class="header">Navegación</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="{{ request()->is('dashbard') ? 'active' : '' }}">
  {{-- <li class="{{ setActiveRoute('dashboard') }}"> --}}
    <a href="{{ route('dashboard') }}">
      <i class="fa fa-home"></i> 
      <span>Inicio</span>
    </a>
  </li>

  <li class="treeview {{ request()->is('admin.prestamos.index') ? 'active' : '' }} ">
  {{-- <li class="treeview {{ setActiveRoute('admin.prestamos.index') }} "> --}}
    <a href="#"><i class="fa fa-bars"></i> <span>Préstamos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('admin.prestamos.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('admin.prestamos.index') }}" > --}}
        <a href="{{ route('admin.prestamos.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los post
      </a>
    </li>
      <li>
        @if (request()->is('/admin/prestamos/*'))
          <a href="{{ route('admin.prestamos.index','#create') }}"><i class="fa fa-pencil"></i> Crear un post</a>
        @else
          <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil"></i> Crear un post</a>
        @endif
      </li>
    </ul>
  </li>

  <li class="treeview ">
  {{-- <li class="treeview {{ setActiveRoute(['admin.users.index','admin.users.create']) }} "> --}}
    <a href="#"><i class="fa fa-users"></i> <span>Usuarios</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('admin.users.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('admin.users.index') }}" > --}}
        <a href="{{ route('admin.users.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los usuarios
      </a>
    </li>
      <li class="{{ request()->is('admin.users.create') ? 'active' : '' }}">
      {{-- <li class="{{ setActiveRoute('admin.users.create') }}"> --}}
          <a href="{{ route('admin.users.create') }}"><i class="fa fa-pencil"></i> Crear un usuario</a>
      </li>
    </ul>
  </li>

  {{-- EQUIPOS --}}

  <li class="treeview ">
  {{-- <li class="treeview {{ setActiveRoute(['admin.users.index','admin.users.create']) }} "> --}}
    <a href="#"><i class="fa fa-sitemap"></i> <span>Equipos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ request()->is('admin.equipos.index') ? 'active' : '' }}" >
      {{-- <li class="{{ setActiveRoute('admin.equipos.index') }}" > --}}
        <a href="{{ route('admin.equipos.index') }}"> 
        <i class="fa fa-eye"></i> Ver todos los equipos
      </a>
    </li>
      <li class="{{ request()->is('admin.equipos.create') ? 'active' : '' }}">
      {{-- <li class="{{ setActiveRoute('admin.equipos.create') }}"> --}}
          <a href="{{ route('admin.equipos.create') }}"><i class="fa fa-pencil"></i> Crear un equipo</a>
      </li>
    </ul>
  </li>

</ul>