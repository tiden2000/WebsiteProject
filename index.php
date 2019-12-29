<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link href="css/styles.css?<?=filemtime("css/styles.css")?>" rel="stylesheet" type="text/css" />
        <script src="scripts.js"></script>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <div style="overflow: auto;" class="container">
            <nav>
                <ul>
                    <li id="webname">ATN Shops Central Database</li>
                    <li onclick="document.getElementById('add-modal').style.display='block'">Add</li>
                    <li onclick="document.getElementById('update-modal').style.display='block'">Update</li>
                    <li onclick="document.getElementById('delete-modal').style.display='block'">Delete</li>
                </ul>
            </nav>
        </div>

        <form name="input-form" id="input-form" method="post">  <!-- Hidden form used to display data in tables -->
        <input type="hidden" id="shopName" name="shopName" value=""/>
        </form>
        
        <div id="add-modal" class="modal animate">  <!-- Popup form to add data -->

            <span onclick="document.getElementById('add-modal').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <form name="add-form" id="add-form" method="post">

                <div class="add-form-container">
                    <label for="shopNameAdd"><b>Shop Name</b></label>
                    <input type="text" name="shopNameAdd" required><br>

                    <label for="saleIdAdd"><b>Sale ID</b></label>
                    <input type="text" name="saleIdAdd" required><br>

                    <label for="customerAdd"><b>Customer Name</b></label>
                    <input type="text" name="customerAdd" required><br>

                    <label for="productAdd"><b>Product Name</b></label>
                    <input type="text" name="productAdd" required><br>

                    <label for="dateAdd"><b>Sale Date</b></label>
                    <input type="text" name="dateAdd" required><br>

                    <label for="saleAdd"><b>Sale</b></label>
                    <input type="text" name="saleAdd" required><br>

                    <button type="submit">Add</button>
                    <button type="button" onclick="document.getElementById('add-modal').style.display='none'" class="cancelButton">Cancel
                    </button>
                </div>

            </form>

        </div>

        <div id="update-modal" class="modal animate">  <!-- Popup form to update data -->

            <span onclick="document.getElementById('update-modal').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <form name="update-form" id="update-form" method="post">

                <div class="update-form-container">
                    <label for="shopNameUpdate"><b>Shop Name</b></label>
                    <input type="text" name="shopNameUpdate" required><br>

                    <label for="saleIdUpdate"><b>Sale ID</b></label>
                    <input type="text" name="saleIdUpdate" required><br>

                    <label for="customerUpdate"><b>Customer Name</b></label>
                    <input type="text" name="customerUpdate" required><br>

                    <label for="productUpdate"><b>Product Name</b></label>
                    <input type="text" name="productUpdate" required><br>

                    <label for="dateUpdate"><b>Sale Date</b></label>
                    <input type="text" name="dateUpdate" required><br>

                    <label for="saleUpdate"><b>Sale</b></label>
                    <input type="text" name="saleUpdate" required><br>

                    <button type="submit">Update</button>
                    <button type="button" onclick="document.getElementById('update-modal').style.display='none'" class="cancelButton">Cancel
                    </button>
                </div>

            </form>

        </div>

        <div id="delete-modal" class="modal animate">  <!-- Popup form to delete data -->

            <span onclick="document.getElementById('delete-modal').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <form name="delete-form" id="delete-form" method="post">

                <div class="delete-form-container">
                    <label for="shopNameDelete"><b>Shop Name</b></label>
                    <input type="text" name="shopNameDelete" required><br>

                    <label for="saleIdDelete"><b>Sale ID</b></label>
                    <input type="text" name="saleIdDelete" required><br>

                    <button type="submit">Delete</button>
                    <button type="button" onclick="document.getElementById('delete-modal').style.display='none'" class="cancelButton">Cancel
                    </button>
                </div>

            </form>

        </div>

        

        <table id="shopstb">  <!-- table -->
        <tr>
            <th style="width=120px;">Shop</th>
        </tr>
        <?php require 'database.php';
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr id='shop-row'>";
            echo "<td>" . $row['shops'] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>

        <script src="scripts.js"></script>

        <table id="saletb">  <!-- table -->
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