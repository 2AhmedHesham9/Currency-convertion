<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency view</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <table style=" " class="table">
   <thead>
   <th style=" padding-right:130px;">id</th>
    <th style=" padding-right:130px;">currency</th>
    <th style=" padding-right:130px;">price</th>
    
    <tr>
        <hr>
   </thead>
   
   <tbody>
            
            <?php
                $sql="SELECT * FROM currency ";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc()){
                        
            ?>
           
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['cur_name'];?></td>
                        <td><?php echo $row['cur_price'];?></td>
                        
                        <td><a class="btn btn-info" href="edit.php?id=<?php echo
                        $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php
                        echo $row['id']; ?>">Delete</a> </td>

                
      </tr>
      
        
     
         
    
    <?php }
    
        }
       ?> 
       
    </tbody>
    

    </table>

    </div>
</body>
</html>


