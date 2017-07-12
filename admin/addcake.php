<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/jquery.bxslider.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css" />

<title>Cake On Click</title>
<link href="../css/formCss.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="../css/nova.css" />
<link type="text/css" media="print" rel="stylesheet" href="../css/printForm" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:#ffff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:650px;
        color:#3E4E1A !important;
        font-family:'Times New Roman';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-all {
  font-family: "Times New Roman", sans-serif;
  font-family: "Times New Roman", serif;
}
.form-all {
  width: 650px;
}
.form-label-left,
.form-label-right {
  width: 150px;
}
.form-label {
  white-space: normal;
}
.form-label.form-label-auto {
  display: inline-block;
  float: left;
  text-align: left;
  width: 150px;
}
.form-label-left {
  display: inline-block;
  te-space: normal;
  float: left;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-all {
  font-size: 14px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
}
.supernova {
  background-color: #ffff;
  background-color: #ffff;
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #698b00;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form {
    padding: 10px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 768px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 649px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 649px) {
  .jotform-form {
    padding: 0;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #f9f2e7;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #efdcbe;
}
.form-matrix-table tr {
  border-color: #efdcbe;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f4e7d3;
}
.form-all {
  color: #3e4e1a;
}
.form-header-group .form-header {
  color: #3e4e1a;
}
.form-header-group .form-subHeader {
  color: #5c7427;
}
.form-sub-label {
  color: #5c7427;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #3e4e1a;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #5c7427;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: rgba(174, 226, 57, 0.4);
}
/* ömer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* ömer */
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 36px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Times New Roman", sans-serif;
  font-family: "Times New Roman", serif;
  font-size: 14px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Times New Roman", sans-serif;
  font-family: "Times New Roman", serif;
  font-size: 14px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Times New Roman", sans-serif;
  font-family: "Times New Roman", serif;
}
.form-section {
  padding: 0px 0px 0px 0px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-textbox,
.form-textarea {
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 150px;
}
.form-label {
  font-family: "Times New Roman", sans-serif;
  font-family: "Times New Roman", serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  -webkit-box-shadow: 0 0 3px #ff3200;
  -moz-box-shadow: 0 0 3px #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .jotform-form {
    padding: 0;
  }
  .form-all {
    border: 0;
    width: 100% !important;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100%!important;
  }
  .form-line {
    padding: 2% 5%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial !important;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5% !important;
    margin-right: 5% !important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  .form-buttons-wrapper {
    margin: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  table {
    width: 100%!important;
    max-width: initial !important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
  }
}
/* | */

/*__INSPECT_SEPERATOR__*/

    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="../css/form-submit-button-steel.css"/>
<script src="../js/prototype.forms.js" type="text/javascript"></script>
<script src="../js/jotform.forms.js" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"field":"26","visibility":"Show"}],"link":"Any","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"49","visibility":"Show"}],"link":"Any","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"48","visibility":"Show"}],"link":"Any","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"37","visibility":"Show"}],"link":"Any","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"36","visibility":"Show"}],"link":"Any","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"27","visibility":"Show"}],"link":"Any","terms":[{"field":"31","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"51","visibility":"Show"}],"link":"Any","terms":[{"field":"31","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"50","visibility":"Show"}],"link":"Any","terms":[{"field":"31","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"39","visibility":"Show"}],"link":"Any","terms":[{"field":"31","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"38","visibility":"Show"}],"link":"Any","terms":[{"field":"31","operator":"equals","value":"Yes"}],"type":"field"}]);
   JotForm.init(function(){
      setTimeout(function() {
          $('input_51').hint('ex: 23');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToFirstError";
   });
</script>
</head>
<body>
<?php 
$connection=mysqli_connect("localhost","root");
mysqli_select_db($connection,"coc");
$q1=mysqli_query($connection,"select * from cakeshop where shop_id=".$_SESSION['user_id']);
$shop=mysqli_fetch_assoc($q1);
?>
<header>
<section class="top-header listing-header">


<div class="container">
<div class="col-sm-6 call-us pull-left text-left text-capitalize"><p>call us now :<a href="#">9925644657</a></p></div>
<div class="col-sm-6 get-in-touch pull-right text-right text-capitalize"><ul><li>get in touch:<a href="mailto:coc@yummycake.com">coc@yummycake.com</a></li>

<?php 
if(!isset($_SESSION['user_id']))
{
?>	

<script type="text/javascript">
alert("cannot acces this page without login");
</script>
<?php
header("location:../index.php");
}
else
{
?>
<li>welcome,<?php echo $_SESSION['username'];?></li>
<li><a href="../destroy.php"><button type="button" class="btn btn-info btn-lg">sign out</button></a></li>
<?php
}
?>	

</ul>
</div>
</div>
<nav class="navbar">

  <div class="container">  
  <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="../img/logo.png" alt="Cake On Click" title="Cake On Click" /></a>
    </div>
    
    <ul class="nav navbar-nav">
      <?php
	  
	  $a=basename($_SERVER['PHP_SELF']);
	  
	  if(strcmp($a,"index.php")==0)
	  {
		  ?>
	  <li class="active"><a href="index.php">orders</a></li>
 <?php
	  }
	  else
	  {
		  ?>
		  <li><a href="index.php">orders</a></li>
	  <?php
	  }
	  if(strcmp($a,"menu.php")==0)
	  {
		  ?>
	  <li class="active"><a href="menu.php">Menu</a></li>
    <?php
	  }
	  else
	  {
		?>
      <li><a href="menu.php">Menu</a></li>		
	  <?php
	  }
	  if(strcmp($a,"addcake.php")==0)
	  {
		  ?>
	  <li class="active"><a href="addcake.php">Add cake</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="addcake.php">Add cake</a></li>		
	  <?php
	  }
	  if(strcmp($a,"editprofile.php")==0)
	  {
		  ?>
	  <li class="active"><a href="editprofile.php">Edit Profile</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="editprofile.php">Edit Profile</a></li>		
	  <?php
	  }
	  if(strcmp($a,"contact.php")==0)
	  {
		  ?>
	  <li class="active"><a href="contact.php">Contact Us</a></li>
    <?php
	  }
	  else
	  {
		?>
    <li><a href="contact.php">Contact Us</a></li>		
	  <?php
	  }
    ?>
	</ul>
  </div>
 
</nav>
</section>
</header>


<center>
<?php echo '<img src="../'.$shop['path'].'" alt="header img" height="200px" width="200px">'?>
</center>
<form class="jotform-form" action="check.php" method="post" enctype="multipart/form-data" name="addcake" id="addcake" accept-charset="utf-8" onsubmit="return required()">
  
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_5" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_5" class="form-header">
              Add Cake To Menu
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_50">
        <label class="form-label form-label-left form-label-auto" id="label_50" for="input_50">
          Cake Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_50" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_50" name="cakename" size="20" value="" />
        </div>
      </li>
      <li class="form-line jf-required"  data-type="control_number" id="id_51">
        <label class="form-label form-label-left form-label-auto" id="label_51" for="input_51">
          Price
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_51" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox validate[required]" id="input_51" name="price" style="width:60px" size="5" value="" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_52">
        <label class="form-label form-label-left form-label-auto" id="label_52" for="input_52"> Photo </label>
        <div id="cid_52" class="form-input jf-required">
          <input class="form-upload" type="file" id="photo" name="photo" file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="1024" file-minsize="0" file-limit="0" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_53">
        <label class="form-label form-label-left form-label-auto" id="label_53" for="input_53"> Details </label>
        <div id="cid_53" class="form-input jf-required">
          <textarea id="input_53" class="form-textarea" name="details" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_scale" id="id_54">
        <label class="form-label form-label-left form-label-auto" id="label_54" for="input_54"> Initial Rating </label>
        <div id="cid_54" class="form-input jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table">
            <tr>
              <th>
                &nbsp;
              </th>
              <th align="center">
                <label for="input_54_1"> 1 </label>
              </th>
              <th align="center">
                <label for="input_54_2"> 2 </label>
              </th>
              <th align="center">
                <label for="input_54_3"> 3 </label>
              </th>
              <th align="center">
                <label for="input_54_4"> 4 </label>
              </th>
              <th align="center">
                <label for="input_54_5"> 5 </label>
              </th>
              <th>
                &nbsp;
              </th>
            </tr>
            <tr>
              <td>
                <label for="input_54_1"> Worst </label>
              </td>
              <td align="center">
                <input class="form-radio" type="radio" name="rating" value="1" title="1" id="input_54_1" />
              </td>
              <td align="center">
                <input class="form-radio" type="radio" name="rating" value="2" title="2" id="input_54_2" />
              </td>
              <td align="center">
                <input class="form-radio" type="radio" name="rating" value="3" title="3" id="input_54_3" />
              </td>
              <td align="center">
                <input class="form-radio" type="radio" name="rating" value="4" title="4" id="input_54_4" />
              </td>
              <td align="center">
                <input class="form-radio" type="radio" name="rating" value="5" title="5" id="input_54_5" />
              </td>
              <td>
                <label for="input_54_5"> Best </label>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_55">
        <label class="form-label form-label-left form-label-auto" id="label_55" for="input_55">
          Category
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_55" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="2">
<?php 
$q3=mysqli_query($connection,"select * from category where shop_id=".$_SESSION['user_id']);
while($cat=mysqli_fetch_assoc($q3))
{
?>            
			<span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_55_0" name="category" checked="checked" value="<?php echo($cat['category_code']);?>" />
              <label id="label_input_55_0" for="input_55_0"><?php echo($cat['category_name']);?></label>
            </span>
<?php
}
?>          
		  </div>
        </div>
      </li>
      
	  <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-steel" name="addcake">
              Add Cake
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
</form>
 <script>
  function required()  
{  
var empt = document.forms["addcake"]["cakename"].value;  
if (empt == "")  
{  
alert("Please input the cakename");  
return false;  
}  
var empt = document.forms["addcake"]["price"].value;
if (empt == "")  
{  
alert('please enter price');  
return false;   
}
var empt = document.forms["addcake"]["category"].value;
if (empt == "")  
{  
alert('please select category');  
return false;   
}      
}  

</script>

    
    
</body>
</html>