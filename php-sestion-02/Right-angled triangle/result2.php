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



        $first = intval($_POST["first"]);
        $second =intval($_POST["second"]);
        $third = intval($_POST["third"]);

        if (
            $first > 0 &&
            $second > 0 &&
            $third > 0 &&

          $first**2 + $second**2 === $third**2

        ) {
            echo "<div class='alert alert-success text-center'>
                بله، می توان یک مثلث قائم الزاویه ساخت.
              </div>";
        } else {
            echo "<div class='alert alert-danger text-center'>
                خیر، نمی توان یک مثلث قائم الزاویه ساخت.
              </div>";
        }
    ?>


    <div class="mx-auto text-center p-3">
       <a href="index.php" class="btn btn-primary">بازگشت </a>
    </div>

</div>

</body>
</html>



