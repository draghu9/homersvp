<?php
$msg = null;
require_once('config.php');
if(isset($_POST['cmdSend'])){
	$firstName = mysql_real_escape_string(trim($_POST['inpFirstName']));
	$lastName = mysql_real_escape_string(trim($_POST['inpLastName']));
	$email = mysql_real_escape_string(trim($_POST['inpEmail']));
	$mobile = mysql_real_escape_string(trim($_POST['inpMobile']));
	$willAttend = trim($_POST['rsvpoption']);
	$totalGuests = mysql_real_escape_string(trim($_POST['inpGuestsNumber']));
	$message = trim($_POST['inpMessage']);
	
	if(!empty($firstName) && !empty($lastName) && !empty($email)){
		$query = "INSERT INTO rsvp (firstname, lastname, email, mobile, attend_status, total_guests, message) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$mobile."', '".$willAttend."', '".$totalGuests."', '".$message."')";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	}
	else{
		$msg = "Please check all your details";
	}
}

$selectQuery = "SELECT * FROM rsvp";
$rslt = $mysqli->query($selectQuery);
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Housewarming Invitation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>

    <style>
        html, body{
            margin-top:5px;
			height:100%;
			min-height: 100%;
        }
		
		.fill{
			height: 100%;
			min-height: 100%;	
			/*background-image:url('assets/img/background.png');
			background-repeat:repeat;*/			
		}
		.span3{
			height: 100%;
			min-height: 100%;
		}
		.row-fluid{
			height: 100%;
			min-height: 100%;
		}
		.column1{			
			min-height: 100%;
			height: 100%;
		}
		.ganesh{
			padding-top: 50%;
			padding-left: 20px;
		}
		.column2 p{
			margin-top: 30px;
			font-family: 'Courgette', cursive;
			font-size: large;
		}
		.comments{
			border: solid 1px red;
		}
		.control-label{
			text-align: left !important;
			margin-left: 20px;
		}
		.radiodiv{
			text-align: left !important;
			margin-left: -180px;
		}
		#rsvpoptionyes, #rsvpoptionno{
			margin-left: 20px;
		}
		
        
    </style>

</head>

<body>
    <div class="row-fluid">
		<!-- Column 1 -->
        <div class="span3 column1">
			<div class="fill">
				<div class="ganesh">
					<img src="assets/img/ganesh.jpg" width="80%" height="80%"/>
				</div>
			</div>
		</div>
		
		<!-- Column 2 -->
        <div class="span4">
			<div class="row">			
				<div class="text-center column2">
					<p>Please join us in celebration of our new home with Sai Bhajan on</p> 
					<p>Saturday, the first of June (<strong>1st June 2013, 10.30 am</strong>) at</p>
					<p>1/19A Birdwood Road, Lowerhutt,New Zealand </p>
				</div>
			</div>
			
			<div class="row comments"> 
				<?php
					if($rslt->num_rows > 0){
						while($row = $rslt->fetch_assoc()){
							$comment = $row['message'];
				?>
					<p><?php echo $comment; ?>
				<?php
						}
					}
				?>
			</div>
		</div>
         
		<!-- Column 3 -->
        <div class="span5">
			<?php
				if(!empty($msg)){
					echo "<div class=''>".$msg."</div>";
				}
			?>
            <form name="frm" action="" method="post" class="form-horizontal" />
            <h4>Your contact information</h4>
                <div class="control-group">
                    <label for="inpFirstName" class="control-label text-left">First Name</label>
                    <div class="controls"><input type="text" name="inpFirstName" id="inpFirstName" value="" required /></div>
                </div>

                <div class="control-group">
                    <label for="inpLastName" class="control-label">Last Name</label>
                    <div class="controls"><input type="text" name="inpLastName" id="inpLastName" value="" required /></div>
                </div>

                <div class="control-group">
                    <label for="inpEmail" class="control-label">Email</label>
                    <div class="controls"><input type="text" name="inpEmail" id="inpEmail" value="" required /></div>
                </div>

                <div class="control-group">
                    <label for="inpMobile" class="control-label">Mobile</label>
                    <div class="controls"><input type="text" name="inpMobile" id="inpMobile" value="" /></div>
                </div>


            <h4>Will you be attending</h4>
                <div class="control-group">
                    <label class="radio" style="padding-left: 0px;">
                        <div class="controls" style="margin-left: 0px;"><input type="radio" name="rsvpoption" id="rsvpoptionyes" value="1" />Yes, I will attend</div>
                    </label>
                    <label class="radio" style="padding-left: 0px;">
                        <div class="controls"style="margin-left: 0px;"><input type="radio" name="rsvpoption" id="rsvpoptionno" value="0" />No, I wont be able to attend</div>
                    </label>
                </div>

            <h4>Guests info</h4>
                <div class="control-group">
                    <label class="control-label" for="inpGuestsNumber">How many guests in your party (including you)</label>
                    <div class="controls"><input type="text" name="inpGuestsNumber" id="inpGuestsNumber" maxlength="1" class="input-mini" /></div>
                </div>

            <h4>Your warm message</h4>
                <div class="control-group">
                    <div class="controls>">
                        <textarea rows="5" cols="20" name="inpMessage" id="inpMessage"></textarea>
                    </div>
                </div>

            <div class="control-group">
                <div class="controls"><button type="submit" class="btn" id="cmdSend" name="cmdSend">Send</button></div>
            </div>
            </form>
        </div>
    </div>
</body>