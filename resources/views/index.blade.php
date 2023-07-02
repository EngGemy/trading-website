@extends('layouts.main')

@section('title', 'home Page')


@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection





@section('content')
    <main>

        @section('carousel')
            @include('partials._carousel')
        @endsection


            @include('partials._susbect', ['fraudulentCompanies' => $fraudulentCompanies])


        <div class="row px-5 mt-5 mb-3">
            <div class="d-flex flex-row justify-content-between px-5" >
                <div class="d-flex flex-row ms-5">
                    <img src="../assets/images/arroow.png" alt="" style="width: 14px; height:14.78px;margin-top: 5px;margin-right: 10px;">
                    <div style="font-weight: 700; font-size: 16px;">عرض الكل</div>
                </div>
                <h3  class=" me-5 ">التعليقات</h3>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @if ($comments->count() > 0)
            @foreach ($comments as $comment)
                <div class="container p-2 mx-5 mb-3" style="background-color: #FBFBFB;width: 403px; height: 153px;">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row pt-2 me-3">
                                @foreach ($tradingCompanies as $companyNameId => $tradingCompanyId)
                                    @if ($companyNameId == $comment->company_name_id)
                                        @php
                                            $company = \App\Models\TradingCompany::findOrFail($tradingCompanyId);
                                            $logo = $company->logo;
                                        @endphp
                                        <a href="{{ route('details.show', $company->companyName->id) }}">
                                            <img class="mt-2" style="height: 50px;" src="{{ asset('storage/' . $logo) }}" alt="" srcset="">
                                        </a>

                                        @break
                                    @endif
                                @endforeach
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i > $comment->rating)
                                        <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-{{ $i + 5 }}.png" alt="" srcset="">
                                    @endif
                                @endfor
                            </div>

                            <!-- left -->
                            <div class="d-flex flex-column mb-2">
                                <div class="d-flex flex-row">
                                    <div class="p2 px-1" style="color: #D50900;">علق على</div>
                                    <div class="p1 px-1" style="font-weight: bold;">{{ $comment->full_name }}</div>
                                    <div>
                                        <img src="../assets/images/person.png" alt="">
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $comment->rating)
                                            <img class="px-1" src="../assets/images/on.png" alt="" srcset="">
                                        @else
                                            <img class="px-1" src="../assets/images/off.png" alt="" srcset="">
                                        @endif
                                    @endfor
                                </div>
                            </div><!-- right -->
                        </div><!-- top -->
                        <div class="flex-grow-1 justify-content-end mt-2" style="font-weight: 400; font-size: 14px; line-height: 17px;">
                            <div>{{ $comment->body }}</div>
                        </div><!-- center -->
                        <!-- bottom -->
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="h2">لا توجد تعليقات  حتى الآن</p>
                </div>
            @endif

            <!-- comment -->

