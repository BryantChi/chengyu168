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

    <div class="container-xxl py-4 mb-5 mt-5">
        <div class="container" id="sc-news">

            <div class="row">
                <div class="col-12 mb-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-51 news-title h4">{{ $newsInfo->title ?? 'H&H 週年慶 | 馬桶免費基本安裝活動 開跑！' }}</h3>
                        <p class="text-028cd3 font-weight-light mb-0" style="font-size: 13px;">
                            {{ \Carbon\Carbon::parse($newsInfo->created_at ?? '')->format('Y.m.d') ?? '2024.12.15' }} ・
                            {{ '觀看人數: 123' }}
                        </p>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="cases-content text-e9 font-weight-light" data-aos="fade-up" data-aos-delay="200">
                        @if ($newsInfo->content ?? null != null)
                            {!! $newsInfo->content ?? '' !!}
                        @endif

                        @if ($newsInfo->content ?? null == null)
                            <p class="text-51 font-weight-normal">
                                感謝您的支持，H&H 週年慶大放送！即日起，凡購買 指定款馬桶，即可享有 免費基本安裝<br>
                                服務，讓您輕鬆升級舒適衛浴空間！<br><br>

                                活動時間：即日起至2025.03.15<br>
                                活動內容：購買指定款馬桶，享免費基本安裝<br><br>

                                H&H 智慧衛浴，舒適升級<br>
                                讓如廁體驗更衛生、更便利，錯過等明年！快來選購，享受這波超值優惠！<br>
                            </p>


                            <img src="{{ asset('assets/images/02/news_pic7.jpg') }}" class="img-fluid" alt="">
                        @endif
                    </div>
                </div>

                <div class="col-12 text-center py-3 mt-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('news') }}" class="btn-back text-028cd3"><span class="back-arrow mr-2"><</span>BACK
                        返回列表</a>
                </div>

            </div>

        </div>
    </div>
@endsection
