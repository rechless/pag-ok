$(function(){
    let arrow = $('article h3 img');
    arrow.on('click', function() {
      if(!window.clicked) {
        $(this).parent().parent().find('p').show();
        clicked = true;
      } else {
        $(this).parent().parent().find('p').hide();
        clicked = false;
      }
    })
})
