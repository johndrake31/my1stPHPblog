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


    <?php include "nav.php" ?>

    <?php
    // success Added popup message
    if (isset($_GET['info']) && $_GET['info'] == "added") {
    ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap! Your</strong> <a href="#" class="alert-link"> Article has been added </a>
        </div>
    <?php } ?>

    <?php
    // success Edited popup message
    if (isset($_GET['info']) && $_GET['info'] == "edited") {
    ?>
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap! Your</strong> <a href="#" class="alert-link"> Article has been Edited </a>
        </div>
    <?php } ?>

    <?php
    // success Deleted popup message
    if (isset($_GET['info']) && $_GET['info'] == "deleted") {
    ?>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh are you HAPPY?! Your</strong> <a href="#" class="alert-link"> Article has been Deleted </a>
        </div>
    <?php } ?>

    <div class="container">
        <div class="row mt-5">
            <?php

            foreach ($requestResults as $key => $value) {
                $mytitle = $value['title'];
                $myContent = $value['mycontent'];
                // var_dump($myID);
            ?>

                <div class='col-4'>
                    <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
                        <div class='card-header'> <?php echo $mytitle ?></div>
                        <div class='card-body'>
                            <h4 class='card-title'>
                            </h4>
                            <p class='card-text'><?php echo $myContent ?></p>
                        </div>

                        <a href='postSingular.php/?id=<?php echo $value['id'] ?>' class='btn btn-success text-white'> Go to article</a>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </div>
    </div>


    <?php
    include "footer.php"
    ?>
</body>

</html>