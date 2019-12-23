$(document).ready(function() {
    var string = "ATN Ho Chi Minh";
    $("th").click(function(){
        $.post("database.php",
        {
          shopName: string
        },
        function(data, status){
          alert("Data: " + data + "\nStatus: " + status);
        });
      });
})