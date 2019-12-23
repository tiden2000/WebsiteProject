<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <div style="overflow: auto;" class="container">
            <nav>
                <ul>
                    <li id="webname">MyWebsite</li>
                    <li>Update</li>
                    <li>Delete</li>
                </ul>
            </nav>
        </div>
        <table id="shopstb">  <!-- Shop table -->
        <tr>
            <th>Shop</th>
        </tr>
        <?php require 'database.php';  // Fetch shop data from database to html table
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr id='shop-row'>";
            echo "<td>" . $row['shops'] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>

        <table id="saletb">  <!-- Sale table -->
        <tr>
        <th>Sale Id</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Date</th>
        <th>sale</th>
        </tr>
        <?php require 'database.php';
        $exist = isset($_POST['shopName'], $saleResult);
        if ($exist == true) {
            while ($row = mysqli_fetch_array($saleResult)) {  // Fetch sale data from database to html table
                echo "<tr id='data'>";
                echo "<td>" . $row['saleId'] . "</td>";
                echo "<td>" . $row['customer'] . "</td>";
                echo "<td>" . $row['product'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['sale'] . "</td>";
                echo "</tr>";
            }
        }
        
        ?>
        </tr>
        </table>
        <form method="post" id="input-form">  <!-- Take shop name as input -->
        <input type="text" id="shopName" name="shopName" value=""/>
        </form>
    </body>
</html>