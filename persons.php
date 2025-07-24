<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>
<div class="row">
    <div class="content">
        <h2>Welcome to Our About Page</h2>
<table>
    <caption>Stationery Products</caption>
    <tr>
        <th>SN</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Role</th>
        <th>Date Created</th>
        <th>Actions</th>

    </tr>
<?php
$spot_users = "SELECT * FROM users left join roles using (roleId) left join gender using (genderId) WHERE users.status = 0 ORDER BY users.fullname DESC";
$result = $conn->query($spot_users);
while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['userId']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['role']; ?></td>
    <td><?php echo $row['dateCreate']; ?></td>
    <td>
        [ <a href="edit_user.php?id=<?php echo $row['userId']; ?>">Edit</a> ] |
        [ <a href="proc/processes.php?delete_user=<?php print $row['userId']; ?>" onclick="return confirm('Are you sure you want to delete <?php echo $row['fullname']; ?>?');">Del</a> ]
    </td>
</tr>
<?php
} if ($result->num_rows == 0) {
    print "<tr><td colspan='7'>No users found.</td></tr>";
}

?></table>

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