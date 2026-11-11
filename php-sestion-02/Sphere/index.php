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

                  <form action="result.php" method="post">
                      <div class="card-title text-end">
                          ? شعاع  کره  را وارد کنید
                      </div>

                      <div class="container mb-3">
                          <label for="Radius" class="form-label">شعاع:</label>
                          <<input type="number" name="radius"
                                  placeholder="Radius"
                                  id="Radius"
                                  class="form-control">
                      </div>

                      <button type="submit" class="btn btn-danger w-50">
                          Ok
                      </button>
                    </form>

        </div>
    </div>
</section>





</body>
</html>