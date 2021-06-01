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

    <?php
    include "nav.php"
    ?>

    <?php
    foreach ($singleSearchResults as $value) {
    ?>

        <form action="" method="get">
            <div class="container m-5">
                <h2>Article Submit Form</h2>
                <div class="row">
                    <h4>Edit An Article</h4>

                    <div class="form-group">
                        <input style="display: none; " class="form-control" id="disabledInput" type="text" name="id" value="<?php echo $value['id'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Title</label>
                        <input class="form-control form-control-lg" type="text" name="titleEdited" value="<?php echo $value['title'] ?>" id="inputLarge">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="form-label mt-4">Article Content</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="contentEdited" value=""><?php echo $value['mycontent'] ?></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mt-3">Edit Article</button>
            </div>
        </form>
    <?php } ?>
    <?php
    include "footer.php"
    ?>
</body>

</html>