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

// Get the modal
var modal = document.getElementById('add-modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}