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


<!-- VACANCIES SECTION -->
<section class="section--large">
  <div class="container">
    <div class="grid">
      <div class="contact-info">
        <p>
          For all general enquiries:
        </p>
        <br />
        <p>
          <span class="text--primary">Main phone:</span> <a class="text--body" href="tel:08450348000">0845 034 8000</a> <br />
          <span class="text--primary">Helpdesk phone:</span> <a class="text--body" href="tel:08450348001">0845 034 8001</a>
        </p>
        <br />
        <p>
          For all specific related enquiries:
        </p>
        <br />
        <p>
          <span class="text--primary">Sales:</span> <a class="text--body" href="mailto:sales@ktsl.com?Subject=KTSL%20Sales">sales@ktsl.com</a><br />
          <span class="text--primary">Support:</span> <a class="text--body" href="mailto:support@ktsl.com?Subject=KTSL%20Support">support@ktsl.com</a><br />
          <span class="text--primary">Careers:</span> <a class="text--body" href="mailto:careers@ktsl.com?Subject=KTSL%20Careers">careers@ktsl.com</a>
        </p>
        <br />
        <address>
          <a href="https://goo.gl/maps/NBuwKqSDHBbPkLRr9" target="_blank"><span class="text--primary">KTSL Limited</span><br />
          <span class="text--body">Unit 23, Leafield Industrial Estate<br />
          Corsham, Wiltshire, SN13 9RS<br /></span></a>
        </address>
      </div>
      <div class="contact-form">
        <p class="text--subtitle contact-form__title">Send us a message</p>
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
        <a href="" class="button primary contact-form__button">Send</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();