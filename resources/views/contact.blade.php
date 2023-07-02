@extends('layouts.main')

@section('title', 'Contact Us Page')


@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection





@section('content')
    <style>
        <style>


        #next{
            justify-content: end;
        }

        .header1{
            font-size: 32px;
        }


        @media (max-width: 770px) {

            #next{
                justify-content: center;
            }

            .header1{
                font-size: 26px;
            }
        }
    </style>
    </style>
    <main>
        <div class="header1 d-flex justify-content-end mb-5 pe-5 mt-4 me-3">
            <div class="underLine pb-1 " style="font-weight: 900;">تواصل معنا ليمكننا مساعدتك</div>
        </div>

        <form class="helpForm d-flex flex-column p-5 mt-5" style="background-color: #fbfbfbd6;" action="{{ route('contact-form.store') }}" method="POST">
            @csrf

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="full_name">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>الاسم بالكامل
                </label>
                <input style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;" type="text" placeholder="محمد احمد" name="full_name" id="full_name" value="{{ old('full_name') }}" required>
                @error('full_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="email">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>البريد الالكترونى
                </label>
                <input style="background-color: #fff;height: 66px;font-size: 23px;border: none;padding: .5rem;  border: none;" type="email" placeholder="amirahegab258@gmail.com" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex flex-column flex-fill mb-5">
                <label style="font-size: 24px;font-weight: 700;text-align: end;margin-bottom: .5rem;" for="message">
                    <span style="color: #ff0b00;font-size: 20px;" class="me-3">(مطلوب)</span>وضح كيف يمكن لفريق منصة احتيال مساعدتك
                </label>
                <textarea style="background-color: #fff;font-size: 20px;padding: 5px;border: none;padding: 2rem;resize: none;" dir="rtl" name="message" id="message" cols="30" rows="11" required>{{ old('message') }}</textarea>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex" id="next">
                <button type="submit" style="color: #fff; background-color: #D50900; white-space: nowrap; height: 54px;width: 135px;font-size: 20px;font-weight: 700;line-height: 53px;text-align: center;">ارسال</button>
            </div>
        </form>





        @section('footer')
            @include('partials._footer')
        @endsection


    </main>
@endsection





