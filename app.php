<?php
$myHost = "localhost";
$userName = "blogger";
$userPassWord = "pass";
$nameDb = "blogger";

$dbConnect = mysqli_connect($myHost, $userName, $userPassWord, $nameDb);

if (!$dbConnect) {
    echo
    "<div class='alert alert-dismissible alert-danger'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Oh snap!</strong> <a href='#' class='alert-link'>Change a few things up</a> and try submitting again.
    </div>";
    die();
}
//mySQL request
$myRequest = "SELECT * FROM posts";
$postId = $_GET['id'];

if (isset($postId)) {
    $myPostUnique = "SELECT * FROM posts WHERE id=$postId";
}
// below returns a table
$requestResults = mysqli_query($dbConnect, $myRequest);
$singleSearchResults = mysqli_query($dbConnect, $myPostUnique);


//Submit ARTICLE
if (
    isset($_GET['title']) && isset($_GET['content'])
) {
    if (!$_GET['title'] == "" && !$_GET['content'] == "") {
        $articleTitle = $_GET['title'];
        $articleContent = $_GET['content'];
        $myArticlePost = "INSERT INTO `posts` (title, mycontent) VALUES ('$articleTitle', '$articleContent')";
        mysqli_query($dbConnect, $myArticlePost);
        header('Location: index.php?info=added');
    } else {
        echo "please fill out all the text fields before submitting";
    }
}



//EDIT ARTICLE
if (
    isset($_GET['titleEdited']) && isset($_GET['contentEdited'])
) {
    if (!$_GET['titleEdited'] == "" && !$_GET['contentEdited'] == "") {
        $editedTitle = $_GET['titleEdited'];
        $editedContent = $_GET['contentEdited'];
        $editID = $_GET['id'];

        $editArticleQuery = "UPDATE `posts` SET title = '$editedTitle', mycontent = '$editedContent' WHERE `posts`.id= '$editID'";
        $myCurrentSQL = mysqli_query($dbConnect, $editArticleQuery);

        if ($myCurrentSQL) {
            header('Location: /hb-php/index.php?info=edited');
        }
    } else {
        echo "please fill out all the text fields before submitting";
    }
}

//"DELETE FROM `posts` WHERE `posts`.`id` = 15"
//DELETE ARTICLE
if (
    isset($_GET['deletid']) && $_GET['deletid'] !== ""
) {

    $deleteID = $_GET['deletid'];

    $editArticleQuery = "DELETE FROM posts WHERE posts.id = $deleteID";
    $myDeleteSQL = mysqli_query($dbConnect, $editArticleQuery);

    if ($myDeleteSQL) {
        header('Location: /hb-php/index.php?info=deleted');
    }
}
