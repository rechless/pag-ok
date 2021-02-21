$(function(){
  {
    let arrow = $('article h3 img');
    let clicked  = false;
    arrow.on('click', function() {
      if(!clicked) {
        $(this).parent().parent().find('p').show();
        clicked = true;
      } else {
        $(this).parent().parent().find('p').hide();
        clicked = false;
      }
    })
  }
})
