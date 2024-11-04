<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="Student(user)/style.css">
    <!-- Font: Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- Icons: Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <!-- Header -->
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="fas fa-shopping-cart"></span> Cart</label>

    <h3 class="logo">UNIFOOD</h3>


    <!-- Sidebar -->
    <nav class="sidebar">

        <div class="sidebar-menu">
            <span class="fas fa-home"></span>
            <a href="{{url('/userdashboard')}}">Home</a>
        </div>

        <div class="sidebar-menu">
            <span class="fas fa-search"></span>
            <a href="{{url('/explore')}}">Explore</a>
        </div>

        <div class="sidebar-menu">
            <span class="fas fa-heart"></span>
            <a href="#">Favs</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-user"></span>
            <a href="{{url('/profile')}}">Profile</a>
        </div>
    </nav>



    <!-- Main Dashboard -->
    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="Student(user)/images-banner.jpg" alt="Dashboard Banner">
        </div>




        <div class="dashboard-content">

                            @foreach($data as $data)

                            <form action="{{url('/addcart',$data->id)}}" method="post" class="dashboard-card">
                                @csrf
                                <button type="submit" style="all: unset; cursor: pointer; width: 100%;">
                                    <div>
                                        <img class="card-image" src="foodimage/{{$data->image}}" alt="Image of {{$data->name}}">
                                        <div class="card-detail">
                                            <h4>{{$data->name}} <span>Rs. {{$data->price}}.00</span></h4>
                                            <p>{{$data->description}}</p>
                                            <p class="card-time"><span class="fas fa-clock"></span> {{ $data->vendor_name}}</p>
                                        </div>
                                    </div>
                                </button>
                            </form>


                            @endforeach





        </div>
    </div>

    <!-- Order Dashboard -->

    @include('user.ordercart')
    
</body>
</html>

