<section id="bt_section5c49958ab4750" class="boldSection topSemiSpaced btDarkSkin gutter inherit btAccentColorBackground">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein animate-moveleft inherit animated">
                            <div class="rowItemContent">
                                <div class="btClear btSeparator topExtraSpaced bottomSmallSpaced noBorder">
                                    <hr>
                                </div>
                                <header class="header btClear extralarge btDash bottomDash  btNormalDash">
                                    <div class="dash">
                                        <h1><span class="headline">وبلاگ</span></h1></div>
                                </header>
                                <div class="btClear btSeparator topSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- blog title --}}
<section class="boldSection topSemiSpaced bottomSpaced gutter inherit">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        @foreach ($posts as $post)
                            <div style="margin-top:30px;" class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btTextIndent inherit btDarkSkin animated">
                                <div class="rowItemContent color-ima">
                                    <div class="bpgPhoto btTextCenter wIconOver">
                                        <a href="{{ route('main.post.show' , [ 'id' => $post->id]) }}" target="_self"></a>
                                        <div class="boldPhotoBox">
                                            <div class="bpbItem">
                                                <div class="btImage">
                                                    <img src="{{ asset('uploads') . '/' . $post->image }}" alt="{{ $post->title }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="captionPane">
                                            <div class="captionTable">
                                                <div class="captionCell">
                                                    <div class="captionTxt"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <header class="header btClear medium  btNormalDash" style="margin-bottom: 0;">
                                        <div class="dash">
                                            <h3 class="color-ima"><span class="headline"><a class="ima-bc-title" href="{{ route('main.post.show' , [ 'id' => $post->id]) }}">{{ $post->title }}</a></span></h3>
                                        </div>
                                    </header>
                                    <div class="btText ima-bc-para">
                                        {{ strip_tags(substr($post->body , 0 , 351)) . ' ...' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $posts->links() }}
</section>
