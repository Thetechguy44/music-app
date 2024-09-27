<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Audiobeats HTML5 Template">

        <title>Afro Music - @yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/media/favicon-light.png')}}">

        <!-- All CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/mediaelement/mediaelementplayer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-266165434-1');
        </script>

    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader">
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
                <div class="l"></div>
            </div>
        </div>
        
        <!-- Back To Top Start -->
        <a href="#main-wrapper" id="backto-top" class="back-to-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Main Wrapper Start -->
        <div id="main-wrapper" class="main-wrapper overflow-hidden">

            <!-- Header Area Start -->
            @if (!Route::is('login') && !Route::is('register'))
                <header class="large-screens">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg p-0">
                            <div class="collapse navbar-collapse" id="mynavbar">
                                <div class="col-lg-8">
                                    <div class="left-nav">
                                        <a href="index-2.html" class="navbar-brand m-0 p-0"><img alt="" src="assets/media/logo.png"></a>
                                        <ul class="navbar-nav m-0">
                                            <li class="menu-item"><a href="index-2.html" class="active">Home</a></li>
                                            <li class="menu-item"><a href="releases.html">Releases</a></li>
                                            <li class="menu-item"><a href="artists.html">Artists</a></li>
                                            <li class="has-children">
                                                <a href="javascript:void(0);">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="playlist.html">Playlist</a></li>
                                                    <li><a href="album-detail.html">Album Detail</a></li>
                                                    <li><a href="artist-detail.html">Artist detail</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="signup.html">Sign UP</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <form action="https://uiparadox.co.uk/public/templates/audiobeats/index.html" class="input-group search-bar">
                                        <input type="text" placeholder="Artist, Track" required />
                                        <button class="search" type="submit"><i class="far fa-search search-icon"></i></button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <header class="small-screen">
                    <div class="container-fluid">
                        <div class="mobile-menu">
                            <div>
                                <a class="navbar-brand" href="index-2.html"><img alt=""  src="assets/media/logo.png"></a>
                            </div>
                            <div class="hamburger-menu">
                                <div class="bar"></div>	
                            </div>
                        </div>
                        <nav class="mobile-navar d-xl-none">
                            <ul>
                                <li><a href="index-2.html" class="active">Home</a></li>
                                <li><a href="releases.html">Releases</a></li>
                                <li><a href="artists.html">Artists</a></li>
                                <li class="has-children">Pages <span class="icon-arrow"></span>
                                    <ul class="children">
                                        <li><a href="playlist.html">Playlist</a></li>
                                        <li><a href="album-detail.html">Album Detail</a></li>
                                        <li><a href="artist-detail.html">Artist detail</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Sign UP</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </nav>
                    </div>
                </header>
            @endif

            @if (Route::is('login') || Route::is('register'))
                <header class="large-screens">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg p-0">
                            <div class="collapse navbar-collapse" id="mynavbar">
                                <div class="left-nav">
                                    <a href="index-2.html" class="navbar-brand m-0 p-0"><img alt="" src="assets/media/logo.png"></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <header class="small-screen">
                    <div class="container-fluid">
                        <div class="mobile-menu">
                            <div>
                                <a class="navbar-brand" href="index-2.html"><img alt=""  src="assets/media/logo.png"></a>
                            </div>
                        </div>
                    </div>
                </header>
            @endif
            <!-- Header Area end -->

            @if (!Route::is('login') && !Route::is('register'))
            <!-- Hero Area start -->
            <section class="hero-banner p-80">   
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="img-block">
                                <img src="assets/media/banner/image.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="content">
                                <h1 class="color-white mb-32">Moon Light Dust 2023</h1>
                                <div class="info-blocks mb-32">
                                    <div class="block">
                                        <img src="assets/media/artist/a1.png" alt="">
                                        <div class="info">
                                            <h6 class="light-gray">Artist</h6>
                                            <h5><a href="artist-detail.html">Monster Baby</a></h5>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="info">
                                            <h6 class="light-gray">Album Info</h6>
                                            <ul>
                                                <li><h5>15 Tracks</h5></li>
                                                <li><h5>2M+ Likes</h5></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="duration mb-16">25 min 50 sec</h6>
                                <ul class="detail mb-16">
                                    <li><h5 class="color-primary">Rhythm Revolution</h5></li>
                                    <li><h5>2 Weeks ago</h5></li>
                                </ul>
                                <h5 class="mb-48">Features: Elysia Rayne, Jaxon Grey, Harper Valencia</h5>
                                <div class="buttons-row">
                                    <a href="#" class="cus-btn dark track-list" data-track="assets/media/tracks/stagger-lee.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i> Play</a>
                                    <a href="playlist.html" class="cus-btn light">Add to playlist</a>
                                    <div class="more-btn">
                                        <i class="fas fa-ellipsis-v more-icon"></i>
                                        <ul class="more-dropdown unstyled">
                                            <li><a href="#"><i class="fal fa-share"></i>Share</a></li>
                                            <li><a href="playlist.html"><i class="fas fa-list-ul"></i>Add to Playlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Area end -->
            @endif
            
            <!-- Main Content Start -->
                @yield('content')
            <!-- Main Content End -->

            @if (!Route::is('login') && !Route::is('register'))
            <!-- footer Area start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-main">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="widget">
                                    <div class="about">
                                        <a class="mb-16" href="index-2.html"><img src="assets/media/logo.png" alt=""></a>
                                        <p class="light-gray mb-16">Lorem ipsum dolor sit amet consectetur. Aliquam nibh imperdiet urna tempus consectetur faucibus mauris faucibus. Semper nunc morbi.</p>
                                        <ul class="social-links unstyled">
                                            <li><a href="#"><img src="assets/media/icons/Facebook.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/Instagram.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/Twitter.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/sound_cloud.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <div class="widget">
                                    <h5 class="mb-16">Albums</h5>
                                    <ul class="links-list unstyled">
                                        <li class="mb-8"><p><a href="album-detail.html">English</a></p></li>
                                        <li class="mb-8"><p><a href="album-detail.html">Hindi</a></p></li>
                                        <li class="mb-8"><p><a href="album-detail.html">Urdu</a></p></li>
                                        <li><p><a href="album-detail.html">Punjabi</a></p></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <div class="widget">
                                    <h5 class="mb-16">Genres</h5>
                                    <ul class="links-list unstyled">
                                        <li class="mb-8"><p><a href="releases.html">Hip Hop</a></p></li>
                                        <li class="mb-8"><p><a href="releases.html">Indie Rock</a></p></li>
                                        <li class="mb-8"><p><a href="releases.html">Metal</a></p></li>
                                        <li><p><a href="releases.html">Classical Music</a></p></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <div class="widget">
                                    <h5 class="mb-16">Artist</h5>
                                    <ul class="links-list unstyled">
                                        <li class="mb-8"><p><a href="artist-detail.html">Mia Anderson</a></p></li>
                                        <li class="mb-8"><p><a href="artist-detail.html">Benjamin Smith</a></p></li>
                                        <li class="mb-8"><p><a href="artist-detail.html">Charlotte Parker</a></p></li>
                                        <li><p><a href="artist-detail.html">Matthew Clark</a></p></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <div class="widget">
                                    <h5 class="mb-16">New Release</h5>
                                    <ul class="links-list unstyled">
                                        <li class="mb-8"><p><a href="releases.html">English Songs</a></p></li>
                                        <li class="mb-8"><p><a href="releases.html">Hindi Songs</a></p></li>
                                        <li class="mb-8"><p><a href="releases.html">Urdu Songs</a></p></li>
                                        <li><p><a href="releases.html">Punjabi Songs</a></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <p class="light-gray">All rights reserved by <a href="index-2.html">AudioBeats</a> ©2023.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer Area end -->
            
            <!-- Audio Player -->
            <audio id="audio-player" preload="none" class="mejs__player" controls data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
                <source src="assets/media/tracks/maq-amor.mp3" type="audio/mp3">
            </audio>

            <!-- Default Track - onLoad -->
            <div id="track-onload" data-track="assets/media/tracks/clean-clean.mp3" data-poster="assets/media/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="Clean Clean" data-singer="R Costello"></div>
            @endif
        </div>
            <!-- Jquery Js -->
            <script src="{{asset('assets/js/vendor/jquery-3.6.3.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/jquery.countdown.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/jquery-appear.js')}}"></script>
            <script src="{{asset('assets/js/vendor/jquery-validator.js')}}"></script>
            <script src="{{asset('assets/js/vendor/mediaelement-and-player.js')}}"></script>

            <!-- Site Scripts -->
            <script src="{{asset('assets/js/app.js')}}"></script>

            <!-- Audio player Script  -->
            <script>

                var trackPlaying = '',
                    audioPlayer = document.getElementById('audio-player');
                var checkelement = '';
        
                function changeAudio(clickEl,sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
                    var audio = $("#audio-player"),
                        // clickEl = jQuery('[data-track="'+sourceUrl+'"]'),
                        playerId = audio.closest('.mejs__container').attr('id'),
                        playerObject = mejs.players[playerId];
        
        
             
                    if(clickEl == checkelement){
                      
                            if (playerObject.node.paused) {
                                playerObject.play();
                                jQuery(clickEl).find('i').removeClass('fas fa-play').addClass('far fa-pause');
                            } else {
                                playerObject.pause();
                                jQuery(clickEl).find('i').removeClass('far fa-pause').addClass('fas fa-play');
                            }
                        
                        return true;
                    }else{
                        checkelement = clickEl;

                        jQuery('.track-list').find('i').removeClass('far fa-pause').addClass('fas fa-play');
                    }
        
                    trackPlaying = sourceUrl;
        
                    audio.attr( 'poster', posterUrl );
                    audio.attr( 'title', trackTitle );
        
                    jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="'+ posterUrl +'" alt="Track Poster" /></div><div class="mejs-track-details"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');
        
                    if( sourceUrl != '' ) {
                        playerObject.setSrc( sourceUrl );
                    }
                    playerObject.pause();
                    playerObject.load();
        
                    if( playAudio == true ) {
                        playerObject.play();
                        jQuery(clickEl).find('i').removeClass('fas fa-play').addClass('far fa-pause');
                    }
                }
        
                jQuery('.track-list').on( 'click', function(){
                    var audioTrack = jQuery(this).attr('data-track'), // Track url
                        posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
                        trackTitle = jQuery(this).attr('data-title'); // Track Title
                        trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name
        
                    changeAudio(this,audioTrack, posterUrl, trackTitle, trackSinger );
                    return false;
                });
        
                jQuery(window).on( 'load', function(){
                    var trackOnload = jQuery('#track-onload');
        
                    if( trackOnload.length > 0 ) {
                        var audioTrack = trackOnload.attr('data-track'), // Track url
                            posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                            trackTitle = trackOnload.attr('data-title'); // Track Title
                            trackSinger = trackOnload.attr('data-singer'); // Track Singer Name
        
                        setTimeout( function(){
                            changeAudio(trackOnload,audioTrack, posterUrl, trackTitle, trackSinger, false );
                        }, 500);
                    }
                });
        
            </script>
    </body>
</html>