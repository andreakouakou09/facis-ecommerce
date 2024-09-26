<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ url('admin/dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('backend/assets/images/logo-facis.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('backend/assets/images/logo-facis.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Tableau de bord </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('categories.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    
                    <span> Categories </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('articles.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    
                    <span> Articles </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('commandes.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    
                    <span> Commandes </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('appointements.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    
                    <span> Rendez-vous </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('contacts.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    
                    <span> Contact</span>
                </a>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>