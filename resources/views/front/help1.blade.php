@extends('layouts.main')

@section('title', 'Home Page')


@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection

@section('content')
    <style>
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-image: url('../assets/images/third/calendar.png');
            color: rgba(0, 0, 0, 0);
            opacity: 1;
            display: block;
            background-repeat: no-repeat;
            width: 25px;
            height: 25px;
            border-width: thin
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            left: 5%;
        }



        select option {
            direction: rtl;
            background-color: #f2f2f2;
            font-size: 26px;
            color: #333;
        }


        select:focus {
            outline-color: #999;
        }

        #next {
            justify-content: end;
        }


        .couterCircle {
            height: 60px;
            width: 60px;
            line-height: 60px;
            font-size: 36px;
        }

        .counterLine {
            width: 225px;
            height: 1px;
            border: 1px solid black;
        }

        .header1 {
            font-size: 32px;
        }




        @media (max-width: 1331px) {
            input[type="date"]::-webkit-calendar-picker-indicator {
                position: absolute;
                left: 8%;
            }
        }

        @media (max-width: 770px) {
            input[type="date"]::-webkit-calendar-picker-indicator {
                position: absolute;
                left: 12%;
            }

            #next {
                justify-content: center;
            }

            .couterCircle {
                height: 50px;
                width: 50px;
                line-height: 50px;
                font-size: 26px;
            }

            .counterLine {
                width: 115px;
                height: 1px;
                border: 1px solid black;
            }

            .header1 {
                font-size: 26px;
            }
        }
    </style>
    <main>
        <div class="header1 text-end mb-5 pe-5 mt-4 me-3">
            <div style="font-weight: 900;">ساعدنا فى التعرف على الشركات المحتالة </div>
        </div><!-- header1 -->

        <div class="counter d-flex justify-content-end align-items-center me-5" style="height: 60px;">
            <div class="couterCircle rounded-circle text-center me-3"
                 style="background-color: #d9d9d9;font-weight: 700;color:#000;">
                2</div>
            <div class="counterLine me-3"></div>
            <div class="couterCircle rounded-circle text-center me-3"
                 style="background-color: #D50900;font-weight: 700;color:#fff;">
                1</div>
            <div class="counterLine"></div>
        </div><!-- counter -->




        <form class="helpForm d-flex flex-column p-5 mt-5" style="background-color: #fbfbfbd6;" method="POST" action="{{ route('fraud-reports.store') }}">
@csrf

        <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>أي نوع من الاحتيال ؟
                </label>
                <input type="text" id="my-select-id" style="background-color: #fff;min-height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;
                appearance: none;
                background-image: url('../assets/images/second/down.png');
                background-repeat: no-repeat;
                background-position: 40px  center;
                text-align-last: right;" name="fraud_type" id="" >

            </div>


            <!-- ... -->

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>
                    اسم الشركة ان وجدت  ؟
                </label>
                <select style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;
        appearance: none;
        background-image: url('../assets/images/second/down.png');
        background-repeat: no-repeat;
        background-position: 40px  center;
        text-align-last: right;" type="text" name="company_name_id" id="company_id">
                    <option value="">اختار اسم الشركة</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach

                </select>


            </div>

            <!-- ... -->


            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>كيف تم الاتصال بك من قبل
                    المحتال ؟ </label>
                <input type="text" style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;
                appearance: none;
                background-image: url('../assets/images/second/down.png');
                background-repeat: no-repeat;
                background-position: 40px  center;
                text-align-last: right;" type="text" name="contact_method" id="">

            </div>

            <div class="d-flex flex-column flex-fill mb-5 ">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>متى اتصل بك المحتال لأول
                    مرة ؟ </label>
                <input type="date" style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;
                background-position: left center;
                text-align-last: right;" name="first_contact_date" id="">
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>ماذا تعرف عن المحتال
                    ؟</label>
                <textarea
                    style="background-color: #fff;font-size: 20px;padding: 5px;border: none;padding: 2rem;resize: none;"
                    dir="rtl" name="fraudster_info" id="" cols="30"
                    rows="8">مثال  رقم تليفونه او الايميل الشخصى , اسمه بالكامل و الشركة التى يعمل بها ...</textarea><!-- 3 -->
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>اشرح طريقة الاحتيال
                </label>
                <textarea
                    style="background-color: #fff;font-size: 20px;padding: 5px;border: none;padding: 2rem;resize: none;"
                    dir="rtl" name="fraud_method" id="" cols="30"
                    rows="11">مثال  رقم تليفونه او الايميل الشخصى , اسمه بالكامل و الشركة التى يعمل بها ...</textarea><!-- 3 -->
            </div>

            <div class="d-flex justify-content-end mb-4">
    <span style="font-size: 18px;font-weight: 700;line-height: 18px; direction: rtl;">
        اوفق على نشر المعلومات و البيانات مع موقع منصات الاحتيال
    </span>
                <input type="hidden" name="publish_consent" value="0">
                <input style="height: 18px; width: 18px;margin-left: 1rem;" type="checkbox" name="publish_consent" value="1">
            </div>

            <div class="d-flex " id="next">
                <input type="submit" name="التالي" style="color: #fff; background-color: #D50900; white-space: nowrap;
                height: 54px;width: 135px;font-size: 20px;font-weight: 700;line-height: 53px;text-align: center;"

            </div>


        </form>


    </main>

    @section('footer')
        @include('partials._footer')
    @endsection
@endsection
