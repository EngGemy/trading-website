@extends('layouts.main')

@section('title', 'Home Page')


@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection

@section('content')
    <main>
        <div class="trustHeader row mt-5 mb-3">
            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex flex-row ms-5">
                    <img src="../assets/images/arroow.png" alt="" style="width: 14px; height:14.78px;margin-top: 5px;margin-right: 10px;">
                    <a style="font-weight: 700; font-size: 16px;">عرض الكل</a>
                </div>
                <h3 class="me-5 underLine pb-2">الشركات الموثوقة</h3>
            </div>
        </div>

        <div class="container-fluid" dir="rtl">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @forelse ($companies as $company)
                    <div class="col">
                        <div class="card h-100" style="border-top: 2px solid #D50900;">
                            <div class="card-img-top position-relative" style="padding-bottom: 100%;">
                                <img src="{{ asset('storage/' . $company->images) }}" class="position-absolute top-0 start-0 w-100 h-100" alt="Company logo">
                                <div class="position-absolute bottom-0 end-0 me-2 mb-2">
                                    <img class="me-2" src="../assets/images/موثقة.png" alt="" style="margin-top: 10px; padding: 5px;">
                                    <img src="../assets/images/active.png" alt="" style="margin-top: 10px; padding: 5px;">
                                </div>
                            </div>
                            <div class="card-body" dir="rtl">
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="text-left">الدول المستهدفة</div>
                                    <div>
                                        @foreach ($company->countries as $country)
                                            <span>{{ $country->name_arabic }}</span>
                                            <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="text-left">المنصة المستخدمة</div>
                                    <div>
                                        @foreach ($company->platforms as $platform)
                                            <span>{{ $platform->name }}</span>
                                            <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center mt-3">
                                    <a style="font-weight: 700;font-size: 18px;line-height: 22px;width: 213px;padding: .6rem .4rem;"
                                       class="redBack text-center" href="">فتح حساب</a>
                                </div>
                                <div class="d-flex flex-row justify-content-center mt-3">
                                    <a class="pb-1" style="font-weight: 700;font-size: 12px;line-height: 14px;border-bottom: 1px solid #000;"
                                       href="{{ route('details.show', $company->companyName->id) }}">عرض تفاصيل الشركة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <p>No companies found.</p>
                    </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $companies->links() }}
            </div>
        </div>
    </main>

    @section('footer')
        @include('partials._footer')
    @endsection
@endsection
