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
			<li class="active">
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
                        <h1>Orders</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="order.html">Orders</a>
                            </li>
                            <li><i class='bx bx-chevron-right' ></i></li>
                            <li>
                                <a class="active" href="{{url('/sellerdashboard')}}">Home</a>
                            </li>
                        </ul>
                    </div>

			</div>

            <!-- order details seller -->
            <div class="order-container">
                <h1>Order Details</h1>
                <table class="order-table">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer Name</th>
                      <th>Food Item</th>
                      <th>Quantity</th>
                      <th>Price_1_Potion</th>
                      <th>Total Price</th>
                      <th>Order Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($results as $results)
                        <tr>
                        <td>{{$results->id}}</td>
                        <td>{{$results->user_name}}</td>
                        <td>{{$results->food_name}}</td>
                        <td>{{$results->quantity}}</td>
                        <td>{{$results->price}}</td>
                        <td>{{$results->quantity*$results->price}}</td>
                        <td>{{$results->created_at}}</td>
                        <td>
                            <form action="{{url('/statuspass',$results->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="success">
                                <div class="button-box"> <!-- Wrap the button in a box -->
                                    @if($results->status==null)
                                        <button type="submit" class="btn btn-success">Done</button>
                                        @else
                                        {{$results->status}}
                                    @endif
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                  </tbody>

                </table>
              </div>
              <!-- End of order details -->






		</main>

	</section>

    <script src="seller/source/script.js"></script>
</body>
</html>
