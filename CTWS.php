<!doctype html>
<html lang="en">

<head>
    <title>
        <?php if (isset($_POST['ok'])) {
                echo $_POST['title'];
            } else {
                echo "This is Title!";
            } ?>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <!-- Code Here -->
    <!-- CSS -->
    <style>
        body {
            margin: 5px;
            padding: 5px;
        }
    </style>

    <form action="" method="POST">
        <div class="form col-md-6 mx-auto">

            <div class="mb-3">
                <?php if (isset($_POST['ok'])) {
                    echo $_POST['title'];
                } else {
                    echo "Your title will be show here.";
                } ?>
                <label for="" class="form-label mt-2"></label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Put some Title">
                <small id="helpId" class="form-text text-muted">Title will be change when you submit it.</small>
            </div>
            <div class="mb-3">
                <button type="submit" name="ok" class="btn btn-success">OK</button>
            </div>
        </div>
    </form>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
