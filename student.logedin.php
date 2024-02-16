<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Waa Boys High School</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your styles for the student portal form */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            /* Dark Background */
            color: #FFF;
            position: relative;
        }

        .portal-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #292929;
            /* Dark Gray */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        h2 {
            text-align: center;
            color: #FF6C00;
            /* Neon Orange */
        }

        /* Add styles for the different sections */
        .section {
            margin-top: 20px;
            border-top: 2px solid #FF6C00;
            /* Neon Orange */
            padding-top: 20px;
        }

        .section-title {
            color: #FF6C00;
            /* Neon Orange */
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section-content {
            color: #DDD;
        }

        /* Additional Styles for Attraction */
        p {
            margin-bottom: 15px;
        }

        a {
            color: #FF6C00;
            /* Neon Orange */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #FFF;
        }

        /* New button styles */
        .button-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .button-container button {
            width: calc(50% - 10px);
        }

        /* Style for file input */
        input[type="file"] {
            display: none;
        }

        .file-input-label {
            display: block;
            background-color: #FF6C00;
            /* Neon Orange */
            color: #292929;
            /* Dark Gray */
            text-align: center;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            width: calc(50% - 10px);
            box-sizing: border-box;
        }

        .file-input-label:hover {
            background-color: #292929;
            /* Dark Gray */
            color: #FF6C00;
            /* Neon Orange */
        }

        /* Button for downloading assignments and exams */
        .download-button {
            width: 100%;
            margin-top: 20px;
        }

        /* Back button to return to login */
        .back-button {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="portal-container">
        <h2>Student Portal</h2>
        <!-- News Section -->
        <div class="section">
            <div class="section-title">News</div>
            <div class="section-content">
                <!-- Add news content here -->
                <p>Stay updated with the latest news and announcements from Waa Boys High School.</p>
            </div>
        </div>

        <!-- Exams Section -->
        <div class="section">
            <div class="section-title">Exams</div>
            <div class="section-content">
                <!-- Add drawer for terms and final exams here -->
                <p>Choose a term or view details for the final exams.</p>
            </div>
        </div>

        <!-- School Fees Section -->
        <div class="section">
            <div class="section-title">School Fees</div>
            <div class="section-content">
                <!-- Add school fees balance information here -->
                <p>Check your school fees balance and payment details.</p>
            </div>
        </div>

        <!-- Co-Curricular Activities Section -->
        <div class="section">
            <div class="section-title">Class Assigment</div>
            <div class="section-content">
                <!-- Add a list of co-curricular activities to choose from -->
                <p>Pick Your Class Assigment.</p>
            </div>
        </div>


        <!-- Button for downloading assignments and exams -->
        <a href="./test.php">
            <button class=" download-button" id="view-assignments">Upload Assignments / Exams</button>
        </a>
        <a href="./view_files-assignments.php">
            <button class=" download-button" id="view-assignments">View / Download Assignments</button>
        </a>
        <a href="./view_files-exams.php">
            <button class="download-button" id="view-exams">View / Download Exams</button>
        </a>



        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#assignment-input').change(function() {
                    $('#assignment-form').submit();
                });

                $('#exam-input').change(function() {
                    $('#exam-form').submit();
                });

                $('#view-assignments').click(function() {
                    window.location.href = 'view_files.php?folder=assignments';
                });

                $('#view-exams').click(function() {
                    window.location.href = 'view_files.php?folder=exams';
                });
            });
        </script> -->

        <!-- Back button to return to login -->
        <!-- <button onclick="window.location.href='login.html'" class="back-button">Back to Login</button> -->
    </div>
</body>

</html>