<?php

require_once('../phpclasses_template/Template.php');

$page = new Template('Survey'); // Automatically sets title

$page->addHeadElement('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>');
$page->addHeadElement('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>');
$page->addHeadElement('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>');

$page->addHeadElement('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">');

$page->addHeadElement('<script src="../scripts/scripts.js"></script>');
$page->addHeadElement('<link href="../style/style.css" rel="stylesheet">');

$page->addHeadElement('<link rel="icon" type="image/png" href="me.png">');
$page->finalizeTopSection(); // Closes head section
$page->finalizeBottomSection(); // bottom section used for javascript (probably not needed)

print $page->getTopSection();
print '<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">';
print '<span ><a class="navbar-brand mb-0 h1" href="https://cnmtsrv2.uwsp.edu/~bxion419/index.php">Home</a></span>';
print '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
print '<span class="navbar-toggler-icon"></span>';
print '</button>';
print '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
print '<ul class="navbar-nav mr-auto">';
print '<li class="nav-item">';
print '<a class="nav-link" href="index.php">Information</a>';
print '</li>';
print '<li class="nav-item active">';
print '<a class="nav-link" href="survey.php">Survey</a>';
print '</li>';
print '<li class="nav-item">';
print '<a class="nav-link" href="privacy.php">Privacy Policy<span class="sr-only">(current)</span></a>';
print '</li>';
print '</ul>';
print '</div>';
print '</nav>';


print '<div class="container wrapper">';
print '<h1 class="uw">Student Survey</h1><hr>';
print '<p class="text-center">Thank you for visiting!  Please answer some questions so we can learn a bit about you.</p>';

print '<form class="border rounded col-md-10 mx-auto px-4" id="survey" method="POST" action="action.php">';

print '<div class="form-group row mt-3 mb-2">';
print '<label class="col-sm-4 col-form-label">Email</label>';
print '<div class="col-sm-8">';
print '<input type="email" id="email" class="form-control" placeholder="Email Address">';
print '</div>';
print '</div>';

print '<div class="form-group row pt-2">';
print '<div class="col-sm-4">What is your major?</div>';
print '<div class="col-sm-8">';
print '<table class="mx-auto">';
print '<tr>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check1">';
print '<label class="custom-control-label" for="check1">CIS-AppDev</label>';
print '</div>';
print '</td>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check2">';
print '<label class="custom-control-label" for="check2">CIS-Networking</label>';
print '</div>';
print '</td>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check3">';
print '<label class="custom-control-label" for="check3">WDMD</label>';
print '</div>';
print '</td>';
print '</tr>';
print '<tr>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check4">';
print '<label class="custom-control-label" for="check4">WD</label>';
print '</div>';
print '</td>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check5">';
print '<label class="custom-control-label" for="check5">HTI</label>';
print '</div>';
print '</td>';
print '<td class="majorCell">';
print '<div class="custom-control custom-checkbox">';
print '<input type="checkbox" name="major" class="custom-control-input" id="check6">';
print '<label class="custom-control-label" for="check6">Other</label>';
print '</div>';
print '</td>';
print '</tr>';

print '</table>';
print '</div>';
print '</div>';

print '<fieldset class="form-group">';
print '<div class="row pt-2">';
print '<div class="col-form-label col-sm-4 pt-0">What grade do you expect to receive in CNMT 310?</div>';
print '<div class="col-sm-8">';

print '<div class="form-check d-flex justify-content-around flex-wrap">';
print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="gradeA" name="grade" value="A" class="custom-control-input">';
print '<label class="custom-control-label" for="gradeA">A</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="gradeB" name="grade" value="B" class="custom-control-input">';
print '<label class="custom-control-label" for="gradeB">B</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="gradeC" name="grade" value="C" class="custom-control-input">';
print '<label class="custom-control-label" for="gradeC">C</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="gradeD" name="grade" value="D" class="custom-control-input">';
print '<label class="custom-control-label" for="gradeD">D</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="gradeF" name="grade" value="F" class="custom-control-input">';
print '<label class="custom-control-label" for="gradeF">F</label>';
print '</div>';

print '</div>';

print '</div>';
print '</div>';
print '</fieldset>';

print '<fieldset class="form-group">';
print '<div class="row pt-2">';
print '<div class="col-form-label col-sm-4 pt-0">What is your favorite pizza topping?</div>';
print '<div class="col-sm-8">';

print '<div class="form-check d-flex justify-content-around flex-wrap">';
print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="rad6" name="topping" class="custom-control-input">';
print '<label class="custom-control-label" for="rad6">Chicken</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="rad7" name="topping" class="custom-control-input">';
print '<label class="custom-control-label" for="rad7">Cheese</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="rad8" name="topping" class="custom-control-input">';
print '<label class="custom-control-label" for="rad8">Mushroom</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="rad9" name="topping" class="custom-control-input">';
print '<label class="custom-control-label" for="rad9">Sausage</label>';
print '</div>';

print '<div class="custom-control custom-radio custom-control-inline">';
print '<input type="radio" id="grade0" name="topping" class="custom-control-input">';
print '<label class="custom-control-label" for="grade0">Ham</label>';
print '</div>';


print '</div>';

print '</div>';
print '</div>';
print '</fieldset>';

print '<div class="form-group row">';
print '<div class="col text-center">';
print '<button type="submit" class="btn btn-primary">Submit</button>';
print '</div>';
print '</div>';

print '</form>';

print '</div>';

print '</body>';
	




print $page->getBottomSection(); // closes the html

?>