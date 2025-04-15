<?php
require_once 'includes/header.php';

$servername = "db";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=webshop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


<header>
      <div class="logo"><a href="index.html">Webshop</a></div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Profile</a></li>
        </ul>
      </nav>
    </header>
  
    <div class="categories">
      <div class="category">
        <a href="#">T-Shirts</a>
      </div>
      <div class="category">
        <a href="#">Hoodie</a>
      </div>
      <div class="category">
        <a href="#">Pants</a>
      </div>
      <div class="category">
        <a href="#">Shoes</a>
      </div>
      <div class="category">
        <a href="#">Accessories</a>
      </div>
    </div>
  
    <div class="cards-container">
      <div class="card">
        <img src="/img/Hoodie.png" alt="Hoodie">
        <div class="card-content">
          <h3>Hoodie</h3>
          <p>Soft cotton with a clean look. Perfect for any outfit.</p>
          <div class="price">€24.99</div>
        </div>
      </div>
  
      <div class="card">
        <img src="/img/Animeshirt.png" alt="Animeshirt">
        <div class="card-content">
          <h3>Hoodie 2</h3>
          <p>Cozy and stylish hoodie for casual wear.</p>
          <div class="price">€49.99</div>
        </div>
      </div>
  
      <div class="card">
        <img src="/img/Animeshirt.png" alt="Hoodie">
        <div class="card-content">
          <h3>Slim Fit Jeans</h3>
          <p>Trendy jeans with a slim fit and stretch fabric.</p>
          <div class="price">€39.99</div>
        </div>
      </div>
  
      <div class="card">
        <img src="/img/Hoodie.png" alt="Hoodie">
        <div class="card-content">
          <h3>Retro Sneakers</h3>
          <p>Comfortable sneakers with a vintage touch.</p>
          <div class="price">€59.99</div>
        </div>
      </div>
    </div>


<?php
require_once 'includes/footer.php';
?>
