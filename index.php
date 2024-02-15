<?php
session_start();

if (isset($_SESSION['email_id'])) {
    include_once "./backend/conn.php";
    // echo $_SESSION['email_id'];
    // Assuming you have already established a database connection

    // Prepare the SQL query
    $id = $_SESSION['email_id']; // Replace 123 with the desired user ID
    $query = "SELECT * FROM users WHERE id = $id limit 1";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);

        // Store the data into variables
        $name = $row['firstname'] . " " . $row['lastname'];
        // $column2 = $row['column2'];
        // ...

        // Do something with the data
        // ...

        // Free the result set
        // mysqli_free_result($result);
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($_SESSION['email_id'])) {
            echo $name;
        } else {
            echo "WAA BOYS HIGH SCHOOL";
        }
        ?>
    </title>
    <!-- Add some CSS styles here -->
    <style>
        /* Add some styles for the website */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('image');
            /* Replace 'background.jpg with an actual image  */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow-x: hidden;
            /* Prevent horizontal scrolling on smaller screens */
        }

        #home h2 {
            color: rgba(122, 153, 51, 0.712);
            text-shadow: 2px 2px 5px rgba(0, 255, 209, 0.8);
        }

        header {
            background-color: #007BFF;
            color: #FFF;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
            /position: fixed;/
        }

        nav {
            background-color: #333;
            color: #FFF;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #FFF;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        section {
            padding: 50px 20px;
            color: #FFF;
            text-align: center;
        }

        .button-container {
            text-align: center;
            margin-top: 40px;
        }

        .button {
            padding: 15px 20px;
            /* Adjusted padding for a square shape */
            margin: 10px;
            text-decoration: none;
            color: #FFF;
            border: 3px solid #00FFD1;
            /* Neon Cyan border */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
            /* Align buttons in a row */
        }

        .button:hover {
            background-color: #00FFD1;
            /* Neon Cyan */
            transform: scale(1.1);
            /* Hover effect for a slight scale increase */
        }

        .university-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
        }

        /* Added styles for the contact section */
        #contact {
            background-color: #FF1493;
            /* Deep Pink */
            padding: 50px 20px;
        }

        .contact-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }

        .contact-item {
            flex: 1 1 300px;
            margin: 20px;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .contact-item:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
            color: #FF1493;
            /* Deep Pink */
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .social-icons a {
            margin: 0 15px;
            color: #FF1493;
            /* Deep Pink */
            font-size: 30px;
        }

        footer {
            background-color: #333;
            color: #FFF;
            padding: 50px 15px;
            /* Increase padding for better separation */
            text-align: center;
            clear: both;
            /* Ensure the footer is below the buttons */
        }

        .university-image {
            width: 150px;
            height: 150px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>WAA BOYS HIGH SCHOOL;</h1>
        <img class="school-image" src="images/logo.001.jpeg" alt="Waa boys high school">
    </header>
    <section id="home">
        <h2>WELCOME TO WAA BOYS HIGH SCHOOL<br>where we provide Education for a Better World</h2>
        <div class="button-container">


            <?php if (!isset($_SESSION['email_id'])) : ?>
                <button class="button" onclick="window.location.href='login.php'">Login</button>
                <button class="button" onclick="window.location.href='signup.php'">Sign Up</button>
            <?php endif; ?>

            <button class="button" onclick="window.location.href='apply.php'">Apply for Place</button>
            <button class="button" onclick="window.location.href='about.php'">About Waa Boys</button>
            <button class="button" onclick="window.location.href='courses.php'">Subjects we offer</button>
            <button class="button" onclick="window.location.href='staff.php'">staffs</button>
            <button class="button" onclick="window.location.href='contacts.php'">contact us</button>
            <button class="button" onclick="window.location.href='student.logedin.php'">student portal</button>
            <?php if (isset($_SESSION['email_id'])) : ?>
                <button class="button" onclick="window.location.href='./backend/logout.php'" style="background-color: red;">logout</button>
            <?php endif; ?>

        </div>
    </section>

    <section id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <p>Please don’t hesitate to reach out. As always, we’re here to help you.<br> So, if you think of something, you just have to say it.</p>

            <div class="contact-info">
                <div class="contact-item">
                    <i class="icon fas fa-envelope"></i>
                    <p>Email Us</p>
                    <a href="mailto:fourcentral@gmail.com">fourcentral@gmail.com</a>
                    <a href="mailto:foursouth@gmail.com">foursouth@gmail.com</a>
                    <a href="mailto:fourwest@gmail.com">fourwest@gmail.com</a>
                </div>

                <div class="contact-item">
                    <i class="icon fas fa-phone"></i>
                    <p>Call Us</p>
                    <p>0723588808</p>
                    <!-- Add more phone numbers here -->
                </div>

                <!-- Add more contact items as needed -->

            </div>

            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

    <!-- Other sections with content -->

    <footer>
        <p>&copy; 2024 Waa Boys High School. All rights reserved.</p>
    </footer>
    <script>

    </script>
</body>

</html>