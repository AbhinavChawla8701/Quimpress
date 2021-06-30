<?php 
include('connection.php');
session_start();
$_SESSION["val"]="2";
$_SESSION["type"]="CV";
 ?>
<html>
<head>
	<title>Resume Builder</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/scroll.css"> -->
	<link rel="stylesheet" type="text/css" href="css/column_scroll.css">
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/thin_scroll.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<meta name="description" content="Online document editor like interface to create and save Resume">
	<meta name="keywords" content="resume,cv,maker,creator,generator,nitw,warangal,nit warangal,projects,computer science">
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 no-print" id="left">
			<div id="panel">
				<form action="/Quimpress1/IWP Project/feedback.php">
				<button type="submit" class="btn btn-block btn-danger" name="sub" >Logout</button>
			</form>
<!-- /Quimpress/IWP Project/feedback.php -->
					<h3 class="text-center" data-toggle="modal">Resume</h3>
             <!--   <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#usageModal">VIEW INSTRUCTIONS</button> -->
			 <form method="POST" name="form3">
				<button type="submit" class="btn btn-block btn-success" name="sub" onclick="window.print()">Download</button>
				</form>
				<hr>

				<h4 class="text-center">Template settings</h4>
                <br>
				<h5>
					Contact lines
					<div class="toggle-button">
						<div class="toggle-option selected" data-toggle="contact" id="contact3">2</div>
						<div class="toggle-option" data-toggle="contact" id="contact4">3</div>
						<div class="toggle-option" data-toggle="contact" id="contact5">4</div>
					</div>
				</h5>
				<h5>
					Horizontal margin
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="margin" id="margin1">1</div>
						<div class="toggle-option" data-toggle="margin" id="margin2">2</div>
						<div class="toggle-option" data-toggle="margin" id="margin3">3</div>
						<div class="toggle-option selected" data-toggle="margin" id="margin4">4</div>
						<div class="toggle-option" data-toggle="margin" id="margin5">5</div>
						<div class="toggle-option" data-toggle="margin" id="margin6">6</div>
					</div>
				</h5>
				<h5>
					Line spacing
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="line" id="line1">1</div>
						<div class="toggle-option" data-toggle="line" id="line2">2</div>
						<div class="toggle-option" data-toggle="line" id="line3">3</div>
						<div class="toggle-option selected" data-toggle="line" id="line4">4</div>
						<div class="toggle-option" data-toggle="line" id="line5">5</div>
						<div class="toggle-option" data-toggle="line" id="line6">6</div>
					</div>
				</h5>
				<h5>
					Center column no.
					<div class="toggle-button">
						<div class="toggle-option multi-select" data-toggle="column" id="column1">1</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column2">2</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column3">3</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column4">4</div>
					</div>
				</h5>

				<br>

					<h5>
						Font type
						<div class="toggle-button">
							<div class="toggle-option" data-toggle="font" id="fontVerdanaSans">1</div>
							<div class="toggle-option selected" data-toggle="font" id="fontMonospace">2</div>
							<div class="toggle-option" data-toggle="font" id="fontRoboto">3</div>
							<div class="toggle-option" data-toggle="font" id="fontDroid">4</div>
						</div>
					</h5>
					<h5>
						Title case
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="case" id="caseNormal">Default</div>
							<div class="toggle-option" data-toggle="case" id="caseUpper">Uppercase</div>
						</div>
					</h5>
					<h5>
						Title style
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="title" id="titleRuled">Ruled</div>
							<div class="toggle-option" data-toggle="title" id="titleShaded">Shaded</div>
						</div>
					</h5>
					<h5>
						Title rule position
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="rule" id="ruleAbove">Above title</div>
							<div class="toggle-option" data-toggle="rule" id="ruleBelow">Below title</div>
						</div>
					</h5>
					<br>
					<h5>
						Projects layout
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="projects" id="projects1">L1</div>
							<div class="toggle-option" data-toggle="projects" id="projects2">L2</div>
						</div>
					</h5>
					<br>

				<h5>
					<button class="btn btn-sm btn-block btn-primary" data-toggle="modal" data-target="#sectionToggleModal">Show/Hide sections</button>
				</h5>

				<hr>

				<h4 class="text-center">Lists and points</h4>
				<button class="btn btn-block btn-xs btn-success" onclick="insertList();">+ Insert sub-list</button>
				<button class="btn btn-block btn-xs btn-warning" onclick="decreaseIndent();">&lt;&lt; Decrese indentation</button>
				<button class="btn btn-block btn-xs btn-warning" onclick="increaseIndent();">&gt;&gt; Increase indentation</button>
				<h5>
					List style :
					<div class="toggle-button">
						<button class="btn btn-xs custom-button" onclick="changeListStyle('disc');">&#9899;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('circle');">&#9898;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('square');">&#9632;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('dash');">-</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('decimal');">1.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('upper-roman');">I.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('lower-roman');">i.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('upper-alpha');">A.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('lower-alpha');">a.</button>
					</div>
				</h5>

			</div>

		</div>


		<div class="col-sm-9 text-center" id="right">

			<div id="page" class="droid">

				<div class="row" style="margin-bottom:10px;">
				<div class="col-sm-8">
					<div id="info" style="padding-top:50px; padding-bottom: 0px;">
						<p id="contentName" style=" font-size: 50px;">Abc xyz</p>
					</div>
                    </div>
                    <div class="col-sm-4" style="text-align: right;padding-top: 40px; padding-bottom: 0px;">
						<p>+91-9999999999</p>
                            <p style="margin-top:-10px"><span id="contactLink1">xyzabc@hotmail.com</span>
                            <p style="margin-top:-10px; margin-bottom: 0px;"><span id="contactLink2">xyzabc.github.io</span></p>
				</div>
				</div>


				<div class="section" id="sectionEducation">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Education</strong></h4>
						<hr class="hr-below">
					</div>
					<ul class="nobullet">
					<li>
                        <div class="text"><strong>B.Tech-Computer Science and Engineering,</strong> VIT Vellore</div>
                        <div class="text">Aggregate CGPA: <strong>8.0/10</strong><br>Expected Graduation: <strong>MAY, 20XX</strong></div>
                        <br>
                        <div class="text"><strong>12th Intermediate-PCM,</strong> Board of Secondary Education, Ajmer</div>
                        <div class="text">Aggregate Percentage: <strong>90.60%</strong><br>Passed: <strong>APRIL, 20XX</strong></div>
                        <br>
                        <div class="text"><strong>10th High School,</strong> Board of Secondary Education, Ajmer</div>
                        <div class="text">Aggregate Percentage: <strong>80.00%</strong><br>Passed: <strong>APRIL, 20XX</strong></div>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionExperience">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Experience</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div class="text"><strong>Software Engineering Intern,</strong> ThinkPedia LLP, Gurugram</div>
                        <div class="text">MAY 20XX - JULY 20XX</div>
                        <div class="text">Worked on Customer Web Application for social media management.<br>
