<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jemedari University</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your styles for the login form */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FF6C00; /* Neon Orange */
            color: #292929; /* Dark Gray */
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #292929; /* Dark Gray */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #292929; /* Dark Gray */
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #FF6C00; /* Neon Orange */
            background-color: #FFF;
            color: #292929; /* Dark Gray */
            border-radius: 5px;
            outline: none;
        }

        input::placeholder {
            color: #888;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #FF6C00; /* Neon Orange */
            color: #292929; /* Dark Gray */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #292929; /* Dark Gray */
            color: #FF6C00; /* Neon Orange */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">


            <label for="username">Email:</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Log In</button>
            <a href="./signup.php">Create Account</a>

            
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $("form").on("submit", function(event){
                event.preventDefault();

                var formData = {
                    'email' : $('#username').val(),
                    'password' : $('#password').val()
                };

                $.ajax({
                    type : 'POST',
                    url  : './backend/login.php',
                    data : JSON.stringify(formData),
                    contentType : 'application/json',
                    dataType : 'json'
                })
                .done(function(data) {
                    if (data.status === 'success') {
                        // Handle success
                        // console.log(data.message);
                        $('.login-container').html('<h2>Sign in Successful , redirecting to home page!</h2>');
                                setTimeout(function() {
                                    window.location.href = 'index.php';
                                    // Close the alert after 4 seconds
                                    // $('.alert').alert('close');
                                }, 2500);
                        
                    } else {
                        // Handle error
                        $('.login-container').html('<h2>Invalid username or password</h2>');
                        setTimeout(function() {
                            window.location.href = 'login.php';
                            // Close the alert after 4 seconds
                            // $('.alert').alert('close');
                        }, 2500);

                    }
                });
            });
        });
        </script>

    </div>
</body>
</html>
