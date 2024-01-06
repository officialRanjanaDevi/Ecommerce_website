<?php
include 'authguard.php';
include "menu.html";



$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
include "../shared/connection.php";



echo"<h2 class=' container d-flex mt-2 justify-content-center text-white'>Accepted Order Table</h2>";
echo" <div class='head'><table class='table  table-bordered'>
<th class='sno  box'>S.No.</th>
<th class='name  box'>Product Name</th>
<th class='price  box'>Price</th>
<th class='pdt-img  box'>  Product Image </th>
<th class='detail box'>Detail</th> 
<th class='ID box'>Customer ID</th>
<th class='delivery box'>Delivery Date</th>
<th class='order box'>Order Status</th>    
  
</table></div>";


$sql_result=mysqli_query($conn,"select * from order_table inner join product_details on order_table.pid=product_details.pid where uploaded_by=$userid   And order_status='Accepted' ");

$total=0;
$count=1;
while($row=mysqli_fetch_assoc($sql_result)){

$total+=$row['price'];
echo " <div class='table_box'>
<table class='table   table-bordered'>
<td class='sno'>$count</td>
<td class='name'>$row[name]</td>
<td class='price'>$row[price]</td>
<td class='pdt-img'>
    <img src='$row[impath]'>
</td>
<td class='detail'>$row[detail]</td>
<td class='ID'>$row[user_id]</td> 
<th class=' delivery'>$row[order_date]</th>
<th class='order'>$row[order_status]</th> 

</table></div>";
$count=$count+1;

}

?>

<?php
include "footer.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .head{
            margin-left: 50px; 
            margin-top: 50px;
        }
        .table_box{
            height: 250px;
            margin-left: 50px;
           
        }
        .pdt-img{
            height: 150px;
            width: 150px;
        }
        .name{
            height: 150px;
            width: 200px;
        }
        .price{
            height: 150px;
            width: 150px;
        }
        .sno{
            height: 150px;
            width: 80px;
          
        }
        .detail{
            height: 150px;
            width: 300px;
        }
        .ID{
            height: 150px;
            width: 150px; 
        }
        .delivery{
            height: 150px;
            width: 150px;
        }
        .order{
            height: 150px;
            width: 150px;
        }
        .action{
            height: 150px;
            width: 150px;
            
        }
        .box{
           height: 50px;
           font-size: large;
          
        }
       
    </style>

</head>
<body>
    
</body>
</html>
