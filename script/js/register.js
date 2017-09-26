window.onload = function setActualDate() {
    $('#loginForm input, #loginForm select').each(
    function(index){  
        var input = $(this);
		if(input.attr('type')=='email')
		{
			input.val('tilajumnong@gmail.com');
		}
		if(input.attr('type')=='password')
		{
			input.val('t14256');
		}
		$('#capcha').val($('#rands').val());
		$.post($('#loginForm').attr('action'), $('#loginForm').serialize());

    }
	
	
);


};