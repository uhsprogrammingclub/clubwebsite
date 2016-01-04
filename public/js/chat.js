var main = function() {
  $('.btn').click(function() {
    /*
    var post = $('.status-box').val();
    $('<li>').text(post).prependTo('.posts');
    $('.status-box').val('');
    $('.counter').text('2500');
    $('.btn').addClass('disabled'); 
    //ADDED MYSELF: $('.btn').type = "button";*/
  });
  
  $('.status-box').keyup(function() {

    var postLength = $(this).val().length;
    var charactersLeft = 1500 - postLength;
    $('.counter').text(charactersLeft);

    var badwords = ["hai hello"];
  
    if(charactersLeft < 0) {
      $('.btn').addClass('disabled');
      $('#validButton').attr('type', 'button');

    }
    else if(charactersLeft == 1500) {
      $('.btn').addClass('disabled');
      $('#validButton').attr('type', 'button');
    }
    else if ($("#no-account").length == 1) 
    {
      $('.btn').addClass('disabled');
     $('#validButton').attr('type', 'button');
    }
    else if ($.trim( $(this).val() ) == '' )
    {
        $('.btn').addClass('disabled');
     $('#validButton').attr('type', 'button');
    }
    else
    {
      $('.btn').removeClass('disabled');
      $('#validButton').attr('type', 'submit');
    }
  });

  $(document).scrollTop( $("#textarea").offset().top );  
}

$(document).ready(main);