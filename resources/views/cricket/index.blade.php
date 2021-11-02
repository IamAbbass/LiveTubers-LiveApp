@extends('layouts.app')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cricket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <div class="line"></div>
                    </div>
                    <div class="single-video-area">
                        <iframe src="https://cricfree.live/update/astrocricket.php" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <small style="font-size: 10px;">Disclaimer: None of the videos are hosted by this site. Streams hosted on external sites like Youtube and embedded here. This site is not responsible for the legality of the content. For legal issues, please contact appropriate media file owners/hosters.</small>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-12">
                    <div class="post-details-content d-flex">
                        <!-- Post Share Info -->
                        <div class="post-share-info">
                            <p>Share</p>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="thumb-tack"><i class="fa fa-thumb-tack"></i></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-success">Live</a>
                                <a href="single-post.html" class="post-title mb-2">Live Cricket</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">By Admin</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Oct 17, 2021</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                                    </div>
                                </div>
                            </div>

                            <p>The 2021 ICC Men's T20 World Cup is the seventh ICC Men's T20 World Cup tournament, with the matches taking place in the United Arab Emirates and Oman from 17 October to 14 November 2021. The West Indies are the defending champions.
                            There was due to be a preceding 2020 T20 World Cup held in Australia from 18 October to 15 November 2020, but in July 2020, the International Cricket Council (ICC) confirmed that this tournament had been postponed, due to the COVID-19 pandemic. In August 2020, the ICC confirmed that India would host the 2021 tournament as planned, with Australia being named as the host for the succeeding 2022 tournament. However, in June 2021, the ICC announced that the tournament had been moved to the United Arab Emirates due to growing concerns over the COVID-19 pandemic situation in India, and a possible third wave of the pandemic in the country. The tournament began on 17 October 2021, with the tournament's final scheduled to be played on 14 November 2021. The preliminary rounds of the tournament were played in the UAE and Oman.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection