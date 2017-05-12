jQuery(document).ready(function() {
  "use strict";
  
  jQuery('img').addClass('img-responsive');
  
  var sticky = new Waypoint.Sticky({
    element: jQuery('#navbar')[0]
  });
  
  
// SCROLL REVEAL
  
    window.sr = ScrollReveal();
    sr.reveal('.sr_default', {
      duration: 1000,
    });


});
