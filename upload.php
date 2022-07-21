<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $file=$_POST['photo'];
    mkdir($title);
    $fh = fopen($title.'/'.$title.'.php','w');
    $stringData='<?php
$images = glob("*.png");

foreach($images as $image) {
    echo \'<img src="\'.$image.\'" /><br />\';
}
$images_jpg = glob("*.jpg");

foreach($images_jpg as $image) {
    echo \'<img src="\'.$image.\'" /><br />\';
}
$images_avif = glob("*.avif");

foreach($images_avif as $image) {
    echo \'<img src="\'.$image.\'" /><br />\';
}
$images_gif = glob("*.gif");

foreach($images_gif as $image) {
    echo \'<img src="\'.$image.\'" /><br />\';
}
?>';
    fwrite($fh, $stringData);
    fclose($fh);
        $insertquery =" insert into album(dbtitle,dbdesc,pic) values('$title','$desc','$file')";
        $query= mysqli_query($con,$insertquery);
        if($query){
            echo ""; 
        }else{
            echo "";
        }
        $sqll="CREATE TABLE $title(
            firstname VARCHAR(250) NOT NULL
            )";
            if (mysqli_query($con, $sqll)) {
                echo "Table created successfully";
                echo "<br>";
                echo "<a href='disp.php'>To view all album for normal user</a>";
                echo "<br>";
                echo "<a href='display.php'>To insert multiple images for normal user</a>";
                
            } else {
                echo "Error creating table: " . mysqli_error($con);
            }
        mysqli_close($con);

    }


?>
