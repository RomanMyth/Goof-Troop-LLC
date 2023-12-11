<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/UpdatedDashboard.css') }}">
</head>

<body>
    <div class="scene">
        <div class="sun"></div>
        <div class="water"></div>
    </div>
    <header class="nohead">
        <div>Sunrise name place holder</div>
        <h1 class="boxed">Patient Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                {{-- <a href="#">{{ $First_Name }}</a>
                <a href="#">{{ $Last_Name }}</a> --}}
                <form action="logout" method='POST'>
                    @csrf
                    <button type='Submit'>Logout</button>
                </form>
            </div>
        </div>
    </header>
    <div id="container">
        <div class="banner">
            <h1 class="boxed">Patient Dashboard</h1>
        </div>
        <div id="hold">
            <div class="btn-con">
                <form action={{ url('/patientsHome') }} method="get">
                    <button class="btn1">Patients Home</button>
                </form>
                <form action={{ url('/roster') }} method="get">
                    <button class="btn1">Roster</button>
                </form>
            </div>
        </div>
        {{-- <h2>You are signed in as</h2>
        <h2>First Name</h2>
        <h2>Last Name</h2>  he wants this as like a drop down thing at the side --}}
    </div>
</body>

</html>
