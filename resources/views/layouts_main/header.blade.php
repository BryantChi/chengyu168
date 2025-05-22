<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar bg-white py-1 fixed-top" role="banner">

    <div class="container">
        <div class="row justify-content-lg-center align-items-center">

            <div class="col-8 col-xl-3" data-aos="fade-down">
                <h1 class="mb-0"><a href="{{ route('index') }}" class="text-black h2 mb-0">
                        <img src="{{ asset('assets/images/00-hp/top_logo.svg') }}" alt="Logo" class="img-fluid">
                    </a></h1>
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block font-weight-normal">
                        <li class="{{ Request::is('/about') ? 'active' : '' }}"><a href="{{ route('about') }}">公司簡介</a></li>
                        <li class="{{ Request::is('/news') ? 'active' : '' }}"><a href="{{ route('news') }}">最新消息</a></li>
                        <li class="{{ Request::is('/products') ? 'active' : '' }}"><a href="{{ route('products') }}">產品介紹</a></li>
                        <li class="{{ Request::is('/cases') ? 'active' : '' }}"><a href="{{ route('cases') }}">工程實績</a></li>
                        <li class="{{ Request::is('/catalog') ? 'active' : '' }}"><a href="{{ route('catalog') }}">產品型錄</a></li>
                        <li class="{{ Request::is('/cooperate') ? 'active' : '' }}"><a href="{{ route('cooperate') }}">廠商合作</a></li>
                        <li>
                            <a href="#" class="text-028cd3" target="_blank"
                                style="color: #028cd3 !important;"><span class="icon-facebook"></span></a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="col col-xl-2 text-right d-inline-block d-xl-none " data-aos="fade-down">

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-black">
                        <img src="{{ asset('assets/images/fimgs/iconmenu.png') }}" class="img-fluid" width="30"
                            alt="">
                    </a></div>

            </div>

        </div>
    </div>

</header>