{{--            <div class="container p-2 mx-5 mb-3 " style="background-color: #FBFBFB;width: 403px;--}}
{{--  height: 153px;">--}}
{{--                <div class="d-flex flex-column ">--}}
{{--                    <div class="d-flex flex-row justify-content-between">--}}
{{--                        <div class="d-flex flex-row pt-2 me-3">--}}
{{--                            <img class="" style="height: 25px;" src="../assets/images/binance.png " alt="" srcset="">--}}


{{--                        </div><!-- left -->--}}
{{--                        <div class="d-flex flex-column mb-2">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="p2 px-1" style="color: #D50900;">علق على </div>--}}
{{--                                <div class="p1 px-1" style="font-weight: bold;">احمد ابراهيم</div>--}}
{{--                                <div>--}}
{{--                                    <img src="../assets/images/person.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-row justify-content-center mt-1">--}}
{{--                                <img class="px-1" src="../assets/images/on.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/on.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                            </div>--}}
{{--                        </div><!-- right -->--}}
{{--                    </div><!-- top -->--}}
{{--                    <div class="flex-grow-1 justify-content-end mt-2" style="font-weight: 400;font-size: 14px;line-height: 17px;">--}}
{{--                        <div>عادةً ما يتضمن هذا استخدام أنظمة التداول الإلكترونية التي توفر الرسوم البيانية والأدوات التحليلية وتنفيذ الأوامر ...</div>--}}
{{--                    </div><!-- center -->--}}
{{--                    <!-- bottom -->--}}
{{--                </div>--}}
{{--            </div><!-- comment -->--}}


{{--            <div class="container p-2 mx-5 mb-3 " style="background-color: #FBFBFB;width: 403px;--}}
{{--  height: 153px;">--}}
{{--                <div class="d-flex flex-column ">--}}
{{--                    <div class="d-flex flex-row justify-content-between">--}}
{{--                        <div class="d-flex flex-row pt-2 me-3">--}}
{{--                            <img class="" style="height: 13.14px;" src="../assets/images/vector/Vector-1.png " alt="" srcset="">--}}
{{--                            <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-2.png " alt="" srcset="">--}}
{{--                            <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-3.png " alt="" srcset="">--}}
{{--                            <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-4.png " alt="" srcset="">--}}
{{--                            <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-5.png " alt="" srcset="">--}}
{{--                            <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-6.png " alt="" srcset="">--}}
{{--                            <img class="" style="height: 13.14px;" src="../assets/images/vector/Vector-7.png " alt="" srcset="">--}}

{{--                        </div><!-- left -->--}}
{{--                        <div class="d-flex flex-column mb-2">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="p2 px-1" style="color: #D50900;">علق على </div>--}}
{{--                                <div class="p1 px-1" style="font-weight: bold;">محمد فتحى</div>--}}
{{--                                <div>--}}
{{--                                    <img src="../assets/images/person.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-row justify-content-center mt-1">--}}
{{--                                <img class="px-1" src="../assets/images/on.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/on.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                                <img class="px-1" src="../assets/images/off.png " alt="" srcset="">--}}
{{--                            </div>--}}
{{--                        </div><!-- right -->--}}
{{--                    </div><!-- top -->--}}
{{--                    <div class="flex-grow-1 justify-content-end mt-2" style="font-weight: 400;font-size: 14px;line-height: 17px;">--}}
{{--                        <div>عادةً ما يتضمن هذا استخدام أنظمة التداول الإلكترونية التي توفر الرسوم البيانية والأدوات التحليلية وتنفيذ الأوامر ...</div>--}}
{{--                    </div><!-- center -->--}}
{{--                    <!-- bottom -->--}}
{{--                </div>--}}
{{--            </div><!-- comment -->--}}
{{--        </div>--}}

{{--        <div class="report row" style="background-repeat: no-repeat;background-size: cover; background-image: url(../assets/images/financial-technology-kpi-dashboard-virtual-screen-big-data-analytics-visualization-technology-scientist-analyzing-information-structure-business-finance-internet-things-iot\ 4.png) ">--}}
{{--            <div class="col-3 d-flex flex-column ">--}}
{{--                <a style="box-sizing: border-box;" class="redBack ms-5 mb-5 text-center" href="">تبليغ عن شركة</a>--}}
{{--            </div>--}}
{{--            <div class="col-9 d-flex flex-column align-items-end">--}}
{{--                <h3 class="d-inline-block mt-5 mb-3" >فى حالة تعرضك للاحتيال من شركات تدوال غير مرخصة يمكنك ابلاغنا فى الحال </h3>--}}
{{--                <p >يتطلب التداول عبر الإنترنت فتح حساب تداول مع وسيط مالي عبر الإنترنت، والذي يوفر منصة تداول تتيح للمستثمرين إجراء الصفقات ومتابعة حساباتهم المالية. عادةً ما يتضمن هذا استخدام أنظمة </p>--}}
{{--            </div>--}}
{{--        </div>--}}

       @include('partials._trusted',['companies' => $companies])

        <div class=" row px-5 mt-5 mb-3">
            <div class="d-flex flex-row justify-content-between px-5" >
                <div class="d-flex flex-row ms-5">

                </div>
                <h3  class="me-5">المقالات</h3>
            </div>
        </div>


        <div class="articles d-flex flex-row  justify-content-center ">

            <div class="container mx-2 d-flex flex-column rounded p-0" style="background: #FBFBFB;">

                <img class="rounded-3" width="100%" height="60%" src="../assets/images/stock1.png" alt="" srcset="">
                <div class="d-flex flex-row justify-content-end mt-3" style="font-weight: 700;font-size: 18px;line-height: 22px;">
                    <div>
                        التدوال للمبتدئين
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-end mt-1" style="font-weight: 400; font-size: 12px; line-height: 167.5%;">
                    <div class="text-end">
                        التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت
                        &nbsp; &nbsp; <a style="text-decoration:none;color: #D50900;font-weight: 500;font-size: 12px;">اقرأ المزيد...</a>
                    </div>
                </div>



            </div>

            <div class="container mx-2 d-flex flex-column rounded p-0" style="background: #FBFBFB;">

                <img class="rounded-3" width="100%" height="60%" src="../assets/images/stock1.png" alt="" srcset="">
                <div class="d-flex flex-row justify-content-end mt-3" style="font-weight: 700;font-size: 18px;line-height: 22px;">
                    <div>
                        تعرف على تدوال السلع والاسهم
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-end mt-1" style="font-weight: 400; font-size: 12px; line-height: 167.5%;">
                    <div class="text-end">
                        التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت
                        &nbsp; &nbsp; <a style="text-decoration:none;color: #D50900;font-weight: 500;font-size: 12px;">اقرأ المزيد...</a>
                    </div>
                </div>



            </div>

            <div class="container mx-2 d-flex flex-column rounded p-0" style="background: #FBFBFB;">

                <img class="rounded-3" width="100%" height="60%" src="../assets/images/stock2.png" alt="" srcset="">
                <div class="d-flex flex-row justify-content-end mt-3" style="font-weight: 700;font-size: 18px;line-height: 22px;">
                    <div>
                        الخطوة الاولى نحو النجاح
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-end mt-1" style="font-weight: 400; font-size: 12px; line-height: 167.5%;">
                    <div class="text-end">
                        التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت
                        &nbsp; &nbsp; <a style="text-decoration:none;color: #D50900;font-weight: 500;font-size: 12px;">اقرأ المزيد...</a>
                    </div>
                </div>



            </div>

            <div class="container mx-2 d-flex flex-column rounded p-0" style="background: #FBFBFB;">

                <img class="rounded-3" width="100%" height="60%" src="../assets/images/stock1.png" alt="" srcset="">
                <div class="d-flex flex-row justify-content-end mt-3" style="font-weight: 700;font-size: 18px;line-height: 22px;">
                    <div>
                        ما هو التدوال عبر الانترنت
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-end mt-1" style="font-weight: 400; font-size: 12px; line-height: 167.5%;">
                    <div class="text-end">
                        التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت
                        &nbsp; &nbsp; <a style="text-decoration:none;color: #D50900;font-weight: 500;font-size: 12px;">اقرأ المزيد...</a>
                    </div>
                </div>



            </div>
        </div>


        @section('footer')
            @include('partials._footer')
        @endsection


    </main>
@endsection





