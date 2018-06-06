<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="animate/animate.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" type="text/css" href="gallery_plugin/venobox/venobox.css" media="screen">
	<script type="text/javascript" src="gallery_plugin/venobox/venobox.js" media="screen"></script>
	<script src="jQuery/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="wrapper">
	<li>
<a href="image/one.jpg" id="firstlink"  class="venobox venoboxajax vbox-item" data-type="ajax"><img src="image/one.jpg"></a>
<a class="venobox_custom" data-vbtype="iframe" href="image/one.jpg">open iFrame</a>

</li>
	<script>
		$(document).ready(function(){
$('.venobox').venobox({
        framewidth: '400px',        // default: ''
        frameheight: '300px',       // default: ''
        border: '10px',             // default: '0'
        bgcolor: '#5dff5e',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });
});

		// $(document).ready(function(){
		// 	$('.venobox').venobox({
  //             // overlayClose='true',
  //             // closeColor='#d2d2d2',
  //             // bgcolor: '#5dff5e',
  //             overlayColor:'rgba(255,255,255,0.85)'
  //    			});
		// });
	</script>
	</div>
</body>
</html>