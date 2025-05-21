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
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="text-51 cases-title h4">{{ $cases->title ?? '李府廚房設計規劃' }}</h3>
                                <p class="text-028cd3 font-weight-light mb-0" style="font-size: 13px;">
                                    {{ \Carbon\Carbon::parse($news->created_at ?? '')->format('Y.m.d') ?? '2024.12.15' }} ・
                                    {{ '觀看人數: 123' }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="cases-content text-e9 font-weight-light" data-aos="fade-up" data-aos-delay="200">
                                @if ($cases->content ?? null != null)
                                    {!! $cases->content ?? '' !!}
                                @endif

                                @if ($cases->content ?? null == null)
                                    <p class="text-51 font-weight-normal">
                                        承鈺住宅設備有限公司深耕住宅設備規劃與安裝，憑藉專業設計與精湛施工，成功完成多項住宅與商業空間的廚
                                        房改造工程。<br>
                                        我們提供客製化流理台、整體廚具設計、智慧收納系統、節能抽油煙機與爐具設備，完美結合美學與實用，打造
                                        高效能廚房。<br><br>

                                        中島吧台設計，結合餐廚功能，提升空間互動性與美觀度，讓廚房成為家中聚會的中心。<br>
                                    </p>


                                    <img src="{{ asset('assets/images/04/04cases_inside_pic.jpg') }}" class="img-fluid"
                                        alt="">
                                @endif
                            </div>
                        </div>

                        <div class="col-12 text-center py-3 mt-3" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('cases') }}" class="btn-back text-028cd3"><span class="back-arrow mr-2"><</span>BACK
                                返回列表</a>
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
