<?php 
		require_once('data.php');
		require_once('functions.php');
		require_once('json_util.php');
		
		
		$classmates=readJsonArray();

		function printInfo($classmates) {
			$i=0;
			foreach ($classmates as $classmate){
			?>
			
			<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
					<!--Team Thumb-->
						<div class="advisor_thumb"><a href="detail.php?index=<?= $i ?>"><img src="<?php echo $classmate['profile_pic']; ?>" alt=""></a>
							<!-- Social Info-->
							<div class="social-info"><a href="detail.php?index=<?= $i ?>"><i class="fa fa-facebook"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-linkedin"></i></a></div>
						</div>
					<!--Team Details-->
						<div class="single_advisor_details_info">
							<h6><?php echo $classmate["name"] ?></h6>
							<p class="designation"><?= $classmate["major"] ?></p>
							<p class="designation"><?= $classmate["school_year"] ?></p>
							<p class="designation"><?= dateDiff($classmate["dob"], '%Y') ?></p>
							<p class="designation"><?= $classmate["name"] . ' was born ' . dateDiff($classmate["dob"], '%Y' . ' years, ' . '%m' . ' months and ' . '%d' . ' days ago.') ?></p>
						</div>
					</div>
				</div>
			<?php
			}
            $i++;
		}
		
?>

<!doctype html>
<html lang="en">
	<head>
		<!--Prints out the title of the page-->
		<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/index.css" />
		<title><?php echo 'ASE 230 - class of Spring/Fall/Summer 20XX'?></title>
	</head>
	<body>
		<div class="container text-center">
			<h1><?php echo 'This is ASE 230 - class of Spring/Fall/Summer 20XX'?></h1>
		</div>
		
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-6">
					<!-- Section Heading-->
					<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h3><?php echo 'Our Creative' ?><span><?php echo 'Team'?></span></h3>
							<p><?php echo 'Appland is completely creative, lightweight, clean &amp; super responsive app landing page.'?></p>
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					//loops through the students array and prints image and other information in text box.
					printInfo($classmates);
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
					<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
					<!--Team Thumb-->
						<div class="advisor_thumb"><a href="create.php"><img src="https://cdn0.iconfinder.com/data/icons/circles-2/100/sign-square-plus-512.png" style="width: 315px" alt=""></a>
						</div>
					<!--Team Details-->
						<div class="single_advisor_details_info">
							<h6><?php echo 'create new user' ?></h6>
						</div>
					</div>
				</div>
		</div>
			
		<div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>