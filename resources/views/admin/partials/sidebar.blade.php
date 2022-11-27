<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SSB Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konten
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/about') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tentang Kami</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/mission') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Mission</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/banner') }}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Homepage Banner</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/footer-description') }}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Footer Description</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact"
            aria-expanded="true" aria-controls="collapseContact">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contacts</span>
        </a>
        <div id="collapseContact" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/contact') }}">Contact Data</a>
                <a class="collapse-item" href="{{ url('admin/contact/create') }}">Add Contact</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Products
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
            aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-fw fa-table"></i>
            <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/products') }}">Products Data</a>
                <a class="collapse-item" href="{{ url('admin/product/create') }}">Add Product</a>
                <a class="collapse-item" href="{{ url('admin/product-tabs') }}">Manage Tabs</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
            aria-expanded="true" aria-controls="collapseServices">
            <i class="fas fa-fw fa-folder"></i>
            <span>Services</span>
        </a>
        <div id="collapseServices" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/services') }}">Services Data</a>
                <a class="collapse-item" href="{{ url('admin/services/create') }}">Add Service</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrochures"
            aria-expanded="true" aria-controls="collapseBrochures">
            <i class="fas fa-fw fa-file"></i>
            <span>Brochures</span>
        </a>
        <div id="collapseBrochures" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/brochures') }}">Brochures Data</a>
                <a class="collapse-item" href="{{ url('admin/brochure/create') }}">Add Brochure</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductGallery"
            aria-expanded="true" aria-controls="collapseProductGallery">
            <i class="fas fa-fw fa-camera"></i>
            <span>Product Galleries</span>
        </a>
        <div id="collapseProductGallery" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/product/galleries') }}">Product Pictures</a>
                <a class="collapse-item" href="{{ url('admin/product/gallery/create') }}">Add Picture</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServiceGallery"
            aria-expanded="true" aria-controls="collapseServiceGallery">
            <i class="fas fa-fw fa-image"></i>
            <span>Service Galleries</span>
        </a>
        <div id="collapseServiceGallery" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/service/galleries') }}">Service Pictures</a>
                <a class="collapse-item" href="{{ url('admin/service/gallery/create') }}">Add Picture</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Additional
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCertificates"
            aria-expanded="true" aria-controls="collapseCertificates">
            <i class="fas fa-fw fa-user"></i>
            <span>Certificates</span>
        </a>
        <div id="collapseCertificates" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/certificates') }}">Certificates Data</a>
                <a class="collapse-item" href="{{ url('admin/certificate/create') }}">Add Certificate</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClients"
            aria-expanded="true" aria-controls="collapseClients">
            <i class="fas fa-fw fa-tv"></i>
            <span>Clients</span>
        </a>
        <div id="collapseClients" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/clients') }}">Clients Data</a>
                <a class="collapse-item" href="{{ url('admin/client/create') }}">Add Client</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-book"></i>
            <span>Articles</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/articles') }}">Articles Data</a>
                <a class="collapse-item" href="{{ url('admin/article/create') }}">Add Article</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>