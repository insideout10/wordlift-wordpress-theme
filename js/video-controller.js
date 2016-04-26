var blogger = new Waypoint({
  element: document.getElementById('anchor-section-blogger'),
  handler: function() {
    $('video-blogger').toggleClass('not-this-section').toggleClass('this-section');
    $('video-about').addClass('not-this-section');
    $('video-enterprise').toggleClass('not-this-section');
    $('video-editorial').toggleClass('not-this-section');
  },
  offset: '15%'
});
