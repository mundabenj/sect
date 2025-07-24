<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>
<div class="row">
    <div class="content">
        <h2>Talk to Us</h2>
        
<form action="proc/processes.php" method="post">
    <input type="text" name="allnames" placeholder="Enter your full name" required/><br>
    <input type="email" name="email" placeholder="Enter your email address" required /><br>
    <input type="tel" name="phone" placeholder="Enter your phone number" required /><br>
        <select name="subject" id="">
        <option value="" disabled selected>Select Subject</option>
        <option>Email Support</option>
        <option>eLearning Support</option>
        <option>Attendance Support</option>
        <option>General Feedback</option>
    </select><br>
    <textarea name="message" rows="5" cols="30" placeholder="Enter your message here..." required></textarea><br>
    <input type="submit" name="send_message" value="Send Message" />
    <input type="reset" value="Clear" />
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