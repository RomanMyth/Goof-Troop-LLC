<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
    <link rel="stylesheet" href="{{ asset('css/UpdatedDashboard.css') }}">
    <!--Style for form alerts-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Functions for form alerts-->
    <script src="app.js"></script>
    <title>Employees</title>
    <style>
        table {
            width: 500px;
            height: 500px;
        }

        tr {
            width: 100px;
            height: 25px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#employeeSearchForm').submit(function(e) {
                e.preventDefault();
                var searchText = $('input[name="search"]').val().toLowerCase();

                $('table tr:gt(0)').each(function() {
                    var found = false;
                    $(this).find('th').each(function() {
                        var cellText = $(this).text().toLowerCase();
                        if (cellText.indexOf(searchText) !== -1) {
                            found = true;
                            return false; // Break the loop if match found
                        }
                    });
                    if (found) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

</head>


<body>
    <header>
        <h1>Employee Dashboard</h1>
        <div class="user-dropdown">
            <button id="btn2">Profile</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    </div>
    <h3>Browse though employees</h3>
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Role</th>
            <th>Salary</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <th>{{ $user->First_Name }}</th>
                <th>{{ $user->Role_ID }}</th>
                <th>{{ $user->Salary }}</th>
            </tr>
        @endforeach
    </table>
    <form id='employeeSearchForm' action="" method="">
        <label for="search">Search</label>
        <input type="text" name="search" id="">
        <br>
        <br>
        <button type="submit">Enter</button>
    </form>
        @if($_SESSION['role'] == 1)
        <br>
            <h3>Change employee salary (admin only)</h3>
            <br>
            <br>
            <form id='form' action="UpdateSalary" method="POST">
                @csrf
                <label for="User_ID">Employee ID</label>
                <input type="number" name="User_ID" id="">
                <br>
                <br>
                <label for="Salary">New salary</label>
                <input type="number" name="Salary" id="">
                <br>
                <br>
                <button type="submit">Change</button>
            </form>
            <br>
            <div class="cancelAlert">
                <button onclick="showAlert()">Cancel</button>
        
                <div id="overlay" onclick="hideAlert()"></div>
                <div id="alertBox">
                    <p>Do you want to reset the form?</p>
                    <button onclick="resetForm()">Reset</button>
                    <button onclick="hideAlert()">Cancel</button>
                </div>
            </div>
        @endif

</body>

</html>
