$('.packet__item').click(function(){
  $('.packet__item').removeClass('packet__item--selected');
  $(this).addClass('packet__item--selected');
});