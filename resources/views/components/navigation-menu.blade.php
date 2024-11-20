<div id="layoutSidenav_nav" class="change">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: rgba(17, 31, 39, 1)">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon-hover"><i class="fa-solid fa-cart-shopping"></i></div>
                    Ventas
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-dollar-sign"></i></div>
                    Compras
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-pills"></i></i></div>
                    Medicamentos
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-tag"></i></i></div>
                    Categorias
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion" style="transition: height 0.3s ease;">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Tipos</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Presentaciones</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Marcas</a>
                    </nav>
                </div>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-truck"></i></div>
                    Distribuidores
                </a>

                <a class="nav-link" href={{route('clientes.index')}}>
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users-rectangle"></i></div>
                    Clientes
                </a>


            </div>

        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>