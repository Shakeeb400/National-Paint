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
			nav{
				width: 100%;
				position: fixed;
				top: 15px;
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
				transition: 0.5s;
				border-radius: 20px;
				
			}
			nav ul li a:hover{
				background-image: linear-gradient(yellow, purple);
				color: green;
				font-size: 15px;
				border: 2px solid green;
				border-radius: 40px;

			}
		
			
		</style>
	</head>
	
	<body>
		<div class='header'>
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
		</div>
	</body>
</html>

<?php 
		showmsg();
?>