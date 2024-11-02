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
            <span class="fas fa-search"></span>
            <a href="#">Search</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-home"></span>
            <a href="{{url('/userdashboard')}}">Home</a>
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

        <h3 class="dashboard-title">Recommend Food For You</h3>
        <div class="dashboard-menu">
            <a href="#">Favorites</a>
            <a href="#">Best Seller</a>
            <a href="#">Near Me</a>
            <a href="#">Promotion</a>
            <a href="#">Top Rated</a>
            <a href="#">All</a>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images1.jpg" alt="Amazing Pizza">
                <div class="card-detail">
                    <h4>Amazing Pizza<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images2.jpg" alt="Fresh Salad">
                <div class="card-detail">
                    <h4>Fresh Salad<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images3.jpg" alt="Sweet Pancake">
                <div class="card-detail">
                    <h4>Sweet Pancake<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images4.jpg" alt="Well Done Steak">
                <div class="card-detail">
                    <h4>Well Done Steak<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images5.jpg" alt="Health Breakfast">
                <div class="card-detail">
                    <h4>Health Breakfast<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="Student(user)/images6.jpg" alt="Fantastic Burger">
                <div class="card-detail">
                    <h4>Fantastic Burger<span>$30</span></h4>
                    <p>Lorem ipsum dolor sit</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 15-30 mins</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Dashboard -->
    <div class="dashboard-order">
        <h3>Order Menu</h3>
        <div class="order-address">
            <p>Address Delivery</p>
            <h4>221 B Baker Street, London</h4>
        </div>
        <div class="order-time">
            <span class="fas fa-clock"></span> 30 mins <span class="fas fa-map-marker-alt"></span> 2km
        </div>
        <div class="order-wrapper">
            <div class="order-card">
                <img class="order-image" src="Student(user)/images4.jpg" alt="Order Image">
                <div class="order-detail">
                    <p>Lorem ipsum dolor sit amet</p>
                    <i class="fas fa-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">$35</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="Student(user)/images5.jpg" alt="Order Image">
                <div class="order-detail">
                    <p>Lorem ipsum dolor sit amet</p>
                    <i class="fas fa-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">$40</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="Student(user)/images6.jpg" alt="Order Image">
                <div class="order-detail">
                    <p>Lorem ipsum dolor sit amet</p>
                    <i class="fas fa-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">$50</h4>
            </div>
        </div>
        <hr class="divider">
        <div class="order-total">
            <p>Subtotal<span>$156</span></p>
            <p>Tax (10%)<span>$15.6</span></p>
            <p>Delivery fee<span>$3</span></p>
            <div class="order-promo">
                <input class="input-promo" type="text" placeholder="Apply Voucher">
                <button type="button" class="button-promo">Find</button>
            </div>
            <hr class="divider">
            <p>Total <span>$174.6</span></p>
        </div>
        <button type="button" class="checkout">Checkout</button>
    </div>
</body>
</html>

