<div class="row">
    <div class="carouselContainer">
        <div class="background" id="grad"></div>
        <div class="foreground" >
            <div class="row justify-content-center" style="color: white;">
                <div style="width: 800px;" class="carouselText">
                    <h1 class="text-center pt-5"">تعرف الان على الشركات المرخصة عالميا</h1>
                    <h2 class="text-center pt-5"">اختر بنفسك وابدأ التدوال مع شركات مرخصة وموثوقة وتجنب التدوال مع الشركات الغير موثوقة   </h2>
                </div>
            </div><!-- top -->

            <div class="commentSearch">


                <div class=" pt-5 ">
                    <form class="d-flex justify-content-center" action="{{ route('search') }}" method="GET">
                        <button class="search-button" type="submit">بحث</button>
                        <div class="search-box">
                            <img src="../assets/images/search.png" style="margin-bottom: 10px;" alt="Your Icon" class="search-icon">
                            <input class="search-input" type="text" name="search_query" placeholder="ابحث باسم الشركة">
                        </div>
                    </form>

                </div><!-- center -->
                <div class="headerComment">
                    <div class="container p-2" style="background-color: #F9F9F9;width: 312px;height: 97px;
           box-shadow: 0px 0px 60px rgba(64,64,64,1)">
                        <div class="d-flex flex-column ">
                            <div class="d-flex flex-row justify-content-end">
                                <div class="d-flex flex-row pt-2 me-3">
                                    <img class="" style="height: 13.14px;" src="../assets/images/vector/Vector-1.png " alt="" srcset="">
                                    <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-2.png " alt="" srcset="">
                                    <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-3.png " alt="" srcset="">
                                    <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-4.png " alt="" srcset="">
                                    <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-5.png " alt="" srcset="">
                                    <img class="mt-2" style="height: 13.14px;" src="../assets/images/vector/Vector-6.png " alt="" srcset="">
                                    <img class="" style="height: 13.14px;" src="../assets/images/vector/Vector-7.png " alt="" srcset="">

                                </div><!-- left -->
                                <div class="d-flex flex-column mb-2">
                                    <div class="d-flex flex-row">
                                        <div class="p2 px-1" style="color: #D50900;">علق على </div>
                                        <div class="p1 px-1" style="font-weight: bold;">محمد فتحى</div>
                                        <div>
                                            <img src="../assets/images/person.png" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-center">
                                        <img class="px-1" src="../assets/images/on.png " alt="" srcset="">
                                        <img class="px-1" src="../assets/images/on.png " alt="" srcset="">
                                        <img class="px-1" src="../assets/images/off.png " alt="" srcset="">
                                        <img class="px-1" src="../assets/images/off.png " alt="" srcset="">
                                        <img class="px-1" src="../assets/images/off.png " alt="" srcset="">
                                    </div>
                                </div><!-- right -->
                            </div><!-- top -->
                            <div style="font-weight: 500;font-size: 10px; line-height: 17px;">
                                عادةً ما يتضمن هذا استخدام أنظمة التداول الإلكترونية وتنفيذ الأوامر
                            </div><!-- center -->
                            <div style="font-weight: bolder;font-size: 9px;line-height: 10px;justify-content: start !important;" class="d-flex flex-row ">
                                <div>منذ 3 دقائق</div>
                            </div><!-- bottom -->
                        </div>
                    </div>
                </div><!-- left -->



            </div><!-- center -->


            <div class="row justify-content-center mt-3">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="threeAction d-flex flex-column  rounded justify-content-center align-items-center shadow " style="background-color: #fff;">
                        <div class="mb-2">
                            <img src="../assets/images/questionMark.png" alt="" srcset="" >
                        </div>
                        <div class=" text-center" style="font-weight: 900;line-height: 29px;width: 200px;">
                            <a href="{{ route('contact.view') }}" style="text-decoration: none; color: inherit;">
                                طلب مساعدة
                            </a>

                        </div>
                    </div>
                    <div class="threeAction d-flex flex-column  rounded justify-content-center align-items-center shadow " style="background-color: #fff;">
                        <div class="mb-2">
                            <img src="../assets/images/protect.png" alt="" srcset="">
                        </div>
                        <div class="text-center" style="font-weight: 900;line-height: 29px;width: 200px;">
                            <a href="{{ route('fraudulent-companies.indexAll') }}" style="text-decoration: none; color: inherit;">
                                قائمة بالشركات الموثوقة
                            </a>
                        </div>

                    </div>
                    <div class="threeAction d-flex flex-column  rounded justify-content-center align-items-center shadow " style="background-color: #fff;">
                        <div class="mb-2">
                            <img src="../assets/images/chati.png" alt="" srcset="">
                        </div>
                        <a href="{{ route('fraud-reports.index') }}">
                            <div class="text-center" style="font-weight: 900; line-height: 29px; width: 150px;">
                                الابلاغ عن الشركات المحتالة
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div><!-- bottom -->
    </div><!-- Carousel -->
</div>
