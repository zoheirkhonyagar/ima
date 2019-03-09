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
                                        <h1><span class="headline">تماس با ما</span></h1></div>
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
<section id="bt_section5c498a396d464" class="boldSection topSemiSpaced bottomSmallSpaced btDarkSkin gutter inherit">
    <div class="port wSlider">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein inherit animated">
                            <div class="ima-height">
                                <div class="btText ima-bc-para">
                                    <form action="{{ route('contact-us-store') }}" method="POST" class="ima-form">
                                        @csrf()
                                        <div class="form-group">
                                            <label for="email">ایمیل :</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="ایمیل">
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="error" style="color:#e74c3c;margin-bottom: 15px;">{{ $errors->first('email') }}</div>
                                        @endif
                                        <div class="form-group">
                                            <label for="fullname">نام و نام خانوادگی :</label>
                                            <input type="text" name="fullname" class="form-control" placeholder="نام و نام خانوادگی" id="fullname">
                                        </div>
                                        @if ($errors->has('fullname'))
                                            <div class="error" style="color:#e74c3c;margin-bottom: 15px;">{{ $errors->first('fullname') }}</div>
                                        @endif
                                        <div class="form-group">
                                            <label for="body">متن پیام:</label>
                                            <textarea type="text" name="body" class="form-control" rows="6" placeholder="متن پیام" id="message"></textarea>
                                        </div>
                                        @if ($errors->has('body'))
                                            <div class="error" style="color:#e74c3c;margin-bottom: 15px;">{{ $errors->first('body') }}</div>
                                        @endif
                                        <button type="submit" class="btn bg-ima color-ima color-ima-w">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner"></div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner"></div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner"></div>
                </div>
            </div>
        </div>
    </div>
</section>
