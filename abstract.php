<?php
include('header.php');

?>
<div class='container' style='background-color:white' >
<noscript><br /><h1 class="text-danger text-center">Sorry, your browser does not support javascript!</h1><br /></noscript>
<form method="POST" action="checkabs.php" id="absForm" enctype="multipart/form-data" hidden >
<div class='row'>
<h1 class='col-md-12 text-center'>Abstract Guideline</h1>
</div>
<em class='text-danger'>Abstract shall be written in English</em>
<br />
<h4>Title :</h4> 
<h4>Authors and affiliations: (presenting author please supply e-mail)</h4>
<table class='table table-striped' id='addauthors'>
	<tr>
		<th>Authors (First, given name)</td>
		<th>Affiliations</td>
		<th>Presenting author</td>
		<th>E-mail</td>
	</tr>
<tr>
<td><input name="author[0]" type="text" placeholder="Input author's name*" class="form-control" required maxlength="100"/></td>
<td><input name="affiliations[0]" type="text" placeholder="Input author's affiliations*" class="form-control" required  maxlength="255" /></td>
<td><input name="presenting_first" type="checkbox" value="yes" class="form-control" checked disabled /><input name="presenting[0]" type="hidden" value="yes" /></td>
<td><input name="email[0]" type="email" placeholder="Input author's email*" class="form-control" required maxlength="100" /></td>
</tr>
</table>


<button type="button" class="btn btn-primary btn-md btn-md-offset-11" id='addauthor' >
  <span class="glyphicon glyphicon-plus"></span> Add more authors
</button>
<button type="button" class="btn btn-warning btn-md btn-md-offset-11" id='delauthor' >
  <span class="glyphicon glyphicon-repeat"></span> Reset authors
</button>
<hr />
<h4>Keywords:</h4>
<div class="row">
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword 1*" class="form-control" required maxlength="100"/></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword 2" class="form-control"  maxlength="100"/></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword 3" class="form-control"  maxlength="100"/></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword 4" class="form-control"  maxlength="100"/></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword 5" class="form-control"  maxlength="100"/></div>
</div>
<hr />
<div class="form-group">
 <div class="col-md-2 text-right">
 <label for="abstract_file">
Upload Abstract<sup class="text-danger">*</sup>:
</label>
</div>
  <div class="col-md-10"><input type="hidden" name="MAX_FILE_SIZE" value="5000" /><input type="file" name='abstract_file' required />
<p class='text-danger'>
( PDF, less than 250 words. Acknowledgement for support etc. please attached at the end of the text in parenthesis )
</p>
</div>
</div>



<hr />
<h4>Choice of presentation<sup class="text-danger">*</sup>:</h4>
<div class="row">
  <div class="col-md-1"><input type="radio" name='presentation' value='Oral' required /> Oral</div>
  <div class="col-md-1"><input type="radio" name='presentation' value='Poster' required /> Poster</div>
</div>
	
	

<h4 >Session of choice<sup class="text-danger">*</sup>:</h4>
<div class="row">
	<div class="col-md-2"><p class='text-right'>1<sup>st</sup> choice:</p></div>
	<div class="col-md-2"><select id="session1" class="form-control" name="session1" required>
	<?php 
$session=<<<SESSION
	<option value="">Please select...</option>
	<option value="Neuroscience">Neuroscience</option>
	<option value="Cancer Biology">Cancer Biology</option>
	<option value="Applied and Clinical Anatomy">Applied and Clinical Anatomy</option>
	<option value="Microscopy">Microscopy</option>
	<option value="Stem Cell Biology">Stem Cell Biology</option>
	<option value="Education">Education</option>
	<option value="Others">Others</option>
SESSION;
echo $session;
?>
</select></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-right'>2<sup>nd</sup> choice:</p></div>
	<div class="col-md-2"><select id="session2" class="form-control" name="session2" required>
	<?php
echo $session;
?>
</select></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-right'>3<sup>rd</sup> choice:</p></div>
	<div class="col-md-2"><select id="session3" class="form-control" name="session3" required>
<?php
echo $session;
?>
</select></div>
</div>
<p class='text-danger'>Please notice that we can't guarantee that the preferred choice is available. The Scientific committee reserves the right to assign it to a proper session or format of presentation.</p>
<div class="text-center">
<input type="submit"  value='Submit' class="form-control btn btn-primary" >

</div>

<br />
<br />

</form>
</div>
<br />
<br />
<?php

//<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js">
$script=<<<SCRI
<script>

var checkbox_num = 1;
function addauthor(checkbox_num){

var footer = '<tr>\
	<td><input name="author['+checkbox_num+']" type="text" placeholder="Input author\'s name*" class="form-control" required /></td>\
	<td><input name="affiliations['+checkbox_num+']" type="text" placeholder="Input author\'s affiliations*" class="form-control" required /></td>\
	<td> \
<input name="presenting['+checkbox_num+']" type="hidden" value="no" > \
<input name="presenting['+checkbox_num+']" type="checkbox" class="form-control" value="yes" ></td>\
	<td><input name="email['+checkbox_num+']" type="email" placeholder="Input author\'s email*" class="form-control" required /></td>\
		</tr>';
return footer;

}

$(function(){
$("#absForm").show();
var x;
x=$("#addauthors").html();
$("#addauthor").click(function(){
$("#addauthors").append(addauthor(checkbox_num));
checkbox_num++;
});
$("#delauthor").click(function(){
checkbox_num=1;
$("#addauthors").html(x);
});


});

</script>


SCRI;


include('footer.php');
?>
