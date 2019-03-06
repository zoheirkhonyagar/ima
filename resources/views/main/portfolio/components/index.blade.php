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
                                        <h1><span class="headline">نمونه کارها</span></h1></div>
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
{{-- radio louzi title --}}
@foreach ($categories as $category)

<section class="boldSection topSpaced btLightSkin gutter inherit">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-2  col-sm-4 col-ms-12 btTextLeft">
                            <div class="rowItemContent"></div>
                        </div>
                        <div class="rowItem col-md-8 col-ms-12 btTextCenter animate animate-fadein animate-moveleft inherit animated">
                            <div class="rowItemContent">
                                <header class="header btClear large btDash bottomDash  btAccentDash">
                                    <div class="dash">
                                        <h2><span class="headline">{{ $category->title }}</span></h2></div>
                                </header>
                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-2  col-sm-4 col-ms-12 btTextLeft">
                            <div class="rowItemContent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="boldSection topSemiSpaced bottomSpaced gutter inherit">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        @foreach ($category->portfolios as $portfolio)
                            <div style="margin-top:30px;" class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btTextIndent inherit btDarkSkin animated">
                                <div class="rowItemContent color-ima">
                                    <div class="bpgPhoto btTextCenter wIconOver">
                                        <a href="{{ route('main.portfolio.show' , [ 'id' => $portfolio->id]) }}" target="_self"></a>
                                        <div class="boldPhotoBox">
                                            <div class="bpbItem">
                                                <div class="btImage">
                                                    <img src="{{ asset('uploads') . '/' . $portfolio->image }}" alt="{{ $portfolio->title }}">
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
                                            <h3 class="color-ima"><span class="headline"><a class="ima-bc-title" href="{{ route('main.portfolio.show' , [ 'id' => $portfolio->id]) }}">{{ $portfolio->title }}</a></span></h3>
                                        </div>
                                    </header>
                                    <div class="btText ima-bc-para">
                                        <p>ساخت نشان و نماد تجاری، طراحی نشان تجاری، طراحی علامت تجاری، طراحی نماد و برند تجاری</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach

