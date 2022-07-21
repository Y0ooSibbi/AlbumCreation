<?php
include 'dbcon.php';
$selectquery="select * from album"; 
$query = mysqli_query($con,$selectquery);
$result=mysqli_fetch_array($query);
while($result = mysqli_fetch_array($query)){
?>
        <div class="card-image" id="<?php echo $result['dbtitle']; ?>" name="<?php echo $result['dbtitle']; ?>" style="background-image: url('img/4.jpg');"><h3><?php echo $result['dbtitle']; ?></h3>
          <br>
          <p><?php echo $result['dbdesc']; ?></p>
        </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div>
        <input type="file" name="<?php echo $result['dbdesc'];?>" placeholder="Put your data"> 
        <input type="submit" name="<?php echo $result['dbtitle']; ?>" value="Put image in <?php echo $result['dbtitle']; ?>">
        </div>
      </form>
      <?php
      $butname = $result['dbtitle'];
      $inpname = $result['dbdesc'];
      if(isset($_POST[$butname])){
        $file=$_FILES[$inpname];
        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];
        if($fileerror==0){
          $destfile= $butname.'/'.$filename;
          echo $destfile;
          move_uploaded_file($filepath,$destfile);
          $insertquerry = "insert into $butname(firstname) values('$destfile')";
          $query= mysqli_query($con,$insertquerry);
          if($query){
            echo "suc"; 
          }else{
              echo "nopeee";
          }
        }
      }
      ?>
    <style>

      .card-image {
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        background-color:yellow;
        border-style: ridge;
        width: 300px;
        height: 300px;
      }
    </style>
    <!-- <a href="/practice.html"><img src="<?php echo $result['pic']?>" width="500" height="500"></a> -->
    <!-- <a href="album.php">
        <div class="container">
         <img src="<?php echo $result['pic']?>" alt='Snow' style='width:10%';> -->
          <!--<div class="bottom-left">Bottom Left</div>
          <div class="top-left">Top Left</div>
          <div class="top-right">Top Right</div>
          <div class="bottom-right">Bottom Right</div>
          <div class="centered">Centered</div>
        </div>
    </a>
    <style>
        p{
          background-color:yellow;
        } 
        .container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} -->
    </style>
    <?php
}

?>
