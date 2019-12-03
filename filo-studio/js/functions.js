
var $video = $('.autostart');
/*
$video.on('click',function(){
	//alert('CLICK!');
	$video.get(0).play();
});*/

$video.on('mouseenter',function(){
	//alert('WORKS!');
	$video.get(0).play();
});

$video.on('mouseout',function(){
	//alert('WORKS!');
	$video.get(0).pause();
});

$('.tile__details').click(function(){
	$(this).hide();
});