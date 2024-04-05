<div class="container-fluid" style="background-color: #ffffcc;">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                
                <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">خانه</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product.index') }}" class="nav-link align-middle px-0 text-white">
                            <i class="bi bi-shop"></i> <span class="ms-1 d-none d-sm-inline">محصولات</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3" style="background-color: #f5f5f5;">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</div>


