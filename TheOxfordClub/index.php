<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Oxford Club</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

  </head>
  <body>

        <!--Top static navbar. Used seperation of concern. This way changes to the topNav.php file will apply to all pages.-->
	      <?php include_once('topNav.php');?>
        <!--/Top static navbar-->
            
        <!-- Header -->
          <?php include_once('header.php'); ?>
        <!-- /Header -->
<!-- Home page main content -->
        <div id="mainContent">
        <div class="row" style="padding-bottom: 1em">
          <div class="col-md-12" id="formBackImg">
            <div class="col-md-6" id="signMsg">
                <div id="backOpac">
            <center style="padding-top: 5em">
                <H2 style="color:white">Sign up!</H2>
                <p style="font-family: chiller; font-size: 20px; color: white;">Sign up and recieve up to date newsletters!</p>
            </center>
                </div>
            </div>
            <div class="col-md-6" id="form">
            <form class="form-horizontal" id="commentForm" method="post" action="">
            <fieldset class="cmxform">
              <div class="form-group">
                <label for="cemail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input id="cemail" class="form-control" type="email" name="email" required placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="promoCode" class="col-sm-2 control-label">Promo Code</label>
                <div class="col-sm-10">
                  <input type="hidden text" class="form-control" name="promoCode" id="promoCode" placeholder="Promotion Code">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox" style="display:inline-block;">
                    <label>
                      <input type="checkbox" name="letter1" id="letter1"> News Letter 1
                    </label>
                    <label>
                      <input type="checkbox" name="letter2" id="letter2"> News Letter 2
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="button" value='sign up' class="btn btn-default" onclick="submitForm()">
                </div>
              </div>
            </fieldset>
            </form>
              <div id="DataCheck">
              </div>
              <div id="mailCheck">
              </div>
            </div>
          </div>
            			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="img/icon-people.jpg">
						<div class="caption">
							<p>
						       We have over <strong style="color: red;">85,000</strong> Members worldwide in 131 countries.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="img/icon-chart.jpg">
						<div class="caption">
							<p>
                                Our biggest gain in the last 12 months:<strong style="color: red;"> 2733.33%.</strong>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="img/icon-money.jpg">
						<div class="caption">
							<p>
                                The Oxford Communiqué rode out the 2008 financial crisis with an average closed return of <strong style="color: red;"> 28.6%. </strong>
							</p>
						</div>
					</div>
				</div>
			</div>
        </div>
        </div>
      
<!-- Main content ends here -->
<!-- Footer -->
<?php include_once('footer.php'); ?>
<!-- /Footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    function validateEmail(email) {
          var re = /\S+@\S+\.\S+/;
          return re.test(email);
    };
    function postToOne(promoCode,email){
        $.ajax({
            url:'server1.php',
            type:'POST',
            data:{promoCode:promoCode,
                  email:email},
            success: function(msg){
              $('#DataCheck').html(msg);
            },
            error: function(xhr,status,error){
               console.debug(xhr); console.debug(error);
            }
        });
    };
    function postToTwo(promoCode,email){
        $.ajax({
            url:'server2.php',
            type:'POST',
            data:{promoCode:promoCode,
                  email:email},
            success: function(msg){
              $('#mailCheck').html(msg);
            },
            error: function(xhr,status,error){
               console.debug(xhr); console.debug(error);
            }
        });
    };
    function submitForm(){
          var email = $('#cemail').val();
          var letter1 = $('#letter1').is(':checked');
          var letter2 = $('#letter2').is(':checked');
          var promoCode = $('#promoCode').val();
          if(validateEmail(email)){
            if(letter1 && letter2){
              postToOne(promoCode, email);
              postToTwo(promoCode, email);
            }else if(letter1){
              postToOne(promoCode, email);
             }else if(letter2){
              postToTwo(promoCode, email);
            }
         }else{
            alert("Please enter a valid email");
         }
      };
    </script>
  </body>
</html>