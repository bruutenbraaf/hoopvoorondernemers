var controller = new ScrollMagic.Controller();
var tween = TweenMax.to("nav .row", 1, { className: "+=row--change" });
var scene = new ScrollMagic.Scene({ duration: 300 })
  .setTween(tween)
  .addTo(controller)

var tween = TweenMax.to("nav", 1, { className: "+=changed" });
var scene = new ScrollMagic.Scene({ duration: 10 })
  .setTween(tween)
  .addTo(controller)

// Lawyer

jQuery('.lawyer span').each(function () {
  var me = jQuery(this)
    , t = me.text().split(' ');
  me.html('<strong>' + t.shift() + '</strong> ' + t.join(' '));
});

// Review

jQuery('.review .name').each(function () {
  var me = jQuery(this)
    , t = me.text().split(' ');
  me.html('<strong>' + t.shift() + '</strong> ' + t.join(' '));
});

// Counter

jQuery(window).load(function() {
  jQuery('.count').each(function() {
      var $this = jQuery(this);
      jQuery({Counter: 0}).animate({Counter: $this.text()}, {
          duration: 3000,
          easing: 'swing',
          step: function() {
              var num = Math.ceil(this.Counter).toString();
              if(Number(num) > 999){
                  while (/(\d+)(\d{3})/.test(num)) {
                      num = num.replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                  }
              }
              $this.text(num);
          }
      });
  });
});