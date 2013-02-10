<script type ="text/javascript" src="{ROOT_PATH}js/jquery/jquery.js" ></script>

<!-- Fancybox 2 starts here -->
<script type="text/javascript" src="{ROOT_PATH}js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="{ROOT_PATH}js/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="{ROOT_PATH}js/fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="{ROOT_PATH}js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="{ROOT_PATH}js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="{ROOT_PATH}js/fancybox/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" type="text/css" href="{ROOT_PATH}js/fancybox/helpers/jquery.fancybox-thumbs.css" />
<link rel="stylesheet" type="text/css" href="{ROOT_PATH}js/fancybox/helpers/jquery.fancybox-buttons.css" />

<script type="text/javascript">
$(document).ready(function() {
	$("a.fancybox").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			buttons	: {}
		}
	});
	$('a.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
</script>