<?php

require_once('Template.php');

$page = new Template('Home'); // Automatically sets title

$page->addHeadElement('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>');
$page->addHeadElement('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>');
$page->addHeadElement('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>');

$page->addHeadElement('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">');

$page->addHeadElement('<link href="../style/style.css" rel="stylesheet">');

$page->addHeadElement('<link rel="icon" type="image/png" href="images/me.png">');
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
print '<li class="nav-item active">';
print '<a class="nav-link" href="index.php">Information</a>';
print '</li>';
print '<li class="nav-item">';
print '<a class="nav-link" href="survey.php">Survey</a>';
print '</li>';
print '<li class="nav-item">';
print '<a class="nav-link" href="privacy.php">Privacy Policy<span class="sr-only">(current)</span></a>';
print '</li>';
print '</ul>';

print '</div>';
print '</nav>';

print '<div class="container mb-5">';

print '<h1 class="text-center">Assignment 1</h1>';

print '<h2 class="uw">Bobby Xiong</h2><hr>';
print "<p>I hope this is enough for the home page.  I think I'll eventually expand and use this for my portfolio site.  Thank you for visiting!  Please head over to my <a href='survey.php'>student survey</a> if you aren't doing anything.</p>";

print '<h2>About me</h2>';
print '<img src="images/pic2.jpg" class="rounded float-right" title="Our Wedding Day">';
print "<p>I'm 28 years old and on my second attempt at college.  I was born and raised in Milwaukee and currently living in Wausau.  I'm enrolled in the Human Technology Interaction program and am due to graduate in Spring of 2020.</p>";

print "<p>My wife and I finally tied the knot earlier this month after a two year engagement.  It's been a fun journey so far and I'm sure it'll only get better as we get older.</p>";

print "<p>I really enjoy beer and travelling, especially together.  My all-time favorite beer is Lo-Gii from MKE Brewing Company.  It's been discontinued now, but I have one can left at home that I'm saving.  It's my most prized possession.  I really like going to new places and am trying to fill my passport as much as possible.  My favorite place ever is Japan.  I lived there for two years and loved every moment of it.  My ultimate goal is to retire there when I'm 30.  Fingers crossed!</p>";


print '<h2>Work</h2>';
print "<p>I'm currently looking for an internship in UX while going to school.  I'm finding it a little difficult since there aren't that many tech companies in the area.  My most recent job was as an Avionics Technician troubleshooting and repairing avionics equipment.  Before that I was a server at P.F. Changs.  Before that I was head grill boy at my local McDonalds.</p>";

print '<h2>Future Plans</h2>';
print "<p>My original plan for the future was to get a degree and go back to the military as an officer.  However, I've been really enjoying the HTI curriculum.  I think it's really interesting and the work stories from Professor Krause and Professor Weinschenk sound awesome! I think programming is fine, but I really enjoy the UX part of the major.  I'm on the fence with whether to pursue a career in UX or the military.  I've been leaning towards UX with the military as a fallback.</p>";


print '<h2>Contact</h2>';
print '<p>Feel free to talk to me in class or <a href="mailto:bxion419@uwsp.edu?subject=CNMT%20310">email</a> me if you ever have any questions.  Please refer to the <a href="privacy.php"> UW Privacy Policy</a> if for some reason you want to.</p>';

print '</div>';


	




print $page->getBottomSection(); // closes the html

?>