<?php
if (!defined('WEB_ROOT')) {
	exit;
}


if (isset($_GET['status']) && $_GET['status'] != '') {
	$status = $_GET['status'];
	$sql2   = " AND od_status = '$status'";
	$queryString = "&status=$status";
} else {
	$status = '';
	$sql2   = '';
	$queryString = '';
}	

// for paging
// how many rows to show per page
$rowsPerPage = 10;

$sql = "SELECT o.od_id, o.od_shipping_first_name, od_shipping_last_name, od_date, od_status,
               SUM(pd_price * od_qty) + od_shipping_cost AS od_amount
	    FROM tbl_order o, tbl_order_item oi, tbl_product p 
		WHERE oi.pd_id = p.pd_id and o.od_id = oi.od_id $sql2
		GROUP BY od_id
		ORDER BY od_id DESC";
$result     = dbQuery(getPagingQuery($sql, $rowsPerPage));
$pagingLink = getPagingLink($sql, $rowsPerPage, $queryString);

$orderStatus = array('IYao', 'DecnuiYiao', 'A?aooaeiYiao', 'IeieecnuiYiao', 'AeonuiYiao');
$orderOption = '';
foreach ($orderStatus as $stat) {
	$orderOption .= "<option value=\"$stat\"";
	if ($stat == $status) {
		$orderOption .= " selected";
	}
	
	$orderOption .= ">$stat</option>\r\n";
}
?> 
<p>&nbsp;</p>
<form action="processOrder.php" method="post"  name="frmOrderList" id="frmOrderList">
 <table width="100%" border="0" cellspacing="0" cellpadding="2" class="text">
 <tr align="center"> 
  <td align="right">Dniaie?</td>
  <td width="75"><select name="cboOrderStatus" class="box" id="cboOrderStatus" onChange="viewOrder();">
    <option value="" selected>����</option>
    <?php echo $orderOption; ?>
  </select></td>
  </tr>
</table>

 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td width="60">&Pi;&alpha;&rho;&alpha;&gamma;&gamma;&epsilon;&lambda;�&alpha; #</td>
   <td>�&nu;&omicron;&mu;&alpha; &Pi;&epsilon;&lambda;�&tau;&eta;</td>
   <td width="60">&Pi;&omicron;&sigma;�</td>
   <td width="150">&Eta;&mu;&epsilon;&rho;&omicron;&mu;&eta;&nu;�&alpha; &Pi;&alpha;&rho;&alpha;&gamma;&gamma;&epsilon;&lambda;�&alpha;&sigmaf;</td>
   <td width="70">&Kappa;&alpha;&tau;�&sigma;&tau;&alpha;&sigma;&eta;</td>
  </tr>
  <?php
$parentId = 0;
if (dbNumRows($result) > 0) {
	$i = 0;
	
	while($row = dbFetchAssoc($result)) {
		extract($row);
		$name = $od_shipping_first_name . ' ' . $od_shipping_last_name;
		
		if ($i%2) {
			$class = 'row1';
		} else {
			$class = 'row2';
		}
		
		$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td width="60"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?view=detail&oid=<?php echo $od_id; ?>"><?php echo $od_id; ?></a></td>
   <td><?php echo $name ?></td>
   <td width="60" align="right"><?php echo displayAmount($od_amount); ?></td>
   <td width="150" align="center"><?php echo $od_date; ?></td>
   <td width="70" align="center"><?php echo $od_status; ?></td>
  </tr>
  <?php
	} // end while

?>
  <tr> 
   <td colspan="5" align="center">
   <?php 
   echo $pagingLink;
   ?></td>
  </tr>
<?php
} else {
?>
  <tr> 
   <td colspan="5" align="center">&Delta;&epsilon;&nu; &upsilon;&pi;�&rho;&chi;&omicron;&upsilon;&nu; &pi;&alpha;&rho;&alpha;&gamma;&gamma;&epsilon;&lambda;�&epsilon;&sigmaf;</td>
  </tr>
  <?php
}
?>

 </table>
 <p>&nbsp;</p>
</form>