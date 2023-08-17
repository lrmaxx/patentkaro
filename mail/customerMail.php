<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// alert("success");
// die();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'autoload.php';

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$service_code   = $_POST['service_code'];
	$service_name = [
		'001' =>'Patent Service ',
		'002' =>'Patent Search Analytics ',
		'003' => 'Patent Protection ',
		'004' =>'PCT Nation Filling',
		'005' =>'Patent Illustration Hub',
		'006' =>'Design Patent Service',
		'007' =>'Provisional Patent Service',
		'008' =>'Patent Research',
		'009' =>'Patent Drafting',
		'010' =>'Patent FTO',
		'011' =>'Permanent Patent',
		'012' =>'Patent Prosecution',
		'013' =>'Patent Litigation',
		'014' =>'Patent Illustartion',
		'015' =>'Patent Early Publication',
		'016' =>'Patent Early Examination',
		
	];

	$string_convert = $service_code;
	$service_code   = strval($string_convert);
	
	$custmail = new PHPMailer(TRUE);

		// $custmail->isSMTP();
		// // $custmail->Mailer = "smtp";
		// $custmail->SMTPDebug  = 1;
		// $custmail->SMTPAuth   = TRUE;
		// $custmail->SMTPSecure = "ssl";
		// $custmail->Port       = 465;
		// $custmail->Host       = "smtp.gmail.com";
		// $custmail->Username   = "legalraastatech3@gmail.com";
		
		$custmail->isSMTP();
		$custmail->SMTPDebug  = 1;
		$custmail->Host = "smtp.gmail.com";
		$custmail->SMTPAuth = true;
		$custmail->Username   = "testlegal125@gmail.com";
		$custmail->Password ="ilgzsoockkqrkhyc";
		$custmail->Port = 465;
		$custmail->SMTPSecure = "ssl";
		//Email Settings
		$custmail->isHTML(true);
		$custmail->setFrom('testlegal125@gmail.com', 'PATENTKARO.COM');
		$custmail->addAddress($_POST['email'], $_POST['name']);
		$custmail->Subject = ucwords("Thank you For Showing Interest In. $service_name[$service_code]");
        if(isset($_POST['service_code']) && $service_code == '001') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '002') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '003') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '004') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '005') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '006') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '007') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '008') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '009') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '010') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '011') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '012') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '013') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '014') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '015') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '016') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '017') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in LegalRaasta, and we are committed to delivering the highest quality service in setting up your business in India. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is LegalRaasta’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Patenkaro:<br></strong>Patenkaro is India leading business services provider. Patenkaro
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>Patenkaro also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>

					<p>Warm regards,<br>Team, Patent Karo<br><em>
					<br>
						www.patentkaro.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else{
            $Body =$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].',</p>
				<p>Thanks for Submission of this Service </p>
				

				<p>You can also view our <a
						href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing">Trademark
						Guidebook</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> apply. For
					companies,&gt; 5cr turnover charges are 11,499 (incl. GST).</p>
				<h6 class="western">*If any objection comes to your trademark, the fees will be extra for the further process of
					reply application in the department.</h6>
			</body>
		</html>';
        }
		$custmail->MsgHTML($Body); 
		if(!$custmail->send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $custmail->ErrorInfo;
		} 

		else {
		echo 'Message has been sent.';
		$status = "success";
			$response = "Email is sent!";
		}
    }

exit(json_encode(array("status" => $status, "response" => $response)));
