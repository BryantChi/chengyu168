@extends('layouts_main.master')

@section('content')
    <div class="conatiner-xxl py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">最新消息</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">News</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">掌握最新動態 讓家居生活更美好！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-4 mb-5">
        <div class="container" id="sc-news">
            <div class="row">
                <div class="col-12 d-flex justify-content-end" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-028cd3 font-weight-light" style="font-size: 14px;">
                        共 {{ count($newsInfos) }} 則消息
                    </p>
                </div>
            </div>

            @foreach ($newsInfos ?? [] as $news)
                <div class="row justify-content-center align-items-center py-2">
                    <div class="col-lg-auto mb-lg-0 mb-3">
                        <a href="{{ route('news-details', ['id' => $news->id]) }}">
                            <img src="{{ asset('uploads/' . $news->image) }}"
                                class="img-fluid hp-news-pic" alt="">
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
                            {!! $cleanText ?? '感謝您的支持，H&H 週年慶大放送！即日起，凡購買 指定款馬桶，即可享有 免費基本安裝服務...' !!}
                        </p>
                        <div class="d-flex flex-row justify-content-end align-items-center mt-3">
                            <a href="{{ route('news-details', ['id' => $news->id]) }}"
                                class="news-more text-028cd3 font-weight-normal">了解更多
                                MORE ⟩</a>
                        </div>
                    </div>
                </div>

                @if (!$loop->last)
                    <div class="news-line"></div>
                @endif
            @endforeach

            @if (count($newsInfos) == 0)
                {{-- <div class="row justify-content-center align-items-center py-2">
                    <div class="col-12 text-center">
                        <p class="text-51 font-weight-normal">目前沒有最新消息。</p>
                    </div>
                </div> --}}

                @for ($i = 0; $i < 6; $i++)
                    {{-- 模擬數據 --}}
                    <div class="row justify-content-center align-items-center py-2">
                        <div class="col-lg-auto mb-lg-0 mb-3">
                            <a href="{{ route('news-details-mock') }}">
                                <img src="{{ asset('assets/images/02/news_pic' . ($i > 0 ? $i + 1 : '') . '.jpg') }}" class="img-fluid hp-news-pic"
                                    alt="">
                            </a>
                        </div>

                        <div class="col-lg">
                            <div class="news-views text-028cd3 font-weight-light">觀看人次: {{ rand(100, 1000) }}</div>
                            <a href="{{ route('news-details-mock') }}">
                                <h3 class="text-26 h4">H&H 週年慶 | 馬桶免費基本安裝活動 開跑！</h3>
                            </a>
                            <p class="text-51 font-weight-normal">
                                感謝您的支持，H&H 週年慶大放送！即日起，凡購買 指定款馬桶，即可享有 免費基本安裝服務...
                            </p>
                            <div class="d-flex flex-row justify-content-end align-items-center mt-3">
                                <a href="{{ route('news-details-mock') }}"
                                    class="news-more text-028cd3 font-weight-normal">了解更多
                                    MORE ⟩</a>
                            </div>
                        </div>
                    </div>
                    @if ($i < 5)
                        <div class="news-line"></div>
                    @endif

                @endfor
                {{-- <div class="row justify-content-center align-items-center py-2">

                    <div class="col-lg-auto mb-lg-0 mb-3">
                        <a href="{{ route('news-details-mock') }}">
                            <img src="{{ asset('assets/images/02/news_pic.jpg') }}" class="img-fluid hp-news-pic"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg">

                        <div class="news-views text-028cd3 font-weight-light">觀看人次: 123</div>
                        <a href="{{ route('news-details-mock') }}">
                            <h3 class="text-26 h4">H&H 週年慶 | 馬桶免費基本安裝活動 開跑！</h3>
                        </a>
                        <p class="text-51 font-weight-normal">
                            感謝您的支持，H&H 週年慶大放送！即日起，凡購買 指定款馬桶，即可享有 免費基本安裝服...more
                        </p>
                        <div class="d-flex flex-row justify-content-end align-items-center mt-3">
                            <a href="{{ route('news-details-mock') }}" class="news-more text-028cd3 font-weight-normal">了解更多
                                MORE ⟩</a>
                        </div>

                    </div>

                </div>

                <div class="news-line"></div> --}}
            @endif

        </div>

        <div class="overflow-auto mb-3">
            {{ $newsInfos->onEachSide(3)->links('layouts_main.custom-pagination') }}
        </div>
    </div>
@endsection
