<html>
    <head>
        <title>Upload file script</title>
    </head>
    <body>
        <h1><center>Upload Image</center></h1>
        <form method="post" enctype="multipart/form-data" name="frm">
            Browse for image(jpg): <input type="file" name="image_file" size="35"><br><br>
            <input type="submit" value="Uploadfile" name="action">
        </form>
        <?php
        $result=0;
        if(isset($_POST["action"])=="upload file")
        {
            $imagename=basename($_FILES['image_file']['name']);
            $result=move_uploaded_file($_FILES['image_file']['tmp_name'],$imagename);
            if($result==1) echo("Successfully uploaded: <b>".$imagename."</br>");

        }
        ?>
        <br>
        <center><?php
            if($result==1)
            echo("<img src=".$imagename.">")
            ?></center>


    </body>
</html>