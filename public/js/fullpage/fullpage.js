$(document).ready(function(){
	$('#fullpage').fullpage({
			  sectionsColor: ['#ffffff', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
			  anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
			  menu: '#menu',
			  scrollOverflow: true,
				scrollOverflowOptions: {
					scrollbars: true,
			        mouseWheel: true,
			        hideScrollbars: false,
			        fadeScrollbars: false,
			        disableMouse: true,
			        loopTop: true
				}
			});
});