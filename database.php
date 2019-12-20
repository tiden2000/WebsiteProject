<?php
$serverName = "LAPTOP-7J3F2UBU\\SQLEXPRESS, 1433"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"ShopsDB");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$query = "SELECT Shop FROM [ShopsDB].[dbo].[Shops]";
$res = sqlsrv_query($conn, $query);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>