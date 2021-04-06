<?php
	include 'securelogin_functions.php';
	include 'functions.php';
	include("class.phpmailer.php");	
	sec_session_start();
	include dirname(dirname(__FILE__)).'/db_connect.php';
	include dirname(dirname(__FILE__)).'/ma_config.php';
    error_reporting(0);
	$post = (!empty($_POST)) ? true : false;

	if($post)
	{
		if(!(isset($_POST['appnumber'])) || !(isset($_POST['date'])) || !(isset($_POST['time'])))
		{
			echo "Please select all required fields.<br/><br/><a href='../slotbooking.php'>Click here to go Back for slot booking</a>";
		}
		else
		{
			$email = $_SESSION['email'];
			$appno = stripslashes($_POST['appnumber']);
			if ($insert_stmt = $mysqli->prepare("select testCenter from walkinApplications where walkinAppNo=?")) 
			{   			
				$insert_stmt->bind_param('s', $appno); 
				$insert_stmt->execute();
				$insert_stmt->store_result();
				$insert_stmt->bind_result($center);
				$insert_stmt->fetch();
				$insert_stmt->close();
			}
			$date = stripslashes($_POST['date']);
			$time = stripslashes($_POST['time']);
			$app_counter=0;
			if($center=="1")
			{
				if($time==1)
				{
					if ($insert_stmt = $mysqli->prepare("select hyd_1 from slotavailability where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('s', $date); 
						$insert_stmt->execute();
						$insert_stmt->store_result();
						$insert_stmt->bind_result($app_counter);
						$insert_stmt->fetch();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
					$app_counter = $app_counter+1;
					if ($insert_stmt = $mysqli->prepare("update slotavailability set hyd_1 =? where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('ss', $app_counter,$date); 
						$insert_stmt->execute();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
				}
				if($time==2)
				{
					if ($insert_stmt = $mysqli->prepare("select hyd_2 from slotavailability where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('s', $date); 
						$insert_stmt->execute();
						$insert_stmt->store_result();
						$insert_stmt->bind_result($app_counter); 
						$insert_stmt->fetch();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
					$app_counter = $app_counter+1;
					if ($insert_stmt = $mysqli->prepare("update slotavailability set hyd_2 =? where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('ss', $app_counter,$date); 
						$insert_stmt->execute();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
				}
				if($time==3)
				{
					if ($insert_stmt = $mysqli->prepare("select hyd_3 from slotavailability where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('s', $date); 
						$insert_stmt->execute();
						$insert_stmt->store_result();
						$insert_stmt->bind_result($app_counter); 
						$insert_stmt->fetch();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
					$app_counter = $app_counter+1;
					if ($insert_stmt = $mysqli->prepare("update slotavailability set hyd_3 =? where slotdate=?")) 
					{   			
						$insert_stmt->bind_param('ss', $app_counter,$date); 
						$insert_stmt->execute();
						$insert_stmt->close();
					}
					else
					{
						echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
						exit;
					}
				}
			}
			if($center=="center2")
			{

		if($time==1)

		{

				if ($insert_stmt = $mysqli->prepare("select kakinada_1 from slotavailability where slotdate=?")) {   			

				$insert_stmt->bind_param('s', $date); 

				$insert_stmt->execute();

				$insert_stmt->store_result();

				$insert_stmt->bind_result($app_counter); 

				$insert_stmt->fetch();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

			$app_counter = $app_counter+1;

			if ($insert_stmt = $mysqli->prepare("update slotavailability set kakinada_1 =? where slotdate=?")) {   			

				$insert_stmt->bind_param('ss', $app_counter,$date); 

				$insert_stmt->execute();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

		

			}

			if($time==2)

		{

				if ($insert_stmt = $mysqli->prepare("select kakinada_2 from ma_slotavailability where slotdate=?")) {   			

				$insert_stmt->bind_param('s', $date); 

				$insert_stmt->execute();

				$insert_stmt->store_result();

				$insert_stmt->bind_result($app_counter); 

				$insert_stmt->fetch();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

			$app_counter = $app_counter+1;

			if ($insert_stmt = $mysqli->prepare("update slotavailability set kakinada_2 =? where slotdate=?")) {   			

				$insert_stmt->bind_param('ss', $app_counter,$date); 

				$insert_stmt->execute();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

		

			}

			if($time==3)

		{

				if ($insert_stmt = $mysqli->prepare("select kakinada_3 from slotavailability where slotdate=?")) {   			

				$insert_stmt->bind_param('s', $date); 

				$insert_stmt->execute();

				$insert_stmt->store_result();

				$insert_stmt->bind_result($app_counter); 

				$insert_stmt->fetch();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

			$app_counter = $app_counter+1;

			if ($insert_stmt = $mysqli->prepare("update slotavailability set kakinada_3 =? where slotdate=?")) {   			

				$insert_stmt->bind_param('ss', $app_counter,$date); 

				$insert_stmt->execute();

				$insert_stmt->close();

			}

			else

			{

				echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";

				exit;

			}

		

			}

			}

		
		
		
		if ($insert_stmt = $mysqli->prepare("update walkinApplications set slotdate =? ,slotNo=? where walkinAppNo=?")) 
		{   			
			$insert_stmt->bind_param('sss', $date,$time,$appno); 
			$insert_stmt->execute();
			$insert_stmt->close();
		}
		else
		{
			echo "<br/>Not able to submit the application.<br/>Please Call us once to help yoou.7799834583";
			exit;
		}
		
		require('fpdf/fpdf.php');
		$pdf = new FPDF('P','mm','A4');

			$path='halltickets/';

			$id=$appno.'.pdf';

			$pdffilename=$path.$id;

			

			$pdf->SetAuthor("MSIT");

			$pdf->SetTitle("MSIT");

			$pdf->SetCreator("Hallticeket Generator");

			$pdf->SetSubject("Halltickets 2015");

			

			$pdf->AddPage();	

			$pdf->SetFont('times','B',20);

			

			$pdf->SetXY(18,15);

						

			$pdf->Cell('','5','Consortium of Institutions of Higher Learning  ','','','C');		



			$pdf->Cell('','3','');

			

			$pdf->SetXY(15,25);

			

			$pdf->SetFont('times','B',10);

			$pdf->Cell('','','IIIT Campus, Gachibowli, Hyderabad - 32, Phone: 040-23001970,Mobile: 7799834583, 7799834585','','','C');



			$pdf->Cell('','3','');

			

			$pdf->Image('images/line.jpg','25','30','162');

			

			$pdf->Cell('','3','');

			

			$pdf->Image('images/msit.jpg','25','35','35');

			

			$pdf->SetFont('times','B',14);			

			

			$pdf->SetXY(45,38);

			$pdf->Cell('','','Master of Science in Information Technology','','','C');

			$pdf->Cell('','3','');

			

			$pdf->SetXY(45,44);

			$pdf->Cell('','','Entrance Test 2015','','','C');			

			

			$pdf->SetFont('times','B',16);

			$pdf->Cell('','3','');

			$pdf->SetXY(45,52);

			$pdf->Cell('','','HALLTICKET','','','C');

			

			$htno = $appno;

			$pdf->SetFont('times','B',12);

			$pdf->Cell('','3','');

			$pdf->SetXY(25,70);

			$pdf->Cell('','','Hall Ticket No :','','','');

			$pdf->SetXY(75,70);

			$pdf->Cell('','',$htno,'','','');

			

			

			if ($stmt = $mysqli->prepare("SELECT full_name,image_url FROM userProfilesView WHERE email = ?")) { 

									$stmt->bind_param('s', $_SESSION['email']); 

									$stmt->execute();

									$stmt->store_result();

									$stmt->bind_result($username,$profileimage); 

									$stmt->fetch();

									}

			

			

			

			$name = $username;

			$pdf->SetFont('times','B',12);

			$pdf->Cell('','3','');

			$pdf->SetXY(25,80);

			$pdf->Cell('','','Name of the Candidate :','','','');

			$pdf->SetXY(75,80);

			$pdf->Cell('','',$name,'','','');

			

			

			

			

			

			

			if ($stmt = $mysqli->prepare("SELECT paymentType FROM walkinApplications WHERE walkinAppNo = ?")) { 

									$stmt->bind_param('s', $appno); 

									$stmt->execute();

									$stmt->store_result();

									$stmt->bind_result($paymenttype); 

									$stmt->fetch();

									}

			

			

			$tc1 = $paymenttype;

			$pdf->SetFont('times','B',12);

			$pdf->Cell('','3','');

			$pdf->SetXY(25,90);

			$pdf->Cell('','','Payment Type :','','','');

			$pdf->SetXY(75,90);

			$pdf->Cell('','',$tc1,'','','');

			

			

			$upload_path = dirname(dirname(__FILE__)).'/authentication/profile_images/';

			$image = $upload_path.$profileimage;

			//$image = $upload_path."seshhu143@gmail.com.png";





			$pdf->Image($image,'160','55','35','45');		

			

			$pdf->Image('images/table.jpg','28','110','165');

			

			$pdf->SetFont('times','B',12);			

			

			$pdf->SetXY(75,120);

			$pdf->Cell('20','','Venue','','','C');

			

			$pdf->SetXY(157,118);

			$pdf->Cell('20','','Time & Date','','','C');

			

			$pdf->SetXY(157,122);

			$pdf->Cell('20','','of the Test','','','C');

			

			

			if ($stmt = $mysqli->prepare("SELECT testCenter FROM walkinApplications WHERE walkinAppNo = ?")) { 

									$stmt->bind_param('s', $appno); 

									$stmt->execute();

									$stmt->store_result();

									$stmt->bind_result($testcenter); 

									$stmt->fetch();

									}

			

			if($testcenter=='1')

			

			{

			$pdf->SetFont('times','B',10);



			$pdf->SetXY(32,132);

			$pdf->Cell('20','','Eduquity Career Technologies PVT LTD,');

			$pdf->SetXY(32,137);

			$pdf->Cell('20','','403, 4th Floor, Myhome Sarovar Plaza,');	

			$pdf->SetXY(32,142);

			$pdf->Cell('20','','Behind British Library, adjacent to medicity,');	

			$pdf->SetXY(32,147);

			$pdf->Cell('20','','Secretariat road, Hyderabad-63');

			$pdf->SetXY(32,152);

			$pdf->Cell('20','','Ph:040-23243010');

			}

			

			

			if($testcenter=='2')

			

			{

			$pdf->SetFont('times','B',10);



			$pdf->SetXY(32,132);

			$pdf->Cell('20','','MSIT Learning Center,');

			$pdf->SetXY(32,137);

			$pdf->Cell('20','','University College of Engineering(Autonomous),');	

			$pdf->SetXY(32,142);

			$pdf->Cell('20','','Principal Building Block, JNTUK,');	

			$pdf->SetXY(32,147);

			$pdf->Cell('20','','Kakinada - 533003,');

			$pdf->SetXY(32,152);

			$pdf->Cell('20','','Mobile: 7799834586');

			}

			

			if ($stmt = $mysqli->prepare("SELECT slotNo FROM walkinApplications WHERE walkinAppNo = ?")) { 

									$stmt->bind_param('s', $appno); 

									$stmt->execute();

									$stmt->store_result();

									$stmt->bind_result($slotno); 

									$stmt->fetch();

									}

			

			/*if($slotno==1){ $timingslot="9:00 A.M.";}

			if($slotno==2){ $timingslot="11:30 A.M.";}

			if($slotno==3){ $timingslot="2:00 P.M.";}*/
			
			if($slotno==1){ $timingslot="10:00 A.M.";}

			if($slotno==2){ $timingslot="2:00 P.M.";}

			$pdf->SetXY(158,140);

			$pdf->Cell('20','',$timingslot,'','','C');

			

			

			if ($stmt = $mysqli->prepare("SELECT slotdate FROM walkinApplications WHERE walkinAppNo = ?")) { 

									$stmt->bind_param('s', $appno); 

									$stmt->execute();

									$stmt->store_result();

									$stmt->bind_result($slotdate); 

									$stmt->fetch();

									}

			

			$date_of_exam = $slotdate;

			$pdf->SetXY(158,134);

			$pdf->Cell('20','',$date_of_exam,'','','C');

			

			$pdf->SetFont('times','B',14);

			$pdf->Cell('','3','');

			$pdf->SetXY(25,165);

			$pdf->Cell('','','Instructions for Candidates:','','','');

			

			$pdf->SetFont('times','B',10);

			$pdf->Cell('','3','');

			$pdf->SetXY(30,173);

			$pdf->Cell('','','1. If you did not pay through online, please carry your DD along with this hall ticket form','','','');			

			$pdf->Cell('','3','');

			$pdf->SetXY(30,178);

			$pdf->Cell('','','without fail.','','','');

			$pdf->Cell('','3','');

			$pdf->SetXY(30,183);

			$pdf->Cell('','','2. Any error/change in your name/address must be communicated immediately through','','','');

			$pdf->Cell('','3','');

			$pdf->SetXY(30,188);

			$pdf->Cell('','','email to : enquiries2015@msitprogram.net.','','','');

			$pdf->Cell('','3','');

			$pdf->SetXY(30,193);

			$pdf->Cell('','','3. The candidate is being conditionally allowed to appear in the entrance examination','','','');

			$pdf->Cell('','3','');

			$pdf->SetXY(30,198);

			$pdf->Cell('','','without verifying whether he/she satisfies the eligibility criterion. This will be examined','','','');

			$pdf->Cell('','3','');

			$pdf->SetXY(30,203);

			$pdf->Cell('','','at the time of final admission, if granted.','','','');

			

			$pdf->Cell('','3','');

			$pdf->SetXY(40,220);

			$pdf->Cell('','','Signature of the Candidate','','','');

			

			$pdf->Cell('','3','');

			$pdf->SetXY(150,220);

			$pdf->Cell('','','(Dean, CIHL)','','','');

			

			$pdf->Image('images/sign.jpg','138','205','40');


			

			$pdf->Output($pdffilename,'F');

			$pdf->Close();

			$_SESSION['wkappno']=$appno;



			

			//header("location:/latest/admissions2014/walkin/authentication/sendmail_hall.php?id=".$appno);

			$ch = curl_init('http://msitprogram.net/admissions/authentication/sendmail_hall.php');

			curl_setopt($ch, CURLOPT_POST, 1);

			curl_setopt($ch, CURLOPT_POSTFIELDS, "id=".$appno);

			curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);

			curl_setopt($ch, CURLOPT_TIMEOUT, 1);

			curl_exec($ch);

			curl_close($ch);

			

			header("Location:../walkinApplications.php?successMsg=You have successfully booked the slot. We have sent an email with Hallticeket.");

			echo "success" ;

			exit;

			

		}	

}

	

?>