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

        <div class="counter d-flex justify-content-end align-items-center me-5" style="height: 60px;" >
            <div class="couterCircle rounded-circle text-center me-3"
                 style="background-color: #D50900;font-weight: 700;color:#fff;">
                2</div>
            <div class="counterLine me-3" ></div>
            <div class="couterCircle rounded-circle text-center me-3"
                 style="background-color: #d9d9d9;font-weight: 700;color:#000;">
                1</div>
            <div class="counterLine" ></div>
        </div><!-- counter -->

        <form class="helpForm d-flex flex-column p-5 mt-5" style="background-color: #fbfbfbd6;"action="{{ route('fraud-report.contact', ['fraud_report_id' => $fraud_report_id]) }}" method="POST">
            @csrf

            <!-- Form fields -->
            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>الاسم بالكامل
                </label>
                <input style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;" type="text" placeholder="محمد احمد" name="full_name" id="full_name">
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="email">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span> البريد الالكتروني
                </label>
                <input style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;" type="email" placeholder="email@email.com " name="email" id="email">
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="email">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>  الهاتف
                </label>
                <input style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;" type="phone" placeholder="phone " name="phone" id="email">
            </div>

            <!-- Other form fields -->

            <div class="d-flex " id="next">
                <button style="color: #fff; background-color: #D50900; white-space: nowrap;
                height: 54px;width: 135px;font-size: 20px;font-weight: 700;line-height: 53px;text-align: center;" type="submit">ارسال</button>
            </div>
        </form>




    </main>

    @section('footer')
        @include('partials._footer')
    @endsection
@endsection
