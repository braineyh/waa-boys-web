
<?php
session_start();

if (isset($_SESSION['email_id'])) {
    include_once "./backend/conn.php";
    echo $_SESSION['email_id'];
    // Assuming you have already established a database connection

    // Prepare the SQL query
    $id = $_SESSION['email_id']; // Replace 123 with the desired user ID
    $query = "SELECT * FROM users WHERE id = $id limit 1";
    $query2 = "SELECT * FROM applications WHERE users_id = $id limit 1";
    $result2 = mysqli_query($conn, $query2);
    if ($result2) {
        $row2 = mysqli_fetch_assoc($result2);
        if ($row2) {
            echo "<script> alert ('You have already applied for a place')</script>";
            echo "<script> window.location.href = './index.php'; </script>";
        }
    }
    
    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);

        // Store the data into variables
        $name = $row['firstname']." ".$row['lastname'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($connection);
    }
} 
else {
    echo "<script> alert ('you are not logged in')</script>";
    echo "<script> window.location.href = './login.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Place - Jemedari University</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your styles for the application form */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #292929;
            color: #FFF;
        }

        .apply-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #363636;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        h2 {
            text-align: center;
            color: #00FFD1; /* Neon Cyan */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #00FFD1; /* Neon Cyan */
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #00FFD1; /* Neon Cyan */
            background-color: #363636;
            color: #FFF;
            border-radius: 5px;
            outline: none;
        }

        input::placeholder {
            color: #888;
        }

        select {
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            padding: 12px;
            background: transparent url('https://image-url.com/arrow-down-icon.png') no-repeat right center;
            background-size: 18px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #00FFD1; /* Neon Cyan */
            color: #292929; /* Dark Gray */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #292929; /* Dark Gray */
            color: #00FFD1; /* Neon Cyan */
        }
    </style>
    <!-- Add SweetAlert2 script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="apply-container">
        <h2>Apply for Place</h2>
        <form action="apply_process.php" method="post" >
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" disabled value="<?php echo $firstname; ?>">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" disabled value="<?php echo $lastname; ?>">


            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" disabled value="<?php echo $email; ?>">

            <label for="kcperesults">KCPE MEAN GRADE Results:</label>
            <select id="kcperesults" name="kcperesults">
                <option value="A">A</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="B-">B-</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="C-">C-</option>
            </select>

            <label for="parentphone">Parents' Phone Numbers:</label>
            <input type="tel" id="momphone" name="momphone" placeholder="Mom's Phone" required>
            <input type="tel" id="dadphone" name="dadphone" placeholder="Dad's Phone" required>

            <label for="healthproblems">Any Health Problems:</label>
            <input type="text" id="healthproblems" name="healthproblems">

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <button type="submit">Submit Application</button>
        </form>
    </div>

    <!-- Add JavaScript code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
                $(document).ready(function(){
            $("form").on("submit", function(event){
                event.preventDefault();

                var formData = {
                    'phone' : $('#phone').val(),
                    'kcperesults' : $('#kcperesults').val(),
                    'momphone' : $('#momphone').val(),
                    'dadphone' : $('#dadphone').val(),
                    'healthproblems' : $('#healthproblems').val(),
                    'dob' : $('#dob').val(),
                    'location' : $('#location').val()
                };

                $.ajax({
                    type : 'POST',
                    url  : './backend/apply.php',
                    data : formData,
                    dataType : 'json',
                    encode : true
                })
                .done(function(data) {
                    if (data.status === 'success') {
                        // Handle success
                        console.log(data.message);
                    } else {
                        // Handle error
                        console.log(data.message);
                    }
                });
            });
        });
    </script>
</body>
</html>
