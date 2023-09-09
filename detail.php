<?php
$data = array(
    1 => array(
        'name' => 'Jacob Doerr',
        'title' => 'Cybersecurity Analyst',
        'email' => 'doerrj1@mymail.nku.edu',
        'phone' => '859-957-9125',
        'linkedIn' => 'https://www.linkedin.com/in/jacobdoerr/',
        'github' => 'https://github.com/Jacobtd',
        'summaryString' => 'I have attended Northern Kentucky University for the past three years while pursuing a degree in Cybersecurity. The program so far has taught me valuable lessons in coding languages like Javascript and Python, as well as other resources such as HTML. Throughout my experience here, I have mostly enjoyed classes that involved hands-on experience, especially those working with computer forensics.',
        'position' => array(
            1 => array('companyName' => 'Graeter\'s',
                'positionTime' => '2019 - Present',
                'roleTitle' => 'Team Lead',
                'roleDescription' => 'Working with and managing other employees to ensure a successful closing shift in which all required tasks are completed, including cleaning public spaces, restocking items, and counting and storing money in cash registers.',
                'achievements' => 'Experience in JavaScript, Python, and HTML',
                'technologiesUsed' => 'JavaScript, HTML, Python',
            ),
        ),
        'skills' => array('Premiere', 'After Effects', 'Packet Tracer'),
        'others' => array('XAMPP', 'Git'),
        'degrees' => array(
            1 => array(
                'degreeName' => 'Bachelor\'s degree in Cyber Security',
                'collegeName' => 'Northern Kentucky University',
                'timeRecieved' => '2021 - Present',
            ),
        ),
        'projects' => array(
            1 => array(
                'projectDescription' => '',
                'projectLink' => '',
            ),
        ),
        'languages' => array(
            'English'
        ),
        'interests' => array('Video games', 'Photography', 'Swimming'),
        'photographLink' => 'assets/images/profile2.jpg',
    ),
    2 => array(
        'name' => 'John Doe',
        'title' => 'Cybersecurity Analyst',
        'email' => 'johndoe@example.com',
        'phone' => '123-456-7890',
        'linkedIn' => 'https://www.linkedin.com/in/johndoe',
        'github' => 'https://github.com/johndoe',
        'summaryString' => 'Experienced cybersecurity analyst with a strong background in network security.',
        'position' => array(
            1 => array('companyName' => 'XYZ Corporation',
                'positionTime' => '2018 - 2022',
                'roleTitle' => 'Cybersecurity Analyst',
                'roleDescription' => 'Managed network security and conducted vulnerability assessments.',
                'achievements' => 'Implemented advanced firewall rules, reduced security incidents by 30%.',
                'technologiesUsed' => 'Firewalls, IDS/IPS, SIEM',
            ),
			2 => array('companyName' => 'ABC Incorporated',
                'positionTime' => '2022 - Present',
                'roleTitle' => 'Chief Cybersecurity Analyst',
                'roleDescription' => 'Lead the company\'s cypersecurity team.',
                'achievements' => 'No major incidents have occurred at ABC Incorporated since taking charge.',
                'technologiesUsed' => 'Firewalls, IDS/IPS, SIEM',
            ),
        ),
        'skills' => array('Network Security', 'Penetration Testing', 'Incident Response', 'Security Policy Development'),
        'others' => array('Certifications: CISSP, CompTIA Security+', 'Conference Speaker'),
        'degrees' => array(
            1 => array(
                'degreeName' => 'Bachelor\'s degree in Cyber Security',
                'collegeName' => 'University of Example',
                'timeRecieved' => '2014 - 2018',
            ),
            2 => array(
                'degreeName' => 'Master\'s degree in Cyber Security',
                'collegeName' => 'University of Michigan',
                'timeRecieved' => '2018 - 2022',
            ),
        ),
        'projects' => array(
            1 => array(
                'projectDescription' => 'Designed and implemented a secure network architecture for a major client.',
                'projectLink' => 'https://example.com/project1',
            ),
            2 => array(
                'projectDescription' => 'Developed a custom intrusion detection system for internal use.',
                'projectLink' => 'https://example.com/project2',
            ),
            3 => array(
                'projectDescription' => 'Led a team in a red teaming exercise to identify vulnerabilities in the organization\'s network infrastructure.',
                'projectLink' => 'https://example.com/project3',
            ),
        ),
        'languages' => array(
            'English', 'Spanish', 'French'
        ),
        'interests' => array('Cybersecurity research', 'Hiking', 'Coding', 'Blockchain Technology'),
        'photographLink' => 'assets/images/profile.jpg',
    )
);

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<?php
	if (isset($_GET['user_id'])) {
		$user_id = $_GET['user_id'];
	}
	?>
    <title> <?php echo $data[$user_id]['name'].'\'s Resume' ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="<?php echo $data[$user_id]['name']?>">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $data[$user_id]['photographLink']?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $data[$user_id]['name']?></h1>
							    <div class="title mb-3"><?php echo $data[$user_id]['title']?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $data[$user_id]['email']?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $data[$user_id]['phone']?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $data[$user_id]['linkedIn']?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $data[$user_id]['github']?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->6
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume- summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"> <?php echo $data[$user_id]['summaryString']?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <?php
										$i = 1;
										while(isset($data[$user_id]['position'][$i])){
											echo '<div class="resume-timeline-item-header mb-2">';
											echo '<div class="d-flex flex-column flex-md-row">';
										        echo '<h3 class="resume-position-title font-weight-bold mb-1">'.$data[$user_id]['position'][$i]['roleTitle'].'</h3>';
										        echo '<div class="resume-company-name ms-auto">'.$data[$user_id]['position'][$i]['companyName'].'</div>';
										    echo '</div><!--//row-->';
										    echo '<div class="resume-position-time">2023 - Present</div>';
									    echo '</div><!--//resume-timeline-item-header-->';
									    echo '<div class="resume-timeline-item-desc">';
										    echo '<p>'.$data[$user_id]['position'][$i]['roleDescription'].'</p>';
											$i++;
											}
											?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <?php
											$i = 0;
										while(isset($data[$user_id]['skills'][$i])){
											echo '<li class="mb-2">';
												echo '<div class="resume-skill-name">'.$data[$user_id]['skills'][$i].'</div>';
												echo '<div class="progress resume-progress">';
													echo '<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
												echo '</div>';
											echo '</li>';
											$i++;
										}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
									<?php
										$i = 0;
							            while(isset($data[$user_id]['others'][$i])){
											echo '<li class="list-inline-item"><span class="badge badge-light">'.$data[$user_id]['others'][$i].'</span></li>';
											$i++;
										}
									?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<?php
									$i = 1;
							        while(isset($data[$user_id]['degrees'][$i])){
								    echo '<li class="mb-2">';
								        echo '<div class="resume-degree font-weight-bold">'.$data[$user_id]['degrees'][$i]['degreeName'].'</div>';
								        echo '<div class="resume-degree-org">'.$data[$user_id]['degrees'][$i]['collegeName'].'</div>';
								        echo '<div class="resume-degree-time">'.$data[$user_id]['degrees'][$i]['timeRecieved'].'</div>';
								    echo '</li>';
									$i++;
									}
								?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							<?php
								$i = 0;
							        while(isset($data[$user_id]['languages'][$i])){
							    echo '<ul class="list-unstyled resume-lang-list">';
								    echo '<li class="mb-2"><span class="resume-lang-name font-weight-bold">'.$data[$user_id]['languages'][$i].'</span> <small class="text-muted font-weight-normal"></small></li>';
							    echo '</ul>';
								$i++;
									}
							?>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    
								<?php
								$i = 0;
							        while(isset($data[$user_id]['interests'][$i])){
										echo '<ul class="list-unstyled">';
										echo '<li class="mb-1">'.$data[$user_id]['interests'][$i].'</li>';
										echo '</ul>';
										$i++;
									}
								?>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<?php
					$i = 1;
					while(isset($data[$user_id]['projects'][$i])){
						echo '<div class="row mt-4">';
							echo '<div class="col-md-4">';
								echo '<div class="card">';
									echo '<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">';
									echo '<div class="card-body">';
										echo '<h5 class="card-title">Project 1</h5>';
										echo '<p class="card-text">'.$data[$user_id]['projects'][$i]['projectDescription'].'</p>';
										echo '<a href="btn btn-outline-primary" href='.$data[$user_id]['projects'][$i]['projectLink'].'>Go to link</a>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
						$i++;
					}
					?>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Jacob Doerr</small>
    </footer>

    

</body>
</html> 

