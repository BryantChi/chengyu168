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
            // 檢測是否為移動設備
            const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

            // 觸控和點擊處理
            $(document).on('click touchstart', '.view-catalog-btn', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const $this = $(this);
                const catalogId = $this.data('id');
                const fileUrl = $this.data('file');
                const viewCountElement = $this.closest('.catalog-footer').find('p');

                // 檢查是否為示例型錄
                const isSample = catalogId && (catalogId.toString().includes('sample'));

                // 視覺反饋
                $this.css('opacity', '0.7').text('開啟中...');

                // 移動設備特殊處理 - 直接在當前視窗打開PDF
                if (isMobile) {
                    // 示例型錄無需計數
                    if (isSample) {
                        window.location.href = fileUrl;
                        return;
                    }

                    // 先增加計數，然後直接打開
                    $.ajax({
                        url: '{{ route('catalogs.incrementViews') }}',
                        type: 'POST',
                        data: {
                            id: catalogId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                // 更新計數但不等待用戶看到
                                viewCountElement.text('瀏覽人次: ' + response.views);
                            }
                            // 在計數後立即開啟
                            window.location.href = fileUrl;
                        },
                        error: function(error) {
                            console.error('增加瀏覽次數失敗', error);
                            // 即使計數失敗仍然開啟PDF
                            window.location.href = fileUrl;
                        }
                    });
                    return;
                }

                // 桌面設備處理 - 嘗試開啟新視窗
                let newWindow = null;
                try {
                    newWindow = window.open('about:blank', '_blank');
                } catch (e) {
                    console.error('無法開啟新視窗:', e);
                }

                // 示例型錄
                if (isSample) {
                    if (newWindow) {
                        newWindow.location.href = fileUrl;
                    } else {
                        window.location.href = fileUrl;
                    }
                    $this.css('opacity', '1').text('線上瀏覽');
                    return;
                }

                // 對真實型錄執行AJAX請求
                $.ajax({
                    url: '{{ route('catalogs.incrementViews') }}',
                    type: 'POST',
                    data: {
                        id: catalogId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            viewCountElement.text('瀏覽人次: ' + response.views);
                        }

                        $this.css('opacity', '1').text('線上瀏覽');

                        if (newWindow) {
                            newWindow.location.href = fileUrl;
                        } else {
                            window.location.href = fileUrl;
                        }
                    },
                    error: function(error) {
                        console.error('增加瀏覽次數失敗', error);

                        $this.css('opacity', '1').text('線上瀏覽');

                        if (newWindow) {
                            newWindow.location.href = fileUrl;
                        } else {
                            window.location.href = fileUrl;
                        }
                    }
                });
            });
        });
    </script>
@endpush
