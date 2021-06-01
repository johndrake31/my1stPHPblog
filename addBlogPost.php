<?php
require "app.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./logo-26.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/hb-php">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/hb-php/addBlogPost.php">Add Article</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <form action="" method="get">
        <div class="container m-5">
            <h2>Article Submit Form</h2>
            <div class="row">
                <h4>Add An Article</h4>
                <div class="form-group">
                    <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Title</label>
                    <input class="form-control form-control-lg" type="text" name="title" value="" placeholder="Add Title Here" id="inputLarge">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Article Content</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="content" value="" placeholder="Add Article Content Here"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit Article</button>
        </div>
    </form>

    <?php
    include "footer.php"
    ?>
</body>

</html>