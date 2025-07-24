<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

<div class="row">
    <div class="content">
<h1>Heading 1</h1>

   <div>
       <img src="images/clock.jpg" alt="Wall Clock" width="200" height="200">
   </div> 

<table>
    <caption>Stationery Products</caption>
    <tr>
        <th>SN</th>
        <th>Items</th>
        <th>Quantity</th>
        <th>U Price</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Pen</td>
        <td>10</td>
        <td>$1.00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Pencil</td>
        <td>20</td>
        <td>$0.50</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Notebook</td>
        <td>15</td>
        <td>$2.00   </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Ruler</td>
        <td>25</td>
        <td>$1.50</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Pencil</td>
        <td>20</td>
        <td>$0.50</td>
    </tr>
</table>


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