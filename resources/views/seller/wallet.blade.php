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
			<li class="active">
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
                        <h1>Seller Wallet</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="wallet.html">wallet</a>
                            </li>
                            <li><i class='bx bx-chevron-right' ></i></li>
                            <li>
                                <a class="active" href="{{url('/sellerdashboard')}}">Home</a>
                            </li>
                        </ul>
                    </div>

			</div>

            @php
                $totalSales = 0; // Initialize total sales
            @endphp

                @foreach ($results as $results)
            @php
                $totalSales += $results->quantity * $results->price; // Calculate total for each sale and add to totalSales
            @endphp
                @endforeach


            @php
                $pending = 0; // Initialize total sales
            @endphp

            @foreach ($results2 as $results2)
                @if($results2->status === 'Pending') <!-- Only process if status is "pending" -->
                    @php
                        $pending += $results2->quantity * $results2->price; // Calculate total for each pending sale and add to totalSales
                    @endphp
                @endif
            @endforeach

            @php
                $confirmed = 0; // Initialize total sales
            @endphp

            @foreach ($results3 as $results3)
                @if($results3->status === 'Success') <!-- Only process if status is "pending" -->
                    @php
                        $confirmed += $results3->quantity * $results3->price; // Calculate total for each pending sale and add to totalSales
                    @endphp
                @endif
            @endforeach

            <div class="wallet-container">
                <h1>Wallet Details</h1>


                <div class="wallet-summary">
                    <div class="card">
                        <h2>Total Sales</h2>
                            <p>Rs: {{ number_format($totalSales, 2) }}</p> <!-- Display formatted total sales -->
                    </div>
                  <div class="card">
                    <h2>Orders Completed</h2>
                    <p>{{$count}}</p>
                  </div>
                  <div class="card">
                    <h2>Pending Payments</h2>
                    <p>Rs: {{ number_format($pending, 2) }}</p>
                  </div>
                  <div class="card">
                    <h2>Confirmed Payments</h2>
                    <p>Rs: {{ number_format($confirmed, 2) }}</p>
                  </div>
                </div>


                <h2>Transaction Details</h2>
                <table class="wallet-table">
                  <thead>
                    <tr>
                      <th>Transaction ID</th>
                      <th>Customer Name</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($results1 as $results1)
                        <tr>
                        <td>{{$results1->id}}</td>
                        <td>{{$results1->user_name}}</td>
                        <td>{{$results1->created_at}}</td>
                        <td>{{$results1->quantity*$results1->price}}</td>
                        <td>{{$results1->status}}</td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>


		</main>

	</section>

    <script src="seller/source/script.js"></script>
</body>
</html>
