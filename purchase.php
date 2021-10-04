<?php 
ob_start();

$id = $_GET['id'];
if (empty($id)) {
    header("location: index.php");
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
 <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>
    <body>
        <?php 
if (isset($_REQUEST['submit'])) {


$count =count($_REQUEST['price']);
$count =count($_REQUEST['qty']);
$count =count($_REQUEST['main_input']);
for ($i=0; $i<$count ; $i++) { 
   $add_product = $_REQUEST['product_add'][$i];
    $product_condition = $_REQUEST['condition'][$i];
   $price = $_REQUEST['price'][$i];
   $qty = $_REQUEST['qty'][$i];
   $main_input = $_REQUEST['main_input'][$i];


   $insert = "INSERT INTO `sale`(`product_id`, `std_id`, `product_condition`, `qty`, `price`, `total`) VALUES ('$add_product', '$id', '$product_condition', '$price', '$qty', '$main_input')";
   $runn = mysqli_query($conn, $insert);
   if ($runn) {
       echo "OK";
   }else{
    echo "Not OK";
   }
}
   
}
                         ?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
<div class="input_fields_wrap container">
    <button type="button" class="add_field_button btn btn-primary">Add Field</button>
<button type="button" class="remove_field_button btn btn-danger">Remove Field</button>
    <form action="" method="POST">
    <div class="row">
                                <div class="col-md-2">
        <label class="form-label">Class</label>
        <select class="form-select" name="product_add">
    <?php $select = "SELECT * FROM product";
    $runn = mysqli_query($conn, $select);
    while ($product_data = mysqli_fetch_array($runn)) { ?>
       <option value="<?php echo $product_data['product_id'];?>"><?php echo $product_data['product_name'];?></option>
       <?php }?>
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Condition</label>
        <select class="form-select " name="condition">
       <option value="1"> Purchase</option>
       <option value="2"> Borrow</option>
     
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" id="input1" name="price[]"  />
    </div>
    <div class="col-md-2">
        <label class="form-label">Quantity</label>
        <input type="text" id="input2" name="qty[]" class="form-control" />
    </div>
    <div class="col-md-2">
        <label class="form-label">Total</label>
        <input type="text" id="myInput" name="main_input[]" class="form-control" />
    </div>
    
                            </div>
                            <br>
                            
                            

</div>
<?php 
    $select = "SELECT * FROM student_data WHERE student_id=$id";
    $runn = mysqli_query($conn, $select);
    $general_data = mysqli_fetch_array($runn);
    // echo $general_data['std_name'];
        ?>
<div class="row">
                                <div class="col-md-6">
                                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3 btn btn-danger"><a href="show_product_detail.php?id=<?php echo $general_data['student_id'];?>">Product Detail</a></div>
                                </div>
                            </div>
                            </form>
                         
                                
                            </div>
                        
                    </div>
                    
                </div>
            </div>

        </main>
        

<script>
    $('document').ready(function() {
    $('#input1,#input2').each(function()   {$(this).on('change',recalculate);}
       );
});
function recalculate()
{
    if(isNaN(this.value))
       alert("Please enter a number");
    else
    {
        var a = 40;
        var value1 = $('#input1').val().trim() == "" ? 0 :  parseInt($('#input1').val());
        var value2 = $('#input2').val().trim() == "" ? 0 :  parseInt($('#input2').val());
        
        var total =  value1 * value2 
        $('#myInput').val(total);
    }
}
</script>


<script>
    var max_fields      = 100;
var wrapper         = $(".input_fields_wrap"); 
var add_button      = $(".add_field_button");
var remove_button   = $(".remove_field_button");
var i=1;
$(add_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields < max_fields){
        $(wrapper).append('<div class="row" id="row'+i+'"><div class="col-md-2"><label class="form-label">Class</label><select id="'+i+'" class="form-select" name="product_add"><?php $select = "SELECT * FROM product";
    $runn = mysqli_query($conn, $select);
    while ($product_data = mysqli_fetch_array($runn)) { ?>
       <option value="<?php echo $product_data['product_id'];?>"><?php echo $product_data['product_name'];?></option><?php }?>
        </select></div><div class="col-md-2"><label class="form-label">Condition</label><select class="form-select " id="'+i+'" name="condition"><option value="1"> Purchase</option><option value="2"> Borrow</option></select></div><div class="col-md-2"><label class="form-label">Price</label><input type="text" class="form-control" id="input1'+i+'" name="price[]"  /></div><div class="col-md-2"><label class="form-label">Quantity</label><input type="text" id="input2'+i+'" name="qty[]" class="form-control" /></div><div class="col-md-2"><label class="form-label">Total</label><input type="text" id="myInput'+i+'" name="main_input[]" class="form-control" /></div><div class="col-md-2"><br></div></div>');
    }
});
$(remove_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields>1){
        wrapper[0].childNodes[total_fields-1].remove();
    }
});
</script>
    <?php include_once 'jslink.php' ?>

</body>