
<ul class="navbar-nav sidebar sidebar-dark accordion toggled" id="accordionSidebar" style="transition: all 0.2s ease; background-color: rgba(17, 31, 39, 1);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('vendor/logo02.svg') }}" alt="home icon" style="width: 50px; height: 50px;" />


            
            
       
        </div>
 
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <div class="sidebar-heading">
        Acciones
    </div>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
        <i class="fa-brands fa-shopify"></i>
            <span>Venta</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
        <i class="fa-solid fa-shop"></i>
            <span>Compra</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('medicamentos.index')}}">
        <i class="fa-solid fa-tablets"></i>
            <span>Medicamentos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Ayuda 
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-tag text-white"></i>
            <span>Categorias</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categorias:</h6>
                <a class="collapse-item" href="{{route('familias.index')}}">Familias</a>
                <a class="collapse-item" href="{{route('presentaciones.index')}}">Presentaciones</a>
                <a class="collapse-item" href="{{route('marcas.index')}}">Marcas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-sitemap"></i>
            <span>Detalles</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Detalles:</h6>
                <a class="collapse-item" href="{{route('enfermedades.index')}}">Enfermedades</a>
                <a class="collapse-item" href="{{route('contraindicaciones.index')}}">Contraindicaciones</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Administrar
    </div>   

    <li class="nav-item">
        <a class="nav-link" href="{{route('proveedores.index')}}">
        <i class="fa-solid fa-truck"></i>
            <span>Proveedores</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('clientes.index')}}">
        <i class="fa-solid fa-users-rectangle"></i>
            <span>Clientes</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
        <i class="fa-solid fa-user"></i>
            <span>Usuarios</span></a>
    </li>
    <!-- Heading -->
  

    <!-- Divider -->
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-3" >
    <button class="rounded-circle border-0" id="sidebarToggle" ></button>
</div>

    <!-- Sidebar Message -->
  

</ul>
