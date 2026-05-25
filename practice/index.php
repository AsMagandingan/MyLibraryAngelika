<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>University Enrollment Form</title>
    <link rel="stylesheet" href="style.css">
       
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
        <h2>University Enrollment Form</h2>
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

            <!-- Semester -->
            <div class="field-group">
                <label class="field-label">Semester</label>
                <select name="semester">
                    <option value="" disabled selected>Select Semester</option>
                    <option>1st Semester</option>
                    <option>2nd Semester</option>
                    <option>3rd Semester</option>
                </select>
            </div>

            <!-- Section -->
            <div class = "field-group">
                <label class="field-label">Section</label>

            <input type ="text" name = "section" placeholder="Enter Section" required>
            </div>

            <!-- Payment -->
             <div class = "field-group">
                <label class="field-label">Payment</label>

                <select name = "payment">
                    <option value="" disabled selected>Select Payment </option>
                    <option>Cash</option>
                    <option>Online Payment</option>
                    <option>Card</option>
                </select>
            </div>

            <!-- Subjects -->
            <div class = "field-group">
                <label class="field-label">Subjects</label>

            <input type ="text" name = "subjects" placeholder="Enter Subjects" required>
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
    $semester      = $_POST['semester'];
    $section       = $_POST['section'];
    $subjects      = $_POST['subjects'];
    $payment       = $_POST['payment'];
   

    
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
    echo "<p><b>Semester:</b> $semester</p>";
    echo "<p><b>Section:</b> $section</p>";
    echo "<p><b>Subjects:</b> $subjects</p>";
    echo "<p><b>Payment:</b> $payment</p>"; 
    echo "</div>";
}
?>

    </div>
</div>

</body>
</html>