<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="mx-auto my-4 w-50 bg-body-secondary">
    <div class="card">
        <div class="card-body">

            <form action="result2.php" method="post">

                <div class="card-title text-end">
                    ? آیا با سه پاره خط میشود یک مثلث قائم لزاویه درست کرد
                </div>

                <div class="container mb-3">
                    <label for="first" class="form-label">FirstNumber</label>
                    <input type="number" name="first" placeholder="Firstnumber" id="first" class="form-control">
                </div>

                <div class="container mb-3">
                    <label for="second" class="form-label">SecondNumber</label>
                    <input type="number" name="second" placeholder="Secondnumber" id="second" class="form-control">
                </div>

                <div class="container mb-3">
                    <label for="third" class="form-label">Third Number</label>
                    <input type="number" name="third" placeholder="Third number" id="third" class="form-control">
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-danger w-50">
                        Okay
                    </button>
                </div>

            </form>

        </div>
    </div>
</section>
</body>
</html>