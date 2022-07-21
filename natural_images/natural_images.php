<?php
$images = glob("*.png");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}
$images_jpg = glob("*.jpg");

foreach($images_jpg as $image) {
    echo '<img src="'.$image.'" /><br />';
}
$images_avif = glob("*.avif");

foreach($images_avif as $image) {
    echo '<img src="'.$image.'" /><br />';
}
$images_gif = glob("*.gif");

foreach($images_gif as $image) {
    echo '<img src="'.$image.'" /><br />';
}
?>
