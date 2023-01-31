@extends('layout.welcome')

@section('comic_content')
<!-- comic main -->
<section class="comic_main">
    <!-- topbar comic -->
    <div class="topbar">
        <div class="container">
            <div class="img">
                <img src="https://www.dc.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=-ZFfbpum" alt="">
            </div>
        </div>
    </div>
    <!-- main body comic -->
    <div class="body_comic">
        <div class="container">
            <!-- upper side comic -->
            <div class="upper_side_comic">
                <!-- left side -->
                <div class="left_side_comic">
                    <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
                    <div class="info_comic">
                        <div class="price_avaliability">
                            <div class="price">
                                <div>U.S. Price: 19.99$</div>
                                <div>Available</div>
                            </div>
                            <div class="avaliability">
                                <div>Check Avaliability</div>
                            </div>
                        </div>
                        <div class="text_comic">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat ullam, molestiae veritatis fugiat dolores, minima cupiditate voluptas totam exercitationem sunt incidunt dolor dicta minus error dolore corporis cum. Atque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat ullam, molestiae veritatis fugiat dolores, minima cupiditate voluptas totam exercitationem sunt incidunt dolor dicta minus error dolore corporis cum. Atque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat ullam, molestiae veritatis fugiat dolores, minima cupiditate voluptas totam exercitationem sunt incidunt dolor dicta minus error dolore corporis cum. Atque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat ullam, molestiae veritatis fugiat dolores, minima cupiditate voluptas totam exercitationem sunt incidunt dolor dicta minus error dolore corporis cum. Atque!
                            </p>
                        </div>
                    </div>
                </div>
                <!-- right side -->
                <div class="right_side_comic">
                    <h4>ADVERTISEMENT</h4>
                    <div class="img_side">
                        <img src="{{ Vite::asset('/resources/img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- lower side -->
        <div class="lower_side_comic">
            <div class="container">
                <!-- upper footer -->
                <div class="upper_side_footer_comic">
                    <!-- left side -->
                    <div class="left_side_footer_comic">
                        <h4>TALENT</h4>
                        <div class="text_footer_comic">
                            <div class="left">
                                <p>Art by:</p>
                            </div>
                            <div class="right brand_color">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident excepturi minima totam est quasi odit reiciendis fugiat, soluta optio repellendus dolore, et, nemo quae! Praesentium molestias impedit magni a!
                                </p>
                            </div>
                        </div>
                        <div class="text_footer_comic">
                            <div class="left">
                                <p>Written by:</p>
                            </div>
                            <div class="right brand_color">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident excepturi minima totam est quasi odit reiciendis fugiat, soluta optio repellendus dolore, et, nemo quae! Praesentium molestias impedit magni a!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- right side -->
                    <div class="right_side_footer_comic">
                        <h4>SPECS</h4>
                        <div class="text_footer_comic">
                            <div class="left">
                                <p>Series:</p>
                            </div>
                            <div class="right brand_color">
                                <p>
                                    ACTION COMICS
                                </p>
                            </div>
                        </div>
                        <div class="text_footer_comic">
                            <div class="left">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="right">
                                <p>
                                    19.99$
                                </p>
                            </div>
                        </div>
                        <div class="text_footer_comic">
                            <div class="left">
                                <p>On Sale Date:</p>
                            </div>
                            <div class="right">
                                <p>
                                    Oct 02 2018
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection