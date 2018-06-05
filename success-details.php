 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Quotes Form</title>
  <!-- Jason UAW test -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap Provided CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries/CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Include dbconfig -->
  <?php
    include 'dbconfig.php';
    ?>
</head>
<body>
  <?php
      $sql = "INSERT INTO details(quote_no, customer, date, prepared_by) VALUES (?,?,?,?)";
      //prevents mysql injection attacks
      if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ssss", $_POST["quote_no"], $_POST["customer"], $_POST["date"], $_POST["prepared_by"]);
      $stmt->execute();
      echo "success";   
      }
      else echo "no way";
    
   ?>
    <?php
   //for second part of form ( not including item part)
      $sql2 ="INSERT INTO  items(name, qty, rate, amount, quote_no) VALUES (?,?,?,?,?)";
      //prevents mysql injection attack
      if ($stmt2 = $mysqli->prepare($sql2)) {
        $stmt2->bind_param("sssss", $_POST["name"], $_POST["qty"], $_POST["rate"], $_POST["amount"], $_POST["quote_no"]);
        $stmt2->execute();
        //echo $_POST["name"], $_POST["qty"], $_POST["rate"], $_POST["amount"];
            $last_id = mysqli_insert_id($mysqli);
           $store = $_POST["quote_no"];
    //echo "Records inserted successfully. Last inserted ID is: " . $last_id;
    $sql3 = "UPDATE details SET itemid=$last_id WHERE quote_no= $store";
   if ($mysqli->query($sql3) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $mysqli->error;
}
      }

     
    //if ($stmt = $mysqli->prepare($sql2)) {
        //$stmt->bind_param("ssss", $_POST["name"], $_POST["rate"], $_POST["amount"], $_POST["prepared_by"]);
      //$stmt->execute();
     // }
      else  echo 'Second query failed: ' . $mysqli->error;
      
   ?>


  </body>
</html> 