<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<section class="site-hero site-hero--contact">
  <div class="hero-content">
    <h1>Contact</h1>
    <p class="text--white">
  We enable you to continuously unlock the business <br />
  advantages that a tightly managed, highly agile and <br />
  cost-effective IT infrastructure can bring. <br />
  </p>
  </div>  
</section>

<style>
   label textarea {
   border: 3px solid grey!important;
   }
   textarea::placeholder {
   color: #444;
   }
   textarea[rows] {
   padding: 0.5rem;
   margin-top: 2rem;
   }
</style>


<!-- VACANCIES SECTION -->
<section class="section--large">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell medium-10 medium-offset-1 large-4 large-offset-1">
        <p>
          For all general enquiries:
        </p>
        <br />
        <p>
          <span class="text--primary">Main phone:</span> 0845 034 8000<br />
          <span class="text--primary">Helpdesk phone:</span> 0845 034 8001<br />
          <span class="text--primary">Fax:</span> 0845 872 3650
        </p>
        <br />
        <p>
          For all specific related enquiries:
        </p>
        <br />
        <p>
          <span class="text--primary">Sales:</span> sales@ktsl.com<br />
          <span class="text--primary">Support:</span> support@ktsl.com<br />
          <span class="text--primary">Careers:</span> careers@ktsl.com
        </p>
        <br />
        <p>
          <span class="text--primary">KTSL Limited</span><br />
          Unit 23, Leafield Industrial Estate<br />
          Corsham, Wiltshire, SN13 9RS<br />
        </p>
      </div>
      <div class="cell medium-10 medium-offset-1  large-4 large-offset-2 medium-10">
        <p class="text--subtitle" style="padding-bottom: 3rem;font-size:1.4rem;">Send us a message</p>
        <label>
          <input class="form form--grey" type="text" placeholder="Name" />
        </label>
        <label>
          <input class="form form--grey" type="text" placeholder="Email" />
        </label>
        <label>
          <input class="form form--grey" type="text" placeholder="Company name" />
        </label>
        <label>
          <textarea class="form form--grey" placeholder="Type your message here" rows="5"></textarea>
        </label>
        <a href="" class="button primary" style="padding: 0.8rem 3.5rem;margin-top:0;">Send</a>
      </div>
    </div>
  </div>
</section>

<style>
  .careers-wrapper {
    padding: 2rem 0;
    border-bottom: solid 2px #d3d3d4;
  }
</style>



<?php get_footer();