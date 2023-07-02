<div class="secondRating flex-column">
    @foreach ($comments as $comment)
        <div class="mx-5 px-2" style="background-color: #FBFBFB;width: 95%;min-height: 153px;">
            <div class="d-flex flex-column px-5 py-4">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row pt-2 me-3" style="white-space: nowrap;">
                        {{ $comment->created_at->format('d / m / Y') }}
                    </div>
                    <div class="d-flex flex-column mb-2" style="width:15rem;">
                        <div class="d-flex flex-row justify-content-end" style="white-space: nowrap;">
                            <div class="p2 px-1 me-1" style="color: #000000;font-size: 24px;font-weight: 600;">{{ $comment->full_name }}</div>
                            <div>
                                <img src="../assets/images/second/Ellipse 2.png" alt="">
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center mt-1 me-3">
                            @for ($i = 1; $i <= 5; $i++)
                                <img class="px-1" src="../assets/images/second/{{ $i <= $comment->rating ? 'onBig.png' : 'offBig.png' }}" alt="" srcset="">
                            @endfor
                        </div>
                    </div>
                </div><!-- top -->
                <div class="secondRatingbottom justify-content-end mt-2 " dir="rtl"
                     style="font-weight: 400;font-size: 14px;line-height: 24px;">
                    <div style="width: 100%;">{{ $comment->body }}</div>
                </div><!-- bottom -->
            </div>
        </div><!-- comment -->
    @endforeach
</div>
<!-- ratings -->
