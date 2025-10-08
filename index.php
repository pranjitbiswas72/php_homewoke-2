
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>

<body>


    <!--file input form -->
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="upload">
    </form>

    <?php

    if (isset($_POST['submit'])) {
         $file =$_FILES['file'];

        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $fileError =$_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $file_name);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed =array('jpg', 'png', 'jpeg', 'pdf');


        if (in_array($fileActualExt, $allowed)) {
            if ($fileError ===0){
                if ($file_size <1000000){
                $fileNameNew =uniqid('', true).".".$
                $fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
               $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                header("Location: index.php?uploadsuccess");
            }else{
            echo "Your file is too big!";
            }
        } else{
            echo "There was an error uploading your file!";
        }
       
        }
    }

    ?>



</body>

</html>
