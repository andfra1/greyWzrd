$('#burger').click(function () {
  if ($(this).hasClass('burger--change')) {
    $(this).removeClass('burger--change');
    $('.header__items').removeClass('header__items--show');
  } else {
    $(this).addClass('burger--change');
    $('.header__items').addClass('header__items--show');
  }
});