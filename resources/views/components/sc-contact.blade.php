<div class="container-xxl">
    <div class="container-fluid p-0">
        <div class="row justify-content-center align-items-center no-gutters" id="sc-contact">
            <div class="col-lg-6 px-0 mx-0" data-aos="fade-up" data-aos-delay="200">

                <a href="{{ route('catalog')}}">
                    <div class="position-relative">
                        <picture>
                            <source media="(min-width: 1280px)"
                                srcset="{{ asset('assets/images/00-hp/pro_catalog_bg1280.jpg') }}">
                            <source media="(min-width: 992px)"
                                srcset="{{ asset('assets/images/00-hp/pro_catalog_bg1024.jpg') }}">
                            <img src="{{ asset('assets/images/00-hp/pro_catalog_bg624.jpg') }}"
                                class="img-fluid pro-catalog-bg" alt="">
                        </picture>
                        <div class="pro-catalog-content">
                            <p class="text-26 text-uppercase font-weight-normal mb-0">Product Catalog</p>
                            <h4 class="text-028cd3 font-weight-normal">產品目錄 <img
                                    src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                    width="35" alt=""></h4>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-6 px-0 mx-0" data-aos="fade-up" data-aos-delay="200">

                <a href="{{ route('cooperate') }}">
                    <div class="position-relative">
                        <picture>
                            <source media="(min-width: 1280px)"
                                srcset="{{ asset('assets/images/00-hp/man_coop_bg1280.jpg') }}">
                            <source media="(min-width: 992px)"
                                srcset="{{ asset('assets/images/00-hp/man_coop_bg1024.jpg') }}">
                            <img src="{{ asset('assets/images/00-hp/man_coop_bg624.jpg') }}"
                                class="img-fluid pro-catalog-bg" alt="">
                        </picture>
                        <div class="man-coop-content">
                            <p class="text-26 text-uppercase font-weight-normal mb-0">MANUFACTURER COOPERATION</p>
                            <h4 class="text-028cd3 font-weight-normal">廠商合作 <img
                                    src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                    width="35" alt=""></h4>
                        </div>
                    </div>
                </a>


            </div>
        </div>
    </div>
</div>
