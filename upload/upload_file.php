<link rel="stylesheet" type="text/css" href="global.css">

<?php

$allowedExts = array("gif", "jpeg", "jpg", "JPG", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$new_name = $_POST["text"] . "." . strtolower($extension);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {

    echo "Upload: " . $new_name . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../i/" . $new_name))
      {
      echo $new_name . " already exists. ";
      }
    else
      {

      move_uploaded_file($_FILES["file"]["tmp_name"], "../i/" . $new_name);

      echo "URL: <span class='url'>i.des.li/" . $new_name . "</span>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
