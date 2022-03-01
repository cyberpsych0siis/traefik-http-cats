<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An error occured :(</title>
    <style>
        html,
        body {
            height: 100%;
            background-color: black;
        }

        .center {
            margin: auto;
            position: relative;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class='center'>
    <?php
    echo '<img src="https://http.cat/' . $_GET["code"] . '">';
    ?>
        <p>
            <a href='/'>Go to Homepage</a>
        </p>
    </div>
</body>

</html>
