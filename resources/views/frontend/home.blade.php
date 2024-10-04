@extends('layouts.app')
@section('title', isset($title) ? $title: 'Home')

@section('content')
<div class="page-content">

    <!-- Trending Area start -->
    <section class="p-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="heading">
                        <h3>Trending Album</h3>
                    </div>
                    <div class="trending-side-block">
                        <div class="playing">
                            <div class="img-block">
                                <img src="assets/media/card/cs-1.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                            </div>
                            <div class="detail">
                                <h4 class="mb-8">Hip Hop Hymns</h4>
                                <h5 class="color-primary mb-16"> <a href="artist-detail.html">Mia Anderson</a></h5>
                                <h6 class="mb-8">2 weeks ago</h6>
                                <div class="info mb-24">
                                    <h6>15 Tracks</h6>
                                    <h6>2M likes</h6>
                                </div>
                                <div class="btn-row">
                                    <a href="javascript:;" class="cus-btn dark small track-list" data-track="assets/media/tracks/the-end-of-the-beginning.mp3" data-poster="assets/media/tracks/poster-images/fallin-extended-mix.jpg" data-title="Hip Hop Hymnsr" data-singer="Mia Anderson"><i class="fas fa-play"></i> Play</a>
                                </div>
                            </div>
                        </div>
                        <div class="songs-list">
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-1.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Harmonic Riot</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:20</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/ibelieveinyou.jpg" data-title="Harmonic Riot" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-2.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Verse Insurgence</h6>
                                        <p class="light-gray">Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:20</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="Jennifer Kelly"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-3.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Beat Liberation</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">02:50</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-4.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Harmonic Riot</h6>
                                        <p class="light-gray">Elysia Rayne, Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:10</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/i-need-you-now.mp3" data-poster="assets/media/tracks/poster-images/i-need-you-now.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-5.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Harmony Unleashed</h6>
                                        <p class="light-gray">Elysia Rayne</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">02:45</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/fallin-extended-mix.mp3" data-poster="assets/media/tracks/poster-images/fallin-extended-mix.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-6.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Drumbeat Revolution</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:10</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/something-about-love.mp3" data-poster="assets/media/tracks/poster-images/something-about-love.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-1.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Harmonic Riot</h6>
                                        <p class="light-gray">Elysia Rayne, Jaxon</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">02:50</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/the-terror-of-highway.mp3" data-poster="assets/media/tracks/poster-images/the-terror-of-highway.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-2.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Elysia Rayne</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:20</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/the-end-of-the-beginning.mp3" data-poster="assets/media/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="Harmonic Riot" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-3.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Verse Insurgence</h6>
                                        <p class="light-gray">Elysia Rayne, Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">04:20</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-4.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Beat Liberation</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:14</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-1.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Verse Insurgence</h6>
                                        <p class="light-gray">Elysia Rayne, Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:59</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-2.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Beat Liberation</h6>
                                        <p class="light-gray">Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:00</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-3.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Harmonic Riot</h6>
                                        <p class="light-gray">Jennifer Kelly</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">03:05</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                            <div class="list-item mb-0">
                                <div class="left-block">
                                    <img src="assets/media/songs/s-4.png" alt="">
                                    <div>
                                        <h6 class="mb-4p">Verse Insurgence</h6>
                                        <p class="light-gray">Elysia Rayne, Jaxon Grey</p>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <p class="lightest-gray">02:48</p>
                                    <a href="javascript:;" class="b-unstyle color-primary play track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="fas fa-play"></i></a>
                                    <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <!-- Weekly Trending -->
                    <div class="heading pt-40 pt-lg-0">
                        <h3>Weekly Trending</h3>
                        <h6><a href="releases.html">See All</a></h6>
                    </div>
                    <div class="slider-1 mb-24">
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-8.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="javascript:;" class="icon track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-1.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/something-about-love.mp3" data-poster="assets/media/tracks/poster-images/something-about-love.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-2.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/i-need-you-now.mp3" data-poster="assets/media/tracks/poster-images/i-need-you-now.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Drumbeat Revolution</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-3.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/ibelieveinyou.mp3" data-poster="assets/media/tracks/poster-images/ibelieveinyou.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-4.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/stagger-lee.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Drumbeat Revolution</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-5.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/the-end-of-the-beginning.mp3" data-poster="assets/media/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-6.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/the-terror-of-highway.mp3" data-poster="assets/media/tracks/poster-images/the-terror-of-highway.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-7.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/something-about-love.mp3" data-poster="assets/media/tracks/poster-images/something-about-love.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Monthly Trending -->
                    <div class="heading pt-40 pt-lg-0">
                        <h3>Monthly Trending</h3>
                        <h6><a href="releases.html">See All</a></h6>
                    </div>
                    <div class="slider-1 pb-40 pb-lg-0">
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-4.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/.mp3" data-poster="assets/media/tracks/poster-images/.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Drumbeat Revolution</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-5.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/fallin-extended-mix.mp3" data-poster="assets/media/tracks/poster-images/fallin-extended-mix.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-6.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/i-need-you-now.mp3" data-poster="assets/media/tracks/poster-images/i-need-you-now.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-7.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/ibelieveinyou.mp3" data-poster="assets/media/tracks/poster-images/ibelieveinyou.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-8.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/something-about-love.mp3" data-poster="assets/media/tracks/poster-images/something-about-love.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-1.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/stagger-lee.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-2.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Drumbeat Revolution</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                        <div class="song-card st-1">
                            <div class="img-block">
                                <img src="assets/media/card/albums/Song-3.png" alt="">
                                <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                                <div class="box-content">
                                    <a href="#" class="icon track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/the-terror-of-highway.jpg" data-title="Maq Amor" data-singer="The Universe">
                                        <div class="play-icon"><i class="fas fa-play"></i></div>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="top-row mb-8">
                                        <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                                        <p class="light-gray">03:20</p>
                                    </div>
                                    <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Area end -->

    <!-- Recommended Area start -->
    <section class="featured p-40">
        <div class="container-fluid">
            <div class="heading">
                <h3>Recommended For You</h3>
                <h6><a href="releases.html">See All</a></h6>
            </div>
            <div class="slider-2">
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-1.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/i-need-you-now.mp3" data-poster="assets/media/tracks/poster-images/i-need-you-now.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-2.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/ibelieveinyou.mp3" data-poster="assets/media/tracks/poster-images/ibelieveinyou.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Lyric Renaissance</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-3.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/something-about-love.mp3" data-poster="assets/media/tracks/poster-images/something-about-love.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Drumbeat Revolution </a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-4.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/stagger-lee.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Resonance Revival</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-5.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/the-end-of-the-beginning.mp3" data-poster="assets/media/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-6.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/the-terror-of-highway.mp3" data-poster="assets/media/tracks/poster-images/the-terror-of-highway.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Lyric Renaissance</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-7.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Melody Vanguard</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-8.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/fallin-extended-mix.mp3" data-poster="assets/media/tracks/poster-images/fallin-extended-mix.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Rhyme Revolution</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommended Area end -->

    <!-- Top Genres Area start -->
    <section class="genres p-40">
        <div class="container-fluid">
            <div class="heading">
                <h3>Top Genres</h3>
                <h6 class="me-0"><a href="releases.html">See All</a></h6>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Hip Hop</a></h4>
                            <h6 class="light-gray">Tracks 1590</h6>
                        </div>
                        <img src="assets/media/card/genres/g-1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Indie Rock</a></h4>
                            <h6 class="light-gray">Tracks 1110</h6>
                        </div>
                        <img src="assets/media/card/genres/g-2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Rock</a></h4>
                            <h6 class="light-gray">Tracks 4140</h6>
                        </div>
                        <img src="assets/media/card/genres/g-3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Country</a></h4>
                            <h6 class="light-gray">Tracks 910</h6>
                        </div>
                        <img src="assets/media/card/genres/g-4.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card mb-xl-0">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Jazz</a></h4>
                            <h6 class="light-gray">Tracks 2912</h6>
                        </div>
                        <img src="assets/media/card/genres/g-5.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card mb-xl-0">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Metal</a></h4>
                            <h6 class="light-gray">Tracks 2410</h6>
                        </div>
                        <img src="assets/media/card/genres/g-6.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card mb-xl-0">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Classical</a></h4>
                            <h6 class="light-gray">Tracks 4140</h6>
                        </div>
                        <img src="assets/media/card/genres/g-7.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="genres-card mb-xl-0">
                        <div class="content">
                            <h4 class="mb-12"><a href="releases.html">Pop</a></h4>
                            <h6 class="light-gray">Tracks 2150</h6>
                        </div>
                        <img src="assets/media/card/genres/g-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Genres Area end -->

    <!-- Recently Released Area start -->
    <section class="featured p-40">
        <div class="container-fluid">
            <div class="heading">
                <h3>Recently Released</h3>
                <h6><a href="releases.html">See All</a></h6>
            </div>
            <div class="slider-2">
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-9.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Soulful Insurrection</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-10.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/i-need-you-now.mp3" data-poster="assets/media/tracks/poster-images/i-need-you-now.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Lyric Renaissance</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-11.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/ibelieveinyou.mp3" data-poster="assets/media/tracks/poster-images/ibelieveinyou.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Drumbeat Revolution </a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-12.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/maq-amor.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Resonance Revival</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-13.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/stagger-lee.mp3" data-poster="assets/media/tracks/poster-images/stagger-lee.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Bassline Uprising</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-14.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/the-end-of-the-beginning.mp3" data-poster="assets/media/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Lyric Renaissance</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-15.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/the-terror-of-highway.mp3" data-poster="assets/media/tracks/poster-images/the-terror-of-highway.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Melody Vanguard</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
                <div class="song-card st-2">
                    <div class="img-block">
                        <img src="assets/media/card/songs/s-16.png" alt="">
                        <div class="wishlist-icon"><i class="fal fa-heart"></i></div>
                        <div class="box-content">
                            <a href="#" class="icon track-list" data-track="assets/media/tracks/tammy-stan-devereaux.mp3" data-poster="assets/media/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Harmonic Riot" data-singer="Jennifer Kelly">
                                <div class="play-icon"><i class="fas fa-play"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="top-row mb-8">
                            <h6><a href="album-detail.html">Rhyme Revolution</a></h6>
                            <p class="light-gray">03:20</p>
                        </div>
                        <p class="album_artists light-gray">Elysia Rayne, Jaxon Grey</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recently Released Area end -->

    <!-- Coming Soon Area start -->
    <section class="coming-soon">
        <div class="container-fluid">
            <div class="coming-soon-banner">
                <div class="content-block">
                    <div class="content mb-8">
                        <h5 class="color-primary mb-8">Coming Soon!</h5>
                        <ul class="countdown unstyled">
                            <li> 
                                <h4 class="number">365</h4>
                                <h5 class="number-text">Days</h5> 
                            </li>
                            <li><i class="far fa-horizontal-rule"></i></li>
                            <li> 
                                <h4 class="number">11</h4>
                                <h5 class="number-text">Hrs</h5> 
                            </li>
                            <li><i class="far fa-horizontal-rule"></i></li>
                            <li> 
                                <h4 class="number">29</h4>
                                <h5 class="number-text">Min</h5> 
                            </li>
                            <li><i class="far fa-horizontal-rule"></i></li>
                            <li> 
                                <h4 class="number">33</h4>
                                <h5 class="number-text">Sec</h5> 
                            </li>
                        </ul>
                        <h2 class="mb-12">Melodic Uprising</h2>
                        <h5 class="light-gray mb-24"><span class="color-primary">Artist:</span> Elysia Rayne, Jaxon Grey</h5>
                        <ul class="detail mb-40">
                            <li><h6>Hip Hop</h6></li>
                            <li><h6>15 Tracks</h6></li>
                            <li><h6>2023</h6></li>
                        </ul>
                        <a href="#" class="cus-btn dark"><i class="fal fa-bell"></i> Notify Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coming Soon Area end -->

    <!-- Featured Artists Area start -->
    <section class="featured p-40">
        <div class="container-fluid">
            <div class="heading">
                <h3>Featured Artists</h3>
                <h6><a href="artists.html">See All</a></h6>
            </div>
            <div class="artist-slider">
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-1.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Mia Anderson</a></h5>
                    <h6 class="light-gray">Pop Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-2.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Benjamin Smith</a></h5>
                    <h6 class="light-gray">Country Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-3.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Charlotte Parker</a></h5>
                    <h6 class="light-gray">Rap Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-4.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Matthew Clark</a></h5>
                    <h6 class="light-gray">Metal Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-5.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Harper Mitchell</a></h5>
                    <h6 class="light-gray">R&B Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-7.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">James Davies</a></h5>
                    <h6 class="light-gray">Pop Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-8.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Olivia Carter</a></h5>
                    <h6 class="light-gray">Country Artist</h6>
                </div>
                <div class="artist-card">
                    <a href="artist-detail.html"><img src="assets/media/card/artists/Image-9.png" alt="" class="mb-16"></a>
                    <h5 class="mb-8"><a href="artist-detail.html">Alexander Ben</a></h5>
                    <h6 class="light-gray">Rap Artist</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Artists Area end -->

</div>
@endsection