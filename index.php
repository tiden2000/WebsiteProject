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
        <table>  <!-- Table -->
            <?php require 'database.php';
            while ($row = sqlsrv_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row[Shop]."</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                Shop
            </tr>
        </table>
    </body>
</html>