@extends('layouts_main.master')

@section('content')
    <div class="conatiner-xxl py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">產品型錄</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">Catalog</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">打造舒適居家，從優質設備開始！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-4 mb-5">
        <div class="container" id="sc-catalog">
            <div class="row">
                <div class="col-12 d-flex justify-content-end" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-028cd3 font-weight-light" style="font-size: 14px;">
                        共有 {{ count($catalogs ?? []) }} 本型錄
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center py-2">

                @foreach ($catalogs ?? [] as $catalog)
                    <div class="col-lg-6 mb-4">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="{{ asset('uploads/' . $catalog->image) }}"
                                class="img-fluid hp-catalog-pic mr-lg-2 mb-lg-0 mb-3" alt="{{ $catalog->title }}">
                            <div class="d-flex flex-column justify-content-around ml-lg-2">
                                <div class="catalog-content">
                                    <h3 class="text-26 h5">{{ $catalog->title ?? '' }}</h3>
                                    <p class="text-51 font-weight-normal text-justify multiline-ellipsis-6">
                                        {{ $catalog->intro ?? '' }}
                                    </p>
                                </div>

                                <div class="catalog-footer">
                                    <p class="text-028cd3 font-weight-light">瀏覽人次: {{ $catalog->views ?? '' }}</p>
                                    <a href="javascript:void(0);" data-id="{{ $catalog->id }}"
                                        data-file="{{ asset('uploads/' . ($catalog->file ?? '')) }}"
                                        class="text-white bg-028cd3 font-weight-normal px-2 py-1 view-catalog-btn">線上瀏覽</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (count($catalogs ?? []) == 0)
                    {{-- <div class="col-12 text-center">
                        <p class="text-51 font-weight-normal">目前沒有可用的產品型錄。</p>
                    </div> --}}

                    <div class="col-lg-6 mb-4">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="{{ asset('assets/images/05/05dm1.jpg') }}"
                                class="img-fluid hp-catalog-pic mr-lg-2 mb-lg-0 mb-3" alt="">
                            <div class="d-flex flex-column justify-content-around ml-lg-2">
                                <div class="catalog-content">
                                    <h3 class="text-26 h5">2025 KANLEE精選商品型錄</h3>
                                    <p class="text-51 font-weight-normal text-justify">
                                        台灣康勵企業有限公司為專業生產系統
                                        櫥櫃、精品廚具、衛浴設備及五金、日
                                        常生活精品、外銷商品等優良廠商，並
                                        為 『美標衛浴American Standard 百
                                        年衛浴品牌之台灣經銷商。
                                    </p>
                                </div>

                                <div class="catalog-footer">
                                    <p class="text-028cd3 font-weight-light">瀏覽人次: 103</p>
                                    <a href="javascript:void(0);"
                                        class="text-white bg-028cd3 font-weight-normal px-2 py-1">線上瀏覽</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="{{ asset('assets/images/05/05dm2.jpg') }}"
                                class="img-fluid hp-catalog-pic mr-lg-2 mb-lg-0 mb-3" alt="">
                            <div class="d-flex flex-column justify-content-around ml-lg-2">
                                <div class="catalog-content">
                                    <h3 class="text-26 h5">2025 KANLEE精選商品型錄</h3>
                                    <p class="text-51 font-weight-normal text-justify">
                                        台灣康勵企業有限公司為專業生產系統
                                        櫥櫃、精品廚具、衛浴設備及五金、日
                                        常生活精品、外銷商品等優良廠商，並
                                        為 『美標衛浴American Standard 百
                                        年衛浴品牌之台灣經銷商。
                                    </p>
                                </div>

                                <div class="catalog-footer">
                                    <p class="text-028cd3 font-weight-light">瀏覽人次: 103</p>
                                    <a href="javascript:void(0);"
                                        class="text-white bg-028cd3 font-weight-normal px-2 py-1">線上瀏覽</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="{{ asset('assets/images/05/05dm3.jpg') }}"
                                class="img-fluid hp-catalog-pic mr-lg-2 mb-lg-0 mb-3" alt="">
                            <div class="d-flex flex-column justify-content-around ml-lg-2">
                                <div class="catalog-content">
                                    <h3 class="text-26 h5">2025 KANLEE精選商品型錄</h3>
                                    <p class="text-51 font-weight-normal text-justify">
                                        台灣康勵企業有限公司為專業生產系統
                                        櫥櫃、精品廚具、衛浴設備及五金、日
                                        常生活精品、外銷商品等優良廠商，並
                                        為 『美標衛浴American Standard 百
                                        年衛浴品牌之台灣經銷商。
                                    </p>
                                </div>

                                <div class="catalog-footer">
                                    <p class="text-028cd3 font-weight-light">瀏覽人次: 103</p>
                                    <a href="javascript:void(0);"
                                        class="text-white bg-028cd3 font-weight-normal px-2 py-1">線上瀏覽</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="{{ asset('assets/images/05/05dm4.jpg') }}"
                                class="img-fluid hp-catalog-pic mr-lg-2 mb-lg-0 mb-3" alt="">
                            <div class="d-flex flex-column justify-content-around ml-lg-2">
                                <div class="catalog-content">
                                    <h3 class="text-26 h5">2025 KANLEE精選商品型錄</h3>
                                    <p class="text-51 font-weight-normal text-justify">
                                        台灣康勵企業有限公司為專業生產系統
                                        櫥櫃、精品廚具、衛浴設備及五金、日
                                        常生活精品、外銷商品等優良廠商，並
                                        為 『美標衛浴American Standard 百
                                        年衛浴品牌之台灣經銷商。
                                    </p>
                                </div>

                                <div class="catalog-footer">
                                    <p class="text-028cd3 font-weight-light">瀏覽人次: 103</p>
                                    <a href="javascript:void(0);"
                                        class="text-white bg-028cd3 font-weight-normal px-2 py-1">線上瀏覽</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


            </div>

            <div class="overflow-auto mb-3">
                @if (count($catalogs ?? []) > 0)
                    {{ $catalogs->onEachSide(3)->links('layouts_main.custom-pagination') }}
                @endif

            </div>

        </div>
    </div>
@endsection

@push('page_scripts')
    <script>
        $(document).ready(function() {
            // 處理線上瀏覽按鈕點擊
            $('.view-catalog-btn').on('click', function() {
                const catalogId = $(this).data('id');
                const fileUrl = $(this).data('file');
                const viewCountElement = $(this).closest('.catalog-footer').find('p');

                // AJAX請求增加瀏覽次數
                $.ajax({
                    url: '{{ route('catalogs.incrementViews') }}',
                    type: 'POST',
                    data: {
                        id: catalogId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // 更新頁面上的瀏覽次數
                        if (response.success) {
                            viewCountElement.text('瀏覽人次: ' + response.views);
                        }

                        // 開啟PDF檔案
                        window.open(fileUrl, '_blank');
                    },
                    error: function(error) {
                        console.error('增加瀏覽次數失敗', error);
                        // 即使失敗也開啟PDF
                        window.open(fileUrl, '_blank');
                    }
                });
            });
        });
    </script>
@endpush
