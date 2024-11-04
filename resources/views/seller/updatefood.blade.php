<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
            <div>
                <div class="head-title">
                    <div class="left">
                        <h1>Update</h1>
                        <ul class="breadcrumb">
                            <li><i class='bx bx-chevron-right' ></i></li>
                            <li>
                                <a class="active" href="{{url('/sellerdashboard')}}">Home</a>
                            </li>
                        </ul>
                    </div>

			</div>
            <div class="form-container">
                <h1>Update</h1>
                <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                  <label for="itemName">Item Name:</label>
                  <input type="text" name="foodname" required value="{{$data->name}}">

                  <label for="description">Description:</label>
                  <input type="text" name="description" rows="4" value="{{$data->description}}" required>

                  <label for="price">Price:</label>
                  <input type="number" id="price" name="price" value="{{$data->price}}" required>

                  <label for="image"> New Image:</label>
                  <input type="file" name="image">

                  <label for="image"> Old Image:</label>
                  <img height="200" width="200" src="/foodimage/{{$data->image}}">

                  <button type="submit">Update</button>
                </form>
              </div>

		</main>

	</section>

    <script src="seller/source/script.js"></script>
</body>
</html>
