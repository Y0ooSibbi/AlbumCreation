<?php
$images = glob("*.png");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}
$images_jpg = glob("*.jpg");

foreach($images_jpg as $image) {
    echo '<img src="'.$image.'" /><br />';
}

?>
