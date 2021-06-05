<?php 
include('connection.php');
session_start();
$_SESSION["val"]="1";
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
	<meta name="description" content="Online document editor like interface to create and save Resume">
	<meta name="keywords" content="resume,cv,maker,creator,generator,projects,computer science">
</head>

<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 no-print" id="left">
			<div id="panel">
				<form action="/IWP Project/feedback.php">
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
				
				<button id="customTemplateBtn" class="btn btn-block btn-default" onclick="template();">Use custom template</button>
				<h5>
					Semester
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="minor" id="minorShow">Show</div>
						<div class="toggle-option selected" data-toggle="minor" id="minorHide">Hide</div>
					</div>
				</h5>
				<h5>
					Contact lines
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="contact" id="contact3">2</div>
						<div class="toggle-option selected" data-toggle="contact" id="contact4">3</div>
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

				<div id="customTemplateOptions">
					<h5>
						Font type
						<div class="toggle-button">
							<div class="toggle-option" data-toggle="font" id="fontVerdanaSans">1</div>
							<div class="toggle-option" data-toggle="font" id="fontMonospace">2</div>
							<div class="toggle-option" data-toggle="font" id="fontRoboto">3</div>
							<div class="toggle-option selected" data-toggle="font" id="fontDroid">4</div>
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
						Table border
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="table" id="tableShow">Show</div>
							<div class="toggle-option" data-toggle="table" id="tableHide">Hide</div>
						</div>
					</h5>
					<h5>
						Education year column
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="edyear" id="edyearFirst">First</div>
							<div class="toggle-option" data-toggle="edyear" id="edyearLat">Last</div>
						</div>
					</h5>
					<h5>
						Experience layout
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="experience" id="experience1">L1</div>
							<div class="toggle-option" data-toggle="experience" id="experience2">L2</div>
						</div>
					</h5>
					<h5>
						Projects layout
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="projects" id="projects1">L1</div>
							<div class="toggle-option" data-toggle="projects" id="projects2">L2</div>
						</div>
					</h5>
					<br>
				</div>

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
				<div class="col-sm-12">
					<div id="info" style="text-align: center; padding-top:40px; padding-bottom: 15px;">
						<p id="contentName" style="font-family: 'Amarante'; font-size: 60px;">Abc xyz</p>
					</div>
					<div id="contact">
						<p>xyz.xyz@gmail.com | +91-9999999999 | abc.github.io</p>
						<p style="margin-top:-10px"><span id="contactLink2">Github://abcxyz  | </span>
						<span id="contactLink1">Linkedln://xyzabc | </span>
						<span id="contactlink5">CodeChef://absnx | </span>
						<span id="contactlink6">HackerRank://absnxy</span></p>
					</div>
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
						<table class="table customBordered" id="educationTable">
							<tr>
								<td class="header"><strong>Year</strong></td>
								<td class="header"><strong>Degree / Certificate</strong></td>
								<td class="header"><strong>Institute / Board</strong></td>
								<td class="header"><strong>CGPA/Percentage</strong></td>
							</tr>
							<tr>
								<td>20XX - Present</td>
								<td>B.Tech</td>
								<td>VIT VELLORE</td>
								<td>9.00 (Current)</td>
							</tr>
							<tr>
								<td>20XX</td>
								<td>Senior secondary</td>
								<td>CBSE board</td>
								<td>97.0%</td>
							</tr>
							<tr>
								<td>20XX</td>
								<td>Secondary</td>
								<td>CBSE board</td>
								<td>X.0</td>
							</tr>
						</table>
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
						<div>
						<div class="title">XYZ Engineer at 'ABC'</div>
						<div class="time right">May 20XX - July 20XX</div>
						</div>
						<div>
						<div class="link right">www.abc.in</div>
						<div class="text">Analysed app usage statistics to recommend items based on user's preference.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">XYZ Engineer at 'ABC'</div>
						<div class="time right">Dec 20XX</div>
						</div>
						<div>
						<div class="link right">www.abc.in</div>
						<div class="text">Designed methods to improve the existing unit test mechanism.</div>
						</div>
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
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Nov 20XX</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						<div class="link right">github.com/link</div>
						</div>
						<div>
						<div class="text">Graphical interface to share files over institute's network.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Aug 20XX - Sep 20XX</div>
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
 $type_id=1;

$q=$db->prepare("INSERT INTO download1(Type,type_id) VALUES(:Type,:type_id)");

$q->bindValue('Type',$Type); 
$q->bindValue('type_id',$type_id);
$q->execute();
}
		  
?>
	
</script>
</body>

</html>