<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include("dbconnection.php"); 

function getUserByEmail($pdo, $email) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getDeliveryByEmail($pdo, $email) {
    $stmt = $pdo->prepare("SELECT * FROM delivery_registration WHERE mail = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


$email = $_SESSION['email'];
$user = getUserByEmail($pdo, $email);


if (!$user) {

    echo "Error: User not found";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="userprofile.css">
</head>
<body>
    <header class="sticky">
        <a href="#" class="logo"><img src="logoletter.png" alt="logo"></a>
        <ul class="menu">
            <li><a href="home.html">Home</a></li>
            <li><a href="delivery.html">Delivery</a></li>
            <li><a href="Catogories.html">Categories</a></li>
            <li><a href="contact.html">Contact us</a></li>
            <li><a href="aboutus.html">About us</a></li>
        </ul>
        <div class="icon">
            <a href="search.html"><i class='bx bx-search'></i></a>
            <a href="userprofile.php"><i class='bx bx-user'></i></a>
            <a href="cart.html"><i class='bx bx-cart'></i></a>
            <div class="bx bx-menu" id="icon"></div>
        </div>
    </header>
    <br><br><br><br><br><br><br>
    <h2>User Profile</h2>
    <table>
        <tr>
            <th colspan="2">User Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo isset($user['username']) ? $user['username'] : "N/A"; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo isset($user['email']) ? $user['email'] : "N/A"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo isset($user['address']) ? $user['address'] : "N/A"; ?></td>
        </tr>
		<tr>
            <td>Age</td>
            <td><?php echo isset($user['age']) ? $user['age'] : "N/A"; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo isset($user['password']) ? $user['password'] : "N/A"; ?></td>
        </tr>
    </table>

    
   
    <div class="container">
  <h1 style="color : blue">PRODUCT LIST</h1>
  <table id="productTable" style="background-color: aliceblue">

    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Telephone</th>
      <th>City</th>
      <th>Postal</th>
      <th>order_yes</th>
      <th>created_at</th>
    </tr>

    <?php
    require 'config[1].php';
    $sql1 = "SELECT name , address , mail, telephone, city, postal, order_yes, created_at FROM delivery_registration";
    $result = $con->query($sql1);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["address"]; ?></td>
          <td><?php echo $row["mail"]; ?></td>
          <td><?php echo $row["telephone"]; ?></td>
          <td><?php echo $row["city"]; ?></td>
          <td><?php echo $row["postal"]; ?></td>
          <td><?php echo $row["order_yes"]; ?></td>
          <td><?php echo $row["created_at"]; ?></td>
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
  

</body>

</html>
