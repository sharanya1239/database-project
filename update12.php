<?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = '';
            $dbpass = '';
            $dbname= "test";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }
            
            $criminal_id = $_POST['criminal_id'];
            $temp_addr = $_POST['temp_addr'];
            
            $sql = "UPDATE criminal SET temp_addr = '$temp_addr'  
               WHERE criminal_id = '$criminal_id '" ;
           
            $retval = mysqli_query( $conn,$sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            echo "Updated data successfully\n";
            
            mysqli_close($conn);
         }







         ?>





<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">CRIMINAL ID</td>
                        <td><input name = "criminal_id" type = "text" 
                           id = "crime_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">TEMP ADDRESS</td>
                        <td><input name = "temp_addr" type = "text" 
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
                              id = "update" value = "Update"  action="#">
                        </td>
                     </tr>
                  
                  </table>
               </form>
           
      
   </body>
</html>