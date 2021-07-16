@extends('layouts.app')
@section('title',__('messages.pages.home.title'))
@section('meta-description',__('messages.pages.home.description'))
@section('meta-keywords',__('messages.pages.home.keywords'))

@section('body')
<section>
    <div class="container">
        <div class="section-title">
            <h2>Welcome to ActionGym 100</h2>
            <hr class="center">
            <p>Always free from repetition repeat predefined chunks injected humour</p>
        </div>
        <div class="row hover-effects image-hover">
            <div class="col-lg-4 image-box">
            <figure><img src="http://placehold.it/900x600" alt=""/></figure>
            <div class="caption">
                <div class="caption-icon"><img src="{{asset('public/assets/img/master/gym3.png')}}" alt=""></div>
                <div class="caption-label">
                <h4>Stay Fit</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 image-box">
            <figure><img src="http://placehold.it/900x600" alt=""/></figure>
            <div class="caption">
                <div class="caption-icon"><img src="{{asset('public/assets/img/master/weight.png')}}" alt=""></div>
                <div class="caption-label">
                <h4>Lose Weight</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 image-box">
            <figure><img src="http://placehold.it/900x600" alt=""/></figure>
            <div class="caption">
                <div class="caption-icon"><img src="{{asset('public/assets/img/master/gym.png')}}" alt=""></div>
                <div class="caption-label">
                <h4>Build Muscle</h4>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid inner-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <div class="aside-left">
                    <div class="icon-lists">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/dumbbell.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Lose Weight</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                    <div class="icon-lists">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/006-gym.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Build Muscle</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                    <div class="icon-lists">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/exercise.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Stay Fit</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                </div> 
                </div>
                <div class="col-lg-4">
                <figure class="center-pic"><img src="http://placehold.it/992x1700" alt=""></figure> 
                </div>
                <div class="col-lg-4">
                <div class="aside-right">
                    <div class="icon-lists">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/gym-1.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Protein Plan</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                    <div class="icon-lists">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/weightlifting.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Body Improve</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                    <div class="icon-lists last-item-list">
                        <div class="icon-circle">
                            <figure class="icon-center"><img src="{{asset('public/assets/img/master/gym-2.png')}}" alt=""></figure>
                        </div>
                        <div class="icon-text">
                            <h3>Personal Trainer</h3> 
                            <p>Galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="section-title">
            <h2>Our Trainers</h2>
            <hr class="center">
            <p>Always free from repetition repeat predefined chunks injected humour</p>
        </div>
        <div class="row">
            <div class="col-lg-4 profile-card">
            <div class="team-box">
                <figure class="avatar"><img src="http://placehold.it/900x1000" alt=""></figure>
                <div class="team-social lineal">
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
                    </div>
                </div>
                <div class="figure-caption">
                    <h4>Martha Smith</h4>
                    <h5 class="trainer-tittle">Cardio Trainer</h5>
                    <p>Majority have suffered alteration in some form, as opposed to using</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 profile-card center-box">
            <div class="team-box">
                <figure class="avatar"><img src="http://placehold.it/900x1000" alt=""></figure>
                <div class="team-social lineal">
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
                    </div>
                </div>
                <div class="figure-caption">
                    <h4>Robert Luke</h4>
                    <h5 class="trainer-tittle">Dance Trainer</h5>
                    <p>Majority have suffered alteration in some form, as opposed to using</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 profile-card">
            <div class="team-box">
                <figure class="avatar"><img src="http://placehold.it/900x1000" alt=""></figure>
                <div class="team-social lineal">
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
                    </div>
                    <div class="circle-icon">
                        <a href="#"><div class="center-fa"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
                    </div>
                </div>
                <div class="figure-caption">
                    <h4>Jade Perkins</h4>
                    <h5 class="trainer-tittle">Yoga Trainer</h5>
                    <p>Majority have suffered alteration in some form, as opposed to using</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid parallax">
        <div class="container">
            <div class="inner-parallax">
                <h5>Exercising body and mind</h5>
                <h2>PUSH YOURSELF</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <div class="counter-facts">
                    <div class="inner-facts">
                        <figure class="counter-icon"><img src="{{asset('public/assets/img/master/trainer.png')}}" alt=""></figure>
                        <div class="counter"><h3>2943</h3></div>
                        <p>QUALIFIED STAFF</p>
                    </div>
                    <div class="inner-facts">
                        <figure class="counter-icon"><img src="{{asset('public/assets/img/master/kg.png')}}" alt=""></figure>
                        <div class="counter"><h3>215</h3></div>
                        <p>CALORIES BURNED</p>
                    </div>
                    <div class="inner-facts">
                        <figure class="counter-icon"><img src="{{asset('public/assets/img/master/smile.png')}}" alt=""></figure>
                        <div class="counter"><h3>12099</h3></div>
                        <p>HAPPY CUSTOMERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container filterable-portfolio">
        <div class="section-title">
            <h2>Photo Gallery</h2>
            <hr class="center">
        </div>
            <ul class="nav nav-pills center-pills portfolio-filter">
            <li role="presentation" class="active"><a href="#" data-filter="*">All</a></li>
            <li role="presentation"><a href="#" data-filter=".workout">Workout</a></li>
            <li role="presentation"><a href="#" data-filter=".spinning">Spinning</a></li>
            <li role="presentation"><a href="#" data-filter=".fitness">Fitness</a></li>
            </ul>
        <div class="row portfolio-items">
        <figure class="portfolio-item col-md-4 workout">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 spinning">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 spinning">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 workout">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 fitness">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 design fitness">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 workout">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 fitness">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        <figure class="portfolio-item col-md-4 spinning">
            <div class="magnific-img">
            <a class="image-popup-vertical-fit" href="http://placehold.it/900x600">
                <img src="http://placehold.it/900x600" alt="" />
            </a>
            </div>
        </figure>
        </div>
    </div>
    
    <div class="container">
        <div class="section-title">
            <h2>Customer Opinions</h2>
            <hr class="center">
            <p>Always free from repetition repeat predefined chunks injected humour.</p>
        </div>
        <div class="main-gallery">
            <div class="gallery-cell">
                <div class="testimonial-section">
                <div class="author-avatar"><img src="http://placehold.it/400x400" alt=""></div>
                <h3 class="autor">Julie Belle</h3>
                <h5 class="testimonial-title">Wonderful Gym highly recommended!</h5>
                <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="testimonial-section">
                <div class="author-avatar"><img src="http://placehold.it/400x400" alt=""></div>
                <h3 class="autor">Carlos Lopez</h3>
                <h5 class="testimonial-title">Wonderful Gym highly recommended!</h5>
                <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="testimonial-section">
                <div class="author-avatar"><img src="http://placehold.it/400x400" alt=""></div>
                <h3 class="autor">Robert Luke</h3>
                <h5 class="testimonial-title">Wonderful Gym highly recommended!</h5>
                <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid promotion-parallax">
        <div class="container">
            <div class="promo-content">
                <h2>FREE MEMBERSHIP</h2>
                <h4>Join now and get 15 days free access!</h4>
                <p>Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                <p><a href="#" class="btn btn-custom btn-custom-small">JOIN NOW</a></p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="section-title">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <hr class="center">
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div class="blog-preview">
                <figure class="thumb-preview"><a href="#"><img src="http://placehold.it/900x600" alt=""></a></figure>
                <div class="fig-caption">
                <h3><a href="#">How To build muscle</a></h3>
                <p>Explorer of the truth the master-builder of human happiness with no one rejects, because those who. </p>
                <hr>
                <div class="preview-post-detalils">
                    <div class="post-categorie-left">
                        <p class="categorie">Yoga</p>
                    </div> 
                    <div class="post-stats-right">
                        <p class="comment">212</p>
                        <p class="share">89</p>
                    </div>  
                </div>
                </div>
            </div>  
            </div>
            <div class="col-lg-4  center-box">
            <div class="blog-preview">
                <figure class="thumb-preview"><a href="#"><img src="http://placehold.it/900x600" alt=""></a></figure>
                <div class="fig-caption">
                <h3><a href="#">Exersicing your body</a></h3>
                <p>Randomised words which don't look even slightly believable, versions have evolved over the years. </p>
                <hr>
                <div class="preview-post-detalils">
                    <div class="post-categorie-left">
                        <p class="categorie">Cardio</p>
                    </div> 
                    <div class="post-stats-right">
                        <p class="comment">77</p>
                        <p class="share">133</p>
                    </div>  
                </div>
                </div>
            </div>  
            </div>
            <div class="col-lg-4">
            <div class="blog-preview">
                <figure class="thumb-preview"><a href="#"><img src="http://placehold.it/900x600" alt=""></a></figure>
                <div class="fig-caption">
                <h3><a href="#">Best Yoga poses</a></h3>
                <p>Page editors now use Lorem Ipsum as their default model text, established fact that a reader for all. </p>
                <hr>
                <div class="preview-post-detalils">
                    <div class="post-categorie-left">
                        <p class="categorie">Muscle</p>
                    </div> 
                    <div class="post-stats-right">
                        <p class="comment">111</p>
                        <p class="share">193</p>
                    </div>  
                </div>
                </div>
            </div>  
            </div>
        </div>
    </div>

</section>
@endsection