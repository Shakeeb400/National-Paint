<html>
	<head>
		<title>National paint</title>
		<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'poppins',sans-serif;
		}
			.header{
				
				width: 100%;
				height: 100vh;
				background-image: linear-gradient(rgba(12, 3, 51, 0.3),rgba(12, 3, 51, 0.3));
				position: relative;
				padding: 0 5%;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			nav{
				width: 100%;
				position: fixed;
				top: 0px;
				left: 0px;
				padding: 20px,8%;
				display: flex;
				align-items: center;
				justify-content: space-between;
				
			}
			nav .logo{
				
				width: 120px;
				margin: 10px;
			
			}
			nav ul{
			    margin-right: 30%;
				margin-top: -14px;

			}
			nav ul li{
				list-style: none;
				display: inline-block;
			
			}
			nav ul li a{
				padding: 10px 30px;
				margin-right: 5px;
				background-image: linear-gradient(pink, orange);
				color: white;
				text-decoration: none;
				box-shadow: 3px 3px 5px white;
				text-shadow: 2px 2px 3px pink;
				align: center;
				transition: 1s;
				
			}
			nav ul li a:hover{
				background-image: linear-gradient(yellow, purple);
				color: green;
				font-size: 20px;
				border: 2px solid green;
			}
			.content{
				
				text-align: center;
				
			}
			.content h1{
				
				font-size: 160px;
				color: #fff;
				font-weight: 600;
				transition: 1s;
			}
			.content h1:hover{
				
				color: transparent;
			}
			.content a {
				
				text-decoration: none;
				display: inline-block;
				color: #fff;
				font-size: 24px;
				border: 2px solid #fff;
				padding: 14px 70px;
				border-radius: 50px;
				margin-top: 20px;
				transition: 1s;
			}
			.content a:hover {
				
				background-image: linear-gradient(yellow, purple);
				font-size: 20px;
				border: 2px solid green;
			}
			.back-video{
				
				position: absolute;
				width: 100%;
				z-index: -1;
			}
			@media (min-aspect-ratio: 16/9){
				.back-video{
					width: 100%;
					height: auto;
					
				}
			}
			@media (max-aspect-ratio: 16/9){
				.back-video{
					width: auto;
					height: 100%;
					
				}
			}
		</style>
	</head>
	
	<body>
	<link rel='stylesheet' href='style/style.css' />
		<div class='header'>
			<video autoplay loop muted plays-inline  class='back-video'>
			<source src='videos/dulux.mp4' type='video/mp4'>
			</video>
			<nav>
				<img src='images/Dulux.png' class='logo'/>
				<ul>
					<li><a href='home.php'> Home </a></li>
					<li><a href='about.php'> About Us </a></li>
					<li><a href='product.php'> Products </a></li>
					<li><a href='contact.php'> Contact Us </a></li>
					<li><a href='logout.php'> Logout </a></li>
				</ul>
				
			</nav>
			<div class='content'>
				<h1> Well Come</h1>
				<a href='login.php'>Login</a>
			</div>
		</div>
	</body>
</html>
