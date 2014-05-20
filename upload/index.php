<!DOCTYPE html>
<html>
<head>
    <title>des.li file upload</title>
    <link rel="stylesheet" type="text/css" href="global.css">
</head>
<body>
    <form action="upload_file.php" method="post" enctype="multipart/form-data" class="dark-matter">
        <h1>Local Upload
        <span>uploads from your local machine.</span></h1>
         <label>
            <span>New Name: </span>
            <input type="text" name="text" id="text"><br />
        </label>
        <label>
            <span>File Name: </span>
            <input type="file" name="file" id="file">
        </label>
        <label>
            <span>&nbsp;</span>
            <input type="submit" name="submit" value="upload" class="button">
        </label>
    </form>

    <form action="cross_upload_file.php" method="post" enctype="multipart/form-data" class="dark-matter">

        <h1>Upload from URL
        <span>submit the URL of any image and it will be uploaded under the new name</span></h1>
        <label>
            <span>New Name: </span>
            <input type="text" name="text" id="text"><br />
        </label>
        <label>
            <span>Your URL: </span>
            <input type="text" name="url" /><br />
        </label>
        <label>
            <span>&nbsp;</span>
            <input type="submit" name="submit" value="crossload" class="button">
        </label>

    </form>


</body>
</html>
