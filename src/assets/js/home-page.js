//Flickity Sliders

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  wrapAround: true,
  arrowShape: 'M84.5,45a4,4,0,0,1-4,4H22.2L40.3,67.2a3.9,3.9,0,0,1,0,5.6A3.9,3.9,0,0,1,37.5,74a4,4,0,0,1-2.9-1.2L9.7,47.8a3.9,3.9,0,0,1,0-5.6l24.9-25a4,4,0,0,1,5.7,0,3.9,3.9,0,0,1,0,5.6L22.2,41H80.5A4,4,0,0,1,84.5,45Z'
});


var elem = document.querySelector('.blog-carousel');
var flkty = new Flickity( elem, {
  // options
  wrapAround: true,
  arrowShape: 'M84.5,45a4,4,0,0,1-4,4H22.2L40.3,67.2a3.9,3.9,0,0,1,0,5.6A3.9,3.9,0,0,1,37.5,74a4,4,0,0,1-2.9-1.2L9.7,47.8a3.9,3.9,0,0,1,0-5.6l24.9-25a4,4,0,0,1,5.7,0,3.9,3.9,0,0,1,0,5.6L22.2,41H80.5A4,4,0,0,1,84.5,45Z'
});


// element argument can be a selector string
//   for an individual element
var why = new Flickity( '.why-carousel', {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    autoPlay: true,
    arrowShape: 'M84.5,45a4,4,0,0,1-4,4H22.2L40.3,67.2a3.9,3.9,0,0,1,0,5.6A3.9,3.9,0,0,1,37.5,74a4,4,0,0,1-2.9-1.2L9.7,47.8a3.9,3.9,0,0,1,0-5.6l24.9-25a4,4,0,0,1,5.7,0,3.9,3.9,0,0,1,0,5.6L22.2,41H80.5A4,4,0,0,1,84.5,45Z'
});

// Animate on Scroll

AOS.init();
