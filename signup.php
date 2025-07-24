<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

<div class="header">
    <h1>Sign Up</h1>
</div>
<div class="row">
    <div class="content">
        <h2>Sign Up</h2>

<form action="" method="post">
    <input type="text" placeholder="Enter your full name" required/><br>
    <input type="email" placeholder="Enter your email address" required /><br>
    <input type="tel" placeholder="Enter your phone number" required /><br>


<select name="genderId" required>
    <option value="">Select your gender</option>
    <?php
    $spot_gender = "select * from gender";
    $result = $conn->query($spot_gender);
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
    }
    ?>
</select>


<select name="roleId" required>
    <option value="">Select your role</option>
    <?php
    $spot_role = "select * from roles";
    $result = $conn->query($spot_role);
    while ($row = $result->fetch_assoc()) {
        if ($row['role'] == 'Admin') {
            continue; // Skip the Admin role
        }
        echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
    }
    ?>
</select>

    <input type="text" placeholder="Create a username" required /><br>
    <input type="password" placeholder="Create a password" required /><br>
    <input type="password" placeholder="Confirm your password" required /><br>
<br>
    <input type="submit" value="Sign Up" />
    <a href="signin.php">Already have an account? Sign In</a>
</form>

<p>HTML forms enable you to gather user input in various formats, making it easier to collect structured data. The form above includes fields for text, email, phone number, password, color selection, date and time selection, number input, range input, file upload, a text area for messages, checkboxes, radio buttons, and a dropdown menu—each designed to capture specific information efficiently.</p>
<p>You are required to create the following forms on the appropriate pages:</p>
<ul>
    <li>Contact Us form</li>
    <li>Sign Up form</li>
    <li>Sign In form</li>
</ul>

<h2>Learn More About Our Team and Mission</h2>
<p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

    </div>
    <div class="sidebar">
                <h2>Side Bar</h2>
        <p>We are a team of dedicated professionals committed to delivering high-quality services and products.</p>
        <p>This is the about page. It contains information about the website, its purpose, and the team behind it. 
        You can find details on our mission, vision, and values here. We aim to provide a comprehensive overview of 
        our services and how we can help you achieve your goals.</p>
    </div>
</div>
<?php
    require 'includes/footer.php';
?>