$(document).ready(function() {
    var string = "Shop1";
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