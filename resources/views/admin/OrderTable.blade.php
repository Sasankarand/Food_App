<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>

 <link rel="stylesheet" href="UserTableCss.css">

</head>

    <body>


    <table >
        <tr>
            <th>Order ID</th>

            <th>Food Name</th>

            <th>Customer Name</th>

            <th>Seller Name</th>

            <th>Food Price</th>

            <th>Quantity</th>

            <th>Status</th>

            <th>Action</th>

        </tr>


        @foreach ($data1 as $data1)
            <tr>

                <td>{{$data1->id}}</td>

                <td>{{$data1->food_name}}</td>

                <td>{{$data1->user_name}}</td>

                <td>{{$data1->vendor_name}}</td>

                <td>{{$data1->price}}</td>

                <td>{{$data1->quantity}}</td>

                <td>{{$data1->status}}</td>

                <td> <a href="{{url('/deleteorder',$data1->id)}}">Remove Order</a> </td>



            </tr>
        @endforeach


    </table>

    </body>

</html>
