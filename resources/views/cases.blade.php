@extends('layouts_main.master')

@section('content')
    <div class="conatiner-xxl py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">工程實績</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">Works</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">以專業打造舒適空間，為每個家庭與企業締造更優質的居住體驗！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pt-4 pb-5 my-3">
        <div class="container" id="sc-product">
            <div class="row">
                <div class="col-12 d-flex justify-content-end" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-028cd3 font-weight-light" style="font-size: 14px;">
                        共 9 則案例
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 mb-lg-0 mb-3">
                    <div class="d-flex justify-content-between align-items-center category-dropdown w-100 mt-2"
                        data-aos="fade-up" data-aos-delay="200">
                        <h5 class="mb-0 text-028cd3 text-uppercase font-weight-normal border-bottom-028cd3"><img
                                src="{{ asset('assets/images/03/03plus.png') }}" class="img-fluid" alt="">案例分類</h5>
                        <span class="text-028cd3 c-down d-lg-none">
                            <i class="fas fa-sort-down"></i>
                        </span>
                        <span class="text-028cd3 c-up d-lg-none">
                            <i class="fas fa-sort-up"></i>
                        </span>
                    </div>
                    <div class="cases-category" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link {{ empty(request('category_id')) ? 'active' : '' }}"
                                    href="{{ route('cases', ['search' => request('search')]) }}">全部</a>
                            </li>
                            @foreach ($categories ?? [] as $category)
                                <li class="nav-item">
                                    <a class="nav-link {{ request('category_id') == $category->id ? 'active' : '' }}"
                                        href="{{ route('cases', ['category_id' => $category->id, 'search' => request('search')]) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">廚具規劃</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">衛浴設備</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">廁所修改</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">淨水設備</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row justify-content-center sc-case-list">
                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <a href="{{ route('cases-details-mock') }}">

                                        <img src="{{ asset('assets/images/00-hp/cases_pic1.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 衛浴空間</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 356</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">淋浴拉門</h5>

                                    <a href="{{ route('cases-details-mock') }}" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <img src="{{ asset('assets/images/00-hp/cases_pic2.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 廚具規劃</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 251</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">李府廚房設計規劃</h5>

                                    <a href="javascript:void(0);" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <img src="{{ asset('assets/images/00-hp/cases_pic3.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 衛浴設備</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 103</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">馬桶安裝</h5>

                                    <a href="javascript:void(0);" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <img src="{{ asset('assets/images/00-hp/cases_pic1.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 衛浴空間</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 356</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">淋浴拉門</h5>

                                    <a href="javascript:void(0);" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <img src="{{ asset('assets/images/00-hp/cases_pic2.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 廚具規劃</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 251</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">李府廚房設計規劃</h5>

                                    <a href="javascript:void(0);" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="case-item-box bg-f4">
                                <div class="case-item-img mb-1">
                                    <img src="{{ asset('assets/images/00-hp/cases_pic3.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="case-item-content px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span> 衛浴設備</p>
                                        <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次: 103</p>
                                    </div>
                                    <h5 class="text-51 case-item-title my-3">馬桶安裝</h5>

                                    <a href="javascript:void(0);" class="case-item-more item-more-btn2 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                            <p class="text-white font-weight-normal mb-0">⟩</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


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
                    const $casesCategory = $('.cases-category');
                    $casesCategory.hide();
                    const $dropdown = $('.category-dropdown');
                    $dropdown.find('.c-up').hide();

                    // Remove previous click event handlers to prevent multiple bindings
                    $dropdown.off('click').on('click', function() {
                        $casesCategory.toggle(1500);
                        // Check visibility once and toggle icons accordingly
                        const isVisible = $casesCategory.is(':visible');
                        $(this).find('.c-up').toggle(isVisible);
                        $(this).find('.c-down').toggle(!isVisible);
                    });
                } else {
                    // When the screen is wider than 992px, always show the category list
                    $('.cases-category').show();
                }
            }).trigger('resize');
        })
    </script>
@endpush
