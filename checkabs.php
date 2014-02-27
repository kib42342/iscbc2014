<?php
require_once("DB_config.php");
require_once("DB_class.php");
$db = new DB();
$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
$db->query("");


?>
<?php

include('header.htm');
echo $author_num;
?>
<div class='container' style='background-color:white' >
<form method="POST" action="checkabs.php">
<div class='row'>
<h1 class='col-md-12 text-center'>Abstract guideline</h1>
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
<?php
$authors=<<<EOF
<tr>
<td><input name="author[]" type="text" placeholder="Input author's name"></td>
<td><input name="affiliations[]" type="text" placeholder="Input author's affiliations"></td>
<td><input name="presenting[]" type="checkbox" ></td>
<td><input name="email[]" type="text" placeholder="Input author's email"></td>
</tr>
EOF;


for ($authors_i=0;$authors_i<5;$authors_i++){
	echo $authors;
}
?>
</table>


<button type="button" class="btn btn-default btn-md" id='addauthor' >
  <span class="glyphicon glyphicon-plus"></span> Add more authors
</button>
<h4>Keywords:</h4>
<div class="row">
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword"></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword"></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword"></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword"></div>
	<div class="col-md-2"><input name='keyword[]' type="text" placeholder="Keyword"></div>
</div>
<p > </p>
<div class="row">
  <div class="col-md-2"><h4>Upload Abstract:</h4></div>
  <div class="col-md-2"><input type="file" name='abstract_file'></div>
</div>


<p class='text-danger'>
( PDF, less than 250 words. Acknowledgement for support etc. please attached at the end of the text in parenthesis )
</p><h4>Choice of presentation:</h4>
<div class="row">
  <div class="col-md-1"><input type="radio" name='presentation'> Oral</div>
  <div class="col-md-1"><input type="radio" name='presentation'> Poster</div>
</div>
	
	

<h4>Session of choice:</h4>
<div class="row">
	<div class="col-md-2"><p class='text-center'>1<sup>st</sup> choice:</p></div>
	<div class="col-md-2"><select id="session1" class="form-control" name="session1">
	<option value="Neuroscience">Neuroscience</option>
	<option value="Cancer Biology">Cancer Biology</option>
	<option value="Applied and Clinical Anatomy">Applied and Clinical Anatomy</option>
	<option value="Microscopy">Microscopy</option>
	<option value="Stem Cell Biology">Stem Cell Biology</option>
	<option value="Education">Education</option>
	<option value="Others">Others</option>
</select></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-center'>2<sup>nd</sup> choice:</p></div>
	<div class="col-md-2"><select id="session2" class="form-control" name="session2">
	<option value="Neuroscience">Neuroscience</option>
	<option value="Cancer Biology">Cancer Biology</option>
	<option value="Applied and Clinical Anatomy">Applied and Clinical Anatomy</option>
	<option value="Microscopy">Microscopy</option>
	<option value="Stem Cell Biology">Stem Cell Biology</option>
	<option value="Education">Education</option>
	<option value="Others">Others</option>
</select></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-center'>3<sup>rd</sup> choice:</p></div>
	<div class="col-md-2"><select id="session3" class="form-control" name="session3">
	<option value="Neuroscience">Neuroscience</option>
	<option value="Cancer Biology">Cancer Biology</option>
	<option value="Applied and Clinical Anatomy">Applied and Clinical Anatomy</option>
	<option value="Microscopy">Microscopy</option>
	<option value="Stem Cell Biology">Stem Cell Biology</option>
	<option value="Education">Education</option>
	<option value="Others">Others</option>
</select></div>
</div>
<p class='text-danger'>Please notice that we can’t guarantee that the preferred choice is available. The Scientific committee reserves the right to assign it to a proper session or format of presentation.</p>
<div class="text-center">
<input type="submit" name="submit" value="Back">
<input type="submit" name="submit" value="OK">

</div>

<br />
<br />

</form>
</div>
<br />
<br />
<?php
include('footer.htm');
?>
