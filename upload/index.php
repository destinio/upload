<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Image upload by des.li</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="../stylesheets/base.css">
    <link rel="stylesheet" href="../stylesheets/skeleton.css">
    <link rel="stylesheet" href="../stylesheets/layout.css">

    <!-- js
    ================================================= -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script type="text/javascript">

    </script>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>
    <div class="header full-width">
        <div class="container">
            <div class="sixteen columns">
            <div class="title">
                des.li
            </div>
            </div>
        </div>
    </div>

    <div class="upload full-width">
        <div class="container">
            <div class="sixteen columns">
                <form action="upload_file.php" method="post" enctype="multipart/form-data" class="dark-matter">
                    <label>
                        <input type="text" name="text" id="text" placeholder="new file name..."><br />
                    </label>
                    <label>
                        <input type="file" name="file" id="file" class="file">
                    </label>
                    <label>
                        <input type="submit" name="submit" value="upload" class="button">
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="crossload full-width">
        <div class="container">
            <div class="sixteen columns">
                <form action="cross_upload_file.php" method="post" enctype="multipart/form-data" class="dark-matter">
                    <label>
                        <input type="text" name="text" id="text" placeholder="new file name..."><br />
                    </label>
                    <label>
                        <input type="text" name="url" placeholder="url of image to cross load"><br />
                    </label>
                    <label>
                        <input type="submit" name="submit" value="crossload" class="button">
                    </label>

                </form>
            </div>
        </div>
    </div>

</body>
</html>
