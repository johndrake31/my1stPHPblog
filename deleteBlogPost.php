    <?php
    include "app.php"
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
        require "nav.php"
        ?>

        <div class="container">
            <div class="row">
                <h1>DELETE ARTICLE</h1>
                <?php
                foreach ($singleSearchResults as $value) {
                ?>
                    <form action="">
                        <div class='col-4'>
                            <div class='card text-white bg-danger mb-3' style='max-width: 20rem;'>
                                <div class='card-header'> <?php echo $value['title'] ?> </div>
                                <div class='card-body'>
                                    <h4 class='card-title'>
                                    </h4>
                                    <p class='card-text'><?php echo $value['mycontent'] ?></p>
                                </div>
                                <button type="submit" name="deletid" value="<?php echo $value['id'] ?>" class='btn btn-warning text-white'> ARE YOU SURE...Delete Article?</button>
                                <a href="/hb-php/postSingular.php/?id=<?php echo $value['id'] ?>" class='btn btn-success text-white'> ARE YOU SURE...NO GO BACK!</a>
                            </div>
                        </div>
                    </form>
                <?php }
                ?>

            </div>
        </div>
        <?php
        include "footer.php"
        ?>
    </body>

    </html>