<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Week 5</title>
</head>

<body>
    <div class="container">
        <h2 class="display-5 mt-4">Student Catalog</h2>
        <div class="row">
            <?php
            $db_host = 'localhost';
            $db_user = 'root';
            $db_password = 'root';
            $db_db = 'HTTP-5225';
            $connect = mysqli_connect($db_host, $db_user, $db_password, $db_db);
            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "SELECT * FROM students";

            $students = mysqli_query($connect, $sql);

            if ($students) {

                foreach ($students as $student) {
                    if ($student['marks'] <= 60) {
                        $cardBg = "bg-danger";
                    } else {
                        $cardBg = "bg-success";
                    }
                    echo '<div class="col">
                                <div class="card '. $cardBg .'" style="width: 18rem;">
                                    <img src="' . $student['image'] . '" class="card-img-top" alt="profile picture of the student">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $student['first_name'] . ' ' . $student['last_name'] . '</h5>
                                        <p class="card-text">Marks: '.  $student['marks'] .' </p>
                                        <p class="card-text">Grade: '.  $student['grades'] .' </p>
                                    </div>
                                </div>
                            </div>';
                }
                // Free result set
                mysqli_free_result($students);
            }

            mysqli_close($connect);
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>