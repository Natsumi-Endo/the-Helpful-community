$(function() {
    // Add a click() method for #login-show
    $('#login-show').click(function(){
        console.log('run');
        $('#login-modal').fadeIn();
    });

    $('.signup-show').click(function() {
        console.log('run');
        $('#signup-modal').fadeIn();
      });
    
  });