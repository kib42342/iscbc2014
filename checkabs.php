<?php
$form=(object)$_POST;
//var_dump($_POST)."<BR />";
var_dump($form);

include('header.php');
?>
<div class='container' style='background-color:white' >
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
$author_format = <<<AUTHOR
<tr>
	<td>
	<p>%s</p>
	</td>
	<td>
	<p>%s</p>
	</td>
<td>
<p>%s</p>
</td>
<td>
<p>%s</p>
</td>
</tr>
AUTHOR;
$glyphicon="<p><span class='glyphicon glyphicon-check'></span> Presenting author</p>";
foreach($form->author as $akey=>$author){

	isset($form->presenting[$akey]) && $form->presenting[$akey] == "yes" ?  $checked=$glyphicon : $checked="" ;
	$authors = isset($author) && !empty($author) ? sprintf($author_format,$author,$form->affiliations[$akey],$checked,$form->email[$akey]) : "";
	echo $authors;

}
?>
</table>

<hr />
<h4>Keywords:</h4>
<div class="row">
<div class="col-md-2 col-md-offset-1">
<em class="text-primary"><strong>
<?php 
foreach ($form->keyword as $kkey=>$keyword){
	!empty($keyword) && $kkey != 0 ? $dot=", " : $dot="";
echo $dot.$keyword;
}
?>
</strong></em>
</div>
</div>
<hr />
<div class="form-group">
 <div class="col-md-2 text-right">
 <label for="abstract_file">
Upload Abstract:
</label>
</div>
  <div class="col-md-10">
  <?php //if($_FILES['abstract_file'][''])?>
<p class="text-primary"><?php echo $_FILES['abstract_file']['name'].$_FILES['abstract_file']['type'];?></p>
<p class='text-danger'>
( PDF, less than 250 words. Acknowledgement for support etc. please attached at the end of the text in parenthesis )
</p>
</div>
</div>



<hr />
<h4>Choice of presentation:</h4>
<div class="row">
<div class="col-md-1 col-md-offset-1"><p class="text-primary"><?php echo $form->presentation;?></p></div>
</div>
	
	

<h4 >Session of choice:</h4>
<div class="row">
	<div class="col-md-2"><p class='text-right'>1<sup>st</sup> choice:</p></div>
	<div class="col-md-2"><p class='text-primary'><?php echo $form->session1;?></p></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-right'>2<sup>nd</sup> choice:</p></div>
	<div class="col-md-2"><p class='text-primary'><?php echo $form->session2;?></p></div>
</div>
<div class="row">
	<div class="col-md-2"><p class='text-right'>3<sup>rd</sup> choice:</p></div>
	<div class="col-md-2"><p class='text-primary'><?php echo $form->session3;?></p></div>
</div>
<p class='text-danger'>Please notice that we can't guarantee that the preferred choice is available. The Scientific committee reserves the right to assign it to a proper session or format of presentation.</p>
<div class="text-center">
<input type="submit"  value='Submit' class="form-control" >

</div>

<br />
<br />

</div>
<br />
<br />
<?php

$script=<<<SCRI
<script>
$(function(){


		});
</script>


SCRI;
?>
<?php
include('footer.php');
?>
