@extends('backend.layouts.app')
@section('title', isset($title) ? $title: 'Dashboard')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title text-capitalize mb-3">playlist by artist</h4>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-danger position-relative  rounded-3 card-box mb-3 ">
                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/01.png" id="01" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <svg class="text-danger" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Play">
                        <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"/>
                        <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"/>
                        </g>
                    </svg>
                    <span class="ms-2 fw-semibold text-capitalize">12 tracks</span>
                </div>
            </div>
            <a href="music-player.html" class="text-capitalize h5">Eliana d’cruz playlist</a>
            <small class="fw-normal line-count-1 text-capitalize">top 12 songs from Eliana and all type of songs.</small>    
        </div>
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-warning position-relative  rounded-3 card-box mb-3 ">
                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/02.png" id="02" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <svg class="text-warning" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Play">
                        <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"/>
                        <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"/>
                        </g>
                    </svg>
                    <span class="ms-2 fw-semibold text-capitalize">18 tracks</span>
                </div>
            </div>
            <a href="music-player.html" class="text-capitalize h5">omen smith playlist</a>
            <small class="fw-normal line-count-1 text-capitalize">top 18 songs from omen and mainly party song.</small>    
        </div>
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-info position-relative  rounded-3 card-box mb-3 ">
                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/03.png" id="03" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <svg class="text-info" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Play">
                        <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"/>
                        <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"/>
                        </g>
                    </svg>
                    <span class="ms-2 fw-semibold text-capitalize">16 tracks</span>
                </div>
            </div>
            <a href="music-player.html" class="text-capitalize h5">Alexa Jonas</a>
            <small class="fw-normal line-count-1 text-capitalize">top 16 songs from Alexa and most of the relax songs.</small>    
        </div>
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-success position-relative  rounded-3 card-box mb-3 ">
                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/04.png" id="04" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <svg class="text-success" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Play">
                        <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"/>
                        <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"/>
                        </g>
                    </svg>
                    <span class="ms-2 fw-semibold text-capitalize">22 tracks</span>
                </div>
            </div>
            <a href="music-player.html" class="text-capitalize h5">vibrato eruct</a>
            <small class="fw-normal line-count-1 text-capitalize">top 22 songs from vibrato and all type of songs.</small>    
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card-header mb-3">
                <div class="header-title d-flex align-items-center justify-content-between">
                    <h4 class="card-title text-capitalize">trending songs</h4>
                    <a href="release.html" class="small text-body">View All <svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="15" viewBox="0 0 14 15" fill="none">
                        <path
                            d="M10.9375 4V9.6875C10.9375 9.80353 10.8914 9.91481 10.8094 9.99686C10.7273 10.0789 10.616 10.125 10.5 10.125C10.384 10.125 10.2727 10.0789 10.1906 9.99686C10.1086 9.91481 10.0625 9.80353 10.0625 9.6875V5.05602L3.80953 11.3095C3.72744 11.3916 3.6161 11.4377 3.5 11.4377C3.3839 11.4377 3.27256 11.3916 3.19047 11.3095C3.10838 11.2274 3.06226 11.1161 3.06226 11C3.06226 10.8839 3.10838 10.7726 3.19047 10.6905L9.44398 4.4375H4.8125C4.69647 4.4375 4.58519 4.39141 4.50314 4.30936C4.42109 4.22731 4.375 4.11603 4.375 4C4.375 3.88397 4.42109 3.77269 4.50314 3.69064C4.58519 3.60859 4.69647 3.5625 4.8125 3.5625H10.5C10.616 3.5625 10.7273 3.60859 10.8094 3.69064C10.8914 3.77269 10.9375 3.88397 10.9375 4Z"
                            fill="#4A525F" />
                    </svg></a>
                </div>
            </div>
        </div>
        <ul class="row row-cols-lg-6 row-cols-md-4  row-cols-2 list-unstyled mb-0">
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/05.png" id="05" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                            <small class="fw-normal text-capitalize line-count-1">by
                                            snoods smith Jonas </small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/06.png" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">masinc party album</a>
                            <small class="fw-normal text-capitalize line-count-1">by kerana euc veena</small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/07.png" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">the silent one</a>
                            <small class="fw-normal text-capitalize line-count-1">by Alex Williams </small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/08.png" id="08" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">just perfect</a>
                            <small class="fw-normal text-capitalize line-count-1">by karuna truss</small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/09.png" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">everything i want</a>
                            <small class="fw-normal text-capitalize line-count-1">by Neha arena </small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/10.png" id="10" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">infinity</a>
                            <small class="fw-normal text-capitalize line-count-1">by
                                            nil ana meet nagak</small>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">recently played</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev" id="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.75 9.5C15.75 9.64918 15.6908 9.79226 15.5853 9.89775C15.4798 10.0032 15.3367 10.0625 15.1875 10.0625H4.17025L8.27298 14.1645C8.32525 14.2168 8.3667 14.2788 8.39499 14.3471C8.42327 14.4154 8.43783 14.4886 8.43783 14.5625C8.43783 14.6364 8.42327 14.7096 8.39499 14.7779C8.3667 14.8462 8.32525 14.9082 8.27298 14.9605C8.22072 15.0127 8.15868 15.0542 8.09039 15.0825C8.02211 15.1108 7.94893 15.1253 7.87502 15.1253C7.80111 15.1253 7.72792 15.1108 7.65964 15.0825C7.59135 15.0542 7.52931 15.0127 7.47705 14.9605L2.41455 9.89797C2.36225 9.84573 2.32076 9.78369 2.29245 9.7154C2.26414 9.64712 2.24957 9.57392 2.24957 9.5C2.24957 9.42608 2.26414 9.35288 2.29245 9.2846C2.32076 9.21631 2.36225 9.15427 2.41455 9.10203L7.47705 4.03953C7.58259 3.93398 7.72575 3.87469 7.87502 3.87469C8.02428 3.87469 8.16744 3.93398 8.27298 4.03953C8.37853 4.14508 8.43783 4.28823 8.43783 4.4375C8.43783 4.58677 8.37853 4.72992 8.27298 4.83547L4.17025 8.9375H15.1875C15.3367 8.9375 15.4798 8.99676 15.5853 9.10225C15.6908 9.20774 15.75 9.35082 15.75 9.5Z"
                                fill="#4A525F" />
                        </svg>
                    </div>
                    <div class="swiper-button-next" id="next">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                            viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.5855 9.89797L10.523 14.9605C10.4174 15.066 10.2743 15.1253 10.125 15.1253C9.97573 15.1253 9.83258 15.066 9.72703 14.9605C9.62148 14.8549 9.56219 14.7118 9.56219 14.5625C9.56219 14.4132 9.62148 14.2701 9.72703 14.1645L13.8298 10.0625H2.8125C2.66332 10.0625 2.52024 10.0032 2.41475 9.89775C2.30926 9.79226 2.25 9.64918 2.25 9.5C2.25 9.35082 2.30926 9.20774 2.41475 9.10225C2.52024 8.99676 2.66332 8.9375 2.8125 8.9375H13.8298L9.72703 4.83547C9.62148 4.72992 9.56219 4.58677 9.56219 4.4375C9.56219 4.28823 9.62148 4.14508 9.72703 4.03953C9.83258 3.93398 9.97573 3.87469 10.125 3.87469C10.2743 3.87469 10.4174 3.93398 10.523 4.03953L15.5855 9.10203C15.6378 9.15427 15.6793 9.21631 15.7076 9.2846C15.7359 9.35288 15.7504 9.42608 15.7504 9.5C15.7504 9.57392 15.7359 9.64712 15.7076 9.7154C15.6793 9.78369 15.6378 9.84573 15.5855 9.89797Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper overflow-hidden" data-swiper="song-slider">
                <ul class="swiper-wrapper   p-0 list-unstyled mb-0 ">
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/11.png" id="11" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/12.png" id="12" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">years of hundred</a>
                                <small class="fw-normal text-capitalize line-count-1">by Helena illation</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/13.png" id="13" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                <small class="fw-normal text-capitalize line-count-1">you are mine</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/14.png" id="14" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">heart is beating</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/15.png" id="15" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/16.png" id="16" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">my lovely dad</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/11.png" id="17" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                                <small class="fw-normal text-capitalize line-count-1">by
                                                    snoods smith Jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/12.png" id="18" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/13.png" id="19" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">years of hundred</a>
                                <small class="fw-normal text-capitalize line-count-1">by Helena illation</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/14.png" id="20" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                <small class="fw-normal text-capitalize line-count-1">you are mine</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/15.png" id="21" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">heart is beating</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/16.png" id="22" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 mb-5">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">top genres for you</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev" id="prev1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.75 9.5C15.75 9.64918 15.6908 9.79226 15.5853 9.89775C15.4798 10.0032 15.3367 10.0625 15.1875 10.0625H4.17025L8.27298 14.1645C8.32525 14.2168 8.3667 14.2788 8.39499 14.3471C8.42327 14.4154 8.43783 14.4886 8.43783 14.5625C8.43783 14.6364 8.42327 14.7096 8.39499 14.7779C8.3667 14.8462 8.32525 14.9082 8.27298 14.9605C8.22072 15.0127 8.15868 15.0542 8.09039 15.0825C8.02211 15.1108 7.94893 15.1253 7.87502 15.1253C7.80111 15.1253 7.72792 15.1108 7.65964 15.0825C7.59135 15.0542 7.52931 15.0127 7.47705 14.9605L2.41455 9.89797C2.36225 9.84573 2.32076 9.78369 2.29245 9.7154C2.26414 9.64712 2.24957 9.57392 2.24957 9.5C2.24957 9.42608 2.26414 9.35288 2.29245 9.2846C2.32076 9.21631 2.36225 9.15427 2.41455 9.10203L7.47705 4.03953C7.58259 3.93398 7.72575 3.87469 7.87502 3.87469C8.02428 3.87469 8.16744 3.93398 8.27298 4.03953C8.37853 4.14508 8.43783 4.28823 8.43783 4.4375C8.43783 4.58677 8.37853 4.72992 8.27298 4.83547L4.17025 8.9375H15.1875C15.3367 8.9375 15.4798 8.99676 15.5853 9.10225C15.6908 9.20774 15.75 9.35082 15.75 9.5Z"
                                fill="#4A525F" />
                        </svg>
                    </div>
                    <div class="swiper-button-next" id="next1">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                            viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.5855 9.89797L10.523 14.9605C10.4174 15.066 10.2743 15.1253 10.125 15.1253C9.97573 15.1253 9.83258 15.066 9.72703 14.9605C9.62148 14.8549 9.56219 14.7118 9.56219 14.5625C9.56219 14.4132 9.62148 14.2701 9.72703 14.1645L13.8298 10.0625H2.8125C2.66332 10.0625 2.52024 10.0032 2.41475 9.89775C2.30926 9.79226 2.25 9.64918 2.25 9.5C2.25 9.35082 2.30926 9.20774 2.41475 9.10225C2.52024 8.99676 2.66332 8.9375 2.8125 8.9375H13.8298L9.72703 4.83547C9.62148 4.72992 9.56219 4.58677 9.56219 4.4375C9.56219 4.28823 9.62148 4.14508 9.72703 4.03953C9.83258 3.93398 9.97573 3.87469 10.125 3.87469C10.2743 3.87469 10.4174 3.93398 10.523 4.03953L15.5855 9.10203C15.6378 9.15427 15.6793 9.21631 15.7076 9.2846C15.7359 9.35288 15.7504 9.42608 15.7504 9.5C15.7504 9.57392 15.7359 9.64712 15.7076 9.7154C15.6793 9.78369 15.6378 9.84573 15.5855 9.89797Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper overflow-hidden" data-swiper="geners-slider">
                <ul class="swiper-wrapper   p-0 list-unstyled mb-0 ">
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/17.png" id="23" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">sorrow</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/18.png" id="24" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/19.png" id="25" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">travel</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/20.png" id="26" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">party</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/21.png" id="27" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">19’s retro song</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12 songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3">
                        
                        
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/18.png" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header mb-3">
                <div class="header-title d-flex align-items-center justify-content-between">
                    <h4 class="card-title text-capitalize">radio station songs</h4>
                    <a href="#" class="small text-body">View All <svg xmlns="http://www.w3.org/2000/svg" width="14"
                            height="15" viewBox="0 0 14 15" fill="none">
                            <path
                                d="M10.9375 4V9.6875C10.9375 9.80353 10.8914 9.91481 10.8094 9.99686C10.7273 10.0789 10.616 10.125 10.5 10.125C10.384 10.125 10.2727 10.0789 10.1906 9.99686C10.1086 9.91481 10.0625 9.80353 10.0625 9.6875V5.05602L3.80953 11.3095C3.72744 11.3916 3.6161 11.4377 3.5 11.4377C3.3839 11.4377 3.27256 11.3916 3.19047 11.3095C3.10838 11.2274 3.06226 11.1161 3.06226 11C3.06226 10.8839 3.10838 10.7726 3.19047 10.6905L9.44398 4.4375H4.8125C4.69647 4.4375 4.58519 4.39141 4.50314 4.30936C4.42109 4.22731 4.375 4.11603 4.375 4C4.375 3.88397 4.42109 3.77269 4.50314 3.69064C4.58519 3.60859 4.69647 3.5625 4.8125 3.5625H10.5C10.616 3.5625 10.7273 3.60859 10.8094 3.69064C10.8914 3.77269 10.9375 3.88397 10.9375 4Z"
                                fill="#4A525F" />
                        </svg></a>
                </div>
            </div>
        </div>
        <ul class="row row-cols-lg-5 row-cols-md-4  row-cols-2 list-unstyled mb-0">
            <li class="col mb-3">
                
                
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/45.png" id="30" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">music hits</a>
                    <small class="fw-normal text-capitalize line-count-1">music
                            hits by rj karuna</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/46.png" id="31" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">8917 radio hits</a>
                    <small class="fw-normal text-capitalize line-count-1">897
                            radio hits by rj Nina</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/47.png" id="32" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">country music</a>
                    <small class="fw-normal text-capitalize line-count-1">country music by rj angel</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/48.png" id="33" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">winter thunders</a>
                    <small class="fw-normal text-capitalize line-count-1">winter thunders by rj myoma</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/49.png" id="34" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="music-player.html" class=" text-capitalize line-count-1 h5 d-block">radio with rive</a>
                    <small class="fw-normal text-capitalize line-count-1">radio with rive from rj rive</small>
            </li>
        </ul>
    </div>
    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">our top listening songs</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/22.png" id="60" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">Saturday party</a>
                                    </div>
                                    <small class="text-capitalize">john deo</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">8.6k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/23.png" id="61" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">Saturday party</a>
                                    </div>
                                    <small class="text-capitalize">angle wings</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">8.2k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/24.png" id="62" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">Ferrari</a>
                                    </div>
                                    <small class="text-capitalize">smith euc</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">8.0k</small>
                            </div>
                        </div>                </li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/25.png" id="63" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">my bike</a>
                                    </div>
                                    <small class="text-capitalize">karuna Williams</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">7.6k</small>
                            </div>
                        </div>                </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/26.png" id="64" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">my way of music</a>
                                    </div>
                                    <small class="text-capitalize">winy sling</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">7.4k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/27.png" id="65" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">hits of beats</a>
                                    </div>
                                    <small class="text-capitalize">Alina smith</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">7.2k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/28.png" id="66" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">hole world</a>
                                    </div>
                                    <small class="text-capitalize">mitten raj</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">6.9k</small>
                            </div>
                        </div>                </li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/29.png" id="67" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">passion of work</a>
                                    </div>
                                    <small class="text-capitalize">haul josh</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">6.4k</small>
                            </div>
                        </div>                </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/30.png" id="68" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">my lovely doll</a>
                                    </div>
                                    <small class="text-capitalize">king of rape</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">6.2k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/31.png" id="69" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">my yellow car</a>
                                    </div>
                                    <small class="text-capitalize">Alina kuru</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">5.9k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/32.png" id="70" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">retro lo-fi</a>
                                    </div>
                                    <small class="text-capitalize">mitral luff</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">5.4k</small>
                            </div>
                        </div>                </li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/33.png" id="71" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">party nights</a>
                                    </div>
                                    <small class="text-capitalize">john deo</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">5.1k</small>
                            </div>
                        </div>                </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/34.png" id="72" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">my little world</a>
                                    </div>
                                    <small class="text-capitalize">john and smith jonas</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">4.6k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/35.png" id="73" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">party nights</a>
                                    </div>
                                    <small class="text-capitalize">Alina Jonas</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">4.2k</small>
                            </div>
                        </div>                </li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/36.png" id="74" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">first concert</a>
                                    </div>
                                    <small class="text-capitalize">kimono dictum</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">3.9k</small>
                            </div>
                        </div>                </li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/37.png" id="75" class="img-fluid rounded me-3 avatar-55"
                                    alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="music-player.html" class="text-capitalize h5 mt-3">mountain road</a>
                                    </div>
                                    <small class="text-capitalize">john deo</small>
                                </div>
                            <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z"
                                        fill="#4A525F" />
                                </svg>
                                <small class="ms-2">3.4k</small>
                            </div>
                        </div>                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">top artists</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev" id="prev1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.75 9.5C15.75 9.64918 15.6908 9.79226 15.5853 9.89775C15.4798 10.0032 15.3367 10.0625 15.1875 10.0625H4.17025L8.27298 14.1645C8.32525 14.2168 8.3667 14.2788 8.39499 14.3471C8.42327 14.4154 8.43783 14.4886 8.43783 14.5625C8.43783 14.6364 8.42327 14.7096 8.39499 14.7779C8.3667 14.8462 8.32525 14.9082 8.27298 14.9605C8.22072 15.0127 8.15868 15.0542 8.09039 15.0825C8.02211 15.1108 7.94893 15.1253 7.87502 15.1253C7.80111 15.1253 7.72792 15.1108 7.65964 15.0825C7.59135 15.0542 7.52931 15.0127 7.47705 14.9605L2.41455 9.89797C2.36225 9.84573 2.32076 9.78369 2.29245 9.7154C2.26414 9.64712 2.24957 9.57392 2.24957 9.5C2.24957 9.42608 2.26414 9.35288 2.29245 9.2846C2.32076 9.21631 2.36225 9.15427 2.41455 9.10203L7.47705 4.03953C7.58259 3.93398 7.72575 3.87469 7.87502 3.87469C8.02428 3.87469 8.16744 3.93398 8.27298 4.03953C8.37853 4.14508 8.43783 4.28823 8.43783 4.4375C8.43783 4.58677 8.37853 4.72992 8.27298 4.83547L4.17025 8.9375H15.1875C15.3367 8.9375 15.4798 8.99676 15.5853 9.10225C15.6908 9.20774 15.75 9.35082 15.75 9.5Z"
                                fill="#4A525F" />
                        </svg>
                    </div>
                    <div class="swiper-button-next" id="next1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                            viewBox="0 0 18 19" fill="none">
                            <path
                                d="M15.5855 9.89797L10.523 14.9605C10.4174 15.066 10.2743 15.1253 10.125 15.1253C9.97573 15.1253 9.83258 15.066 9.72703 14.9605C9.62148 14.8549 9.56219 14.7118 9.56219 14.5625C9.56219 14.4132 9.62148 14.2701 9.72703 14.1645L13.8298 10.0625H2.8125C2.66332 10.0625 2.52024 10.0032 2.41475 9.89775C2.30926 9.79226 2.25 9.64918 2.25 9.5C2.25 9.35082 2.30926 9.20774 2.41475 9.10225C2.52024 8.99676 2.66332 8.9375 2.8125 8.9375H13.8298L9.72703 4.83547C9.62148 4.72992 9.56219 4.58677 9.56219 4.4375C9.56219 4.28823 9.62148 4.14508 9.72703 4.03953C9.83258 3.93398 9.97573 3.87469 10.125 3.87469C10.2743 3.87469 10.4174 3.93398 10.523 4.03953L15.5855 9.10203C15.6378 9.15427 15.6793 9.21631 15.7076 9.2846C15.7359 9.35288 15.7504 9.42608 15.7504 9.5C15.7504 9.57392 15.7359 9.64712 15.7076 9.7154C15.6793 9.78369 15.6378 9.84573 15.5855 9.89797Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper overflow-hidden" data-swiper="artists-slider">
            <ul class="swiper-wrapper   p-0 list-unstyled mb-0 ">
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/38.png" id="52" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">Eliana
                                    d’Cruz</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/39.png" id="53" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">Alex
                                    Williams</a>
                        <small class="fw-normal text-capitalize text-center d-block">composer</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/40.png" id="54" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">omen smith</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/41.png" id="55" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">Alexa Jonas</a>
                        <small class="fw-normal text-capitalize text-center d-block">music player</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/42.png" id="56" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">koruna
                                    truss</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/43.png" id="57" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">vibrato
                                    eruct </a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3">
                    
                    
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/44.png" id="58" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="music-player.html" class=" text-capitalize  text-center h5 d-block">mainours
                                    Kian</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
            </ul>
        </div>
    </div>
    <div class="card border-top mb-0">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-md-row flex-column gap-3">
                <div class="">
                    <ul class="list-unstyled p-0 m-0 mb-3 text-capitalize d-flex gap-3 flex-md-nowrap flex-wrap">
                        <li>about</li>
                        <li>|</li>
                        <li>terms of use</li>
                        <li>|</li>
                        <li>privacy policy</li>
                        <li>|</li>
                        <li>support</li>
                        <li>|</li>
                        <li>feedback</li>
                        <li>|</li>
                    </ul>
                    <small>Copyright <span id="copyright"> 
                    <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. Made with love by Iqonic Design.</small>
                </div>
                <div>
                    <ul class="list-unstyled m-0 p-0 d-flex align-items-center gap-3">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.026 15C11.064 15 14.367 9.99702 14.367 5.66602C14.367 5.52602 14.367 5.38402 14.361 5.24402C15.0041 4.77851 15.5591 4.20217 16 3.54202C15.3993 3.80687 14.7628 3.98143 14.111 4.06002C14.7975 3.64966 15.3117 3.00399 15.558 2.24302C14.913 2.62515 14.207 2.8934 13.471 3.03602C12.9762 2.50905 12.3214 2.15994 11.6081 2.04278C10.8948 1.92562 10.1627 2.04694 9.52534 2.38796C8.88796 2.72897 8.38081 3.27065 8.08245 3.92908C7.78409 4.58751 7.71118 5.32595 7.875 6.03002C6.56974 5.96457 5.29282 5.62549 4.12704 5.03476C2.96127 4.44404 1.93268 3.61487 1.108 2.60102C0.68934 3.3241 0.561574 4.17942 0.750646 4.99329C0.939718 5.80715 1.43145 6.51855 2.126 6.98302C1.60554 6.96534 1.09652 6.82558 0.64 6.57502V6.62002C0.640897 7.3775 0.903307 8.11144 1.38287 8.69778C1.86244 9.28412 2.52975 9.68689 3.272 9.83802C2.99026 9.91564 2.69923 9.95433 2.407 9.95302C2.20098 9.95365 1.99538 9.93456 1.793 9.89602C2.00279 10.5481 2.41127 11.1182 2.96125 11.5265C3.51122 11.9348 4.17513 12.1609 4.86 12.173C3.69656 13.0868 2.2594 13.5824 0.78 13.58C0.519321 13.5811 0.258823 13.5661 0 13.535C1.50151 14.4923 3.2453 15.0006 5.026 15Z" fill="#4A525F"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_389_2574)">
                                    <path d="M0 1.146C0 0.513 0.526 0 1.175 0H14.825C15.474 0 16 0.513 16 1.146V14.854C16 15.487 15.474 16 14.825 16H1.175C0.526 16 0 15.487 0 14.854V1.146ZM4.943 13.394V6.169H2.542V13.394H4.943ZM3.743 5.182C4.58 5.182 5.101 4.628 5.101 3.934C5.086 3.225 4.581 2.686 3.759 2.686C2.937 2.686 2.4 3.226 2.4 3.934C2.4 4.628 2.921 5.182 3.727 5.182H3.743ZM8.651 13.394V9.359C8.651 9.143 8.667 8.927 8.731 8.773C8.904 8.342 9.299 7.895 9.963 7.895C10.832 7.895 11.179 8.557 11.179 9.529V13.394H13.58V9.25C13.58 7.03 12.396 5.998 10.816 5.998C9.542 5.998 8.971 6.698 8.651 7.191V7.216H8.635C8.64031 7.20765 8.64564 7.19932 8.651 7.191V6.169H6.251C6.281 6.847 6.251 13.394 6.251 13.394H8.651Z" fill="#4A525F"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_389_2574">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_389_2576)">
                                    <path d="M16 8.04902C16 3.60302 12.418 -0.000976562 8.00005 -0.000976562C3.58005 2.34375e-05 -0.00195312 3.60302 -0.00195312 8.05002C-0.00195312 12.067 2.92405 15.397 6.74805 16.001V10.376H4.71805V8.05002H6.75005V6.27502C6.75005 4.25802 7.94505 3.14402 9.77205 3.14402C10.648 3.14402 11.563 3.30102 11.563 3.30102V5.28102H10.554C9.56105 5.28102 9.25105 5.90202 9.25105 6.53902V8.04902H11.469L11.115 10.375H9.25005V16C13.074 15.396 16 12.066 16 8.04902Z" fill="#FF4545"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_389_2576">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_389_2578)">
                                    <path d="M8 0C5.829 0 5.556 0.01 4.703 0.048C3.85 0.088 3.269 0.222 2.76 0.42C2.22609 0.620819 1.74249 0.935826 1.343 1.343C0.936076 1.7427 0.621107 2.22624 0.42 2.76C0.222 3.268 0.087 3.85 0.048 4.7C0.01 5.555 0 5.827 0 8.001C0 10.173 0.01 10.445 0.048 11.298C0.088 12.15 0.222 12.731 0.42 13.24C0.625 13.766 0.898 14.212 1.343 14.657C1.787 15.102 2.233 15.376 2.759 15.58C3.269 15.778 3.849 15.913 4.701 15.952C5.555 15.99 5.827 16 8 16C10.173 16 10.444 15.99 11.298 15.952C12.149 15.912 12.732 15.778 13.241 15.58C13.7746 15.3791 14.2578 15.0641 14.657 14.657C15.102 14.212 15.375 13.766 15.58 13.24C15.777 12.731 15.912 12.15 15.952 11.298C15.99 10.445 16 10.173 16 8C16 5.827 15.99 5.555 15.952 4.701C15.912 3.85 15.777 3.268 15.58 2.76C15.3789 2.22623 15.0639 1.74268 14.657 1.343C14.2576 0.935676 13.774 0.620645 13.24 0.42C12.73 0.222 12.148 0.087 11.297 0.048C10.443 0.01 10.172 0 7.998 0H8.001H8ZM7.283 1.442H8.001C10.137 1.442 10.39 1.449 11.233 1.488C12.013 1.523 12.437 1.654 12.719 1.763C13.092 1.908 13.359 2.082 13.639 2.362C13.919 2.642 14.092 2.908 14.237 3.282C14.347 3.563 14.477 3.987 14.512 4.767C14.551 5.61 14.559 5.863 14.559 7.998C14.559 10.133 14.551 10.387 14.512 11.23C14.477 12.01 14.346 12.433 14.237 12.715C14.1087 13.0624 13.904 13.3764 13.638 13.634C13.358 13.914 13.092 14.087 12.718 14.232C12.438 14.342 12.014 14.472 11.233 14.508C10.39 14.546 10.137 14.555 8.001 14.555C5.865 14.555 5.611 14.546 4.768 14.508C3.988 14.472 3.565 14.342 3.283 14.232C2.9355 14.1039 2.62113 13.8996 2.363 13.634C2.09675 13.376 1.89172 13.0617 1.763 12.714C1.654 12.433 1.523 12.009 1.488 11.229C1.45 10.386 1.442 10.133 1.442 7.996C1.442 5.86 1.45 5.608 1.488 4.765C1.524 3.985 1.654 3.561 1.764 3.279C1.909 2.906 2.083 2.639 2.363 2.359C2.643 2.079 2.909 1.906 3.283 1.761C3.565 1.651 3.988 1.521 4.768 1.485C5.506 1.451 5.792 1.441 7.283 1.44V1.442ZM12.271 2.77C12.1449 2.77 12.0201 2.79483 11.9036 2.84308C11.7872 2.89132 11.6813 2.96203 11.5922 3.05118C11.503 3.14032 11.4323 3.24615 11.3841 3.36262C11.3358 3.4791 11.311 3.60393 11.311 3.73C11.311 3.85607 11.3358 3.9809 11.3841 4.09738C11.4323 4.21385 11.503 4.31968 11.5922 4.40882C11.6813 4.49797 11.7872 4.56868 11.9036 4.61692C12.0201 4.66517 12.1449 4.69 12.271 4.69C12.5256 4.69 12.7698 4.58886 12.9498 4.40882C13.1299 4.22879 13.231 3.98461 13.231 3.73C13.231 3.47539 13.1299 3.23121 12.9498 3.05118C12.7698 2.87114 12.5256 2.77 12.271 2.77ZM8.001 3.892C7.45607 3.8835 6.91489 3.98349 6.40898 4.18614C5.90306 4.3888 5.44251 4.69007 5.05415 5.07242C4.66579 5.45478 4.35736 5.91057 4.14684 6.41326C3.93632 6.91595 3.8279 7.4555 3.8279 8.0005C3.8279 8.5455 3.93632 9.08505 4.14684 9.58774C4.35736 10.0904 4.66579 10.5462 5.05415 10.9286C5.44251 11.3109 5.90306 11.6122 6.40898 11.8149C6.91489 12.0175 7.45607 12.1175 8.001 12.109C9.07954 12.0922 10.1082 11.6519 10.865 10.8833C11.6217 10.1146 12.0459 9.07917 12.0459 8.0005C12.0459 6.92183 11.6217 5.88641 10.865 5.11775C10.1082 4.34909 9.07954 3.90883 8.001 3.892ZM8.001 5.333C8.70833 5.333 9.38669 5.61399 9.88685 6.11415C10.387 6.61431 10.668 7.29267 10.668 8C10.668 8.70733 10.387 9.38569 9.88685 9.88585C9.38669 10.386 8.70833 10.667 8.001 10.667C7.29367 10.667 6.61531 10.386 6.11515 9.88585C5.61499 9.38569 5.334 8.70733 5.334 8C5.334 7.29267 5.61499 6.61431 6.11515 6.11415C6.61531 5.61399 7.29367 5.333 8.001 5.333Z" fill="#4A525F"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_389_2578">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection