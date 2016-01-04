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
    var charactersLeft = 2500 - postLength;
    $('.counter').text(charactersLeft);
  
    if(charactersLeft < 0) {
      $('.btn').addClass('disabled');
      $('.btn').type = "button";
      print("A");

    }
    else if(charactersLeft == 2500) {
      $('.btn').addClass('disabled');
      $('.btn').type = "button";
      print("B");
    }
    else if ($("#no-account").length == 1) 
    {
      $('.btn').addClass('disabled');
      $('.btn').type = "button";
      print("C");
    }
    else
    {
      $('.btn').removeClass('disabled');
      $('.btn').type = "submit";
      print("D");
    }
  });
  print("E");
}

$(document).ready(main);