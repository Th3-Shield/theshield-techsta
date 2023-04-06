
<?php

define('TITLE', "Welcome");
include '../assets/layouts/header.php';


?>


<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>welcome to techsta ctf </title>
		<meta name="description" content="Infinite WebGL tubes as seen on Fornasetti.com made with Three.js" />
		<meta name="keywords" content="webgl, effect, tube, infinite, interactive, threejs, background, canvas" />
		<meta name="author" content="Louis Hoebregts for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script>document.documentElement.className = 'js';</script>
	
<p style="text-align: center;">techsta ctf is a beginner CTF</p>
    <p style="text-align: center;"> the ctf format is shieldctf{iam_the_flag}. space is not allowed when submitting the flag.</p>
    <h2 style="text-align: center;">click START button to start the ctf .</h2>
    <div style="text-align: center;">
	<input type="button" onclick="window.location.href='https://techstactf.up.railway.app/setup';" value="START" />
	</head>
    </div>
<body class="demo-2">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
		</svg>
		<main>
			
		<style>
      input[type="button"] {
        background-color: green;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-top: 50px;
      }
    </style>






			<div class="content">
				<!-- The canvas where ThreeJs renders the WebGL -->
				<canvas id="scene" class="clickable"></canvas>
			</div>
		</main>
		<script src="js/vendors/three.min.js"></script>
		<script src="js/vendors/TweenMax.min.js"></script>
		<script src="js/demo2.js"></script>



		
	</body>
</html>
