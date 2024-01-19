<?php
session_start();
if(isset($_SESSION['uname'])){
echo "<h2>Welcome to product page</h2>";
echo "<br/><a href='welcome.php'><input type=button name=back value=back></a>";
}
else{
echo "<script>location.href='logins.php'</script>";
}
?>
<!doctype html>
<html>
<head>
<title>
Products
</title>
</head>
<body>
<h1 style="color:red">List of products</h1>
<table rules="all" width="500px" border="1px">
<tr>
<th>picture</th>
<th>name</th>
<th>price</th>
<th>quantity</th>
</tr>
<tr>
<td><img src="caps.png"></td>
<td>cap</td>
<td >Rs500</td>
<td><input type="number" id="q1"></td>
<td><button type="button" id="button1">Add to cart</button></td>
<td>
<script>
let button1=document.getElementById("button1");
button1.addEventListener('click',calculate);
function calculate(){
var p1=500;
var q1=document.getElementById("q1");
var qua1=parseInt(q1);
var res="";
res=p1*qua1;
var res1=parseInt(res);
document.getElementById("para").innerHTML=res1;
}
</script>
</td>
</tr>
<tr>
<td><img src="iphone.png"></td>
<td>iphone</td>
<td>Rs100000</td>
<td><input type="number" id="q2"></td>
<td><button type="button" id="button1">Add to cart</button></td>
<td>
<script>
let button2=document.getElementById("button1");
button2.addEventListener('click',calculate);
function calculate(){
var p2=100000;
var q2=document.getElementById("q2");
var qua2=parseInt(q2);
var res="";
res=p1*qua2;
var res2=parseInt(res);
document.getElementById("para").innerHTML=res2;
}
</script>
</td>
</tr>
<tr>
<td><img src="watches.png"></td>
<td>watches</td>
<td>Rs1000</td>
<td><input type="number" id="q3"></td>
<td><button type="button" id="button1">Add to cart</button></td>
<td>
<script>
let button3=document.getElementById("button1");
button3.addEventListener('click',calculate);
function calculate(){
var p3=1000;
var q3=document.getElementById("q3");
var qua3=parseInt(q3);
var res="";
res=p3*qua3;
var res3=parseInt(res);
document.getElementById("para").innerHTML=res3;
}
</script>
</td>
</tr>
</table>
<p id="para"></p>
</body>
</html>
