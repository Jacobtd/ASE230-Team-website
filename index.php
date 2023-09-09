<?php
$data = array(
	1 => array(
		'name' => 'Jacob Doerr',
		'title' => 'Cybersecurity Analyst',
		'email' => 'doerrj1@mymail.nku.edu',
		'phone' => '859-957-9125',
		'linkedIn' => 'https://www.linkedin.com/in/jacobdoerr/',
		'github' => 'https://github.com/Jacobtd',
		'summaryString' => 'I have attended Northern Kentucky University for the past three years while persuing a degree in Cybersecurity. The program so far has taught me valuable lessons in coding languages like Javascript and python, as well as other resources such as html. Throughout my experience here, I have mostly enjoyed classes that involved hands on experience, especially those working with computer forensics.',
		'position' => array(
			1 => array('companyName' => 'Graeter\'s',
				'positionTime' => '2019 - Present',
				'roleTitle' => 'Team Lead',
				'roleDescription' => 'Working with and managing other employees to ensure a succsesful closing shift in which all required tasks are completed, including cleaning public spaces, restocking items, and counting and storing money in cash registers.',
				'achievements' => 'Experience in Javascript, python, and HTML',
				'technologiesUsed' => 'javaScript, html, Python',
			),
		),
		'skills' => 'Premiere, After Effects, Packet Tracer',
		'others' => 'Xampp',
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
			'English'),
		'interests' => array('video games', 'photography', 'swimming'),
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
            'roleDescription' => 'Managed network security and conducted vulnerability assessments.',
            'achievements' => 'Implemented advanced firewall rules, reduced security incidents by 30%.',
            'technologiesUsed' => 'Firewalls, IDS/IPS, SIEM',
        ),
    ),
    'skills' => 'Network Security, Penetration Testing, Incident Response',
    'others' => 'Certifications: CISSP, CompTIA Security+',
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
	'languages' => array(
			'English', 'Spanish')
		
    ),
    'interests' => array('Cybersecurity research', 'Hiking', 'Coding'),
    'photographLink' => 'assets/images/profile.jpg',
)
);

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
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
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM!</h1>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $data[1]['photographLink']?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $data[1]['name']?></h1>
							    <div class="title mb-3"><?php echo $data[1]['title']?></div>
								<a href="detail.php?user_id=1" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $data[2]['photographLink']?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $data[2]['name']?></h1>
							    <div class="title mb-3"><?php echo $data[2]['title']?></div>
								<a href="detail.php?user_id=2" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

