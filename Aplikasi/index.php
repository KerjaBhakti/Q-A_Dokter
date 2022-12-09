<!doctype html>

<?php session_start(); ?>

           <?php

    if(isset($_POST["submittoken"])){


	header("Location: /testlogin.php");
    }   ?>


<html>
    	<head>
        	<meta charset="utf8" />
        	<title>Homepage | Pelayanan Konsultasi Dokter </title>
        	<link rel="stylesheet" type="text/css" href="main.css"/>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">				</script>
        	<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
            <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    	</head> 
    <body>

       <?php
        include ("header.php");
       ?>

        <h1 style="margin-top:35px;" class="center weight"> HOSPITAL RAIS
      Q&A KONSULTASI DENGAN DOKTER</h1>
        <h4 style="font-size: 16px;margin-top:-20px;" class="center">
           Selamat Datang  Di HOSPITAL RAIS kami memberikan pelayanan terbaik untuk anda!
        </h4>

 <!----------------------------------- COOKIES (oAuth) ------------------------------------------->

<div class="cookies">
<?php
foreach ($_COOKIE as $key=>$val)
  {
      if ( $key == "Email" || $key == "Token" )
      { /* echo $key.' is '.$val."<br>\n"; */ }
  }

?>
</div>


<?php
foreach ($_COOKIE as $key=>$val)
  {
    echo $key == "atuvcPHPSESSID";
      if ($key == "Token" )
      $tokentemp = $val;
  }
?>

<!------------- FORM HANDLER v.2 FOR SHOWING AND HIDING THE PROPER FORM DEPENDING ON API TYPE ----------------->


<div class="containerOuter"> <div class="containerContent">
    <div class weight="100"

   <p>Pelayanan Rumah Sakit :</p>  
   <p>Dalam website ini memberikan pelayanan untuk konsutasi dengan dokter dan membuat janji dengan dokter.</p>
  </div></div>

  
<svg width="0" height="0" viewBox="0 0 40 140">
  <defs>
    <mask id="holes">
      <rect x="0" y="0" width="100" height="140" fill="white" />
      <circle r="12" cx="20" cy="20" fill="black"/>
      <circle r="12" cx="20" cy="70" fill="black"/>
      <circle r="12" cx="20" cy="120" fill="black"/>
    </mask>
  </defs>
</svg>
</div>

</div>



<!------------------------------------------ Token Form ----------------------------------------------------->


<!------------------------------------ FORM FOR APIS WITH HEADERS -------------------------------------------->


      


<!--------------------------------------- FORM FOR APIS WITH OAUTH2 ---------------------------------------->


    

<!-------------------------------------- REQUEST SAMPLE CALLS BUTTONS ---------------------------------------->

<div id="testcalls" >
        <h3 style="font-size:32px;margin-top:45px;margin-left:35px;" class="weight center">
            Request Sample Pelayanan:
        </h3> </div>
        <div id="showbuttons" style="margin-bottom:65px;margin-top:25px;" class="center">
        <ol style="font-size: 14px;" >
            <li style="display:inline-block;"> <a href="crud/index.php"><button class="button">Crud</button></a></li><br><br>
            <li style="display:inline-block;"><a href="home/index.php"><button class="button">Jadwal Dokter</button></a></li><br><br>
           <!-- <li style="display:inline-block;"><a href="/deletesandbox.php"><button class="button">Delete Sandbox call</button></a></li><br><br>-->
           <!-- <li style="display:inline-block;"><a href="/createsandboxuser.php"><button class="button">Create Sandbox User call</button></a></li>-->
  <!--          <li style="display:inline-block;"><a href="/testlogin.php"><button class="button">Authorization</button></a></li>

            <li style="display:inline-block;"><a href="/yourNextCall.php"><button class="button">Your Next Call</button></a></li>
            <li style="display:inline-block;"><a href="/yourNextCall2.php"><button class="button">Your Next Call 2</button></a></li>       ---->
        </ol>
        </div>


        <?php

    if(isset($_POST["submitheader"]) || isset($_POST["submitoauth"])){

$_SESSION['sclientid'] = $_POST['clientid'];

/*********************** REWRITE THE FILE NAMED VARIABLES.PHP FROM SCRATCH (EVERY OTHER VALUE THAT WAS BEFORE IN THE FILE GETS REWRITTED - ONLY VALUES SHOWN BELOW REMAIN FINALLY IN THE FILE) ****************************/
    $fptest = fopen("variables.php", 'w');
    fwrite($fptest, '<?php');
    fwrite($fptest, ' ');
         fwrite($fptest, ' session_start(); ');
 fwrite($fptest, ' ');

    fwrite($fptest, '$sandbox_id = "'.trim($_POST['sandboxid']).'";');
       fwrite($fptest, '$api = "'.trim($_POST['api']).'";');
       fwrite($fptest, '$apiversion = "'.trim($_POST['apiversion']).'";');
     fwrite($fptest, '$username = "'.trim($_POST['username']).'";');
    fwrite($fptest, '$scope = "'.$_SESSION['sscope'].'";');

    fwrite($fptest, '$client_id = "'.trim($_SESSION['sclientid']).'";');
          fwrite($fptest, '$client_secret = "'.trim($_SESSION['sclientsecret']).'";');
         fwrite($fptest, '$redirecturl = "'.trim($_SESSION['sredirecturl']).'";');

foreach ($_COOKIE as $key=>$val)
  { if ($key == "Token" )
       fwrite($fptest, '$token = "Bearer '.trim($val).'";');

  }

/*********************************** CHECK IF TOKEN WAS GIVEN, SETS TOKENCHECK VALUE (1 OR 2) IN ORDER TO USE THE CORRECT HEADER FIELDS ACCORDING TO API TYPE **********************************/
        if ($tokentemp === '' || isset($_POST["submitheader"])){
    fwrite($fptest, '$tokencheck = "2";');} else{ fwrite($fptest, '$tokencheck = "1";'); }
    fwrite($fptest, ' ');
    fwrite($fptest, '?>');
    fclose($fptest);

/****** REFRESH 3 SECONDS AFTER SUBMIT BUTTON PRESS, IN ORDER TO DISPLAY THE STORED VARIABLES IN FOOTER *****/

} ?>


