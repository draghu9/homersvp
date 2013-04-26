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
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>

    <style>
        body{
            margin-top:5px;
        }
        div {
            font-family: 'Condiment', cursive;
            font-size: 48px;
        }
    </style>

</head>

<body>
    <div class="row-fluid">
        <div class="span3">Column 1</div>
        <div class="span4">
            <div class="text-center">Please join us in celebration of
            our new home with Sai Bhajan
            on Saturday, the first of June
            at twelve o'clock noon

            1/ 19A Birdwood Road, Lowerhutt,New Zealand</div>
        </div>
        <div class="span5">
            <form name="frm" action="" method="post" class="form-horizontal" />
            <h3>Your contact information</h3>
                <div class="control-group">
                    <label for="inpFirstName" class="control-label">First Name</label>
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


            <h3>Will you be attending</h3>
                <div class="control-group">
                    <label class="radio">
                        <div class="controls"><input type="radio" name="rsvpoption" id="rsvpoptionyes" value="1" />Yes, I will attend</div>
                    </label>
                    <label class="radio">
                        <div class="controls"><input type="radio" name="rsvpoption" id="rsvpoptionno" value="0" />No, I wont be able to attend</div>
                    </label>
                </div>

            <h3>Guests info</h3>
                <div class="control-group">
                    <label class="control-label" for="inpGuestsNumber">How many guests in your party (including you)</label>
                    <div class="controls"><input type="text" name="inpGuestsNumber" id="inpGuestsNumber" maxlength="1" class=".input-mini" /></div>
                </div>

            <h3>Your warm message</h3>
                <div class="control-group">
                    <div class="controls>">
                        <textarea rows="5" cols="20"></textarea>
                    </div>
                </div>

            <div class="control-group">
                <div class="controls"><button type="submit" class="btn" id="cmdSend">Send</button></div>
            </div>
            </form>
        </div>
    </div>
</body>