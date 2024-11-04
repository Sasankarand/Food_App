<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="seller/source/style.css">

	<title>UniFood</title>
</head>
<body>



	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">UniFood</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{url('/sellerdashboard')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Seller Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{url('/addnewfood')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Add new food</span>
				</a>
			</li>
			<li>
				<a href="{{url('/orders')}}">
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="{{url('/wallet')}}">
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">Wallet</span>
				</a>
			</li>
			<li>
				<a href="{{url('/myfoods')}}">
					<i class='bx bxs-food-menu'></i>
					<span class="text">My Foods</span>
				</a>
			</li>

		</ul>
	</section>


	<section id="content">

		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<x-app-layout></x-app-layout>
			<a href="#" class="profile">
                <img src="seller/source/download.jpg">
			</a>
			<a href="" class="notification">
				<i class='bx bxs-bell' ></i>
			</a>
		</nav>



		<main>
			<div class="head-title">
				<div class="left">
					<h1>Seller Dashboard</h1>

				</div>

			</div>
			<div>
				<section class="food-gallery">
					<div class="food-card">
					  <img src="seller/source/food1.jpg" alt="Food Item 1">
					  <p>Chicken Rice </p>
					</div>
					<div class="food-card">
					  <img src="seller/source/food2.jpg" alt="Food Item 2">
					  <p>Hoppers & Curry</p>
					</div>
					<div class="food-card">
					  <img src="seller/source/food3.jpg" alt="Food Item 3">
					  <p>String Hoppers</p>
					</div>
					<div class="food-card">
						<img src="seller/source/food4.jpg" alt="Food Item 4">
						<p>Kothtu</p>
					  </div>
					  <div class="food-card">
						<img src="seller/source/food5.jpg" alt="Food Item 5">
						<p>Cheese Koththu</p>
					  </div>
					  <div class="food-card">
						<img src="seller/source/food6.jpg" alt="Food Item 6">
						<p>Rice & curry</p>
					  </div>
					  <div class="food-card">
						<img src="seller/source/food7.jpg" alt="Food Item 7">
						<p>Short Eats</p>
					  </div>
					  <div class="food-card">
						<img src="seller/source/food8.jpg" alt="Food Item 8">
						<p>Egg Rice</p>
					  </div>
				  </section>
				</div>

		</main>

	</section>



	<script src="seller/source/script.js"></script>
</body>
</html>

