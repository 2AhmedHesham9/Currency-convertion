<?php 

include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['id'])) {
    $cur_id  = $_GET['id'];
   $SQL=" SELECT * FROM `currency` WHERE id = $cur_id ";
   $result = mysqli_query($conn,$SQL);
   if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
        $cur_name=$row['cur_name'];
        $cur_price=$row['cur_price'];
       

    if (isset($_POST['update'])) {
        $cur_n = $_POST['cur_n'];
        $cur_p = $_POST['cur_p'];
      
        $sql = "UPDATE `currency` SET
        `cur_name`='$cur_n',`cur_price`='$cur_p'   WHERE  id=$cur_id "  ;
        $result = $conn->query($sql);
        if ($result == TRUE) {
        echo "Record updated successfully.";
        header('Location: viewpage.php');
        }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }
   ?>
   
        <h2> Update Form</h2>
        <form action="" method="post" >
        <fieldset>
        <legend>Personal information:</legend>
        currency name:<br>
        <input  type="text" name="cur_n" value="<?php echo  $cur_name;?>">
        <input type="hidden" name="cur_id" value="<?php echo $id; ?>">
        <br>
        currency price:<br>
        <input type="text" name="cur_p" value="<?php echo $cur_price; ?>">
       

        <br><br>
        <input type="submit" value="Update" name="update">
        </fieldset>
        </form>



                

<?php }
}

}



?>  


</body>
</html>


