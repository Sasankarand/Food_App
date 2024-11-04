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


    <div class="profile_">
        <div>
        <x-app-layout></x-app-layout>
        </div>
    </div>


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


    <!-- Order Dashboard -->
</body>
</html>




