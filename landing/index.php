


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Embeddable PHP Login System">
    <meta name="author" content="msaad1999">

    <title>landing | Techsta</title>
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">

    <link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome-5.12.0/css/all.min.css">
 
    <!-- Custom styles -->
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="custom.css" >

</head>

<body>

        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-2">

        

            <div class="container">
                <a class="navbar-brand" href="../home">

                                            <img src="../assets/images/logonotext.png" alt="" width="50" height="50" class="mr-3">
                    
                    Techsta
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   

 <!-- Right Side Of Navbar -->
 <ul class="navbar-nav ml-auto">

 <li class="nav-item">
                            <a class="nav-link" href="../landing">landing</a>
                        </li>

<li class="nav-item">
        <a class="nav-link" href="../chatroom">Chat room</a>
    </li>

<li class="nav-item">
        <a class="nav-link" href="../services">Our Services</a>
    </li>

<li class="nav-item">
        <a class="nav-link" href="../ctfs">Ctf</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="../welcome">BUG Bounty</a>
    </li>
















                        
                            <li class="nav-item">
                                <a class="nav-link" href="../contact">Contact Us</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="../login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../register">Signup</a>
                            </li>

                        




                    </ul>
                </div>
            </div>
            </nav>







<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>welcome to




		
		</title>
		<meta name="description" content="Infinite WebGL tubes as seen on Fornasetti.com made with Three.js" />
		<meta name="keywords" content="webgl, effect, tube, infinite, interactive, threejs, background, canvas" />
		<meta name="author" content="Louis Hoebregts for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normaliz.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body class="demo-1 loading">
		<svg class="hidden">
			
			
		</svg>
		<main>
			<header class="codrops-header">
				
				<body>
				<h1 class="codrops-header__title text-white"></h1>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>





// Function to scroll from top to bottom
function scrollDown() {
  window.scrollBy(0, 500); // Scrolls down 50 pixels
  if (window.innerHeight + window.pageYOffset >= document.body.scrollHeight) {
    clearInterval(scrollInterval);
    scrollInterval = setInterval(scrollUp, 500); // Scrolls up every 10 milliseconds
  }
}

// Function to scroll from bottom to top
function scrollUp() {
  window.scrollBy(0, -50); // Scrolls up 50 pixels
  if (window.pageYOffset === 0) {
    clearInterval(scrollInterval);
    scrollInterval = setInterval(scrollDown, 5000); // Scrolls down every 10 milliseconds
  }
}

let scrollInterval = setInterval(scrollDown, 10000); // Scrolls down every 10 milliseconds










const text = "HELLO  Bug Hunters ,Programmers , General Tech Folks and Eployers welcome to Techsta.As we all know no System is secure lets all secure it.";
let i = 0;

const type = () => {
  if (i < text.length) {
    $(".codrops-header__title").append(text.charAt(i));
    i++;
    setTimeout(type, 50);
  }
};

$(document).ready(() => {
  type();
  setInterval(() => {
    $(".codrops-header__title").toggleClass("font-bold");
  }, 500);
});
</script>

<style>
.codrops-header__title {
  font-size: 3rem;
  color: #fff;
}
.font-bold {
  font-weight: bold;
}
.codrops-header__title {
  font-size: 2rem;
  color: #fff;
}

</style>

				









































<div style="height: 1000px;"></div>








				<footer>



       
	<style>
		body {
		
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		table {
			border-collapse: collapse;
			margin: auto;
		}
		th, td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}
		th {
			background-color: #3CB371;
			color: white;
		}
		td {
			background-color: blue;
			color: white;
		}
		button {
			background-color: #3CB371;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
		}
		button:hover {
			background-color: #228B22;
		}
	</style>


	<h1 style="background-color: blue; color: white;">Our Services</h1>
	<table>
		<tr>
			<th>Service</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<tr>
			<td style="background-color: blue; color: white;">Pentesting/Bug Bounty Services</td>
			<td style="background-color: blue; color: white;">We provide penetration testing and bug bounty services to identify vulnerabilities in your systems and applications.</td>
			<td><button onclick="location.href='pentesting.html'">Learn More</button></td>
		</tr>
		<tr>
			<td style="background-color: blue; color: white;">CTFs</td>
			<td style="background-color: blue; color: white;">We organize Capture the Flag (CTF) events to test and improve your cybersecurity skills.</td>
			<td><button onclick="location.href='ctfs.html'">Learn More</button></td>
		</tr>
		<tr>
			<td style="background-color: blue; color: white;">Open Source Programming</td>
			<td style="background-color: blue; color: white;">We contribute to open source projects and develop our own open source software.</td>
			<td><button onclick="location.href='opensource.html'">Learn More</button></td>
		</tr>
		<tr>
			<td style="background-color: blue; color: white;">Web Hosting</td>
			<td style="background-color: blue; color: white;">We offer reliable and affordable web hosting services for small and medium-sized businesses.</td>
			<td><button onclick="location.href='webhosting.html'">Learn More</button></td>
		</tr>
		<tr>
			<td style="background-color: blue; color: white;">Tech Projects</td>
			<td style="background-color: blue; color: white;">We undertake various tech projects, from software development to hardware design and prototyping.</td>
			<td><button onclick="location.href='techprojects.html'">Learn More</button></td>
		</tr>
	</table>






				<h2 style="color: black;">meet us on</h2>

  <div class="social-media-links">
    <a href="https://twitter.com/example"><i class="fab fa-twitter"></i></a>
    <a href="https://facebook.com/example"><i class="fab fa-facebook"></i></a>
    <a href="https://instagram.com/example"><i class="fab fa-instagram"></i></a>
    <a href="https://linkedin.com/example"><i class="fab fa-linkedin"></i></a>
    <a href="https://youtube.com/example"><i class="fab fa-youtube"></i></a>
    <a href="https://pinterest.com/example"><i class="fab fa-pinterest"></i></a>
    <a href="https://chat.whatsapp.com/GeXTenyDUU26CkEiKG1U0z"><i class="fab fa-whatsapp"></i></a>
  </div>
</footer>

<style> 

#services {

  background-color: black;
}
footer {
 
  padding: 20px;
  text-align: center;
}

.social-media-links {
  display: flex;
  justify-content: center;
}

.social-media-links a {
  color: #333;
  font-size: 24px;
  margin: 0 10px;
}

.social-media-links a:hover {
  color: #007bff;
}
</style>


	<div class="container">
		<a class="navbar-brand" href="../home">


		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">

			</ul>

		   



			<script>


const text = "This is an example of an auto-typing text.";
let i = 0;

const type = () => {
  if (i < text.length) {
    document.querySelector(".text").innerHTML += text.charAt(i);
    i++;
    setTimeout(type, 50);
  }
};

type();



</script>

				<p class="codrops-header__tagline">Techsta bug bounty  , techsta ctfs  and other tech services chared by the shield admins </p>
			</header>
			<div class="content">
				<!-- The canvas where ThreeJs renders the WebGL -->
				<canvas id="scene"></canvas>
			</div>
		</main>
		<script src="js/vendors/three.min.js"></script>
		<script src="js/demo1.js"></script>
	</body>
</html>






<script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>



</body>



<footer>


</html>

