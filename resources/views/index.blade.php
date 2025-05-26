@extends('layouts_main.master')

@section('content')
    <!-- Intro -->
    <div class="container-xxl py-5">
        <div class="container-fluid">
            <div class="row justify-content-center px-lg-0 px-4" id="sc-intro">
                <div class="col-lg-7 px-0">
                    <div class="row justify-content-end px-0 mx-0">
                        <div class="col-lg-8">
                            <h4 class="mb-4 sc-intro-title text-028cd3">花蓮/台東衛浴用品 • 住宅設備，長期合作供應商</h4>
                            <p class="sc-intro-content text-51 font-weight-normal">
                                嚴選國內外優質品牌，提供衛浴、廚具設備、軟淨水系統、節能熱水器、浴室暖風乾燥機等高品質住宅設備，讓建案更具競爭力，提升住戶滿意度與市場價值。
                            </p>
                            <div class="d-flex flex-column2 flex-row justify-content-start align-item-center">
                                <div class="d-flex flex-row align-item-center">
                                    <div class="text-center mb-3 mb-lg-0">
                                        <img src="{{ asset('assets/images/00-hp/intro_icon01.png') }}"
                                            class="img-fluid w-75 mb-2" alt="">
                                        <h6 class="text-028cd3">在地專業</h6>
                                    </div>
                                    <div class="intro-line mx-2 py-2"></div>
                                    <div class="text-center mb-3 mb-lg-0">
                                        <img src="{{ asset('assets/images/00-hp/intro_icon02.png') }}"
                                            class="img-fluid w-75 mb-2" alt="">
                                        <h6 class="text-028cd3">品質保證</h6>
                                    </div>
                                </div>

                                <div class="intro-line mx-2 py-2"></div>

                                <div class="d-flex flex-row align-item-center">
                                    <div class="text-center mb-3 mb-lg-0">
                                        <img src="{{ asset('assets/images/00-hp/intro_icon03.png') }}"
                                            class="img-fluid w-75 mb-2" alt="">
                                        <h6 class="text-028cd3">專業安裝</h6>
                                    </div>
                                    <div class="intro-line mx-2 py-2"></div>
                                    <div class="text-center mb-3 mb-lg-0">
                                        <img src="{{ asset('assets/images/00-hp/intro_icon04.png') }}"
                                            class="img-fluid w-75 mb-2" alt="">
                                        <h6 class="text-028cd3">建案夥伴</h6>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-5 px-0 h-100">
                    <img src="{{ asset('assets/images/00-hp/intro_pic.jpg') }}" class="img-fluid intro-pic" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Intro End -->


    <!-- m_ban -->
    <div class="container-xxl bg-m-ban">
        <div class="container py-5 my-lg-5">
            <div class="row justify-content-center py-5" id="sc-m-ban">
                <div class="col-lg text-center py-3">
                    <h6 class="text-028cd3 font-weight-normal text-uppercase">MORE COMFORTABLE LIVING EXPERIENCE</h6>
                    <h5 class="text-51 font-weight-normal">打造高品質建案，從優質住宅設備開始</h5>
                </div>

            </div>
        </div>
    </div>
    <!-- m_ban End -->

    <!-- sc product -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row mb-3" id="sc-product">
                <!-- product header -->
                <div class="col-12 d-flex justify-content-between align-items-center">

                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="d-flex flex-row justify-content-between align-item-center">
                            <div class="hp-sc-title">
                                <h4 class="text-028cd3 mb-1">產品介紹</h4>
                                <p class="text-26 font-weight-light text-uppercase mb-0">Products</p>
                            </div>
                            <a href="{{ route('products') }}">
                                <div class="sc-more-content d-lg-none d-flex flex-row align-items-center w-fit">
                                    <img src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="mb-0 text-028cd3">更多產品介紹</p>
                                </div>
                            </a>
                        </div>
                        <div class="pro-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">承鈺住宅設備為您打造智慧、健康、便利的理想家居！</p>
                    </div>

                    <a href="{{ route('products') }}">
                        <div class="sc-more-content d-lg-flex d-none flex-row align-items-center w-fit">
                            <img src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid" alt="">
                            <p class="mb-0 text-028cd3">更多產品介紹</p>
                        </div>
                    </a>

                </div>
                <!-- product header end -->
            </div>

            <div class="row justify-content-center align-items-center">
                @foreach ($products ?? [] as $product)
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <a
                                    href="{{ route('products-details', ['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}">
                                    @php
                                        $product_img = \App\Models\Admin\ProductImage::where('product_id', $product->id)
                                            ->orderBy('sort_order', 'asc')
                                            ->first();
                                    @endphp
                                    <img src="{{ asset('uploads/' . $product_img->image_path) }}" class="img-fluid"
                                        alt="{{ $product->title }}">
                                </a>
                            </div>
                            <div class="product-item-content">
                                <a
                                    href="{{ route('products-details', ['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}">
                                    <h5 class="text-51 product-item-title my-3">{{ $product->title }}</h5>
                                </a>

                                <a href="{{ route('products-details', ['id' => $product->id, 'product_type_id' => request('product_type_id')]) }}"
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

                <!-- Mockup products for testing -->
                @if ($products->count() == 0)
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">星動浴櫃</h5>

                                <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                        <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic2.jpg') }}" class="img-fluid"
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

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic3.jpg') }}" class="img-fluid"
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

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic4.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">星動陶瓷馬桶</h5>

                                <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                        <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic5.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">浴室龍頭</h5>

                                <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                        <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic6.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">浴室面盆</h5>

                                <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                        <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic7.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">魔方置物架</h5>

                                <a href="javascript:void(0);" class="product-item-more item-more-btn">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-028cd3 font-weight-normal mb-0">MORE</p>
                                        <p class="text-028cd3 font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="product-item-box">
                            <div class="product-item-img">
                                <img src="{{ asset('assets/images/00-hp/pro_pic8.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="product-item-content">
                                <h5 class="text-51 product-item-title my-3">SYR全棟軟水系統</h5>

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

        </div>
    </div>
    <!-- sc product end -->


    <!-- sc news -->
    <div class="container-xxl sc-news py-5 hp-news-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center" id="sc-news">
                <div class="col-lg-auto mb-lg-0 mb-3">
                    <div class="d-flex flex-row justify-content-between align-item-center mb-3">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">最新消息</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">News</p>
                            <div class="sc-title-line my-2 d-lg-block d-none"></div>
                        </div>
                        <a href="{{ route('news') }}">
                            <div class="sc-more-content d-lg-none d-flex flex-row align-items-center w-fit px-0 mx-0">
                                <img src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                    alt="">
                                <p class="mb-0 text-028cd3">更多消息</p>
                            </div>
                        </a>
                    </div>
                    <div class="news-line mx-lg-4 my-lg-0 my-3 d-lg-none d-block"></div>
                    <p class="text-51 font-weight-light mb-0">
                        掌握最新動態<br class="d-lg-block d-none">
                        家居生活更美好！
                    </p>
                    <a href="{{ route('news') }}">
                        <div class="sc-more-content d-lg-flex d-none flex-row align-items-center w-fit px-0 mx-0">
                            <img src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                alt="">
                            <p class="mb-0 text-028cd3">更多消息</p>
                        </div>
                    </a>

                </div>

                @if (!isset($news))
                    <div class="col-lg-auto mb-lg-0 mb-3 ml-lg-5">
                        <img src="{{ asset('assets/images/00-hp/news_pic.jpg') }}" class="img-fluid hp-news-pic"
                            alt="">
                    </div>

                    <div class="col-lg">
                        <div class="news-views text-028cd3 font-weight-light">觀看人次: 123</div>
                        <h3 class="text-26 h4">H&H 週年慶 | 馬桶免費基本安裝活動 開跑！</h3>
                        <p class="text-51 font-weight-normal">
                            感謝您的支持，H&H 週年慶大放送！即日起，凡購買 指定款馬桶，即可享有 免費基本安裝服...more
                        </p>
                        <div class="d-flex flex-row justify-content-end align-items-center mt-3">
                            <a href="javascript:void(0);" class="news-more text-028cd3 font-weight-normal">了解更多 MORE ⟩</a>
                        </div>

                    </div>
                @else
                    <div class="col-lg-auto mb-lg-0 mb-3">
                        <a href="{{ route('news-details', ['id' => $news->id]) }}">
                            <img src="{{ asset('uploads/' . $news->image) }}" class="img-fluid hp-news-pic"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg">
                        <div class="news-views text-028cd3 font-weight-light">觀看人次: {{ $news->views ?? 0 }}</div>
                        <a href="{{ route('news-details', ['id' => $news->id]) }}">
                            <h3 class="text-26 h4">{{ $news->title ?? 'H&H 週年慶 | 馬桶免費基本安裝活動 開跑！' }}</h3>
                        </a>

                        @php
                            $content = preg_replace('/<img[^>]*>/i', '', $news->content);
                            // 移除其他 HTML 標籤
                            $cleanText = strip_tags($content);
                            // // 截取前100字（處理UTF-8中文）
                            // $preview = mb_substr($cleanText, 0, 100);
                        @endphp
                        <p class="text-51 font-weight-normal multiline-ellipsis-2">
                            {!! $cleanText ?? '' !!}
                        </p>
                        <div class="d-flex flex-row justify-content-end align-items-center mt-3">
                            <a href="{{ route('news-details', ['id' => $news->id]) }}"
                                class="news-more text-028cd3 font-weight-normal">了解更多
                                MORE ⟩</a>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
    <!-- sc news end -->

    <!-- sc cases -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row" id="sc-case">
                <div class="col-lg-12 mb-4 text-center">
                    <h4 class="text-c1e5f7 font-weight-normal letter-spacing-2">EXQUISITE RESIDENTIAL EQUIPMENT</h4>
                    <p class="text-51 font-weigtht-normal mb-0">
                        承鈺住宅設備每一項工程皆以「精準規劃、嚴謹施工」為核心，確保設備穩定耐用，提升使用者的生活品質與空間價值。
                    </p>
                </div>
            </div>

            <div class="row justify-content-center sc-case-list">
                @foreach ($cases ?? [] as $key => $case)
                    <div class="col-lg-4 mb-4">
                        <div class="case-item-box bg-f4">
                            <div class="case-item-img mb-1">
                                <a
                                    href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}">
                                    <img src="{{ asset('uploads/' . $case->image) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="case-item-content px-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="{{ route('cases', ['category_id' => $case->category_id]) }}">
                                        <p class="text-26 font-weight-light mb-0 case-item-tag"><span
                                                class="icon-square text-028cd3"></span>
                                            {{ \App\Models\Admin\Category::find($case->category_id)->name }}</p>
                                    </a>
                                    <p class="text-028cd3 font-weight-light mb-0 case-item-views">觀看人次:
                                        {{ $case->views }}</p>
                                </div>
                                <a
                                    href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}">
                                    <h5 class="text-51 case-item-title my-3">{{ $case->title }}</h5>
                                </a>
                                <a href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}"
                                    class="case-item-more item-more-btn2 my-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-white font-weight-normal mb-0">了解更多MORE</p>
                                        <p class="text-white font-weight-normal mb-0">⟩</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Mockup cases for testing -->
                @if ($cases->count() == 0)
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
                @endif


            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-auto mt-4">
                    <a href="{{ route('cases') }}">
                        <div class="sc-more-content d-flex flex-row align-items-center w-fit px-0 mx-0">
                            <img src="{{ asset('assets/images/00-hp/button_arrow.png') }}" class="img-fluid"
                                alt="">
                            <p class="mb-0 text-028cd3 font-weight-normal">更多工程實績</p>
                        </div>
                    </a>
                </div>
            </div>

            @include('components.equipment')



        </div>
    </div>
    <!-- sc cases end -->


    <!-- sc contact -->
    @include('components.sc-contact')
    <!-- sc contact end -->


    <!-- sc about -->
    <div class="container-xxl py-5 hp-about-bg">
        <div class="container-fluid">
            <div class="row justify-content-center px-lg-0 px-4 py-lg-4 py-2" id="sc-about">
                <div class="col-lg-7 px-0 mb-lg-0 mb-3">
                    <div class="row justify-content-end align-items-center px-0 mx-0">
                        <div class="col-lg-8">
                            <div class="hp-about-content">
                                <div class="text-028cd3 text-uppercase mb-2 d-md-flex align-items-end mb-4">
                                    <p class="mr-2 mb-0 h2 font-weight-light">About</p>
                                    <h3 class="mb-1 h4 font-weight-light">承鈺宅設備有限公司</h3>
                                </div>
                                <p class="text-51 font-weight-normal mb-0">
                                    承鈺住宅設備有限公司以多元的住宅設備為主要銷售產品，代理商品涵蓋國內外各大優良產品；提高專業服務，且證照相關積極考取，乙級室內裝修工程管理證照，乙級室內裝修設計證照、病態建築二級診斷士證照，和綠裝修認證考試等等。<br>
                                    在提供住宅設備服務外也同時提高服務專業，同時增加新科技的產品導入，讓您的住宅透過承鈺的服務變得更有愛更舒適。

                                </p>
                                <div class="col-auto mt-4 px-0 mx-0">
                                    <a href="{{ route('about') }}">
                                        <div class="sc-more-content d-flex flex-row align-items-center w-fit px-0 mx-0">
                                            <img src="{{ 'assets/images/00-hp/button_arrow.png' }}" class="img-fluid"
                                                alt="">
                                            <p class="mb-0 text-028cd3 font-weight-normal">更多公司簡介</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-5 px-0 h-100">
                    <img src="{{ asset('assets/images/00-hp/ab_pic.jpg') }}" class="img-fluid intro-pic" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- sc about end -->
@endsection
