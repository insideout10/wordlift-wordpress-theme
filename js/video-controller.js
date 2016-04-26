var windowHeight = - jQuery(window).height();

jQuery(document).ready(function() {
  var blogger = new Waypoint({
    element: document.getElementById('anchor-section-blogger'),
    handler: function(direction) {
      console.log('Scrolled '+ direction + ' blogger!');
      if (direction == 'down'){
        jQuery('body').animate(
          {scrollTop: jQuery('#anchor-section-blogger').offset().top}, "fast"
        );
        jQuery('.video-blogger').css({'opacity' : '1'});
        jQuery('.video-about').css({'opacity' : '0'});
      } else {
        jQuery('.video-blogger').css({'opacity': '0'});
        jQuery('.video-about').css({'opacity': '1'});
      }
    },
    offset: '95%'
  });
});

jQuery(document).ready(function() {
  var blogger = new Waypoint({
    element: document.getElementById('anchor-section-editorial-team'),
    handler: function(direction) {
      console.log('Scrolled '+ direction + ' editorial!');
      if (direction == 'down'){
        jQuery('body').animate(
          {scrollTop: jQuery('#anchor-section-editorial-team').offset().top}, "fast"
        );
        jQuery('.video-editorial').css({'opacity': '1'});
        jQuery('.video-blogger').css({'opacity': '0'});
      } else {
        jQuery('.video-editorial').css({'opacity': '0'});
        jQuery('.video-blogger').css({'opacity': '1'});
      }
    },
    offset: '95%'
  });
});

jQuery(document).ready(function() {
  var enterprise = new Waypoint({
    element: document.getElementById('anchor-section-enterprise'),
    handler: function(direction) {
      console.log('Scrolled '+ direction + ' enterprise!');
      if (direction == 'down'){
        jQuery('body').animate(
          {scrollTop: jQuery('#anchor-section-enterprise').offset().top}, "fast"
        );
        jQuery('.video-enterprise').css({'opacity': '1'});
        jQuery('.video-editorial').css({'opacity': '0'});
      } else {
        jQuery('.video-enterprise').css({'opacity': '0'});
        jQuery('.video-editorial').css({'opacity': '1'});
      }
    },
    offset: '95%'
  });
});

jQuery(document).ready(function() {
  var enterprise = new Waypoint({
    element: document.getElementById('plan-and-price'),
    handler: function(direction) {
      console.log('Scrolled '+ direction + ' plan and price!');
      if (direction == 'down'){
        jQuery('body').animate(
          {scrollTop: jQuery('#plan-and-price').offset().top}, "fast"
        );
        jQuery('.video-about').css({'opacity': '1'});
        jQuery('.video-enterprise').css({'opacity': '0'});
      } else {
        jQuery('.video-about').css({'opacity': '0'});
        jQuery('.video-enterprise').css({'opacity': '1'});
      }
    },
    offset: '95%'
  });
});