<?php
/********************************* INCLUDE FOOTER (HELP AREA) IN PAGE ***********************************/
include_once ("footer.php");

     ?>

<script>
/*************************** FORM HANDLER WITH RADIO BUTTONS ****************************/

/******************** SHOW HEADER API FORM BY DEFAULT - HIDE OAUTH FORM *****************/
  if(document.getElementById('input1').checked) {
 document.getElementById('oauthapiform').style.pointerEvents="none" ;
    document.getElementById('oauthapiform').style.opacity="0.5" ;

       document.getElementById('gettokenform').style.pointerEvents="none" ;
    document.getElementById('gettokenform').style.opacity="0.5" ;
       document.getElementById('gettokenform').style.display="none" ; }

       if(document.getElementById('input2').checked) {
 document.getElementById('headersapiform').style.pointerEvents="none" ;
    document.getElementById('headersapiform').style.opacity="0.5" ;

       document.getElementById('gettokenform').style.pointerEvents="auto" ;
    document.getElementById('gettokenform').style.opacity="1" ;
       document.getElementById('gettokenform').style.display="block" ;

}
/*********************** SHOW HEADER API FORM WHEN FIRST RADIO BUTTON IS CHECKED - HIDE AND DISABLE OAUTH FORM ********************/
  function showHeader(a) {
  if (a.checked == true) {
    document.getElementById('oauthapiform').style.pointerEvents="none" ;
    document.getElementById('oauthapiform').style.opacity="0.5" ;
      document.getElementById('headersapiform').style.pointerEvents="auto" ;
    document.getElementById('headersapiform').style.opacity="1" ;

       document.getElementById('gettokenform').style.pointerEvents="none" ;
    document.getElementById('gettokenform').style.opacity="0.5" ;
        document.getElementById('gettokenform').style.display="none" ;
  }
}
/************************** SHOW OAUTH2 API FORM WHEN SECOND RADIO BUTTON IS CLICKED - HIDE AND DISABLE HEADERS FORM *************************/
            function showOauth(a) {
  if (a.checked == true) {
    document.getElementById('headersapiform').style.pointerEvents="none" ;
    document.getElementById('headersapiform').style.opacity="0.5";
      document.getElementById('oauthapiform').style.pointerEvents="auto" ;
    document.getElementById('oauthapiform').style.opacity="1" ;

      document.getElementById('gettokenform').style.pointerEvents="auto" ;
    document.getElementById('gettokenform').style.opacity="1" ;
        document.getElementById('gettokenform').style.display="block" ;
  }
}
        </script>
<!-- ********************************************************************************************** -->
 <script>
$("#close-modal-button").click(function() {
		$(".sign-up-modal").fadeOut(200);

});

 </script>

<script> $(document).ready(function(){
	var formInputs = $('input[type="email"],input[type="password"],input[type="text"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});

        for (var i = 0; i < formInputs.length; i++) {
            var formInput = formInputs[i];
            var $formInput = $(formInput);
            var inputValue = $formInput.val();
            var hasClass = $formInput.hasClass('form-style');
            if (hasClass && inputValue !== undefined && inputValue.length) {
                $formInput.focus();
            }
        }
    });

        </script>

        <script> (function() {
    if (document.location.hash) {
        setTimeout(function() {
            window.scrollTo(window.scrollX, window.scrollY - 140);
        }, 10);
    }
})();</script>

    	</body>
</html>