Developed frontend using Angular 7 & Bootstrap and backend Rest-APIs using Spring-boot & MongoDB.<br>
Worked in System Design, System Testing & API integration from scratch.</div>
					</li>
					<li>
						<div class="text"><strong>Position,</strong> Company name, place</div>
                        <div class="text">XXX 20XX - XXX 20XX</div>
                        <div class="text">Point 1<br>Point 2</div>
                    </li>
					</ul>
				</div>


				<div class="section" id="sectionPublications">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Publications</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>
						<div class="title">Advanced analysis of damping motion</div>
						<div class="time right">PCES 20XX</div>
						</div>
						<div>
						<div class="mentor">Mentors</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Efficient ranking of search results</div>
						<div class="time right">LOCS 20XX</div>
						</div>
						<div>
						<div class="mentor">Mentors</div>
						</div>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionProjects">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Projects</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Ongoing</div>
						</div>
						<div>
						<div class="mentor tab">Project Mentor</div>
						</div>
						<div>
						<div class="text">Graphical interface to share files over institute's network.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Apr 20XX</div>
						</div>
						<div>
						<div class="mentor tab">Dr. XYZ, Associate Professor, Dept. of XXX, VIT Vellore</div>
						<div class="link right">goo.gl/link</div>
						</div>
						<div>
						<div class="text">Graphical interface to share files over institute's network.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Jan 20XX - Mar 20XX</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						<div class="link right">www.xyz.in</div>
						</div>
						<div>
						<div class="text">Graphical interface to share files over institute's network.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Feb 20XX</div>
						</div>
						<div>
						<div class="link right">goo.gl/link</div>
						</div>
						<div>
						<div class="text">Graphical interface to share files over institute's network.</div>
						</div>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionSkills">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Technical skills</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<strong><span class="skillCategory">Programming languages</span> :</strong>
						C++, Python, Java *
					</li>
					<li>
						<strong><span class="skillCategory">Web technologies</span> :</strong>
						HTML, CSS, Javascript
					</li>
					<li>
						<strong><span class="skillCategory">Database management</span> :</strong>
						mySQL
					</li>
					<li>
						<strong><span class="skillCategory">Miscellaneous</span> :</strong>
						Android programming *
					</li>
					<li>
						<strong><span class="skillCategory">Operating system</span> :</strong>
						Windows, Linux
					</li>
					<div class="star"><i>*<span class="light"> Elementary proficiency</span></i></div>
					</ul>
				</div>


				<div class="section" id="sectionResponsibility">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Positions of Responsibility</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
						<li>XYZ Head, ABC 20XX (the annual XYZ of VIT Vellore)</li>
						<li>City representative, New Delhi, ABC 20XX</li>
					</ul>
				</div>


				<div class="section" id="sectionAchievements">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Achievements</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<span class="title">ABC contest 20XX : </span>
						<span class="text">Secured 1st position in the National level contest.</span>
					</li>
					<li>
						<span class="title">Joint Entrance Examination 20XX : </span>
						<span class="text">Secured All India Rank 1 among 0.15 million candidates appearing for the test.</span>
					</li>
					<li>
						<span class="title">KVPY 20XX-XX : </span>
						<span class="text">Obtained the National research fellowship scholarship by securing a position in top 1%.</span>
					</li>
					<li>
						<span class="title">ABC Olympiad 20XX : </span>
						<span class="text">Qualified for the international stage by securing top position in following stages :</span>
						<ul class="decimal">
							<li>Qualifiers stage : Bagged 20th position among 5000 candidates.</li>
							<li>National level : Bagged 7th position among 250 candidates.</li>
						</ul>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionCourses">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Key courses taken</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<div class="row">
						<div class="col-sm-6">
							<li>Computer lab</li>
							<li>Process design</li>
							<li>Statistics *</li>
						</div>
						<div class="col-sm-6">
							<li>Advanced calculus</li>
							<li>XYZ architecture *</li>
							<li>ABC lab *</li>
						</div>
					</div>
					<div class="star"><i>*<span class="light"> To be completed in Nov 20XX</span></i></div>
					</ul>
				</div>

                <div class="section" id="sectionlinks">
                    <div class="section-title ruled rule-above">
                        <hr class="hr-above">
                        <h4><strong>Links</strong></h4>
                        <hr class="hr-below">
                    </div>
                    <ul>
                    <div class="row">
                        <div class="col-sm-6">
                            <li>GitHub://xyz</li>
                            <li>Linkedin://xyz</li>
                            <li>Medium://xyz</li>
                        </div>
                        <div class="col-sm-6">
                            <li>CodeChef://xyz</li>
                            <li>HackerRank://xyz</li>
                            <li>Web-Page://xyz.github.io</li>
                        </div>
                        </div>
                    </ul>
                </div>

				<div class="section" id="sectionCurricular">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Hobbies</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>PHOTOGRAPHY</li>
					<li>QUORA WRITING</li>
					<li>VIDEO EDITING</li>
					<li>WATCHING STANDUP COMEDY</li>
					</ul>
				</div>


				<div class="section" id="sectionInterest">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Fields of interest (OR Research interests)</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<div class="row">
						<div class="col-sm-6">
							<li>Advanced XYZ</li>
							<li>ABC design</li>
						</div>
						<div class="col-sm-6">
							<li>XYZ processing</li>
							<li>Robotics</li>
						</div>
					</div>
					</ul>
				</div>

				<div class="section" id="sectionFooterMessage">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h6><strong>(References available on request)</strong></h6>
					</div>
				</div>

			</div>

		</div>


	</div>

</div>


<div class="modal fade" id="sectionToggleModal" tabindex='-1'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionEducation">Education</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionExperience">Experience</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionPublications">Publications</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionProjects">Projects</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionSkills">Technical Skills</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionResponsibility">Positions of Responsibility</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionAchievements">Achievements</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionCourses">Key courses taken</label></div>
                <div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionlinks">Links</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionCurricular">Hobbies</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" value="sectionFooterMessage">References message</label></div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<?php

if(isset($_POST['sub']))
{
  $Type="CV";
 $type_id=2;

$q=$db->prepare("INSERT INTO download1(Type,type_id) VALUES(:Type,:type_id)");

$q->bindValue('Type',$Type); 
$q->bindValue('type_id',$type_id);
$q->execute();
}         
?>

</body>

</html>
