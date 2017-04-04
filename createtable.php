<?php
echo "connect db";
?>
<?php
function pg_connection_string_from_database_url() {	
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$conn = pg_connect("host=ec2-107-22-223-6.compute-1.amazonaws.com port=5432 dbname=d9rnhagjf81lc4 user=sxezjwxpyzxakx password=e9295d8b7b2c109c0cd69fac8afb216ad34235aae7e6e9a52100e16c0622a326");

   $db = pg_connect($conn);
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE COMPANY2
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>
