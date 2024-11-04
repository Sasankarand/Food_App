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
            <a href="{{url('/oders')}}">Orders</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-user"></span>
            <a href="{{url('/profile')}}">Profile</a>
        </div>
    </nav>

    <div class="order-container">
                <h1>Order Details</h1>
                <table class="order-table">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Order ID</th>
                      <th>Food Item</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Seller</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2024-10-01</td>
                      <td>001_Uni</td>
                      <td>Chicken Rice</td>
                      <td>2</td>
                      <td>1000.00</td>
                      <td>Sadali</td>
                      <td class="status-pending">Pending</td>
                    </tr>
                    <tr>
                      <td>2024-10-01</td>
                      <td>001_Uni</td>
                      <td>Chicken Rice</td>
                      <td>2</td>
                      <td>1000.00</td>
                      <td>Sadali</td>
                      <td class="status-pending">Pending</td>
                    </tr>
                    </tr>
                    <tr>
                      <td>2024-10-01</td>
                      <td>001_Uni</td>
                      <td>Chicken Rice</td>
                      <td>2</td>
                      <td>1000.00</td>
                      <td>Sadali</td>
                      <td class="status-pending">Pending</td>
                    </tr>
                    </tr>
                    <tr>
                      <td>2024-10-01</td>
                      <td>001_Uni</td>
                      <td>Chicken Rice</td>
                      <td>2</td>
                      <td>1000.00</td>
                      <td>Sadali</td>
                      <td class="status-pending">Pending</td>
                    </tr>
                    </tr>

                  </tbody>

                </table>
              </div>

</body>
</html>

