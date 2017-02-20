$(document).ready(function() {
	$("#messages").show(0).delay(1000).hide(500);
	$("#show").click(function() {
		    $.jAlert({
      
      'image': 'https://media.tenor.co/images/556e9ff845b7dd0c62dcdbbb00babb4b/raw',
      'animationTimeout' : 3000

    });
	});
});
