<!-- signup.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Jemedari University</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your styles for the signup form */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #4CAF50; /* Neon Green */
            color: #FFF;
        }

        .signup-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4CAF50; /* Neon Green */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #4CAF50; /* Neon Green */
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #4CAF50; /* Neon Green */
            background-color: #FFF;
            color: #4CAF50; /* Neon Green */
            border-radius: 5px;
            outline: none;
        }

        input::placeholder {
            color: #888;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50; /* Neon Green */
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFF;
            color: #4CAF50; /* Neon Green */
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        
        <form action="" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>


            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
            <a href="./login.php">already have an account ? login</a>
        </form>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('form').submit(function(event) {
                    event.preventDefault();

                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var password = $('#password').val();

                    $.ajax({
                        url: 'backend/signup.php',
                        type: 'POST',
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            if (response === '"New record created successfully"') {
                                // alert('You have signed up successfully, redirecting to login page');
                                $('.signup-container').html('<h2>Sign Up Successful , redirecting to login!</h2>');
                                setTimeout(function() {
                                    window.location.href = 'login.php';
                                    // Close the alert after 4 seconds
                                    // $('.alert').alert('close');
                                }, 3500);
                            } else {
                                
                                $('.signup-container').html('<h2>Email already exists ,  rediercting to login!</h2>');
                                setTimeout(function() {
                                    window.location.href = 'login.php';
                                    // Close the alert after 4 seconds
                                    // $('.alert').alert('close');
                                }, 3500);
                            }
                        }
                    });
                });
            });
    </script>
</body>
</html>
