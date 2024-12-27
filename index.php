<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Page</title>
  <link rel="stylesheet" href="../CSS/style7.css" />
</head>
<body>
    <?php include 'head2.php' ?>
   
  <div class="container" style="color: aliceblue">
    <h1>ADD PRODUCT HERE</h1>
    <br>
    <form id="productForm" method="post" action="addproduct.php">
      <label for="productName">Product Name:</label>
      <input type="text" id="productName" name="productName" required />
      <p id="pname_error"></p>
      <br>
      <label for="productCost in dollar's">Product Cost:</label>
      <input type="number" id="productCost" name="productCost" required />
      <br>
      <br>
      <label for="clientname">Client Name:</label>
      <input type="text" id="clientname" name="clientname" required />
      <p id="cname_error"></p>
      <br>
      <label for="duration">Duration(Years):</label>
      <input type="year" id="duration" name="duration" required />
      <br>
      <br>
      <button type="submit" style=" width: 100%" id="submit" name="submit">Add Product</button>
    </form>
    <div id="successMessage"></div>
  </div>

  <script>
    var productName = document.getElementById("productName");
    var productCost = document.getElementById("productCost");
    var clientname = document.getElementById("clientname");
    var duration = document.getElementById("duration");

    var submit = document.getElementById("submit");
    submit.addEventListener("click", function() {
      submit.style.backgroundColor = "black";
      submit.style.color = "white";
      submit.textContent = "clicked";

      var nregex = /^[a-zA-Z]+$/;
      var validate = true;
      if (nregex.test(clientname.value) == false) {
        cname_error.textContent = "Enter a valid client name";
        validate = false;

        if (validate == false) {
          event.preventDefault();
        }
      }
    });

    productName.addEventListener("click", function() {
      productName.style.backgroundColor = "LightCoral";
    });
    productCost.addEventListener("click", function() {
      productCost.style.backgroundColor = "LightCoral";
    });
    clientname.addEventListener("click", function() {
      clientname.style.backgroundColor = "LightCoral";
    });
    duration.addEventListener("click", function() {
      duration.style.backgroundColor = "LightCoral";
    });
  </script>
   

<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle the form submission
  $productName = $_POST['productName'];
  $productCost = $_POST['productCost'];
  $clientname = $_POST['clientname'];
  $duration = $_POST['duration'];

  $sql = "INSERT INTO details (`pname`,`pcost`,`cname`,`duration`) VALUES ('$productName','$productCost','$clientname','$duration')";
  if ($con->query($sql)) {
    echo "<script>alert('inserted successfully')</script>";
  }
  /* Save the product details to a PHP file or database
    $productDetails = "Product Name: $productName, Product Cost: $productCost,Client Name:$clientname,Duration:$duration\n";
    file_put_contents('product_details.txt', $productDetails, FILE_APPEND);

    // Return success message
    echo json_encode(['message' => 'Product added successfully']);
    exit;*/
}
?>

<div class="container">
  <h1 style="color: aliceblue">PRODUCT LIST</h1>
  <table id="productTable" style="background-color: aliceblue">

    <tr>
      <th>Product Name</th>
      <th>Product Cost</th>
      <th>Client Name</th>
      <th>Duration</th>
    </tr>

    <?php
    require 'config.php';
    $sql1 = "SELECT `pname`, pcost, cname, `duration` FROM details";
    $result = $con->query($sql1);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>

          <td><?php echo $row["pname"]; ?></td>
          <td><?php echo $row["pcost"]; ?></td>
          <td><?php echo $row["cname"]; ?></td>
          <td><?php echo $row["duration"]; ?></td>
        </tr>
      <?php
      }
      ?>
  </table>
  </h1>
</div>
<?php
    } else {
      echo "No results";
    }
    $con->close();
?>
<?php include 'footer.php' ?>
</body>

</html>