<!DOCTYPE html>
<html>
<head>
    <title>University Enrollment Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background-color: #faf8f5;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        /* -------- HEADER -------- */
        .header {
            text-align: center;
            padding: 30px 20px 15px;
        }

        .header .logo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #d4844e;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .header .logo .shield {
            width: 40px;
            height: 40px;
            background-color: #d4844e;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .banner {
            background-color: #f5ede6;
            padding: 18px;
            text-align: center;
            margin: 0 30px;
            border-radius: 8px;
        }

        .banner h2 {
            color: #3a3a3a;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* -------- FORM BODY -------- */
        .form-body {
            padding: 35px 40px 40px;
        }

        label.field-label {
            display: block;
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 13px;
            color: #6b6b6b;
            margin-bottom: 6px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #d9d9d9;
            border-radius: 7px;
            font-size: 14px;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #3a3a3a;
            background-color: #fdfdfd;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus {
            border-color: #c99060;
        }

        input::placeholder {
            color: #b0b0b0;
            font-size: 13px;
        }

        /* --- inline row --- */
        .row {
            display: flex;
            gap: 14px;
            margin-bottom: 0;
        }

        .row .field {
            flex: 1;
        }

        .field-group {
            margin-bottom: 22px;
        }

        /* --- date picker row (month/day/year) --- */
        .date-row {
            display: flex;
            gap: 10px;
            align-items: flex-end;
        }

        .date-row .date-field {
            flex: 1;
        }

        .date-row .date-field select {
            width: 100%;
            padding: 10px 12px;
            font-size: 13px;
            color: #999;
            background-color: #fdfdfd;
            border: 1px solid #d9d9d9;
            border-radius: 7px;
            appearance: auto;
            cursor: pointer;
        }

        .date-row .calendar-icon {
            width: 38px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 20px;
            margin-bottom: 1px;
        }

        /* --- section divider --- */
        .divider {
            margin: 30px 0 24px;
            border: none;
            border-top: 1px solid #ece6df;
        }

        /* --- button --- */
        .btn {
            width: 100%;
            padding: 13px;
            background-color: #d4844e;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 15px;
            font-family: 'Segoe UI', Arial, sans-serif;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: 0.3px;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #be7240;
        }

        /* --- output section --- */
        .output {
            margin-top: 30px;
            padding: 24px;
            background-color: #f5ede6;
            border-radius: 8px;
        }

        .output h2 {
            color: #3a3a3a;
            font-size: 18px;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0d6cc;
        }

        .output p {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .output p b {
            color: #3a3a3a;
            min-width: 140px;
            display: inline-block;
        }

        /* --- responsive --- */
        @media (max-width: 600px) {
            .row {
                flex-direction: column;
                gap: 0;
            }
            .form-body {
                padding: 25px 20px 30px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            <span class="shield">67</span>
            Slayed University
        </div>
    </div>

    <div class="banner">
        <h2>Student Registration Form</h2>
    </div>

    <!-- FORM -->
    <div class="form-body">
        <form method="POST">

            <!-- Student Number -->
            <div class="field-group">
    <label class="field-label">Student Number</label>

    <input 
        type="text"
        name="studentNumber"
        placeholder="Enter 9-10 digit student number"
        pattern="[0-9]{9,10}"
        maxlength="10"
        minlength="9"
        required
    >
</div>

            <!-- First & Last Name (side by side) -->
            <div class="row" style="margin-bottom:22px;">
                <div class="field">
                    <label class="field-label">First Name</label>
                    <input type="text" name="firstName" placeholder="First Name" required>
                </div>
                <div class="field">
                    <label class="field-label">Middle Name</label>
                    <input type="text" name="middleName" placeholder="Middle Name">
                </div>
                <div class="field">
                    <label class="field-label">Last Name</label>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                </div>
            </div>

            <!-- Course -->
            <div class="field-group">
                <label class="field-label">Course</label>
                <select name="course">
                    <option value="" disabled selected>Select Course</option>
                    <option>BS Information Technology</option>
                    <option>BS Computer Science</option>
                    <option>BS Information Systems</option>
                </select>
            </div>

            <hr class="divider">

            <!-- Gender & Year Level (side by side) -->
            <div class="row" style="margin-bottom:22px;">
                <div class="field">
                    <label class="field-label">Gender</label>
                    <select name="gender">
                        <option value="" disabled selected>Select Gender</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Prefer not to say</option>
                    </select>
                </div>
                <div class="field">
                    <label class="field-label">Year Level</label>
                    <select name="yearLevel">
                        <option value="" disabled selected>Select Year</option>
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                    </select>
                </div>
            </div>

            <!-- Age -->
            <div class="field-group">
                <label class="field-label">Age</label>
                <input type="number" name="age" placeholder="Age" required>
            </div>

            <!-- Birth Date (Month / Day / Year dropdowns) -->
            <div class="field-group">
                <label class="field-label">Date of Birth</label>
                <div class="date-row">
                    <div class="date-field">
                        <select name="birthMonth">
                            <option>Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                    <div class="date-field">
                        <select name="birthDay">
                            <option>Day</option>
                            <?php for($d = 1; $d <= 31; $d++): ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="date-field">
                        <select name="birthYear">
                            <option>Year</option>
                            <?php for($y = date("Y"); $y >= 1950; $y--): ?>
                            <option value="<?= $y ?>"><?= $y ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="calendar-icon">&#128197;</div>
                </div>
            </div>

            <button type="submit" class="btn"> Register </button>

        </form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $studentNumber = $_POST['studentNumber'];
    $firstName     = $_POST['firstName'];
    $middleName    = $_POST['middleName'];
    $lastName      = $_POST['lastName'];
    $course        = $_POST['course'];
    $yearLevel     = $_POST['yearLevel'];
    $gender        = $_POST['gender'];
    $age           = $_POST['age'];

    
    $birthMonth = $_POST['birthMonth'] ?? 'N/A';
    $birthDay   = $_POST['birthDay']   ?? 'N/A';
    $birthYear  = $_POST['birthYear']  ?? 'N/A';
    $birthDate  = "$birthMonth $birthDay, $birthYear";

    echo "<div class='output'>";
    echo "<h2>Student Information</h2>";
    echo "<p><b>Student Number:</b> $studentNumber</p>";
    echo "<p><b>Full Name:</b> "
        . strtoupper($firstName) . " "
        . strtoupper($middleName) . " "
        . strtoupper($lastName) .
    "</p>";
    echo "<p><b>Course:</b> $course</p>";
    echo "<p><b>Year Level:</b> $yearLevel</p>";
    echo "<p><b>Gender:</b> $gender</p>";
    echo "<p><b>Age:</b> $age</p>";
    echo "<p><b>Birth Date:</b> $birthDate</p>";
    echo "</div>";
}
?>

    </div>
</div>

</body>
</html>