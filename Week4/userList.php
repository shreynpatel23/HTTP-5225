<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Company Catalog</title>
</head>

<body class="container">
    <h1 class="h3 my-4">Company Catalog</h1>
    <?php 
        function getUsers() {
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }

        $users = getUsers();

        echo '<div class="row">';
        for($i = 0; $i < count ($users); $i++) {
            echo '<div class="col-md-4">
                <div class="card m-2 w-full"">
                    <div class="card-body">
                        <h5 class="card-title">Name: '. $users[$i]['name'] . '</h5>
                        <p class="card-text">Email: '. $users[$i]['email'] . '</p>
                        <p class="card-text">Phone: '. $users[$i]['phone'] . '</p>
                        <a href=' . $users[$i]['website'] .' target="_blank" class="btn btn-primary"> Explare Website </a>
                    </div>
                </div>
            </div>';
        };
        echo '</div>';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>