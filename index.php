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
        <form name="input-form" id="input-form" method="post">
        <input type="hidden" id="shopName" name="shopName" value=""/>
        </form>
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
        
        <script>  // Take data of row on click in shopstb

        highlight_row();
        function highlight_row() {
            var table = document.getElementById('shopstb');
            var cells = table.getElementsByTagName('td');
            for (var i = 0; i < cells.length; i++) {
                // Take each cell
                var cell = cells[i];
                cell.onclick = function () {
                    // Get the row id where the cell exists
                    var rowId = this.parentNode.rowIndex;
                    
                    var rowsNotSelected = table.getElementsByTagName('tr');
                    for (var row = 0; row < rowsNotSelected.length; row++) {
                        rowsNotSelected[row].style.backgroundColor = "";
                        rowsNotSelected[row].classList.remove('selected');
                        }
                        var rowSelected = table.getElementsByTagName('tr')[rowId];
                        rowSelected.style.backgroundColor = "#bdbdbd";
                        rowSelected.className += " selected";
                        document.getElementById("shopName").value = rowSelected.cells[0].innerHTML;
                        document.forms["input-form"].submit();
                }
            }
        }
        </script>

        <table id="saletb" style="width:400px">  <!-- table -->
        <tr>
        <th>Sale ID</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Date</th>
        <th>Sale</th>
        </tr>
        <?php require 'database.php';
        $exist = isset($_POST['shopName'], $saleResult);
        if ($exist == true) {
            while ($row = mysqli_fetch_array($saleResult)) {
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
    </body>
</html>