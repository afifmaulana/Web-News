<nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
    <div class="container">
        <a class="navbar-brand" href="homepage-v1.html">
            <img src="{{ asset('assets/images/logo-blue.png') }}" alt="">
            <img src="{{ asset('assets/images/logo-blue-stiky.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav99">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                    <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                        <li><a class="dropdown-item" href="homepage-v1.html"> Home version one </a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                    <ul class="dropdown-menu animate fade-up">

                        <li><a class="dropdown-item icon-arrow" href="#"> Agent </a>
                            <ul class="submenu dropdown-menu  animate fade-up">
                                <li><a class="dropdown-item" href="agents-v1.html">Style 1</a></li>
                                <li><a class="dropdown-item" href="agents-v2.html">Style 2</a></li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item" href="about-us.html">About us </a>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Blog </a>
                    <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                        <li><a class="dropdown-item" href="blog.html"> Blog </a>
                        </li>
                        <li><a class="dropdown-item" href="blog-single.html"> Blog Single </a></li>


                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="contact.html"> contact </a></li>
            </ul>


            <!-- Search bar.// -->
            <ul class="navbar-nav ">
                <li>
                    <a href="#" class="btn btn-primary text-capitalize">
                        <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                </li>
            </ul>
            <!-- Search content bar.// -->
            <div class="top-search navigation-shadow">
                <div class="container">
                    <div class="input-group ">
                        <form action="#">

                            <div class="row no-gutters mt-3">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0"
                                           type="search" value="" placeholder="Search " id="example-search-input4">
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                       href="search-result.html">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Search content bar.// -->
        </div> <!-- navbar-collapse.// -->
    </div>
</nav>