<?php
include('header.php');
$q1=mysqli_query($connection,"select * from user where user_id=".$_SESSION['user_id']);
$user=mysqli_fetch_assoc($q1);
?>

<div style="height:180px;">
</div>
<!--breadcrumb -->
<section class="detail-page">
<div class="col-sm-12">
 <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Profile</a></li>        
  </ul>
</div>
</section>
<h2>Order Form</h2>
<!--breadcrumb end-->
<section class="order-form-section">
<?php   $connection = mysqli_connect("localhost", "root");
									mysqli_select_db($connection,"coc");
									$q1 = mysqli_query($connection,"select * from cake where Cake_id=".$_GET['item_id']);
									$p1=mysqli_fetch_assoc($q1);
									$q=mysqli_query($connection,"select * from cakeshop where shop_id=".$p1['shop_id']);
									$shop=mysqli_fetch_assoc($q);
									?>
<div class="container">

    <form class="well form-horizontal" enctype="multipart/form-data" action="action.php?action=buy&item_id=<?php echo $p1['Cake_id']?>" method="post"  id="contact_form">

					<div class="form-group">
                        <label class="col-md-4 control-label">Cake Name:<?php echo $p1['Cakename'];?></label>
<center><div style="width:400px;"><?php echo '<img src="'.$p1['path'].'" alt="header img">'?></div></center></div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Shop Name:<?php echo $shop['Name'];?></label>
</div>
	<fieldset>

<!-- Form Name -->
<legend class="form-name">make your cake</legend>

<!-- Text input-->

<div class="form-group">
                        <label class="col-md-4 control-label">Size Of The Cake</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="size" value="1/2"  /> 500 gms
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="size" value="1" checked /> 1 kg
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="size" value="2" />2 kg 
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="size" value="3" />4 kg
                                </label>
                            </div>
                        </div>
                    </div>


					<div class="form-group"> 
  <label class="col-md-4 control-label">Pick Up Or Delivery</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="delivery" class="form-control selectpicker">
      <option value="pickup">Pick-up</option>
      <option value="delivery">Delivery</option>
      
    </select>
  </div>
</div>
</div>
<div class="form-group"> 
  <label class="col-md-4 control-label">Payment Method</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="payment" class="form-control selectpicker" >
      <option value="adv">Advance Payment</option>
      <?php
	  if(isset($_SESSION['user_id']))
	  {
	  ?>
	  <option value="cash">Cash on Pickup/Delivery</option>
      <?php
	  }
	  ?>
    </select>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Photo Cake</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <input type="checkbox" name="pic" value="1" />
        <input type="file" name="photo" id="exampleInputFile">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Expected Delivery Date</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><a href="javascript:NewCal('demo3','ddmmmyyyy',true,24)"><i class="glyphicon glyphicon-calendar"></i></a></span>

	<input id="demo3" type="text" size="20" name="ddate">
        </div>
    </div>
	</div>
	<div class="form-group">
                        <label class="col-md-4 control-label">Include candles</label>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="candles" value="yes" />
                                </label>
                             </div>
                    </div>
					</div>
<label class="col-md-4 control-label">Inscription</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="inscription" placeholder="Text On Cake" class="form-control"  type="text" name="inscription">
    </div>
  </div>

		<legend class="form-name">Contact Details</legend>


					<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" >
    </div>
  </div>
</div>

<!-- Text input-->


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 


<!-- Select Basic -->
   

<!-- Text input-->

<!-- Text input-->
  

<!-- Success message -->
<!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> !-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <!--zip code validation -->
   <!-- <form id="zipCodeForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Country</label>
        <div class="col-xs-5">
            <select class="form-control" name="countrySelectBox">
                <option value="United States">United States</option>
                <option value="Austria">Austria</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="French">French</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Italy">Italy</option>
                <option value="Ireland">Ireland</option>
                <option value="Morocco">Morocco</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Spain">Spain</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="United Kingdom">United Kingdom</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Postal code</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="postalCode" />
        </div>
    </div>
</form>-->


<!--zip-code validation end-->
</section>
	
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/datetimepicker.js"></script>
<script src="js/order.js"></script>
<script>
 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    }
                    
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            //window.location.replace("action.php?action=buy&item_id="+<?php echo($p1['Cake_id']);?>);
			$( "#contact_form" ).submit();
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

</script>
</html>
