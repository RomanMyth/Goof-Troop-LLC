<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/bamboo.css/dist/dark.min.css">
        <!--Style for form alerts-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--Functions for form alerts-->
        <script src="app.js"></script>
        <title>New Roster</title>
        <style>

        </style>
        <script>

        </script>
    </head>
    <header>
        <h3>
            Sunrise Retirement Home
        </h3>
        <div class='header-btn-section'>
            <form action="back" method='POST'>
                @csrf
                <button type='Submit'>Back</button>
            </form>
        </div>
        <div class='header-btn-section'>
            <div class="user-dropdown">
                <button id="btn2">Profile</button>
                <div class="dropdown-content">
                    {{-- <a href="#">{{ $First_Name }}</a> --}}
                    {{-- <a href="#">{{ $Last_Name }}</a> --}}
                    You exist!
                </div>
            </div>
        </div>
        <div class='header-btn-section'>
            <form action="logout" method='POST'>
                @csrf
                <button type='Submit'>Logout</button>
            </form>
        </div>
    </header>
    <body>
        <h1>New Roster</h1>
        <br>
        <br>
        <h3>Select a secific date and then choose the given names for each position for that day</h3>
        <form id='form' action="NewSchedule" method="POST">
            @csrf
            <label for="date">Date</label>
            <input type="date" name="Date" id="">
            <br>
            <br>
            <label for="supervisor">Supervisor</label>
            <select name="Supervisor_ID" id="newRosterSupervisorDropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($supervisors as $supervisor)
                    <option value="{{ $supervisor->Supervisor_ID }}">{{ $supervisor->First_Name }} {{  $supervisor->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="doctor">Doctor</label>
            <select name="Doctor_ID" id="newRosterDoctorDropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->Doctor_ID }}">{{ $doctor->First_Name }} {{  $doctor->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="Caregiver1">Caregiver 1</label>
            <select name="Caregiver1" id="newRosterCaregiver1Dropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($caregivers as $caregiver)
                    <option value="{{ $caregiver->Caregiver_ID }}">{{ $caregiver->First_Name }} {{  $caregiver->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="Caregiver2">Caregiver 2</label>
            <select name="Caregiver2" id="newRosterCaregiver2Dropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($caregivers as $caregiver)
                    <option value="{{ $caregiver->Caregiver_ID }}">{{ $caregiver->First_Name }} {{  $caregiver->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="Caregiver3">Caregiver 3</label>
            <select name="Caregiver3" id="newRosterCaregiver3Dropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($caregivers as $caregiver)
                    <option value="{{ $caregiver->Caregiver_ID }}">{{ $caregiver->First_Name }} {{  $caregiver->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="Caregiver4">Caregiver 4</label>
            <select name="Caregiver4" id="newRosterCaregiver4Dropdown">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($caregivers as $caregiver)
                    <option value="{{ $caregiver->Caregiver_ID }}">{{ $caregiver->First_Name }} {{  $caregiver->Last_Name }} </option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit">Create Schedule</button>
            <br>
            <br>
        </form>
        <div class="cancelAlert">
            <button onclick="showAlert()">Cancel</button>

            <div id="overlay" onclick="hideAlert()"></div>
            <div id="alertBox">
            <p>Do you want to reset the form?</p>
            <button onclick="resetForm()">Reset</button>
            <button onclick="hideAlert()">Cancel</button>
            </div>
        </div>
        <br>
    </body>
</html>