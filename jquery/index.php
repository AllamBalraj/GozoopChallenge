<html>
<head>
	<title>Jquery Pratice</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<p> This is test Description.</p>
	<input type="text" class="check_keys">
	<button id="button">Change Color</button>
</body>
<script type="text/javascript">

	$(document).ready(function($){
		$('#button').click(function(e){
			$('p').css("color","red");
		});

		$('.check_keys').keydown(function(e){
			console.log('key down');
		});

		$('.check_keys').keyup(function(e){
			console.log('key_up');
		});

		$('.check_keys').keypress(function(e){
			console.log('Key press');
		});

		$('p').mouseenter(function(e){
			console.log('mouse enter');
		});

		$('p').mouseleave(function(e){
			console.log('mouse leave');
		});
	});
</script>
</html>