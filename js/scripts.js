/*--------------------------------------
Contact Page
-----------------------------------------------------*/

$(document).ready(function() {


    
    $('.show_richmond').click(function() {
        $('.richmond-map').removeClass('hidden_map');
        $('.burnaby-map').addClass('hidden_map');
    });
  
    
   
    
    $('.show_burnaby').click(function() {
        $('.burnaby-map').removeClass('hidden_map');
        $('.richmond-map').addClass('hidden_map');
    });
   



});

/*--------------------------------------
End of Contact Page
-------------------------------------*/