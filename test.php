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

?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Upload File Exam</h1>
            <form method="post" enctype="multipart/form-data" class="my-5" action="./upload-exams.php">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
                    <label class="custom-file-label" for="fileToUpload">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Upload</button>
            </form>
        </div>
        <div class="container">
            <h1 class="text-center">Upload File Assignments</h1>
            <form method="post" enctype="multipart/form-data" class="my-5" action="./upload-assignments.php">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
                    <label class="custom-file-label" for="fileToUpload">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Upload</button>
            </form>
        </div>
        <!-- <br> -->
        <a href="./index.php">
            <button type="button" class="btn btn-primary btn-lg btn-block">Go Home</button>
        </a>
        <script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        </script>
    </body>

    </html>
<?php
} else {
    echo "<script>alert('You are not logged in')</script>";
    echo "<script>location.replace./login.php</script>";
}
