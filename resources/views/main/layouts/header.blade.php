<header class="mainHeader btClear btDarkSkin">
        <div class="port">
            <div class="menuHolder btClear"> <span class="btVerticalMenuTrigger">&nbsp;<span class="btIco btIcoSmallSize btIcoDefaultColor btIcoDefaultType"><a href="#" data-ico-fa="" class="btIcoHolder"><em></em></a></span></span> <span class="btHorizontalMenuTrigger">&nbsp;<span class="btIco btIcoSmallSize btIcoDefaultColor btIcoDefaultType"><a href="#" data-ico-fa="" class="btIcoHolder"><em></em></a></span></span>
                <div class="logo">
                    <span>
                        <a href="/">
                            <img class="btMainLogo" data-hw="3" src="/images/logo.png" alt="دپارتمان تولید محتوا ایما" style="display: none;">
                            <img class="btAltLogo" src="/images/logo.png" alt="دپارتمان تولید محتوا ایما" style="display: inline;">
                        </a>
                    </span>
                </div>
                <div class="topBarInLogoArea"> <span class="infoToggler"></span>
                    <div class="topBarInLogoAreaCell" style="display: block;">
                        <span class="btIconWidget btSpecialHeaderIcon">
                            <span class="btIconWidgetContent">
                                <span class="btIconWidgetTitle color-ima">دپارتمان تولید محتوا ایما</span>
                                <span class="btIconWidgetText color-ima">تلفن : 123456</span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="menuPort" style="visibility: visible;">
                    <div class="topBarInMenu">
                        <div class="topBarInMenuCell"></div>
                    </div>
                    <nav>
                        <ul id="menu-primary-menu" class="menu">
                            <li class="ima-bc-title">
                                <a class="ima-bc-title {{ \Request::route()->getName() == 'index' ? " ima-title-active" : '' }}" href="/">خانه</a>
                            </li>
                            <li class="ima-bc-title">
                                <a class="ima-bc-title  {{ \Request::route()->getName() == 'about-us' ? " ima-title-active" : '' }}" href="/about-us">درباره ما</a>
                            </li>
                            <li class="ima-bc-title">
                                <a class="ima-bc-title {{ \Request::route()->getName() == 'main.portfolio.index' ? " ima-title-active" : '' }}" href="/portfolio">نمونه کارهای طراحی لوگو</a>
                            </li>
                            <li class="ima-bc-title">
                                <a class="ima-bc-title {{ \Request::route()->getName() == 'blog' ? " ima-title-active" : '' }}" href="/blog">بلاگ</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden; transform: translateZ(0px); transition-duration: 0ms; opacity: 0;">
                        <div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: none; height: 8px; transform: translate(0px, -8px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
