<?php
include_once '../common_includes/cdn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>scheduling system</title>

    <link rel="stylesheet" href="../Styles/styles.css" />

</head>

<body>
    <section class="error_handling">
        <main>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center flex-column">
                    <div class="col-5 pb-5 text-center text-dark">
                        <h2>You are Unauthorized in Accessing this Content</h2>
                        <br>
                        <h3>Press the Button to go back.</h3>
                        <a class="btn btn-primary" href="javascript:history.back()">Go back</a>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>