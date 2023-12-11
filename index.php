<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">View Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="empty.php">Empty Data</a>
            </li>
            
          </ul>
        </div>
  </nav>

<div class="col-md-12">
    <?php
        if(isset($_POST['btnSubmit'])){
        include('config.php');   

        try{  
            //$xml = simplexml_load_file('feed.xml');
            $xml = simplexml_load_file($_FILES["fileToUpload"]["tmp_name"]);
            // Iterate through XML data and insert into the database
            foreach ($xml->children() as $item) {
                $entity_id =  $item->entity_id;
                $categoryName =  $item->CategoryName;
                $sku =  $item->sku;
                $name =  $item->name;
                $description =  $item->description;
                $shortdesc =  $item->shortdesc;
                $price =  $item->price;
                $link =  $item->link;

                $image =  $item->image;
                $brand =  $item->Brand;
                $rating =  $item->Rating;
                $caffeineType = $item->CaffeineType;
                $count =  $item->Count;
                $flavored =  $item->Flavored;
                $seasonal =  $item->Seasonal;
                $instock =  $item->Instock;
                $facebook =  $item->Facebook;

                $isKCup =  $item->IsKCup;
                

                $sql = "INSERT INTO xml_feed ( entity_id, categoryName, sku, name, description, shortdesc, price, link, image, brand, rating, caffeineType, count, flavored, seasonal, instock, facebook, isKCup  ) VALUES ( '$entity_id', '$categoryName', '$sku', '$name', '$description', '$shortdesc', '$price', '$link', '$image', '$brand', '$rating', '$caffeineType', '$count', '$flavored', '$seasonal', '$instock', '$facebook', '$isKCup' ) ";
                
                mysqli_query($conn, $sql);
                
            }

            echo "Data inserted successfully into the database." . PHP_EOL;

        }  catch (Exception $e) {
                // Log errors to the log file
                logError($e->getMessage(), $logFile);
                echo "An error occurred. Check the log file for details." . PHP_EOL;
            }

        } else {
    ?>

    <div class="col-md-6">
        <form method="post" action="index.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">Select xml file</div>
            <div><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div><input type="submit" name="btnSubmit" class="btn btn-primary" value="Import"></div>
        </div>
        </form>
    </div>
    
    <?php } ?>


</div>
</body>
</html>


<?php

$logFile = 'log.txt'; // Log file path

// Function to log errors
function logError($message, $logFile)
{
    file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL, FILE_APPEND);
}
?>


