<header class="nav2" >
    <button class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="but1" style="white-space: nowrap;">
        <a style="color: #fff; background-color: #D50900;border: 1.4px solid #D50900; white-space: nowrap;" class="" href="http://">ابدأ التداول</a>
    </div><!-- left -->

    <ul class="firstNav">

        <div class="firstNav1">
            <a class="firstNavChild" href="{{ url('/contact') }}">
                <li class="firstNavChild1" style="color: #000 !important; font-weight:700 ;  font-size: 16px ;  line-height: 19.2px;">تواصل معنا</li>
            </a>
            <a class="firstNavChild" >
                <li class="firstNavChild1" style="color: #000  !important; font-weight:700 ;  font-size: 16px ;  line-height: 19.2px;" href="#">معلومات عنا</li>
            </a>
            <a class="firstNavChild" href="{{ route('fraudulent-companies.index') }}">
                <li class="firstNavChild1" aria-current="page" style="color: #000 !important ;font-weight:700 ;  font-size: 16px ;  line-height: 19.2px;">الصفحة الرئيسية</li>
            </a>

        </div>

        <div class="firstNav2 ">
            <a class="">
                <li style="color: #000;" class="" href="http://">سماسرة</li>
            </a>
        </div>

    </ul>

    <div class="logo" style="white-space: nowrap;">
        <a href="{{ route('fraudulent-companies.index') }}">
            <h3 style="display: inline-block; font-weight: 900;">منصات الاحتيال</h3>
            <img src="../assets/images/Vector.png" style="margin-bottom: 10px;" alt="Your Icon">
        </a>
    </div>

</header>
