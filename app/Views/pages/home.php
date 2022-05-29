<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


    <main class="post-2 page type-page status-publish hentry" style="padding-top:0px;">
        <section id="home-hero" class="body-color-12431" id="particles-js">
            <div class="container wide">
                <div class="row">
                    <div class="col-12 col-sm-12 offset-md-1 col-md-10 col-lg-6 offset-lg-0 offset-xl-0 col-xl-6">
                        <div>
                            <h2 class="wow fadeInUp">HOME</h2>
                            <h1 class="wow fadeInUp">
                                METROKIL
                            </h1>
                            <p class="description wow fadeInUp" itemprop="description">
                                Setelah diakui sebagai salah perusahaan pengusir hama yang ampuh, kini metrokill meyediakan produk pengusir hama yang berkualitas.
                            </p>

                        </div>
                    </div>

                    <div class="col-12 col-sm-12 offset-md-1 col-md-10 col-lg-6 offset-lg-0 col-xl-6">

                        <div class="featured-case-study">
                            <div class="case-study-content-contain">
                                <h3 class="h6 wow fadeInUp">DEDICATED TO <br>ENVIRONMENT</h3>
                            </div>
                            <div class="case-study-img-contain">
                                <div class="case-study-img wow fadeInUp" data-wow-delay=".5s">
                                    <img src="image/Spray can.svg" height="400" width="239" alt="State 48 Case Study - ecommerce development by Fyresite" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>

        <script type="text/javascript" defer async>
            jQuery(document).ready(function($) {
                // VIDEO CONTROLS
                var myVideo = document.getElementById("home-vid");
                // VIDEO PLAY FUNCTION
                function playPause() {
                    if (myVideo.paused) {
                        myVideo.play();
                        $('.play-button-replace').addClass('fa-pause');
                        $('.play-button-replace').removeClass('fa-play');
                    } else {
                        myVideo.pause();
                        $('.play-button-replace').removeClass('fa-pause');
                        $('.play-button-replace').addClass('fa-play');
                    }
                }
                $('#play-home-vid').on('click', playPause);

                // WOW ANIMATIONS
                wow = new WOW({
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true,
                    live: true
                })
                wow.init();

                // TILT
                if (Modernizr.touch) {
                    $('.tilt, .post-tilt').on('touchstart touchend', function(e) {
                        // e.preventDefault();
                        $(this).toggleClass('hover');
                    });
                } else {
                    var timesRun = 0;
                    var interval = setInterval(function() {
                        timesRun += 1;
                        if (timesRun === 30) {
                            clearInterval(interval);
                        }
                        $('.tilt').tilt({
                            // scale: 1.0125,
                            glare: true,
                            maxGlare: .25
                        });
                        $('.post-tilt').tilt({
                            // scale: 1.0125,
                            glare: false,
                            maxGlare: .25
                        });
                        $('.home-post-tilt').tilt({
                            // scale: 1.0125,
                            maxTilt: 20,
                            perspective: 1000,
                            glare: false,
                            maxGlare: .25
                        });
                    }, 1000);
                }
            });
        </script>
    </main>



<?= $this->endSection() ?>