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

    <div class="container-xxl pt-4 pb-5 my-3">
        <div class="container" id="sc-product">
            <div class="row">
                <div class="col-12 d-flex justify-content-end" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-028cd3 font-weight-light" style="font-size: 14px;">
                        共 {{ count($products) }} 項產品
                    </p>
                </div>
            </div>

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
                                    <a class="nav-link {{ request('product_type_id') == $type->id ? 'active' : '' }}"
                                        href="{{ route('products', ['product_type_id' => $type->id, 'search' => request('search')]) }}">
                                        {{ $type->name }}
                                    </a>
                                </li>
                            @endforeach

                            @if (count($product_types ?? []) == 0)
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
                        @foreach ($products ?? [] as $product)
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="product-item-box">
                                    <div class="product-item-img">
                                        <a href="{{ route('products-details',['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}">
                                            @php
                                                $product_img = \App\Models\Admin\ProductImage::where(
                                                    'product_id',
                                                    $product->id,
                                                )->orderBy('sort_order', 'asc')
                                                    ->first();
                                            @endphp
                                            <img src="{{ asset('uploads/' . $product_img->image_path) }}" class="img-fluid"
                                                alt="{{ $product->title }}">
                                        </a>
                                    </div>
                                    <div class="product-item-content">
                                        <a href="{{ route('products-details',['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}">
                                            <h5 class="text-51 product-item-title my-3">{{ $product->title }}</h5>
                                        </a>

                                        <a href="{{ route('products-details',['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}"
                                            class="product-item-more item-more-btn">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                                <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if (count($products ?? []) == 0)
                            {{-- <div class="col-12">
                                <p class="text-center text-51">目前沒有產品資料</p>
                            </div> --}}
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="product-item-box">
                                    <div class="product-item-img">
                                        <a href="{{ route('products-details-mock') }}">

                                            <img src="{{ asset('assets/images/03/pro_pic1.jpg') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-item-content">
                                        <a href="{{ route('products-details-mock') }}">

                                            <h5 class="text-51 product-item-title my-3">星動浴櫃</h5>
                                        </a>

                                        <a href="{{ route('products-details-mock') }}"
                                            class="product-item-more item-more-btn">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                                <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="product-item-box">
                                    <div class="product-item-img">
                                        <img src="{{ asset('assets/images/03/pro_pic2.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="product-item-content">
                                        <h5 class="text-51 product-item-title my-3">臉盆龍頭</h5>

                                        <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                                <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="product-item-box">
                                    <div class="product-item-img">
                                        <img src="{{ asset('assets/images/03/pro_pic3.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="product-item-content">
                                        <h5 class="text-51 product-item-title my-3">廚房水槽</h5>

                                        <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                                <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="overflow-auto mb-3">
                        {{ $products->onEachSide(3)->links('layouts_main.custom-pagination') }}
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
        })
    </script>
@endpush
