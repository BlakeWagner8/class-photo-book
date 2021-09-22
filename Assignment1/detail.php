<!doctype html>
<?php
			require_once('data.php');
?>
<html lang="en">
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

		
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
				<title><?php
					echo "ASE 230 -" .
					$students[$_GET['index']]['name'];
					?>
					</title>;
			<div class="container text-center mb-5">
				<h1><?php echo "This is ASE 230 -". $students[$_GET['index']]['name']; ?></h1>
			</div>
		
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="<?php echo $students[$_GET['index']]['picture']; ?>" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo "Your name" ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal"><?php echo "Follow on:" ?></p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo 'Major:' ?></span>
			  <label class="media-body"><?php echo $students[$_GET['index']]['major']; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo 'Dream company:' ?></span>
			  <label class="media-body"><?php echo $students[$_GET['index']]['company']; ?></label>
            </li>
            <li class="media">
				<span class="w-25 text-black font-weight-normal"><?php echo 'Email: ' ?></span>
				<label class="media-body"><?php echo $students[$_GET['index']]['name'] . '@mymail.nku.edu' ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo 'Short intro' ?></h5>
			<p><?php echo 'Blake is a student at Northern Kentucky University. He grew up in Florence Kentucky and went to Dixie Heights High School. He decided to go into the cybersecurity field for his interest
			in computers and wants to eventually work for the FBI or NSA. He loves watching sports, playing video games, hiking, travelling, or just hanging out with friends.'?></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><?php echo 'The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else.'?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo 'Top skills'?></h5>
        </div>
		
		<?php
		foreach($students[$_GET['index']]['skills'] as $key => $value) {
			?>

        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?php echo $value?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo $key . " (" . $value . ")"?></div>
            </div>
          </div>
        </div>
		<?php
		}
		?>
		
		
		
			<h5 class="font-weight-normal"><?php echo 'Fun fact'?></h5>
			<p><?php echo 'It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a 
			well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!'?></p>
      </div>
		<a href="index.php"><?php echo 'Back to Home Page'?></a>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
	</body>