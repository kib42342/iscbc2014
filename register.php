<?php
include('header.php');
?>
<div class="container" style="background-color:white">
<div class="row">
  <div class="col-md-12"><h2 class='text-center'>International Anatomical Sciences and Cell Biology Meeting-2014 ( ISCBC 2014 )<br /><small>December 11-13, 2014 Hualien, Taiwan</small></h2></div>
</div>
<h4 class="text-danger">Online registration procedure</h4>
<ol>
<li>Please fill in the information in English only. Compulsory fields are marked with red asterisk.</li>
<li>Complete the payment.</li>
<li>Don't forget to read the cancellation of registration policy, which informs you about deadline of cancellation for refund.</li>
<li>When you are have completed all the required and ready to send registration form, please click "Confirm".</li>
<li>After the information has been sent, a confirmation email will be sent back to you. You will find your username (your registered email) and password in this email. <p class='text-danger'>PLEASE KEEP THIS INFORMATION FOR FUTURE LOGIN AND ABSTRACT SUBMISSION.</p></li>
<li>If there is any problem regarding registration, please contact <a href="mailto:guofang@mail.tcu.edu.tw">guofang@mail.tcu.edu.tw</a>.</li>
</ol>
<hr />
<noscript><br /><h1 class="text-danger text-center">Sorry, your browser does not support javascript!<br />Go back and use another browser.</h1><br />
<div class="btn-group btn-block">

<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" ><button type="button" class="btn btn-primary btn-block" >
Back
</button></a>
</div>
</noscript>
<form method="POST" action="#" class="form-horizontal" role="form" id="regForm" hidden>
<h4>PERSONAL INFORMATION</h4>
<div class="form-group">
  <label class="col-md-2 text-right" for="inputfamilyname">Family Name: </label>
  <div class="col-md-2"><input  type="text" name="familyname" class="form-control" placeholder="Family Name" required></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="inputfirstname">First Name: </label>
  <div class="col-md-2"><input type="text" name="firstname" class="form-control" placeholder="First Name" required></div>
</div>
<div class="form-group">
	<label class="col-md-2 text-right" for="titles">Titles: </label>
	<div class="col-md-2">
	<select class="form-control" name="titles" required>
		<option value=""></option>
		<option value="Prof">Prof</option>
		<option value="Assc Prof">Assc Prof</option>
		<option value="Asst Prof">Asst Prof</option>
		<option value="Lecturer">Lecturer</option>
		<option value="Mr.">Mr.</option>
		<option value="Ms.">Ms.</option>
	</select>
	</div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="degrees">Degrees: </label>

  <div class="col-md-4">
<label class="radio-inline">
<input type="radio" name="degrees" class="form-control" value="PhD" required>PhD
</label>
<label class="radio-inline">
<input type="radio" name="degrees" class="form-control" value="MD" required>MD
</label>
<label class="radio-inline">
<input type="radio" name="degrees" class="form-control" value="MS" required>MS
</label>
<label class="radio-inline">
<input type="radio" name="degrees" class="form-control" value="BS" required>BS
</label>
<label class="radio-inline">
<input type="radio" name="degrees" class="form-control" value="Others" required>Others
</label>
</div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="ia">Institution/Affiliation: </label>
  <div class="col-md-2"><input type="text" name="ia" class="form-control" placeholder="Institution/Affiliation"></div>
</div>

<div class="form-group">
  <label class="col-md-2 text-right" for="inputaddr">Mailing Address: </label>

  <div class="col-md-4">
<label class="radio-inline">
<input type="radio" name="addrtype" class="form-control" value="Office" >Office
</label>
<label class="radio-inline">
<input type="radio" name="addrtype" class="form-control" value="Home">Home
</label>
<label class="radio-inline">
<input type="radio" name="addrtype" class="form-control" value="None" checked >None
</label>
</div>
</div>

<div class="form-group">
  <label class="col-md-2 text-right" for="street">Street: </label>
  <div class="col-md-2"><input type="text" name="street" class="form-control" placeholder="Street"></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="city">City: </label>
  <div class="col-md-2"><input type="text" name="city" class="form-control" placeholder="City"></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="zip">Zip Code: </label>
  <div class="col-md-2"><input type="text" name="zip" class="form-control" placeholder="Zip Code"></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="state">State/Province: </label>
  <div class="col-md-2"><input type="text" name="state" class="form-control" placeholder="State/Province"></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="country">Country: </label>
  <div class="col-md-2">
  <?php include("country.php");?>
