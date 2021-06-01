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
                <h1>my Article</h1>
                <?php
                foreach ($singleSearchResults as $value) {
                ?>
                    <div class='col-4'>
                        <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
                            <div class='card-header'> <?php echo $value['title'] ?> </div>
                            <div class='card-body'>
                                <h4 class='card-title'>
                                </h4>
                                <p class='card-text'><?php echo $value['mycontent'] ?></p>
                            </div>
                            <a href='/hb-php/editBlogPost.php/?id=<?php echo $value['id'] ?>' class='btn btn-info text-white'> Edit Article</a>
                            <a href='/hb-php' class='btn btn-success text-white'> Back to Articles</a>
                            <a href='/hb-php/deleteBlogPost.php/?id=<?php echo $value['id'] ?>' class='btn btn-danger text-white'> Delete Article</a>
                        </div>
                    </div>
                <?php }
                ?>

            </div>
        </div>
        <?php
        include "footer.php"
        ?>
    </body>

    </html>