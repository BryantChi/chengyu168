@extends('layouts_main.master')

@section('content')
    <div class="conatiner-xxl py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">產品介紹</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">Products</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">舒適生活不將就，每一項設備都是品質的承諾！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pt-4 pb-5 mb-3 mt-5">
        <div class="container" id="sc-product">

            <div class="row">

                <div class="col-lg-2 mb-lg-0 mb-3">
                    <div class="d-flex justify-content-between align-items-center category-dropdown w-100 mt-2"
                        data-aos="fade-up" data-aos-delay="200">
                        <h5 class="mb-0 text-028cd3 text-uppercase font-weight-normal border-bottom-028cd3"><img
                                src="{{ asset('assets/images/03/03plus.png') }}" class="img-fluid" alt="">產品分類</h5>
                        <span class="text-028cd3 c-down d-lg-none">
                            <i class="fas fa-sort-down"></i>
                        </span>
                        <span class="text-028cd3 c-up d-lg-none">
                            <i class="fas fa-sort-up"></i>
                        </span>
                    </div>
                    <div class="product-category" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link {{ empty(request('product_type_id')) ? 'active' : '' }}"
                                    href="{{ route('products', ['search' => request('search')]) }}">全部</a>
                            </li>
                            @foreach ($product_types ?? [] as $type)
                                <li class="nav-item">
                                    <a class="nav-link {{ request('product_type_id') == $type->id || $selectedType == $type->id ? 'active' : '' }}"
                                        href="{{ route('products', ['product_type_id' => $type->id, 'search' => request('search')]) }}">
                                        {{ $type->name }}
                                    </a>
                                </li>
                            @endforeach

                            @if (Request::is('products-details-mock'))
                                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">全戶暖水系列</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">花灑龍頭</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">前置淨水系列</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">浴室配件</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6 mb-lg-0 mb-3">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    @foreach ($images ?? [] as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('uploads/' . $image->image_path) }}" class="img-fluid w-100" />
                                        </div>

                                    @endforeach
                                    @if (Request::is('products-details-mock'))
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic1.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic2s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic3s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic4s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic5s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic6s.jpg') }}" class="img-fluid w-100" />
                                        </div>

                                    @endif

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper mt-1">
                                <div class="swiper-wrapper">
                                    @foreach ($images ?? [] as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('uploads/' . $image->image_path) }}" class="img-fluid w-100" />
                                        </div>
                                    @endforeach
                                    @if (Request::is('products-details-mock'))
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic1.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic2s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic3s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic4s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic5s.jpg') }}" class="img-fluid w-100" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/03/pro_inside_pic6s.jpg') }}" class="img-fluid w-100" />
                                        </div>

                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-lg-0 mb-3">
                            <h5 class="text-26 font-weight-bold products-title">{{ $product->title ?? '霧黑高腳臉盆龍頭' }}</h5>
                            <div class="text-51 font-weight-light products-info">
                                {{-- 質感升級，打造極致衛浴美學！<br>
                                霧黑高腳臉盆龍頭以時尚極簡設計為特色，完美融入<br>
                                現代衛浴空間，展現低調奢華質感。 --}}
                                {{ $product->intro ?? '質感升級，打造極致衛浴美學！<br>霧黑高腳臉盆龍頭以時尚極簡設計為特色，完美融入<br>現代衛浴空間，展現低調奢華質感。' }}
                            </div>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('assets/images/fimgs/line-chat.png') }}" class="img-fluid" width="180" alt="">
                            </a>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <h5 class="text-26 font-weight-bold products-detail-intro-title d-flex align-items-center">
                                <img src="{{ asset('assets/images/03/03plus_inside.png') }}" class="img-fluid" alt=""> 詳細介紹
                            </h5>
                            <div class="products-detail-intro text-e9 font-weight-light">
                                {!! $product->details ?? '' !!}

                                @if (Request::is('products-details-mock'))
                                    <p class="text-51 font-weight-light">
                                        ■ 優雅霧黑塗層|耐刮耐污，不易留下指紋，持久如新<br>
                                        ■ 一體成型設計|流線造型，搭配高腳設計，適用多種臉盆<br>
                                        ■ 順滑單槍控溫|輕鬆調整水溫與水量，使用更便利<br>
                                        ■ 高品質材質| 抗腐蝕、防鏽處理，確保長久耐用<br>
                                        ■ 柔和出水設計｜減少水花飛濺，節水更環保<br><br>
                                        更多詳細內容，歡迎您來電洽詢0934-325138/ 03-8580391
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="col-12 text-center py-3 mt-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('products') }}" class="btn-back text-028cd3"><span class="back-arrow mr-2"><</span>BACK
                            返回列表</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            // $(window).on('resize', function() {
            //     if ($(window).width() <= 992) {
            //         const $casesCategory = $('.cases-category').hide();
            //         $('.category-dropdown').find('.c-up').hide();

            //         $('.category-dropdown').on('click', function() {
            //             $casesCategory.toggle('1500');

            //             if ($casesCategory.is(':visible')) {
            //                 $(this).find('.c-up').show();
            //                 $(this).find('.c-down').hide();
            //             } else {
            //                 $(this).find('.c-up').hide();
            //                 $(this).find('.c-down').show();
            //             }
            //         });
            //     } else {
            //         $('.cases-category').show();
            //     }
            // }).trigger('resize');
            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $productCategory = $('.product-category');
                    $productCategory.hide();
                    const $dropdown = $('.category-dropdown');
                    $dropdown.find('.c-up').hide();

                    // Remove previous click event handlers to prevent multiple bindings
                    $dropdown.off('click').on('click', function() {
                        $productCategory.toggle(1500);
                        // Check visibility once and toggle icons accordingly
                        const isVisible = $productCategory.is(':visible');
                        $(this).find('.c-up').toggle(isVisible);
                        $(this).find('.c-down').toggle(!isVisible);
                    });
                } else {
                    // When the screen is wider than 992px, always show the category list
                    $('.product-category').show();
                }
            }).trigger('resize');
        });


        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endpush
