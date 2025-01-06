<?php
	session_start();
	require('inc/function1.php');
	
	checkuser();
	
	include('inc/header1.php');
?>
<html>
<head>
    <title>About Us - Paint Shop</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			line-height: 1.6;
			margin: 0;
			padding: 0;
			background-color: #f8f9fa;
			color: #333;
		}

		.about-us {
			background-color: #fff;
			padding: 2rem;
			margin: 2rem auto;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			max-width: 800px;
			border-radius: 8px;
			margin-top: 7%;
		}

		.container {
			width: 90%;
			margin: 0 auto;
		}

		.about-us h1 {
			text-align: center;
			margin-top: 25px;
			color: #007bff;
			margin-bottom: 1rem;
		}

		.about-us p {
			margin-bottom: 1rem;
			font-size: 1rem;
			color: #555;
		}

		.about-us b {
			color: #007bff;
		}

		.about-us i {
			font-style: italic;
			color: #555;
		}
</style>
</head>
<body>
<link rel='stylesheet' href='style/style.css' />
    <section class="about-us">
        <div class="container">
            <h1>About Us</h1>
            <p>
                Welcome to <b>National Paint & Hardware Store </b>, your one-stop destination for all your painting needs!
            </p>
            <p>
                With a passion for colors and a commitment to quality, we have been serving homeowners, contractors, 
                and businesses since <i>2010</i>. Whether you’re looking to refresh your space, protect your property, 
                or create a stunning masterpiece, we have the right products and expertise to bring your vision to life.
            </p>
            <p>
                At <b>Dulux Paint & Hardware Store</b>, we offer a wide range of premium paints, coatings, and supplies from 
                trusted brands, ensuring durability, vibrancy, and long-lasting results. From wall paints and wood finishes 
                to industrial coatings, we cater to projects of every size and scale.
            </p>
            <p>
                Our knowledgeable team is here to provide personalized advice, color consultations, and tips to make your painting 
                project smooth and hassle-free. Customer satisfaction is our top priority, and we take pride in helping our clients 
                transform their spaces with confidence.
            </p>
            <p>
                Visit us today at <b>National Paint Store Alabbas plaza shop no 8 & 9 near Alhaseeb CNG Khanna pull Rawalpindi.</b> or explore our offerings online, and let’s make your world more colorful!<br /><b><a href='https://wa.me/message/I7VCOX5DZ5HSK1?src=qr'>WhatsApp Link</a> </b>
            </p>
        </div>
    </section>
</body>
</html>
<?php

	showmsg();

?>