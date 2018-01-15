<?php 
/*
Template Name: Sign Up Form
*/ 
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php the_title();?></title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms-style.css?v=1.0.3">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/set1.css?v=1.0.3">

  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
<style>
input#register
{
	padding: 13px 25px;
    border: none;
    color: #fff;
    display: inline-block;
    background: #ff5500;
    font-family: 'lato', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 0.12em;
    border-radius: 24px;
}
ul
{
	-webkit-margin-before: 0;
    -webkit-margin-after: 0;
    -webkit-padding-start: 0;
	list-style: none;
}
input#send_credentials_via_email
{
	    margin-right: 20px;
}
</style>
<div id="main-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
	  <div class="layer">
    </div>
        <header>
          <span>Need an account?</span>
          <h3>Create Account</h3>
        </header>
      </div>
      <div class="col-md-6 right-side">
        <?php echo do_shortcode("[wppb-register role=”customer”]"); ?>
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script>
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }
  })();
</script>

</body>
</html>
