<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3 ">

    <?php

    $radius = $_POST["radius"];

    if ($radius > 0) {

        $volume = (4 / 3) * pi() * ($radius ** 3);

        $area = 4 * pi() * ($radius ** 2);

        echo "<div class='alert alert-success text-center'>
            شعاع کره: $radius
          </div>";

        echo "<div class='alert alert-primary text-center'>
            حجم کره: " . round($volume, 2) . "
          </div>";

        echo "<div class='alert alert-info text-center'>
            مساحت کره: " . round($area, 2) . "
          </div>";

    } else {

        echo "<div class='alert alert-danger text-center'>
            شعاع باید بزرگ تر از صفر باشد.
          </div>";

    }

    ?>


    <div class="mx-auto text-center p-3">
       <a href="index.php" class="btn btn-primary">بازگشت </a>
    </div>

</div>

</body>
</html>



