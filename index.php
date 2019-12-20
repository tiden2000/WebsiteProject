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
        <?php
        $serverName = "LAPTOP-7J3F2UBU\\SQLEXPRESS"; //serverName\instanceName
        
        // Since UID and PWD are not specified in the $connectionInfo array,
        // The connection will be attempted using Windows Authentication.
        $connectionInfo = array( "Database"=>"ShopsDB");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        $query = sqlsrv_query("SELECT Shop FROM Shops");
        
        if( $conn ) {
            echo "Connection established.<br />";
        }
        else{
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
        ?>
        <table>  <!-- table -->
        <tr>
            <td>Shop</td>
        </tr>
            <?php
            while ($row = sqlsrv_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row[Shop]."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>