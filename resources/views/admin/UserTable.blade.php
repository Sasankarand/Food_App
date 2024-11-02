<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>

 <link rel="stylesheet" href="UserTableCss.css">

</head>

    <body>


    <table >
        <tr>
            <th>Name</th>

            <th>E-Mail</th>

            <th>Type</th>

            <th>Action</th>

        </tr>


        @foreach ($data as $data)
            <tr>

                <td>{{$data->name}}</td>

                <td>{{$data->email}}</td>


                @if ($data->usertype=="0")
                        <td>Student</td>

                    @elseif ($data->usertype=="1")
                        <td>Admin</td>

                    @else
                        <td>Seller</td>

                @endif


                @if ($data->usertype=="0" OR $data->usertype=="2")
                        <td> <a href="{{url('/deleteuser',$data->id)}}">Remove User</a> </td>
                    @else
                        <td><a>Not Allowed</a></td>
                @endif

            </tr>
        @endforeach


    </table>

    </body>

</html>
