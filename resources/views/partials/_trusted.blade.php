<div class="row px-5 mt-5 mb-3">
    <div class="d-flex flex-row justify-content-between px-5">
        <div class="d-flex flex-row ms-5">
            <img src="../assets/images/arroow.png" alt="" style="width: 14px; height:14.78px;margin-top: 5px;margin-right: 10px;">
            <a href="{{ route('fraudulent-companies.indexAll') }}" style="font-weight: 700; font-size: 16px;">عرض الكل</a>
        </div>
        <h3 class="me-5">الشركات الموثوقة</h3>
    </div>
</div>

<div class="row px-5">
    <div class="susbectCompany">
        @forelse ($companies as $company)
            @if ($loop->index < 4)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 mx-2">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $company->images) }}" class="card-img-top image-left" alt="{{$company->name}}">
                            <div class="image-overlay position-absolute top-0 end-0">
                                <img class="me-2 image-right" src="../assets/images/موثقة.png" alt="" srcset="">
                                <img src="../assets/images/active.png" alt="" srcset="">
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    @foreach ($company->countries as $country)
                                        <span>{{ $country->name_arabic }}</span>
                                        <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
                                    @endforeach
                                </div>
                                <div class="text-right">الدول المستهدفة</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    @foreach ($company->platforms as $platform)
                                        <span>{{ $platform->name }}</span>
                                        <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
                                    @endforeach
                                </div>
                                <div>المنصة المستخدمة</div>
                            </div>

                            <div class="d-flex flex-row justify-content-center m-2 ">
                                <a style="font-weight: 700;font-size: 18px;line-height: 22px;width: 213px;padding: .6rem .4rem;" class="redBack  text-center" href="">فتح حساب</a>

                            </div>

                            <div class="d-flex flex-row justify-content-center">
                                <div class="pb-1" style="font-weight: 700;font-size: 12px;line-height: 14px;border-bottom: 1px solid #000;">
                                    <a class="" href="{{ route('details.show', $company->companyName->id) }}">عرض تفاصيل الشركة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <div class="col-12 text-center">
                <p class="h2">لا توجد شركات موثقة حتى الآن</p>
            </div>
        @endforelse
    </div>
</div>
