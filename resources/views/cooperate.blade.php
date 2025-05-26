@extends('layouts_main.master')

@section('content')
    <div class="conatiner-xxl py-5 bg-sc-title">

        <div class="container">
            <div class="row justify-content-center px-lg-1 px-3">
                <div class="col-lg-11">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-fit h-fit">
                        <div class="hp-sc-title">
                            <h4 class="text-028cd3 mb-1">廠商合作</h4>
                            <p class="text-26 font-weight-light text-uppercase mb-0">Cooperate</p>
                        </div>
                        <div class="sc-title-line mx-lg-4 my-lg-0 my-3"></div>
                        <p class="text-51 font-weight-normal mb-0">攜手合作，共創雙贏，您值得信賴的專業合作夥伴！</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pt-4 bg-cooperate">
        <div class="container-fluid" id="sc-cooperate">

            <div class="row justify-content-start align-items-center">
                <div class="col-lg-3 mb-lg-0 mb-3 px-0 align-self-end">
                    <picture>
                        <source srcset="{{ asset('assets/images/06/06left_b720.jpg') }}" media="(min-width: 992px)">
                        <source srcset="{{ asset('assets/images/06/06left_b624.jpg') }}" media="(max-width: 768px)">
                        <img src="{{ asset('assets/images/06/06left_b960.jpg') }}" class="img-fluid hp-cooperate-pic"
                            alt="">
                    </picture>
                </div>
                <div class="col-lg-6">
                     {{-- 成功提示訊息 --}}
                    @if (session('success'))
                        <div class="alert text-center my-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- 錯誤提示訊息 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger text-center my-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('cooperate.store') }}" id="cooperate-form" method="post">
                        <div class="row mb-5 mt-3">
                            <div class="col-12">
                                <p class="text-f74300 font-weight-light mb-0">(*為必填或必選欄位)</p>
                                @csrf
                                <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true">
                            </div>
                            <div class="col-12">
                                <div class="form-group form-inline mb-2">
                                    <label for="name" class="text-51 font-weight-light mr-1">*合作項目:</label>
                                    {{-- checkbox --}}
                                    <div class="form-check mx-1">
                                        <input class="form-check-input" type="checkbox" value="衛浴設備" name="cooperate[]"
                                            id="cooperate1">
                                        <label class="form-check-label" for="cooperate1">
                                            衛浴設備
                                        </label>
                                    </div>
                                    <div class="form-check mx-1">
                                        <input class="form-check-input" type="checkbox" value="廚具規劃" name="cooperate[]"
                                            id="cooperate2">
                                        <label class="form-check-label" for="cooperate2">
                                            廚具規劃
                                        </label>
                                    </div>
                                    <div class="form-check mx-1">
                                        <input class="form-check-input" type="checkbox" value="浴室配件" name="cooperate[]"
                                            id="cooperate3">
                                        <label class="form-check-label" for="cooperate3">
                                            浴室配件
                                        </label>
                                    </div>
                                    <div class="form-check mx-1">
                                        <input class="form-check-input" type="checkbox" value="鋪裝地板" name="cooperate[]"
                                            id="cooperate4">
                                        <label class="form-check-label" for="cooperate4">
                                            鋪裝地板
                                        </label>
                                    </div>
                                    <div class="form-check mx-1">
                                        <input class="form-check-input" type="checkbox" value="其他" name="cooperate[]"
                                            id="cooperate5">
                                        <label class="form-check-label" for="cooperate5">
                                            其他（可填寫於「其他說明」欄位）
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group form-inline mb-3">
                                    <label for="identity" class="d-block text-51 font-weight-light mr-2">*身分別:</label>
                                    <div class="form-check mr-4">
                                        <input class="form-check-input" type="radio" value="室內設計/公司" name="identity"
                                            id="identity1" required>
                                        <label class="form-check-label" for="identity1">
                                            室內設計/公司
                                        </label>
                                    </div>
                                    <div class="form-check mr-4">
                                        <input class="form-check-input" type="radio" value="建商" name="identity"
                                            id="identity2" required>
                                        <label class="form-check-label" for="identity2">
                                            建商
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="company_name" class="d-block text-51 font-weight-light mb-2">*公司名稱:</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        placeholder="請輸入公司名稱" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="contact_name"
                                                class="d-block text-51 font-weight-light mb-2">*聯絡人姓名:</label>
                                            <input type="text" class="form-control" id="contact_name"
                                                name="contact_name" placeholder="請輸入姓名" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="contact_phone"
                                                class="d-block text-51 font-weight-light mb-2">*聯絡電話:</label>
                                            <input type="text" class="form-control" id="contact_phone"
                                                name="contact_phone" placeholder="請輸入聯絡電話" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="email" class="d-block text-51 font-weight-light mb-2">*電子信箱:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="請輸入電子信箱" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="address" class="d-block text-51 font-weight-light mb-2">聯絡地址:</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="請輸入聯絡地址">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-2">
                                    <label for="other" class="text-51 font-weight-light mr-1">其他說明:</label>
                                    <textarea class="form-control" name="other" id="other" cols="30" rows="10" placeholder="請輸入其他說明"></textarea>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-lg-end mt-3">
                                {{-- 送出表單 --}}
                                {{-- 清除重填 ＆ 確認送出 --}}
                                <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center">
                                    <button type="reset" class="btn btn-secondary font-weight-normal mr-lg-2 mb-lg-0 mb-3">清除重填</button>
                                    <button type="submit" class="btn btn-028cd3 text-white font-weight-normal">確認送出</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
