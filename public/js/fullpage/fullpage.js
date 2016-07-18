$(document).ready(function(){
	$('#fullpage').fullpage({
		anchors: ['gioi_thieu', 'phap_ly', 'tien_ich_noi_khu', 'thuc_te_du_an', 'lien_he'],
		enu: '#menu',
		scrollOverflow: true,
		scrollOverflowOptions: 
		{
			scrollbars: true,
			mouseWheel: true,
			hideScrollbars: false,
			fadeScrollbars: false,
			disableMouse: true,
			loopTop: true
		},
		css3:false
	});
	$(".btn-pref .btn").click(function () {
		$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
	});
});