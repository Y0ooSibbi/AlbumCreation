<!DOCTYPE html>
<html lang="en">
    <title>
        Delete
    </title>
    <head>
        <body>
            <div>
                <form action="" method="POST">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  </div>
                  <div>
                    <input type="submit" name="submit" value="Unpublish">
                  </div>
                </form>
            </div>
        </body>
    </head>
</html>
<?php
include "dbcon.php";

$query = "select * from album";  
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    mysqli_query($con,"DELETE FROM album WHERE dbtitle='".$title."'");
    if(mysqli_query($con,"DROP TABLE $title")){
        echo "<br>";
    }
    else{
        echo "nope";
    }
    function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}

    deleteDirectory($title);

}

?>
