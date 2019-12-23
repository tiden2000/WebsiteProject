<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta charset="utf-8">
        <title>Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="jquery_functions.js"></script>
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
        <table id="shopstb">  <!-- table -->
        <tr>
            <th>Shop</th>
        </tr>
        <?php require 'database.php';
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr id='shop-row'>";
            echo "<td>" . $row['shops'] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>

        <table id="saletb">  <!-- table -->
        <tr>
        <th>Customer</th>
        <th>Sale</th>
        </tr>
        <?php require 'database.php';
        while ($row = mysqli_fetch_array($saleResult)) {
            echo "<tr id='data'>";
            echo "<td>" . $row['customer'] . "</td>";
            echo "<td>" . $row['sale'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tr>
        </table>
    </body>
</html>