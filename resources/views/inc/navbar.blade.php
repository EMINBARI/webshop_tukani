
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm d-none d-md-block">
             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav justify-content-center" style="width:100%">
                    <div class="row justify-content-center"  style="width:100%">
                        <div class="col-sm-4">
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light" id="home" href="/">Главная</a></li>
                        </div>
                        
                        <div class="col-sm-4">
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light" id="product" href="/products">Товары</a></li>                        
                        </div>

                        <div class="col-sm-4">
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light" id="about" href="/about">О нас</a></li>                        
                        </div>

                    </div>
                </ul>

            </div>
        
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none justify-content-center">
    
        <a class="navbar-brand" href="/">Menu</a>
     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
                <li class="nav-item" id="first_item">
                    <a class="nav-link" id="sm_home" href="/">Главная</a>
                </li>
                <li class="nav-item" id="second_item">
                    <a class="nav-link" id="sm_products" href="/products">Товары</a>
                </li>
                <li class="nav-item" id="third_item">
                    <a class="nav-link" id="sm_about" href="/about">О нас</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                -->
            </ul>
        </div>
    </nav>

    <script src="../js/menu.js"></script>

    <style>
        @media only screen and (min-width: 768px) {
        .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        }
        }

        .navbar-light .navbar-nav .nav-link {
            font-size: 20px;
        }

    </style>


