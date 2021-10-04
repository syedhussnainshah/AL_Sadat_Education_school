<?php 
include_once "connection.php";
$query = mysqli_query($conn,"UPDATE sale set product_condition='".$_REQUEST['val']."' WHERE product_id='".$_REQUEST['product_id']."' ");
if($query)
{
	// $q = mysqli_query($conn, "SELECT * FROM registration WHERE id='".$_REQUEST['id']."'");
	// $data=mysqli_fetch_assoc($q);
	// echo $data['$status'];
}

?>






<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="fee_table table-responsive"> 
        <tr>    
<th>    Product Name</th>
<th>    Product Price</th>
<th>    Status</th>
        </tr>
        
    <?php 
     $select = "SELECT * FROM `sale` WHERE std_id=$id AND product_condition = 2";
    $runn = mysqli_query($conn, $select);
    if ($runn) {
        echo "";
    
    
    while ($general_datas = mysqli_fetch_assoc($runn)) {
    ?>
<tr>    
<td>   
 <?php 
        $prod_id = $general_datas['product_id'];      
        $select = "SELECT * FROM `product` WHERE product_id=$prod_id";
        $runns = mysqli_query($conn, $select);
        $month_name = mysqli_fetch_assoc($runns);
        echo $month_name['product_name'];        
?>
</td>
<td><?php echo $month_name['product_price'];?></td>
<td>
   <form>
                          <select name="status_now" id="" onchange="active_inactive_user(this.value,<?php echo $general_datas['product_id']; ?>)">
                            <option value="1" >Not Submit</option>
                            <!-- <option value="1">Active</option> -->
                            <option value="2">Submit</option>
                            <!-- <option value="">Permanently Delete</option> -->
                            <!-- <option><a href="deleteuser.php?delete=<?php echo $table_data['id'];?>">Delete User</a></option> -->
                          </select>
                        </form>
    <?php 
//     $borrow = 1;
// if (isset($_REQUEST['submit'])) { 
 
// }
// $update = "UPDATE `sale` SET `product_condition`=$borrow WHERE product_id=$prod_id";

//    $runns = mysqli_query($conn, $update);



    ?>
 


    
  </td>
</tr>
    <?php }}?>



     <tr> 
        <td ></td>
        <td class="bg-success"><?php 
        if ($prod_id='') {
            $select =  "SELECT SUM(product_price) AS price From product WHERE product_id=$prod_id";
$runn = mysqli_query($conn, $select);
 if ($runn) {
    $fee_total = mysqli_fetch_assoc($runn);
            echo $fee_total['price'];
        }else{
            echo "Not Found";
        }
         }else{
            echo "Not YET";
         } 

        
        

    ?></td>
    </tr> 
     </table>
            


        </div>
        <div class="col-md-6">



            <table class="fee_table table-responsive"> 
        <tr>    
<th>    Product Name</th>
<th>    Product Price</th>
<th>    Status</th>
       </tr>

       <?php 
       echo $prod_id;
  
if (isset($_REQUEST['submit'])) { 
    $condition = $_REQUEST['chnage'];
 

$update = "UPDATE `sale` SET `product_condition`=$condition WHERE product_id=$prod_id";

   $runns = mysqli_query($conn, $update);
   
   }



    ?>
        <form action="" method="POST">
    <?php 
     $select = "SELECT * FROM `sale` WHERE std_id=$id AND product_condition = 1";
    $runn = mysqli_query($conn, $select);
    if ($runn) {
        echo "";
    
    
    while ($general_datas = mysqli_fetch_assoc($runn)) {
    ?>
<tr>    
<td>   
 <?php 
        $prod_id = $general_datas['product_id'];      
        $select = "SELECT * FROM `product` WHERE product_id=$prod_id";
        $runns = mysqli_query($conn, $select);
        $month_name = mysqli_fetch_assoc($runns);
        echo $month_name['product_name'];        
?>
</td>
<td><?php echo $month_name['product_price'];?></td>
<td>
    
     
    
     </td>
</tr>
    <?php }}?>
   
   





     <tr> 
        <td ></td>
        <td class="bg-success"><?php 
        if ($prod_id='') {
            $select =  "SELECT SUM(product_price) AS price From product WHERE product_id=$prod_id";
$runn = mysqli_query($conn, $select);
 if ($runn) {
    $fee_total = mysqli_fetch_assoc($runn);
            echo $fee_total['price'];
        }else{
            echo "Not Found";
        }
         }else{
            echo "Not YET";
         } 

        
        

    ?></td>
    <td><input type="submit" name="submit"></td>
    </tr>
    </form>
     </table>
        </div>
    </div>
</div>
<div class="row g-3">
    
  
    
       
    
   


    
       

    <div class="col-12">
        
    </div>
    

</div>