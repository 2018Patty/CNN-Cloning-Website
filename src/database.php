<?php
header('Content-Type: application/json');

require_once('db.php');

$sqlQuery = "SELECT c.CategoryName, sum(od.Quantity) as sumQty FROM orders o, order_details od, products p, categories c where o.OrderID = od.OrderID and od.ProductID =p.ProductID AND p.CategoryID = c.CategoryID group by c.CategoryName";

$result = mysqli_query($conn, $sqlQuery);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
