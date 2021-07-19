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
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><div class="logo-brand"><img src="{{asset('public/assets/img/master/logo.png')}}" alt=""></div></a>
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
                {{-- <li class="nav-item active dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">PAGES <span class="caret-drop"></span></a>
                    <ul class="dropdown-menu">
                        <li class="divider-top"></li>
                        <li><a class="dropdown-item" href="blog-left-side.html">Blog Leftside</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="blog-right-side.html">Blog Rightside</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="trainers.html">Trainers</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="404-error-page.html">404 Error Page</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">CONTACT</a>
                </li>
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