<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = '';
            $dbpass = '';
            $dbname= "test";
            $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_erEror());
            }
            
            $crime_id = $_POST['crime_id'];
            $temp_address = $_POST['temp_address'];
            
            $sql = "UPDATE employee ". "SET temp_address = $temp_address ". 
               "WHERE crime_id = $crime_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">CRIME ID</td>
                        <td><input name = "crime_id" type = "text" 
                           id = "crime_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">TEMP ADDRESS</td>
                        <td><input name = "temp_address" type = "text" 
                           id = "temp_address"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>