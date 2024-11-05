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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                    @foreach ($results as $results)


                    <tr>
                      <td>{{$results->created_at}}</td>
                      <td>{{$results->id}}</td>
                      <td>{{$results->food_name}}</td>
                      <td>{{$results->quantity}}</td>
                      <td>Rs.{{$results->quantity*$results->price}}.00</td>
                      <td>{{$results->vendor_name}}</td>
                      <td>
                        <form action="{{ url('/status_finalpass', $results->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="status_finalpass" value="status_finalpass">
                            <div class="button-boxx">
                                @if($results->status == "Pending")
                                    <button type="submit" class="btn btn-success animated-btnn">Delivered</button>
                                @elseif($results->status == null)
                                    Waiting
                                @else
                                    {{$results->status}}
                                @endif
                            </div>
                        </form>
                      </td>

                      <td>
                        <form action="{{ url('/cancelorder', $results->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="status_finalpass" value="status_finalpass">
                            <div class="button-box">
                                @if($results->status == null)
                                    <button type="submit" class="btn btn-success animated-btn">Cancel</button>
                                @else
                                    Can't Cancel Now!
                                @endif
                            </div>
                        </form>

                    </td>

                      </td>
                    </tr>
                    @endforeach

                    </tr>

                  </tbody>

                </table>
              </div>

</body>
</html>

