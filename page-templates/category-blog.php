<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 

<style>
    .blog-container {
        max-width: 1070px;
    }
</style>

<!-- VACANCIES SECTION -->
<section class="section--large">
    <div class="grid-container blog-container">
        <div class="grid-x grid-padding-x grid-margin-x align-center">
            <div class="cell large-4 bg-bubble">
                <div class="position-relative" style="">
                    <img src="/assets/img/svg/speech-bubble.svg" alt="">
                    <div class="position-absolute" style="width: 85%; top:5%;left:10%;right:5%; text-align: left">
                        <p class="text--large text--tertiary">
                                "new ways to deliver cloud native applications are being used to scale the business"
                    </div>
                </div>
            </div>
            <div class="cell large-8">
                <ul>
                    <p>This 30-minute high level online solution demo will show how your organisation can:</p>
                    <li>See assets and dependencies in a single pane of glass, whether on premises or in the public or
                            private cloud</li>
                    <li>Empower security operations to perform essential prevention and detection</li>
                    <li>Start mapping from any piece of information—software, hardware, or services</li>
                    <li>Reduce service outages with predictable change and configuration management</li>
                </ul>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>