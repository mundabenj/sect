<div class="topnav">
    <!-- Top nav section -->
    <a href="./">Home</a>
    <a href="about.php">About</a>
    <a href="#">Projects</a>
    <a href="#">Team</a>
    <a href="products.php">Products</a>
    <a href="#">Hobbies</a>
    <a href="contacts.php">Contacts</a>

    <div class="topnav-right">
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
    </div>
</div>
<div class="header">
    <h1>
    <?php 
$title = explode('.', basename($_SERVER['PHP_SELF']));
print ucwords(reset($title));
    ?>
    </h1>
</div>