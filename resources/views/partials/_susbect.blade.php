<div class="row px-4 mb-3">
    <div class="d-flex flex-row justify-content-between px-5" >
        <div class="d-flex flex-row ms-5">
            <img src="../assets/images/arroow.png" alt="" style="width: 14px; height:14.78px;margin-top: 5px;margin-right: 10px;">
            <div style="font-weight: 700; font-size: 16px;">عرض الكل</div>
        </div>
        <h3 class="me-5">الشركات المحتالة</h3>
    </div>
</div>

<div class="row px-5">
    <div class="susbectCompany">
        @forelse ($fraudulentCompanies as $company)
            @if ($loop->index < 4)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 mx-2"> <!-- Added mx-2 class for horizontal margin -->
                        <img src="{{ asset('storage/' . $company->images) }}" class="card-img-top" alt="{{$company->name}}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    @foreach ($company->fraudMethods as $method)
                                        <span>{{ $method->name }}</span>
                                        <img src="{{ asset('assets/images/Line 1.png') }}" alt="">
                                    @endforeach
                                </div>
                                <div>طريقة الاحتيال</div>
                            </div>
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
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>{{ $company->complaints_count }}</div>
                                <div>عدد الشكاوى</div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <a class="btn btn-danger btn-sm" href="#">اضف تقييم</a>

                                <a class="btn btn-outline-danger btn-sm" href="{{ route('details.show', $company->companyName->id) }}">عرض تفاصيل الشركة</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        @empty
            <div class="col-12 text-center">
                <p class="h2">لا توجد شركات محتالة حتى الآن</p>
            </div>
        @endforelse
    </div>
</div>
