<!DOCTYPE html>
<html>
<head>
<title>
HNG Time project
</title>
<style>
body{
	background-color:skyblue;
}
h1{
	color: #c11b17;
	text-align: center;
	left: 0;
	line-height: 200px;
	margin: auto;
	margin-top: -100px;
	position: absolute;
	top: 50%;
	width: 100%;
}

h2{
	color: red;
	text-align: center;
	left: 0;
	line-height: 200px;
	margin: auto;
	margin-top: -100px;
	position: absolute;
	top: 60%;
	width: 100%;
}

</style>
</head>

<body>
	<h1>
		<strong>
				<?php
					echo "".date("l, m/d/Y");
						?>
		</strong>
	</h1>
	<h2>
		<strong>
		<?php
			echo "".date("h:i:a");
		?>
		</strong>
	</h2>
</body>
</html>