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
			<li>
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
			<li class="active">
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
					<h1>My Foods</h1>
					<ul class="breadcrumb">
						<li>
							<a href="my_foods.html">Food Details</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{url('/sellerdashboard')}}">Home</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="my-foods-container">

				<div class="food-grid">

                    @foreach ($data as $data )

                        @if($usermail==$data->email)
				        <div class="food-card">

					        <img src="foodimage/{{$data->image}}" alt="Food Item 1">
					        <h2>{{$data->name}}</h2>
					        <p>Rs.{{$data->price}}.00</p>
					        <p style="color: #a0a0a0; font-size: 14px;font-weight: 400;">{{$data->description}}</p>
                            <a href="{{url('/deletefood',$data->id)}}" class="remove-link">Remove</a>
                            <a href="{{url('/updatefood',$data->id)}}" class="update-link">Update</a>


				        </div>
                        @endif

                    @endforeach
				</div>
			  </div>


			</div>
		</main>

	</section>



	<script src="seller/source/script.js"></script>
</body>
</html>
