$(function() {
    $('.tp-card').each(function(d) {
        setTimeout(function() {
          $('.tp-card').eq(d).addClass('card-anim');
        }, 300 * d);
    });
});