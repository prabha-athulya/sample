
        <?php
 
        
        $conn = mysqli_connect("localhost", "root", "", "person");
         
       
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        else if(isset($_POST['submit']))
        {
        $na =  $_POST['name'];
        $em = $_POST['email'];
        $ph =  $_POST['phno'];
        $ad = $_POST['address'];
      
         
        
        $sql = "INSERT INTO info  VALUES ('$na', 
            '$em','$ph','$ad')";
        } 
        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data"; 
 
           // echo nl2br("\n$na\n $em\n "
            //    . "$ph\n $ad");
            echo "Record inserted successfully";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        
        mysqli_close($conn);
        ?>
