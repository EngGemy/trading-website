@extends('layouts.main')

@section('title', 'home Page')


@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection


@if(session('success'))
    <div class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif

@section('content')
    <main>












    <div class="carousel d-flex flex-column px-5 pt-4 pb-4 mb-5" style="background-color: {{ $company->verified_account != 0 ? '#0D8944' : '#272727' }}">>

      <div class="carouselChild text-white ">

        <div class="carouselChildLeft d-flex flex-column justify-content-center align-items-center">
          <div><!-- top -->
            تقيم
          </div>
          <div>
            <p class="d-inline-block" style="font-weight:700;font-size:48px;">1.5</p> &nbsp; <p class="d-inline-block"
              style="font-weight:400;font-size:26px;color: rgba(255, 255, 255, 0.6)"> / 5</p>
          </div><!-- center -->
          <div>
            <img src="../assets/images/second/on2.png"><img src="../assets/images/second/on2.png"><img
              src="../assets/images/second/on2.png">
            <img src="../assets/images/second/off2.png"><img src="../assets/images/second/off2.png">
            <p class="d-inline-block ms-3">خطر</p>
          </div><!-- down -->
        </div><!-- left -->
<!-- center -->
          <div class="carouselChildCenter d-flex flex-column flex-grow-1 align-items-end align-self-stretch">

              <div class="binance" style="font-weight: 500;">{{ $company->companyName->name }}</div>

              <div class="d-flex carouselStatistic4">
                  <div class="carouselStatistic1"> <span dir="rtl">سنة</span>     {{ date('Y') - $company->year_founded }}
                      <img src="../assets/images/second/calendar 1.png">
                  </div>
                  <div class="carouselStatistic2">{{ $company->country }}
                      <img src="../assets/images/second/united-kingdom 1.png">
                  </div>
              </div>

              <div class="carouselStatistic3">{{ $company->site_link }}
                  <img src="../assets/images/second/domain 1.png">
              </div>

          </div>



          <div class="carouselUpRight position-relative" style="background-image: url('{{ asset('storage/' . $company->logo) }}')">
              <div class="position-absolute @if ($company->verified_account != 0) bg-success text-white @endif">
                  @if ($company->verified_account == 0)
                      بلا رخصه
                  @else
                      مرخصه
                  @endif
              </div>
          </div>





          <!-- right -->

      </div><!-- up -->

      <div class="d-flex justify-content-center">
        <a class="carouselButton" style="border: 1px solid #ffffff;border-color:solid #ffffff;" href="">اضف تقييم</a>
        <a class="carouselButton" style="border: 1px solid #D50900; background-color: #D50900;" href="">فتح حساب</a>
      </div><!-- down -->

    </div><!-- carousel -->



    <div class="text-center mb-5">
      <div style="font-size: 32px;font-weight: 900;">تعرف على تفاصيل الشركة</div>
    </div><!-- header1 -->


    <div class="second2Row d-flex flex-column mx-5" style="background-color: #fbfbfb;">

        <div class="second2RowChild">
            <div>
                @foreach ($company->platforms as $platform)
                    <span>{{ $platform->name }}</span>
                    <img class="pb-2" src="{{ asset('assets/images/second/Line 2.png') }}" alt="">
                @endforeach
            </div><!-- left -->
            <div>
                <div> <span>منصات التدوال </span> <img src="{{ asset('assets/images/second/laptop 1.png') }}"> </div>
            </div><!-- right -->
        </div><!-- row1 -->


        <div class="second2RowChild">
            <div>
                @if ($company->licenses)
                    @foreach ($company->licenses as $license)
                        <span>{{ $license->name }}</span>
                        <img class="pb-2" src="{{ asset('assets/images/second/Line 2.png') }}" alt="">
                    @endforeach
                @else
                    <p>No licenses found for this company</p>
                @endif
            </div><!-- left -->
        <div>
          <div> <span>التراخيص </span> <img src="../assets/images/second/compliant 1.png"> </div>
        </div><!-- right -->
      </div><!-- row2 -->

      <div class="second2RowChild">
        <div>
            @foreach ($company->countries as $country)
                <span>{{ $country->name_arabic }}</span>
                <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
            @endforeach
        </div><!-- left -->
        <div>
          <div> <span>المكاتب المحلية </span> <img src="../assets/images/second/office-building 1.png"> </div>
        </div><!-- right -->
      </div><!-- row3 -->

      <div class="second2RowChild">
          <div>
              @foreach ($company->deposits as $deposite)
                  <span>{{ $deposite->name }}</span>
                  <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
              @endforeach
          </div><!-- left -->
        <div>
          <div> <span>خيارات الايداع </span> <img src="../assets/images/second/type 1.png"> </div>
        </div><!-- right -->
      </div><!-- row4 -->

      <div class="second2RowChild">
          <div>
              @foreach ($company->withdrawals as $withdrawal)
                  <span>{{ $withdrawal->name }}</span>
                  <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
              @endforeach
          </div><!-- left -->
        <div>
          <div> <span>خيارات السحب </span> <img src="../assets/images/second/withdraw-option 1.png"> </div>
        </div><!-- right -->
      </div><!-- row5 -->

      <div class="second2RowChild">
          <div>
              @foreach ($company->financialAssets as $financialAsset)
                  <span>{{ $financialAsset->name }}</span>
                  <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
              @endforeach
          </div>
          <!-- left -->
        <div>
          <div> <span>الاصول المتاحة للتدوال </span> <img src="../assets/images/second/assets (1) 1.png"> </div>
        </div><!-- right -->
      </div><!-- row6 -->

      <div class="second2RowChild">
        <div>
       <span>
    @if ($company->demo_account == 1)
               نعم
           @else
               لا
           @endif
