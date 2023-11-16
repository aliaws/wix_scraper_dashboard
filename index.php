
<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Wix Scraper Details</title>
</head>
<body>
    <?php
        require_once('function.php');
        if ($_POST['password'] == DASH_PASS) {
            $_SESSION['password'] = $_POST['password'];
          }
          if ($_SESSION['password'] == DASH_PASS) {
                ?><div class="">
                    <?php
                    $result = get_all_scraper();
                    require '_body.php';
                    ?>
                </div><?php
            } 
    else {
    $borderRed = $textDanger = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $borderRed = "border-danger";
      $textDanger = "text-danger";
    }
    require '_model.php';
    } ?>
    
</body>
</html>