</div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="email">E-mail: </label>
  <div class="col-md-2"><input type="text" name="email" class="form-control" placeholder="E-mail" ></div>
</div>
<div class="form-group">
  <label class="col-md-2 text-right" for="fax">Fax: </label>
  <div class="col-md-2"><input type="text" name="fax" class="form-control" placeholder="Fax"></div>
</div>
<h4>PAYMENT</h4>
<h4>Payment policy</h4>
<ol>
<li>Oversea participant, please pay in USD by credit card.</li>
<li>Participant wishes to pay by other method, please write to <a href="mailto:guofang@mail.tcu.edu.tw">guofang@mail.tcu.edu.tw</a></li>
<li>Your registration is completed upon the receipt of proper payment.</li>
</ol>
<h4>Registration cancellation policy</h4>
<ol>
  <li>Any cancellation of registration must be made in writing to <a href="mailto:guofang@mail.tcu.edu.tw">guofang@mail.tcu.edu.tw</a>.</li>
  <li>There will be 50% refund of registration fee for cancellation made before August 31st, 2014.</li>
  <li>There will be no refund of registration fee for cancellation made after September 1st, 2014. However, a substitute participant is welcomed.</li>
  <li>The organizer reserves the right to cancel or change the theme the conference symposium, if for whatever reason beyond control, the conference cannot be held as schedule or the theme need to be altered.</li>
</ol>
<h4>To Pay</h4>

<div class="form-group">
  <div class="col-md-offset-1 col-md-9 radio-inline">
<label >
<input type="radio" name="pay" class="form-control" value="Invited Speaker" onclick="notStudent();" required >Invited Speaker
</label><br />
<hr />
<h5>Regular, non-Taiwanese</h5>
<label >
<input type="radio" name="pay" class="form-control" value="Regular" onclick="notStudent();" required >Regular:$10000 NT (equal to approximately 333 USD)
</label><br />
<label >
<input type="radio" name="pay" class="form-control" value="Postdoc" onclick="notStudent();" required>Postdoc: $6000 NT (equal to approximately 200 USD)
</label><br />
<label >
<input type="radio" name="pay" class="form-control" value="Student" onclick="isStudent();" required >Student: $3000 NT (equal to approximately 100 USD)
</label><br />
<label >
<input type="radio" name="pay" class="form-control" value="Traveling" onclick="notStudent();" required >Traveling fellowship
</label><br />
<p>Postdoc and Student presenting poster can apply for traveling fellowship, please write to <a href="mailto:guofang@mail.tcu.edu.tw">guofang@mail.tcu.edu.tw</a></p>
<hr />
<h5>Local participant (Taiwan)</h5>
<label >
<input type="radio" name="pay" class="form-control" value="Regular(Taiwan)" onclick="notStudent();"  required >Regular: $1500 NT
</label><br />
<label >
<input type="radio" name="pay" class="form-control" value="Postdoc(Taiwan)" onclick="notStudent();" required >Postdoc: $1000 NT
</label><br />
<label >
<input type="radio" name="pay" class="form-control" value="Student(Taiwan)" onclick="isStudent();" required >Student: waived
</label>
<hr />
</div>
</div>
<div class="row" id="isstudent">
  </div>
<p> </p>
<div class="row">
  <div class="col-md-12 text-center"><input type="submit" name="submit" id="submit" value="Submit" class="form-control btn btn-primary"></div>
</div>
</form>
<br />
<br />
<br />

</div>

<?php
$script=<<<SCRI
<script>
var student_id = '<div id="std" class="col-md-10 col-md-offset-1" style="border:2px solid red"> \
<p> </p> \
    <label class="text-danger" for="photoid">Student please upload your photo ID (*.jpg,*.bmp,*.png; size < 150 KB).</label> \
    <input type="file" id="photoid" name="photoid" required> \
<p> </p>\
</div>';

function isStudent(){
 $("#isstudent").html("");
 $("#isstudent").append(student_id);
};
function notStudent(){
 $("#isstudent").html("");
};

$(function(){
$("#regForm").show();


});

</script>


SCRI;
include('footer.php');
?>
