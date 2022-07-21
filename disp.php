<a href="createrAccount.php">Become Premium Member by signing in</a>
<?php
include 'dbcon.php';
$selectquery="select * from album WHERE pic='normal'"; 
$query = mysqli_query($con,$selectquery);
$result=mysqli_fetch_array($query);
while($result = mysqli_fetch_array($query)){
?>
    <a href="<?php echo $result['dbtitle']; ?>/<?php echo $result['dbtitle']; ?>.php">
        <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h3><?php echo $result['dbtitle']; ?></h3>
          <br>
          <!--<h3 style="font-size:300%;">Size of the first text</h3>-->
          <p><?php echo $result['dbdesc']; ?></p>
        </div>
    </a>
      <form action="" method="POST" enctype="multipart/form-data">
      </form>
    <style>
      .card-image {
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        background-color:rgb(173,216,230);
        border-style: ridge;
        width: 300px;
        height: 300px;
      }
    </style>
    <?php
}

?>
