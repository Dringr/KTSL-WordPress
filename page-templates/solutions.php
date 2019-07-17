<?php
/*
Template Name: Solutions
*/
get_header(); ?>

<section class="site-hero site-hero--insights">
  <div class="hero-content">
    <h1>The solutions you need to accelerate your business</h1>
    <p class="text--white">
      By understanding the issues you face and the constraints <br />
    you have to work within, we create real-world solutions that <br />
    can transform your business.
  </p>
  </div>  
</section>


<!-- WHY LAPTOP SECTION -->
<section class="section--medium">
    <div class="container">
        <div class="grid animation">
            <div class="animation__image">

                <div id="laptop" class="animation__wrapper animation__wrapper--laptop">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/laptop-lines.png" alt="" style="top:0">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/laptop-background.png" alt="" class="image-2" style="top:0">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/laptop-foreground.png" alt="" class="image-1">
                </div>


                <script>
                    var controller = new ScrollMagic.Controller();

                    // build tween
                    var tween = new TimelineMax()
                        .add([
                            TweenMax.fromTo("#laptop .image-1", 1, {

                                top: -20
                            }, {

                                top: 20,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#laptop .image-2", 1, {

                                top: 20
                            }, {

                                top: -20,
                                ease: Linear.easeNone
                            })
                        ]);

                    // build scene
                    var scene = new ScrollMagic.Scene({
                            triggerElement: "#laptop",
                            duration: '100%'
                        })
                        .setTween(tween)
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controller);
                </script>


            </div>
            <div class="animation__content">
                <h3 class="text--primary">
                    Increase productivity, optimise user experiences
                </h3>
                <p class="text--large">
                    Minimise costs and maximise the business value of your IT team.
                </p>
                <div class="button__wrapper">
                    <a href="/solutions/increase-productivity-optimise-user-experiences/" class="button primary">Discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- WHY MOBILE SECTION -->
<section class="section--medium bg--tertiary mobile-trigger">
    <div class="container">
        <div class="grid animation-2">
            <div class="animation-2__content solution-text--iphone">
                <h3 class="text--primary">
                    Drive business growth by increasing your IT’s input
                </h3>
                <p class="text--large text--white">
                    Improve business automation and upscale agility
                </p>
                <div class="button__wrapper">
                    <a href="/solutions/drive-business-growth-by-increasing-your-its-input/" class="button primary">Discover more</a>
                </div>
            </div>
            <div class="animation-2__image solution-image--iphone">

                <div id="phone" class="animation__wrapper animation__wrapper--iphone">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPhone-X--foreground.png" alt="" class="image-1" style="z-index: 3">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPhone-X--icons.png" alt="" class="image-icons" style="z-index: 2">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPhone-X--middle.png" alt="" style="z-index: 1">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPhone-X--icons-large.png" alt="" class="image-2" style="z-index: 2">
                </div>

                <script>
                    var controller2 = new ScrollMagic.Controller();


                    // build tween
                    var tween2 = new TimelineMax()
                        .add([
                            TweenMax.fromTo("#phone .image-1", 1, {

                                top: -30
                            }, {

                                top: 30,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#phone .image-icons", 1, {

                                top: -15
                            }, {

                                top: 15,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#phone .image-2", 1, {

                                top: 20
                            }, {

                                top: -20,
                                ease: Linear.easeNone
                            })
                        ]);

                    // build scene
                    var scene = new ScrollMagic.Scene({
                            triggerElement: ".mobile-trigger",
                            duration: '100%'
                        })
                        .setTween(tween2)
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controller2);
                </script>


            </div>

        </div>
    </div>
</section>


<!-- WHY TABLET SECTION -->
<section class="section--medium ipad-trigger">
    <div class="container">
        <div class="grid animation-3">
            <div class="animation-3__image">
                <div id="ipad" class="animation__wrapper animation__wrapper--ipad">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPad--foreground.png" alt="" class="image-1" style="z-index: 3">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPad--icons-small.png" alt="" class="image-icons" style="z-index: 2">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPad--grid.png" alt="" style="z-index: 1">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/iPad--icons-large.png" alt="" class="image-2" style="z-index: 2">
                </div>

                <script>
                    var controller3 = new ScrollMagic.Controller();


                    // build tween
                    var tween3 = new TimelineMax()
                        .add([
                            TweenMax.fromTo("#ipad .image-1", 1, {

                                top: -30
                            }, {

                                top: 30,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#ipad .image-icons", 1, {

                                top: -15
                            }, {

                                top: 15,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#ipad .image-2", 1, {

                                top: 30
                            }, {

                                top: -30,
                                ease: Linear.easeNone
                            })
                        ]);

                    // build scene
                    var scene = new ScrollMagic.Scene({
                            triggerElement: ".ipad-trigger",
                            duration: '100%'
                        })
                        .setTween(tween3)
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controller3);
                </script>



            </div>
            <div class="animation-3__content">
                <h3 class="text--primary">
                    Keep control while moving to the cloud
                </h3>
                <p class="text--large">
                    Plan and implement your digital journey with confidence
                </p>
                <div class="button__wrapper">
                    <a href="/solutions/keep-control-while-moving-to-the-cloud" class="button primary">Discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- WHY FLAG SECTION -->

<section class="section--medium bg--primary flag-trigger">
    <div class="container">
        <div class="grid animation-4">
            <div class="animation-4__content solution-text--flag">
                <h3 class="text--tertiary">
                    Get ahead to become a leader
                </h3>
                <p class="text--large text--white">
                    Leverage artificial intelligence (AI) for competitive advantage
                </p>
                <div class="button__wrapper">
                    <a href="/solutions/leverage-artificial-intelligence-AI" class="button white">Discover
                        more</a>
                </div>
            </div>
            <div class="animation-4__image solution-image--flag">


                <div id="flag" class="animation__wrapper animation__wrapper--flag">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/flag--flag.png" alt="" class="image-1" style="z-index: 3">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/flag--arrows.png" alt="" class="image-3" style="z-index: 2">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/flag--icons.png" alt="" class="image-icons" style="z-index: 2">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/flag--grid.png" alt="" style="z-index: 1">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/flag--icons-large.png" alt="" class="image-2" style="z-index: 2">
                </div>

                <script>
                    var controller4 = new ScrollMagic.Controller();


                    // build tween
                    var tween4 = new TimelineMax()
                        .add([
                            TweenMax.fromTo("#flag .image-1", 1, {

                                right: -25
                            }, {

                                right: 25,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#flag .image-icons", 1, {

                                right: 15
                            }, {

                                right: -15,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#flag .image-2", 1, {

                                right: 5
                            }, {

                                right: -5,
                                ease: Linear.easeNone
                            }),
                            TweenMax.fromTo("#flag .image-3", 1, {

                                right: -2
                            }, {

                                right: 2,
                                ease: Linear.easeNone
                            })
                        ]);

                    // build scene
                    var scene = new ScrollMagic.Scene({
                            triggerElement: ".flag-trigger",
                            duration: '90%'
                        })
                        .setTween(tween4)
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controller4);
                </script>



            </div>
        </div>
    </div>
</section>


<?php get_footer();
