<?php
	session_start();
	require('inc/function1.php');

	checkuser();

	include('inc/header1.php');
?>
<html>
<head>
    <title>Products - Paint Shop</title>
    <style>

			body {
				font-family: Arial, sans-serif;
				line-height: 1.6;
				margin: 0;
				padding: 0;
				background-color: #f4f4f9;
				color: #333;
			}

			h1 {
				text-align: center;
				margin-top: 30px;
				color: #0056b3;
			}
			h2 {
				text-align: center;
				color: #0056b3;
			}

			.products {
				padding: 2rem;
				max-width: 1000px;
				margin: 2rem auto;
				background-color: #fff;
				border-radius: 8px;
				box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			}

			.container {
				width: 90%;
				margin: 0 auto;
			}

			.product-category {
				margin-bottom: 2rem;
			}

			.product-category h2 {
				font-size: 1.5rem;
				color: #007bff;
				border-bottom: 2px solid #007bff;
				padding-bottom: 0.5rem;
				margin-bottom: 1rem;
			}

			.product-category ul {
				list-style-type: disc;
				margin-left: 1.5rem;
			}

			.product-category li {
				margin-bottom: 0.5rem;
				font-size: 1rem;
				color: #555;
			}

			strong {
				color: #007bff;
			}

	</style>
</head>
<body>
    <section class="products">
        <div class="container">
            <h1>Our Products</h1>
            
            <!-- Paint Products -->
            <div class="product-category">
                <h2>Paint Products</h2>
                <ul>
                    <li><strong>Interior Paints:</strong> Emulsion paints, washable, stain-resistant, and available in matte, satin, and gloss finishes.</li>
                    <li><strong>Exterior Paints:</strong> Weather-resistant, UV-protected, and anti-fungal options for durability and vibrant colors.</li>
                    <li><strong>Specialty Coatings:</strong> Textured, metallic, pearl-effect paints, and heat-resistant coatings.</li>
                    <li><strong>Primers & Undercoats:</strong> Options for drywall, wood, metal, and concrete surfaces for smooth application.</li>
                </ul>
            </div>

            <!-- Hardware Products -->
            <div class="product-category">
                <h2>Hardware Products</h2>
                <ul>
                    <li><strong>Painting Tools:</strong> High-quality brushes, rollers, paint pads, and accessories like trays and liners.</li>
                    <li><strong>Surface Preparation Tools:</strong> Sandpaper, scrapers, putty knives, and filling compounds.</li>
                    <li><strong>Sprayers & Accessories:</strong> Handheld and airless sprayers, spray nozzles, and cleaning kits.</li>
                    <li><strong>Safety Equipment:</strong> Dust masks, gloves, protective goggles, and drop cloths.</li>
                </ul>
            </div>

            <!-- Woodcare Products -->
            <div class="product-category">
                <h2>Woodcare Products</h2>
                <ul>
                    <li><strong>Wood Stains:</strong> Enhance natural wood beauty with UV-resistant shades and transparencies.</li>
                    <li><strong>Varnishes & Sealants:</strong> Glossy, satin, and matte finishes for moisture and scratch protection.</li>
                    <li><strong>Wood Primers & Fillers:</strong> Prepares surfaces, fills cracks, and ensures smooth finishes.</li>
                    <li><strong>Polishes & Care Products:</strong> Furniture polishes, cleaners, and anti-termite treatments.</li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
