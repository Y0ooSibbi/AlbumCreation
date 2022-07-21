<!DOCTYPE html>
<html lang="en">
    <title>
        Album
    </title>
    <head>
        <body>
            <div>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <div>
                  <input type="text" id="title" name="title" placeholder="Enter Your Title" require="required"><br><br>
                  </div>
                  <div>
                  <input type="text" id="desc" name="desc" placeholder="Description"><br><br>
                  </div>
                      <input type="text"  name="photo" placeholder="For which type of member">
                  <br>
                  <br>
                  <div>
                    <input type="submit" name="submit" value="Publish">
                  </div>
                </form>
            </div>
        </body>
    </head>
</html>
