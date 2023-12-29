/******************************************************************************************
 *** All rights reserved belong to the module, the module developers https://oc-day.ru  *** 
 *** https://oc-day.ru © 2017-2021 All Rights Reserved                                  ***
 *** Distribution, without the author's consent is prohibited                           ***
 *** Commercial license                                                                 ***
 ******************************************************************************************/
$(document).ready(function() {
  $('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    iframe: {
      markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
          '</div>', 
      patterns: {
        youtube: {
          index: 'youtube.com/', 
          id: function(url) {        
            var match = url.match(/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/);
            return (match&&match[7].length==11)?match[7]:false;
          },
          src: '//www.youtube.com/embed/%id%?autoplay=1'
        },
        youtube_short: {
          index: 'youtu.be/',
          id: function( url ) {
            var m = url.match( /^.+youtu.be\/([^?]+)/ );
            if ( null !== m ) {
              return m[1];
            }

            return null;
          },
          src: '//www.youtube.com/embed/%id%?autoplay=1'
        },
        vimeo: {
          index: 'vimeo.com/', 
          id: function(url) {        
            var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
            if ( !m || !m[5] ) return null;
            return m[5];
          },
          src: '//player.vimeo.com/video/%id%?autoplay=1'
        },
      },
      srcAction: 'iframe_src',
    },  
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });
});