</span>

        </div><!-- left -->
        <div>
          <div> <span>حساب تجربيى </span> <img src="../assets/images/second/clock 1.png"> </div>
        </div><!-- right -->
      </div><!-- row7 -->

      <div class="second2RowChild">
        <div>
          <span>{{$company->withdrawal_commission}}</span>
        </div><!-- left -->
        <div>
          <div> <span>عمولة السحب </span> <img src="../assets/images/second/cash-withdrawal 1.png"> </div>
        </div><!-- right -->
      </div><!-- row8 -->

      <div class="second2RowChild">
        <div>
          <span>{{$company->minimum_deposit_amount}}</span>
        </div><!-- left -->
        <div>
          <div> <span>اقل مبلغ ايداع </span> <img src="../assets/images/second/money (1) 1.png"> </div>
        </div><!-- right -->
      </div><!-- row9 -->

      <div class="second2RowChild">
        <div>
               <span>
    @if ($company->islamic_account == 1)
                       نعم
                   @else
                       لا
                   @endif
</span>
        </div><!-- left -->
        <div>
          <div> <span>حساب اسلامى </span> <img src="../assets/images/second/moon (1) 1.png"> </div>
        </div><!-- right -->
      </div><!-- row10 -->

      <div class="second2RowChild">
        <div>
          <span>{{$company->year_founded}}</span>
        </div><!-- left -->
        <div>
          <div> <span>سنة التأسيس </span> <img src="../assets/images/second/schedule 1.png"> </div>
        </div><!-- right -->
      </div><!-- row11 -->


    </div><!-- second -->

    <div class="m-5"
      style="height: 780px;background-image: url('../assets/images/second/beautiful-cryptocurrwncy-concept\ 2.png');background-size: cover;background-repeat: no-repeat;">
    </div><!-- picture1 -->

    <div class="text-end mb-5 pe-5  ">
      <div style="font-size: 32px;font-weight: 900;">نبذة تعريفية عن الشركة</div>
    </div><!-- header2 -->

    <div class="SecondInfo m-5 py-3 d-flex flex-column" style="background-color: #fbfbfb;">
      <div>التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية
        وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
        والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة. التداول عبر الإنترنت هو
        عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام
        الإنترنت كوسيلة للتواصل والتعامل.

      </div>
      <div>التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية
        وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
        والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة. التداول عبر الإنترنت هو
        عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام
        الإنترنت كوسيلة للتواصل والتعامل.

      </div>
      <div>التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية
        وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
        والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة. التداول عبر الإنترنت هو
        عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام
        الإنترنت كوسيلة للتواصل والتعامل.

      </div>
      <div>التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية
        وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
        والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة. التداول عبر الإنترنت هو
        عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات المالية وغيرها، وذلك باستخدام
        الإنترنت كوسيلة للتواصل والتعامل.

      </div>
    </div><!-- info -->

    <div class="m-5"
      style="height: 541px;background-image: url('../assets/images/second/beautiful-cryptocurrwncy-concept\ 2.png');background-size: cover;background-repeat: no-repeat;">
    </div><!-- picture2 -->

    <div class="text-end mb-5 pe-5  ">
      <div style="font-size: 32px;font-weight: 900;">الاسئلة المكررة عن الشركة</div>
    </div><!-- header3 -->

    <div class="d-flex justify-content-center mb-4">
      <div style="width: 95%; height: 824px; background-color: #f9f9f9; overflow-y: scroll;padding: 20px;">

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هى اكتر الشركات الامنه للتدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              <br> التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هو التدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">كيف تعرف الشركات المحتالة؟ </div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هو التدوال عبر الانترنت؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هى اكتر الشركات الامنه للتدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              <br> التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هو التدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">كيف تعرف الشركات المحتالة؟ </div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هو التدوال عبر الانترنت؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هى اكتر الشركات الامنه للتدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              <br> التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>

        <div class="qa-container">
          <div class="qa-header">
            <div class="qa-arrow"></div>
            <div class="qa-question" style="font-size: 24px;font-weight: 700;">ما هو التدوال؟</div>
          </div>
          <div class="qa-answer">
            <div class="qa-answerContent">
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع
              والمشتقات المالية وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة
              شائعة
              للمستثمرين والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة
              التداول عبر الإنترنت هو عملية شراء وبيع الأصول المالية مثل الأسهم والعملات الأجنبية والسلع والمشتقات
              المالية
              وغيرها، وذلك باستخدام الإنترنت كوسيلة للتواصل والتعامل. يعتبر التداول عبر الإنترنت طريقة شائعة للمستثمرين
              والتجار للوصول إلى الأسواق المالية والقيام بالعمليات التجارية والاستثمارية بسرعة وسهولة.
              .
            </div>
          </div>
        </div>


      </div>
    </div><!-- Q/A -->


        <div class="text-end mb-5 pe-5  ">
            <div style="font-size: 32px;font-weight: 900;">التقيمات</div>
        </div><!-- header4 -->

        @include('partials.comments', ['comments' => $comments])


        <div class="text-end mb-5 pe-5">
            <div style="font-size: 32px;font-weight: 900;">شارك بتقيمك لهذه الشركة</div>
        </div><!-- header5 -->

        <form class="secondLastRow d-flex flex-column "  action="{{ route('ratings.store') }}" method="POST">
            @csrf
            <div class="stars d-flex justify-content-end mb-4" id="stars">
                <img src="{{ asset('assets/images/second/star-shape.png') }}" onclick="toggleStars(this)" onpointerenter="enterStar(this)" onpointerleave="leaveStar(this)" data-index="1">
                <img src="{{ asset('assets/images/second/star-shape.png') }}" onclick="toggleStars(this)" onpointerenter="enterStar(this)" onpointerleave="leaveStar(this)" data-index="2">
                <img src="{{ asset('assets/images/second/star-shape.png') }}" onclick="toggleStars(this)" onpointerenter="enterStar(this)" onpointerleave="leaveStar(this)" data-index="3">
                <img src="{{ asset('assets/images/second/star-shape.png') }}" onclick="toggleStars(this)" onpointerenter="enterStar(this)" onpointerleave="leaveStar(this)" data-index="4">
                <img src="{{ asset('assets/images/second/star-shape.png') }}" onclick="toggleStars(this)" onpointerenter="enterStar(this)" onpointerleave="leaveStar(this)" data-index="5">
            </div>
            <!-- 1 -->

            <div class="secondLastRow-2 d-flex mb-4 ">
                <div class="d-flex flex-column flex-fill secondLastRow-2-1">
                    <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                        <span style="color: #D50900;">*</span>الاسم بالكامل
                    </label>
                    <input style="background-color: #FBFBFB;height: 66px;font-size: 23px;border: none;padding: .5rem" type="text" name="full_name" id="">
                </div>
                <div class="d-flex flex-column flex-fill secondLastRow-2-2">
                    <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for=""><span style="color: #D50900;">*</span>البريد
                        الالكترونى</label>
                    <input style="background-color: #FBFBFB;height: 66px;font-size: 23px;padding: 5px;border: none;padding: .5rem" type="text" name="email" id="">
                </div>
            </div><!-- 2 -->

            <div class="">
                <div class="d-flex flex-column flex-fill mb-3">
                    <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" >
                        <span style="color: #D50900;">*</span>التعليقات
                    </label>
                    <textarea style="background-color: #FBFBFB;font-size: 20px;padding: 5px;border: none;padding: .5rem;resize: none;" name="body" id="" cols="30" rows="10"></textarea><!-- 3 -->
                </div><!-- 3 -->
                <input type="hidden" name="rating" id="rating" value="">
                <input type="hidden" name="company_name_id" value="{{ $companyNameId }}">


                <div class="d-flex justify-content-end mb-4">
                    <span style="font-size: 16px;font-weight: 700;line-height: 18px;">اوفق على الشروط والاحكام</span>
                    <input style="height: 18px; width: 18px;margin-left: 1rem;" type="checkbox" name="agree_terms" id="">
                </div><!-- 4 -->
                <div class="d-flex justify-content-end">
                    <input type="submit" style="color: #fff; background-color: #D50900; white-space: nowrap;height: 54px;width: 135px;font-size: 20px;font-weight: 700;line-height: 53px;text-align: center;" class=""
                       name="ابدأ التداول">
                </div><!-- 5 -->
            </div><!-- 3,4,5 -->

        </form>




            @section('footer')
                @include('partials._footer')
            @endsection


    </main>

    <script>
        //nav bar
        const navbar = document.querySelector('.firstNav');
        const burger = document.querySelector('.nav-toggle');
        const navLinks = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            navbar.classList.toggle('nav-active');
            burger.classList.toggle('toggle');
        });

        // q/a div
        var qaContainers = document.querySelectorAll('.qa-container');
        qaContainers.forEach(function (container) {
            var header = container.querySelector('.qa-header');
            var answer = container.querySelector('.qa-answer');
            header.addEventListener('click', function () {
                container.classList.toggle('active');
            });
        });



        var starIndex ;

        const myDiv = document.getElementById("stars");

        myDiv.addEventListener("click", function(event) {

            if (event.target === myDiv) {
                starIndex = 0;
                const stars = myDiv.querySelectorAll("img");
                stars.forEach((image,index) => {
                    if (index < starIndex) {
                        image.src = "../assets/images/second/star-shapeOn.png";
                    }
                    else{
                        image.src = "../assets/images/second/star-shape.png";
                    }
                });

            }
        });

        function toggleStars(star) {


            const stars = star.parentNode.querySelectorAll("img");
            starIndex = star.dataset.index;
            document.getElementById("rating").value = starIndex;
            stars.forEach((image,index) => {
                if (index < starIndex) {
                    image.src = "../assets/images/second/star-shapeOn.png";
                }
                else{
                    image.src = "../assets/images/second/star-shape.png";
                }
            });
        }


        function enterStar(star) {
            const stars = star.parentNode.querySelectorAll("img");
            stars.forEach((image,index) => {
                if (index < star.dataset.index) {
                    image.src = "../assets/images/second/star-shapeOn.png";
                }
                else{
                    image.src = "../assets/images/second/star-shape.png";
                }
            });
        }



        function leaveStar(star) {
            const stars = star.parentNode.querySelectorAll("img");
            stars.forEach((image,index) => {
                if (index < starIndex) {
                    image.src = "../assets/images/second/star-shapeOn.png";
                }
                else{
                    image.src = "../assets/images/second/star-shape.png";
                }
            });
        }


        const toast = document.querySelector('.toast');
        const toastInstance = new bootstrap.Toast(toast);
        toastInstance.show();


    </script>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
