<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$catId = (isset($_GET['catId']) && $_GET['catId'] > 0) ? $_GET['catId'] : 0;

$categoryList = buildCategoryOptions($catId);
?> 
<p>&nbsp;</p>
<form action="processProduct.php?action=addProduct" method="post" enctype="multipart/form-data" name="frmAddProduct" id="frmAddProduct">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr><td colspan="2" id="entryTableHeader">&Pi;&rho;&omicron;&sigma;&theta;�&kappa;&eta; &Pi;&rho;&omicron;��&nu;&tau;&omicron;&sigmaf;</td></tr>
  <tr> 
   <td width="150" class="label">&Kappa;&alpha;&tau;&eta;&gamma;&omicron;&rho;�&alpha;</td>
   <td class="content"> <select name="cboCategory" id="cboCategory" class="box">
     <option value="" selected>-- &Epsilon;&pi;&iota;&lambda;&omicron;&gamma;� &Kappa;&alpha;&tau;&eta;&gamma;&omicron;&rho;�&alpha;&sigmaf; --</option>
<?php
	echo $categoryList;
?>	 
    </select></td>
  </tr>
  <tr> 
   <td width="150" class="label">�&nu;&omicron;&mu;&alpha; &Pi;&rho;&omicron;��&nu;&tau;&omicron;&sigmaf;</td>
   <td class="content"> <input name="txtName" type="text" class="box" id="txtName" size="50" maxlength="100"></td>
  </tr>
  <tr> 
   <td width="150" class="label">&Pi;&epsilon;&rho;&iota;&gamma;&rho;&alpha;&phi;�</td>
   <td class="content"> <textarea name="mtxDescription" cols="70" rows="10" class="box" id="mtxDescription"></textarea></td>
  </tr>
  <tr> 
   <td width="150" class="label">&Tau;&iota;&mu;�</td>
   <td class="content"><input name="txtPrice" type="text" id="txtPrice" size="10" maxlength="7" class="box" onKeyUp="checkNumber(this);"> </td>
  </tr>
  <tr> 
   <td width="150" class="label">&Pi;&omicron;&sigma;�&tau;&eta;&tau;&alpha; &sigma;&tau;&eta;&nu; &Alpha;&pi;&omicron;&theta;�&kappa;&eta;</td>
   <td class="content"><input name="txtQty" type="text" id="txtQty" size="10" maxlength="10" class="box" onKeyUp="checkNumber(this);"> </td>
  </tr>
  <tr> 
   <td width="150" class="label">&Epsilon;&iota;&kappa;�&nu;&alpha;</td>
   <td class="content"> <input name="fleImage" type="file" id="fleImage" class="box"> 
    </td>
  </tr>
 </table>
 <p align="center"> 
  <input name="btnAddProduct" type="button" id="btnAddProduct" value="��������" onClick="checkAddProductForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="�����" onClick="window.location.href='index.php';" class="box">  
 </p>
</form>
