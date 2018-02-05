<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Create your company, plan your estate and form a trust for your children today. ">

	<link rel="shortcut icon" href="/anewdesign/img/favicon.ico" type="image/x-icon">
	<title>Wyoming Trust &amp; Corporate Attorney</title>

	<!-- To Make browsers render all elements more consistently. -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="/anewdesign/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Tachyons css library - Allows us to write less custom css code -->
	<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">

	<!-- Custom Fonts -->
		<link href="/anewdesign/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/anewdesign/css/main.min.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" class="index">

	<!-- PHP script to add ../ as many times as need automatically according
		to the depth of the current page in the directory tree -->
	<?php
		$PHP_SELF = $_SERVER['PHP_SELF'];
		$root = '';
		$depth = substr_count ( $PHP_SELF , '/' );
		for ( $i = 2; $i < $depth; $i++ ) {
		    $root .= '../';
		}
	?>


	<!-- Navigation -->
	<?php include_once($root . 'includes/nav/index.php'); ?>

	<!-- Header -->
	<?php include_once($root . 'includes/header/index.php'); ?>

	<!-- Why choose us -->
	<section class="bg-primary about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">why choose us?</h2>
					<hr class="divide-bar sm inverse">
					<p class="section-text text-faded">Who should you trust with your most important affairs? Discount providers, such as Legal Zoom, offer tempting prices. Crucial nuance is lost when filling simplistic questionnaires though - and there's nobody to have your back. It’s cheap in the beginning, but costs more in the end. <strong>Why pick up nickles in front of a bull-dozer?</strong></p>
					<p class="section-text text-faded">At the other end are overpriced legal services. Allow us to help... We have helped thousands of clients just like you. For so long as we combine quality service and reasonable prices we will be successful. Why fix something that's not broken?</p>
					<a href="#services" class="page-scroll btn btn-secondary btn-md">find out more</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Pricing -->
	<section class="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Pricing</h2>
					<h3 class="section-subheading text-muted">We have helped thousands of clients just like you. We combine quality service and reasonable prices.</h3>
				</div>
			</div>
			<div class="row">
				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#001</span>
					  <p class="info">
					    Wyoming Asset Protection Trust
					  </p>
					  <p class="price">
					    $5000
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#002</span>
					  <p class="info">
					    Private Trust Company
					  </p>
					  <p class="price">
					    $3000
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#003</span>
					  <p class="info">
					    Solo 401k LLC
					  </p>
					  <p class="price">
					    $1000
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#004</span>
					  <p class="info">
					    Wyoming LLC
					  </p>
					  <p class="price">
					    $199
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#005</span>
					  <p class="info">
					    Corporations
					  </p>
					  <p class="price">
					    $199
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-lg-4">
					<div class="price-ticket">
						<span>#006</span>
					  <p class="info">
					    Virtual Office
					  </p>
					  <p class="price">
					    $300
					  </p>
					</div>
				</div>

				<!-- Price ticket -->
				<div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
					<div class="price-ticket">
						<span>#007</span>
					  <p class="info">
					    Registered Agent
					  </p>
					  <p class="price">
					    $49
					  </p>
					</div>
				</div>

				<!-- CTA -->
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<p class="text-center">If you have a special request we would love to hear from you. Please <a href="#contact" class="page-scroll">contact us today</a>.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Text Block Section -->
	<section class="text-block bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Services</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-12 col-md-10 col-md-offset-1 text-block__item">
					<a href="/anewdesign/Estate-Planning/">
						<img src="/anewdesign/img/services/estate.png" alt="Estate Planning" class="text-block__img img-centered" />
					</a>
					<h4 class="text-block__heading"><a href="/anewdesign/Estate-Planning/">Estate planning</a></h4>
					<p class="section-text text-muted text-block__text">
						Estate taxes trap the unwary. Yet, many avoid the discomfort of estate planning because it relates to death and dying. One's choice amounts to getting ahead of the issue, or leaving things to the cruelty of chance and forcing survivors to face difficult decisions during an even more difficult time.
					</p>
					<p class="section-text text-muted text-block__text">
						Everything you want to know about wills, trusts, taxes, asset protection and nursing home poverty... but didn't know who to ask. Our articles cover how to prevent your savings from being wiped out by nursing home costs, seven costly mistakes families make during estate planning, what probate is, why you want to avoid it, how to minimize estate taxes and more.
					</p>
				</div>

				<div class="col-xs-12 col-md-10 col-md-offset-1 text-block__item">

					<a href="/anewdesign/Asset-Protection/">
						<img src="/anewdesign/img/services/asset.png" alt="Asset Protection Strategies" class="text-block__img img-centered" />
					</a>

					<h4 class="text-block__heading"><a href="/anewdesign/Asset-Protection/">Asset Protection Strategies</a></h4>

					<p class="section-text text-muted text-block__text">
						Having home and car insurance is obvious. What's less obvious, but arguably more important, is insuring against bankruptcy, divorce, bad luck, zealous creditors and poor decisions. Properly structuring your finances reduces the risk of catatrophic losses stemming from the aforementioned events. There are as many strategies as people and their situations. Our three most popular offerings are:
					</p>

					<blockquote class="text-block__blockquote">
						<h4 class="text-block__heading--blockquote"><i><a href="/anewdesign/Asset-Protection/Domestic-Trust/">Domestic Asset Protection Trusts (DAPT)</a></i></h4>
						<i>
							Trusts are containers for assets. You place what you own inside and the lid may only be opened according to your rules. They are designed to protect your assets from creditors. Our trusts are formed domestically and avoid many pitfalls common to offshore trusts. As proud members of the Domestic Asset Protection Counsel we are happy to walk you through the process.
						</i>

						<h4 class="text-block__heading--blockquote"><i><a href="/anewdesign/Asset-Protection/Medicaid-Trust/">Medicaid Asset Protection Trusts</a></i></h4>
						<i>
							Medicaid costs often force families to go bankrupt caring for their elders. One month in a skillerd nursing facility costs an average of $10,000. Our trusts enable you to qualify for Medicaid, without losing your home or going bankrupt - for less than the cost of one month in a nursing facility.
						</i>

						<h4 class="text-block__heading--blockquote"><i><a href="/anewdesign/Asset-Protection/Solo-401k-LLC/">Solo 401(K) LLCS</a></i></h4>
						<i>
							Our setup enable you to bypass a custodian and invest in a wider variety of opportunities. You will save on fees and have full control over how your fund is managed. We handle everything for you, from the LLC to the operating agreement. You then control the LLC and invest as you wish.
						</i>
					</blockquote>

				</div>

				<div class="col-xs-12 col-md-10 col-md-offset-1 text-block__item">
					<a href="/anewdesign/Wyoming/">
						<img src="/anewdesign/img/services/checklist.png" alt="Corporate Structures & Strategies" class="text-block__img img-centered" />
					</a>
					<h4 class="text-block__heading"><a href="/anewdesign/Wyoming/">Corporate Structures &amp; Strategies</a></h4>
					<p class="section-text text-muted text-block__text">
						Proper planning minimizes taxes and liabilities while enhancing privacy. Failing to plan throws everything you've worked for to the wind in the hope "things just work out". Why opt for unnecessary risks when we can take care of them for you? We provide examples of how we can help client like you, along with numerous resource articles.
					</p>

					<ul class="text-muted text-block__list">
						<li>
							<a href="/anewdesign/Wyoming/WY-LLCs/">Wyoming LLCs</a>: Learn about LLCs, including their unique <a href="/anewdesign/Wyoming/WY-LLCs/Benefits.php"><i>benefits</i></a> and <a href="/anewdesign/Wyoming/WY-LLCs/Privacy.php"><i>privacy</i></a>. We can assist no matter where you or your business are located.
						</li>
						<li>
							<a href="/anewdesign/Wyoming/WY-C-Corporation/">Wyoming Corporations</a>: Learn about corporations, including their <a href="/anewdesign/Wyoming/WY-C-Corporation/Benefits.php"><i>benefits</i></a> and <a href="/anewdesign/Wyoming/WY-C-Corporation/Privacy.php"><i>privacy</i></a>. Just as with LLCs, we can assist regardless of where you live or your business is located. 
						</li>
						<li>
							<a href="/anewdesign/Wyoming/Virtual-Office/">Virtual Offices</a>: We provide a full suite of services. From lease, to phones and mail forwarding.
						</li>
						<li>
							<a href="/anewdesign/Wyoming/RegisteredAgent/">Registered Agent services</a>: The professionalism of a law firm, at a fraction of the usual price.
						</li>

					</ul>

					<p class="section-text text-muted text-block__text">
						Others market cheap corporations and registered agent services... and you get what you pay for. We help secure your future through providing follow-up services such as asset protection, domestic trusts and estate planning. Our relationship doesn't end when you pay, that's when it begins.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<?php include_once($root . 'includes/contact/index.php'); ?>

	<!-- Useful links -->
	<section class="floating-content pt5 pb0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="tc b">Useful links</h4>
				</div>
				<div class="col-xs-12 flex flex-wrap justify-center items-center">
					<a href="/anewdesign/index.php" class="floating-content__link">Cloud Peak Law Group</a>
					<a href="/anewdesign/Asset-Protection/Medicaid-Trust/index.php" class="floating-content__link">Medicaid Trusts</a>
					<a href="/anewdesign/Estate-Planning/Revocable-Living-Trusts/index.php" class="floating-content__link">Revocable Living Trusts</a>
					<a href="/anewdesign/Asset-Protection/Solo-401k-LLC/index.php" class="floating-content__link">Solo 401k LLC</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php include_once($root . 'includes/footer/index.php'); ?>
	
	<!-- Back To Top -->
	<?php include_once($root . 'includes/shared-components/index.php'); ?>

	<!-- JS libs -->
	<?php include_once($root . 'includes/js-libs/index.php'); ?>

	<!-- Custom js -->
	<?php include_once($root . 'includes/custom-js/index.php'); ?>

</body>

</html>
