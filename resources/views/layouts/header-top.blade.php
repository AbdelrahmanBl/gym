<div class="top-header">
    <div class="container">
        <div class="leftside">
            <div class="email-top"><p>dietclubeg@gmail.com</p></div>
            <div class="phone-top"><p>+201003615945</p></div>
            {{-- <div class="address-top"><p>8273 NW 59th ST Florida</p></div> --}}
        </div>
        <div class="rightside">
            <div class="social-items"><p><a href="https://www.facebook.com/DietClubeg" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a></p></div>
            {{-- <div class="social-items"><p><a href="#" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a></p></div> --}}
            <div class="social-items"><p><a href="https://www.instagram.com/diteclub" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a></p></div>
        </div>
    </div>
</div>

<nav>
    <div class="container">
        <hr class="top">
        <nav class="d-flex align-items-center navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><div class="logo-brand"><img src="{{asset('public/assets/img/gym/logo.png')}}" style="margin-top: -0.4rem;" alt=""></div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.index')}}">{{__('messages.pages.home.title')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classes.html">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="packages.html">PACKAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">CONTACT</a>
                </li>
                @if(isset($checkoutPage))
                <li class="nav-item active dropdown" @if(App::isLocale('ar')) style="direction: rtl;" @endif>
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">{{__('messages.gender')}} <span class="caret-drop"></span></a>
                    <ul class="dropdown-menu" @if(App::isLocale('ar')) style="text-align: right;" @endif>
                        <li class="divider-top"></li>
                        <li><a class="dropdown-item" href="{{route('main.checkout')}}?gender=male">{{__('messages.male')}}</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="{{route('main.checkout')}}?gender=female">{{__('messages.female')}}</a></li>
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <form action="{{route('change.lang')}}" method="POST" id="lang-form">
                        {{ csrf_field() }}
                        <input type="hidden" name="route" value="{{URL::current()}}">
                        <a class="nav-link @if(App::isLocale('en')) font-family-cairo @endif color-swap"  href="javascript:void(0)" onclick="$('#lang-form').submit()">
                            @if(App::isLocale('ar'))
                                {{__('messages.lang.en')}}
                            @else 
                                {{__('messages.lang.ar')}}
                            @endif
                        </a>
                    </form>
                </li>
            </ul>
            </div>
        </nav>
    </div>
</nav>