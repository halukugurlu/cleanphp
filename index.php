<?php 
include($_SERVER['DOCUMENT_ROOT'].'/config.php'); /* Site Configuration */ 
include(_DOCROOT.'/inc/sql-core.php'); /* Database stuff */
include(_DOCROOT.'/html/pre-header.php'); /* Pre Processing (logins, logouts, etc) */
include(_DOCROOT.'/html/header.php'); /* page header <head> <html> */
?>

<h2>Home</h2>

<a href="#" class="tmbtn isvbox" data-action="sample_modal">Try a modal with ajax</a>
<div>&nbsp;</div>
<a href="#" class="tmbtn" data-action="sample_function">Add some dynamic content in the box below</a>
<div>&nbsp;</div>
<a href="#" class="tmbtn" data-action="sample_function_split">Add some dynamic content in the box below split # and .</a>
<p id="stuff-coming-back-split">The Value: <span class="value"></span></p>
<div>&nbsp;</div>
<a href="#" class="tmbtn isvbox" data-action="show_form_sample">Open Form</a>
<div>&nbsp;</div>
<h2>These are things</h2>
<p id="stuff-coming-back"></p>

<?php include(_DOCROOT.'/html/footer.php'); ?>
