<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Base64 Image Optimization</title>
	
	<style>
		body {
			font-family: sans-serif;
			max-width: 1140px;
			margin: auto;
			padding: 15px;
		}
		h1 {
			text-align: center;
		}
		p {
			line-height: 30px;
		}
		code {
			display: block;
			padding: 7px 0;
			color: #bf3a3a;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<h1>Simple Base64 Image Optimization</h1>
	<p>
		This simple php script will help you to optimize your local image when loading into site.
	</p>
	<p>
		<strong>How to call ? </strong> <br>
		put the <i>img.php</i> file into your server root folder, or project root folder. And then call it like below  
	 
		<code>
			img=media_directory/image.jpg
		</code> is actually your image path and  
		<code>
			r=0.5
		</code> is the ratio  
		So, the code will be like <code>&lt;img src="img.php?img=media_directory/image.jpg&amp;r=0.5" alt="Image"&gt;</code>
	</p>
	<p>
		Based on the value of r, image size will be normal or small
	</p>
	<h3> 10% Optimized Image </h3>
	<img src="img.php?img=media/owl.jpg&r=0.1" alt="10% Optimized Image">
	<h3> 25% Optimized Image </h3>
	<img src="img.php?img=media/owl.jpg&r=0.25" alt="25% Optimized Image">
	<h3> 50% Optimized Image </h3>
	<img src="img.php?img=media/owl.jpg&r=0.5" alt="0.5% Optimized Image">
	<h3> Original Image </h3>
	<img src="media/owl.jpg" alt="Original Image">
</body>
</html>