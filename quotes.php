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

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action ="success-details.php" method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="quote_no">
       Quote #
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="quote_no" name="quote_no" placeholder="Quote Number Here" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="customer">
       Customer
      </label>
      <input class="form-control" id="customer" name="customer" placeholder="Name..." type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="date">
       Date
      </label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="date"/>
     </div>
     <div class ="form-group">
    
<h2>Item Description</h2>
<table class="table table-">
<thead>
<tr>
<th>Item Name</th>
<th>Quantity</th>
<th>Rate</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr class="success">
<td> <input class="form-control" id="name" name="name" placeholder="Item Name Here" type="text"/></td>
<td> <input class="form-control" id="qty" name="qty" placeholder="Quantity" type="text"/></td>
<td><input class="form-control" id="rate" name="rate" placeholder="Rate" type="text"/></td>
<td><input class="form-control" id="amount" name="amount" placeholder="Amount" type="text"/></td>
</tr>
<!--<tr class="danger">
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>
<tr class="info">
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>-->
</tbody>
</table>
</div>
      <div class="form-group ">
      <label class="control-label " for="prepared_by">
       Prepared By
      </label>
      <input class="form-control" id="prepared_by" name="prepared_by" placeholder="Prepared By" type="text"/>
     </div>

     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html> 