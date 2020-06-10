// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "apuadmin", "pwd" => "{Windows29}", "Database" => "WEBappDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationserver29.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
