<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>

 <link rel="stylesheet" href="UserTableCss.css">

</head>

    <body>


    <table >
        <tr>
            <th>Food ID</th>

            <th>Food Name</th>

            <th>Vendor Phone</th>

            <th>Seller Name</th>

            <th>Vendor Email</th>

            <th>Price</th>

            <th>Description</th>

            <th>Action</th>

        </tr>


        @foreach ($data2 as $data2)
            <tr>

                <td>{{$data2->id}}</td>

                <td>{{$data2->name}}</td>

                <td>{{$data2->phone_number}}</td>

                <td>{{$data2->vendor_name}}</td>

                <td>{{$data2->email}}</td>

                <td>{{$data2->price}}</td>

                <td>{{$data2->description}}</td>

                <td> <a href="{{url('/removefood',$data2->id)}}">Remove Food</a> </td>



            </tr>
        @endforeach


    </table>


    </body>

</html>
