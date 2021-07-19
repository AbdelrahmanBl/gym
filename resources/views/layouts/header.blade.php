@if($mode == 1)
<header>
    @include('layouts.header-top')
    
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-1"></div>
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Get in the groove</h1>
                    <h5 class="animated fadeInUp">Exercise your mind and body.</h5>
                    <div class="slider-btn">
                        <div class="animated inner-btn fadeInUp"><a href="javascript:void(0)" onclick="startNow(`{{route('main.checkout')}}`)" class="btn btn-custom">START NOW</a></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-2"></div>
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Commit to be fit.</h1>
                    <h5 class="animated fadeInUp">Love yourself enough to work harder.</h5>
                    <div class="slider-btn">
                        <div class="animated inner-btn fadeInUp"><a href="javascript:void(0)" onclick="startNow(`{{route('main.checkout')}}`)" class="btn btn-custom">START NOW</a></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-3"></div>
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Turn fat into fit</h1>
                    <h5 class="animated fadeInUp">Willpower knows no obstacles.</h5>
                    <div class="slider-btn">
                        <div class="animated inner-btn fadeInUp"><a href="javascript:void(0)" onclick="startNow(`{{route('main.checkout')}}`)" class="btn btn-custom">START NOW</a></div>
                    </div>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>
@elseif($mode == 2)
<header class="header-mode-2">
    @include('layouts.header-top')
</header>
@endif