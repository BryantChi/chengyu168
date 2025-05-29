@extends('layouts_main.master')

@section('content')
    <div class="py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">公司簡介</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">About</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">承鈺住宅設備為您打造智慧、健康、便利的理想家居！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="container-fluid px-md-0">
            <div class="row">

                <div class="col-lg-5 mb-lg-0 mb-3">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/01/pic01.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7 align-self-center">
                    <div class="row">
                        <div class="col-lg-8 py-3">
                            <h4 class="about-title text-028cd3 w-fit mb-3">公司理念 • 堅定信念</h4>
                            <p class="text-51 font-weight-normal mb-0">
                                承鈺住宅設備有限公司秉持「服務熱忱、產品創新、通路多元」的經營理念，堅
                                定以穩健步伐持續成長，志在成為國內領先的住宅設備及相關供應商。<br>
                                我們提供多元化的住宅設備產品，涵蓋室內裝修、環境改善及水質管理等領域，
                                代理國際知名品牌，確保每位客戶均能享受到最優質的產品和服務。
                            </p>

                            <h4 class="about-title text-028cd3 w-fit mb-3 mt-4">專業技術・全面展示</h4>
                            <p class="text-51 font-weight-normal mb-0">
                                我們的團隊擁有豐富的實務經驗和專業認證，包括乙級室內裝修工程管理、乙級
                                室內裝修設計、病態建築診斷二級士及綠裝修認證.......等其他專業證照，致力於
                                為每個專案提供最高標準的服務。<br>

                                無論是新建或翻修，我們都能提供專業的建議和解決方案，確保客戶的期望得到
                                充分實現。
                            </p>
                        </div>
                    </div>
                </div>

            </div>




        </div>

        <div class="container-fluid py-3">
            <div class="row mb-lg-3 mb-4">
                <div class="col-lg-7 align-self-center mb-lg-0 mb-3">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <h4 class="text-c1e5f7 font-weight-normal letter-spacing-2">PROFESSIONAL CERTIFICATION</h4>

                            <h4 class="about-title text-028cd3 w-fit mb-3 mt-4">科技新應用 • 滿足需求</h4>
                            <p class="text-51 font-weight-normal mb-0">
                                隨著科技進步，人民生活水準及健康意識漸漸提高，本公司也開始注意到不只是
                                要注意我們室內空氣的品質，早在20年前我們也注意到生活用水的重要性，因此
                                我們也積極導入全屋式軟淨水機等最新科技產品，特別為花蓮台東地區引進
                                ECOWATER美國及SYR德國的先進技術，有效保護用水的純淨與健康，延長設備
                                使用壽命，同時減少環境負擔，本公司提供更舒適專業的住宅設備也善盡社會責
                                任。
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/01/pic02.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mb-lg-3 mb-4">
                <div class="col-lg-7">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <h4 class="about-title text-028cd3 w-fit mb-3 mt-4">承諾服務 • 創建美好居住</h4>
                            <p class="text-51 font-weight-normal mb-0">
                                承鈺住宅設備有限公司不僅是您的商業夥伴，更是改善生活品質的共同伙伴。
                                我們秉持誠信、創新和社會責任感，致力於成為您首選的住宅設備合作夥伴。藉
                                由我們專業的服務和精湛的技術，共同打造一個健康舒適的家居環境。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-3 px-0">
            <div class="row">
                <div class="col-lg-10">
                    <picture>
                        <source srcset="{{ asset('assets/images/01/pic03_1440.jpg') }}" media="(max-width: 1440px)">
                        <source srcset="{{ asset('assets/images/01/pic03_1280.jpg') }}" media="(max-width: 1280px)">
                        <source srcset="{{ asset('assets/images/01/pic03_1024.jpg') }}" media="(max-width: 1024px)">
                        <source srcset="{{ asset('assets/images/01/pic03_624.jpg') }}" media="(max-width: 768px)">
                        <img src="{{ asset('assets/images/01/pic03_1560.jpg') }}" class="img-fluid" alt="">
                    </picture>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-equipment pb-5">
        <div class="container">
            @include('components.equipment')

            <div class="row justify-content-center pb-5 mt-4">
                <div class="col-12 d-flex justify-content-center align-items-center mb-4">
                    <h5 class="text-028cd3 font-weight-normal equipment-title w-fit">
                        服務項目
                    </h5>
                </div>

                <div class="col-lg-auto">
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> SYR德國全屋式軟淨水設備
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> ECO WATER全屋式軟淨水設備
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> KOHLER衛浴設備
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> HUNTIGTON海廷頓衛浴設備
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> HOTSPRING SPA
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 歐化廚具規劃設計安裝
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 太陽能熱水器規劃
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> OVEN PLUS戶外型披薩烤箱
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 飯店級蒸汽機SPA、烤箱
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 國內外磁磚搭配
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> DYHOT全預混瓦斯即熱式熱水器
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 電光衛浴設備
                    </p>
                    {{-- <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span>
                    </p> --}}
                </div>
                <div class="col-lg-auto">
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> MIT電動曬衣架、歐蘭特電動曬衣架
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 淋浴拉門、不銹鋼浴櫃、浴櫃
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 摩登衛浴設備、L型無框淋浴拉門、淋浴柱
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 陶瓷單把手龍頭、不鏽鋼無鉛龍頭、單把手龍頭
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 沐浴龍頭(銅)、無鉛水龍頭、感應式龍頭
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 獨立浴缸、按摩浴缸、面盆、省水標章
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 單體馬桶、蹲式馬桶、感應式分體馬桶
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 無障礙廁所、殘障廁所、電腦馬桶蓋、小便斗
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 感應式馬桶、免治馬桶、幼兒馬桶
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 無障礙明鏡、殘障扶手、安全扶手
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 廁所改修、套房改修、乾溼分離
                    </p>
                    <p class="text-51 font-weight-normal mb-0">
                        <span class="text-028cd3"><i class="fas fa-check"></i></span> 暖風機、排風扇、鏡櫃、藝術鏡、置物架、毛巾桿
                    </p>
                </div>

                <div class="col-12 my-5 py-4 d-md-none"></div>
            </div>
        </div>

    </div>

    <!-- sc contact -->
    @include('components.sc-contact')
    <!-- sc contact end -->
@endsection
