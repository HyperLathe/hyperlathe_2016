$('#load').click(function(){
    $('#test').html('');
    $('#loadingGif').show();
    $('#test').load('content.html #extra', function(){
      $('#loadingGif').hide();
  });
});