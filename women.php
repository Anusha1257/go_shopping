<?php
 session_start();
 $_SESSION['finalPrice']=0;
 require_once "test2.php";
 if(isset($_POST["add_to_cart"]))
 {
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array( 'item_id' => $_GET["id"], 'item_name' => $_POST["hidden_name"], 'item_price' => $_POST["hidden_price"], 'item_quantity' => $_POST["quantity"] );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
 echo '<script>window.location="women.php"</script>';
 }
 }
 else
 {
 $item_array = array( 'item_id' => $_GET["id"], 'item_name' => $_POST["hidden_name"], 'item_price' => $_POST["hidden_price"], 'item_quantity' => $_POST["quantity"] );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
 }
 if(isset($_GET["action"]))
 {
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["item_id"] == $_GET["id"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="women.php"</script>';
 }
 }
 }
 } ?> 
 <!DOCTYPE html> 
<html>
<head>
<style>
body{background-color:ghostwhite;}</style>

<body style="position:absolute;width:1366px;height:800px;">
<?php 
 $query = "SELECT * FROM woman ORDER By id ASC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 ?>
 
 <div> 
 <form method="post" action="women.php?action=add&id=<?php echo $row["id"]; ?>">
<p><div style="margin-left:210px;width:70px;float:left;margin-top:-5px;">
<img src="<?php echo $row["image"]; ?>"  style="width:150px;height:200px;border:2px solid black;"/><br>

<p><?php echo $row["name"]; ?>:$<?php echo $row["price"]; ?></p>
<tr><td><input type="number" min="0" max="20" name="quantity"  placeholder="quantity" width="100%"></td></tr>

<p> <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" align="center" />
 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
<input type="submit" name="add_to_cart" style="margin-top:5px;"  value="Add to Cart" /></p>
</div>
</p>


</div>
</form>
 </div>
 <?php
 }
 }
 ?>
 
 <br />
 </div>
 <div style="margin-left:210px;float:left;margin-top:20px;">
 <h2>ORDER DETAILS</h2></div>
<div style="margin-left:210px;width:995px;height:200px;float:left;margin-top:10px;">

 <table style="width="100%" border="2px" height="50%" top:"550px" >
 <tr>
 <th width="40%">Item Name</th>
 <th width="10%">Quantity</th>
 <th width="20%">Price</th> 
 <th width="15%">Total</th>
 <th width="5%">Action</th>
 </tr>
 <?php
 if(!empty($_SESSION["shopping_cart"])) 
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["item_name"]; ?></td> 
 <td><?php echo $values["item_quantity"]; ?></td>
 <td> <?php echo $values["item_price"]; ?></td>
 <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);
 ?>
 </td>
 <td><a href="women.php?action=delete&id=<?php echo $values["item_id"]; ?>">
 <span class="text-danger">Remove</span></a></td>
 </tr> <?php
 $total = $total + ($values["item_quantity"] * $values["item_price"]);
 
 }
 ?>
 <tr>
 <td colspan="3" align="right">Total</td>
 <td align="right"><?php echo number_format($total, 2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
 </table>
</div>

 <div  style="margin-left:1150px;margin-top:1600px;">  
 <input type="submit" value="Back" onclick='location.href="main.html" '></div>
 </div>
 <br />
</body>
</html>