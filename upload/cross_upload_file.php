<link rel="stylesheet" type="text/css" href="global.css">

<?php
//blog.theonlytutorials.com
//author: agurchand

$Err = "";


if($_POST){
    //get the url
    $url = $_POST['url'];

    //add time to the current filename
    $name = basename($url);
    $temp = explode(".", $name);
    $ext = end($temp);
    $new_name = $_POST["text"] . "." . strtolower($ext);

    //check if the files are only images
    if($ext == "jpg" or $ext == "png" or $ext == "gif"){
        
        if (file_exists("../i/" . $new_name)) {
            echo $new_name . " already exists. ";
        } else {
            
            //here is the actual code to get the file from the url and save it to the uploads folder
            //get the file from the url using file_get_contents and put it into the folder using file_put_contents
            $upload = file_put_contents("../i/$new_name",file_get_contents($url));

            //check success
            if($upload) { 
                echo "URL:<br /> <span class='url'>i.des.li/" . $new_name . "</span>";
            } else {
                "please check your folder permission";
            }
        }


    } else {
        echo "Please upload only image files";
    }
}
?>
