<?php
use PHPMailer\PHPMailer\PHPMailer;

if (true) {

    // Get the form fields
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $referenceName = isset($_POST['referenceName']) ? $_POST['referenceName'] : '';
    $availability = isset($_POST['availability']) ? $_POST['availability'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $Surname = isset($_POST['Surname']) ? $_POST['Surname'] : '';
    $FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $otherName = isset($_POST['otherNameName']) ? $_POST['otherNameName'] : '';
    $homePhone = isset($_POST['homePhone']) ? $_POST['homePhone'] : '';
    $workphone = isset($_POST['workPhone']) ? $_POST['workPhone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $insuranceNumber = isset($_POST['insuranceNumber']) ? $_POST['insuranceNumber'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $kinname = isset($_POST['kinname']) ? $_POST['kinname'] : '';
    $kinContact = isset($_POST['kinContact']) ? $_POST['kinContact'] : '';
    $kinRelationship = isset($_POST['kinRelationship']) ? $_POST['kinRelationship'] : '';
    $restrictions = isset($_POST['restrictions']) ? $_POST['restrictions'] : '';
    $permission = isset($_POST['permission']) ? $_POST['permission'] : '';
    $regNumber = isset($_POST['regNumber']) ? $_POST['regNumber'] : '';
    $doexpiry = isset($_POST['doexpiry']) ? $_POST['doexpiry'] : '';
    $dorevalidation = isset($_POST['dorevalidation']) ? $_POST['dorevalidation'] : '';
    $insurance = isset($_POST['insurance']) ? $_POST['insurance'] : '';
    $policy = isset($_POST['policy']) ? $_POST['policy'] : '';
    $policyExpiry = isset($_POST['policyExpiry']) ? $_POST['policyExpiry'] : '';
    $yearStudy = isset($_POST['yearStudy']) ? $_POST['yearStudy'] : '';
    $previousEmployer = isset($_POST['previousEmployer']) ? $_POST['previousEmployer'] : '';
    $addressEmployer = isset($_POST['addressEmployer']) ? $_POST['addressEmployer'] : '';
    $jobtitle = isset($_POST['jobtitle']) ? $_POST['jobtitle'] : '';
    $duties = isset($_POST['duties']) ? $_POST['duties'] : '';
    $reasonsLeaving = isset($_POST['reasonsLeaving']) ? $_POST['reasonsLeaving'] : '';
    $refCompany = isset($_POST['refCompany']) ? $_POST['refCompany'] : '';
    $refDetails = isset($_POST['refDetails']) ? $_POST['refDetails'] : '';
    $refAddress = isset($_POST['refAddress']) ? $_POST['refAddress'] : '';
    $refPhone = isset($_POST['refPhone']) ? $_POST['refPhone'] : '';
    $refEmail = isset($_POST['refEmail']) ? $_POST['refEmail'] : '';
    $refDateEmployment = isset($_POST['refDateEmployment']) ? $_POST['refDateEmployment'] : '';
    $disabilityYes = isset($_POST['disabilityYes']) ? $_POST['disabilityYes'] : '';
    $disabilityNo = isset($_POST['disabilityNo']) ? $_POST['disabilityNo'] : '';
    $disabilityReference = isset($_POST['disabilityReference']) ? $_POST['disabilityReference'] : '';
    $disabilityReferenceName = isset($_POST['disabilityReferenceName']) ? $_POST['disabilityReferenceName'] : '';
    $prescribedMedications = isset($_POST['prescribedMedications']) ? $_POST['prescribedMedications'] : '';
    $attentionDetail = isset($_POST['attentionDetail']) ? $_POST['attentionDetail'] : '';
    $crecord = isset($_POST['crecord']) ? $_POST['crecord'] : '';
    $signature = isset($_POST['signature']) ? $_POST['signature'] : '';
    $criminalRecDate = isset($_POST['criminalRecDate']) ? $_POST['criminalRecDate'] : '';
    $decName = isset($_POST['decName']) ? $_POST['decName'] : '';
    $decSignature = isset($_POST['decSignature']) ? $_POST['decSignature'] : '';
    $decDate = isset($_POST['decDate']) ? $_POST['decDate'] : '';
    $bank = isset($_POST['bank']) ? $_POST['bank'] : '';
    $sortCode = isset($_POST['sortCode']) ? $_POST['sortCode'] : '';
    $accountNumber = isset($_POST['accountNumber']) ? $_POST['accountNumber'] : '';


    $otherName = isset($_POST['otherName']) ? $_POST['otherName'] : '';
    $otherNameName = isset($_POST['otherNameName']) ? $_POST['otherNameName'] : '';
    $ukDriversLicense = isset($_POST['UKDriversLicence']) ? $_POST['UKDriversLicence'] : '';
    $disability = isset($_POST['disability']) ? $_POST['disability'] : '';
    $nightShift = isset($_POST['nightShift']) ? $_POST['nightShift'] : '';
    $diabetic = isset($_POST['diabetic']) ? $_POST['diabetic'] : '';
    $mobility = isset($_POST['mobility']) ? $_POST['mobility'] : '';
    $specialistCare = isset($_POST['specialistCare']) ? $_POST['specialistCare'] : '';      
    $fitnessProblem = isset($_POST['fitnessProblem']) ? $_POST['fitnessProblem'] : '';
    $stomachUlcers = isset($_POST['stomachUlcers']) ? $_POST['stomachUlcers'] : '';
    $bowelProblem = isset($_POST['bowelProblems']) ? $_POST['bowelProblems'] : '';
    $chronicChest = isset($_POST['chronicChest']) ? $_POST['chronicChest'] : '';
    $sleepDisturbance = isset($_POST['sleepDisturbance']) ? $_POST['sleepDisturbance'] : '';
    $nightFitness = isset($_POST['nightFitness']) ? $_POST['nightFitness'] : '';
    $strictTimetable = isset($_POST['strictTimetable']) ? $_POST['strictTimetable'] : '';
    $consent = isset($_POST['consent']) ? $_POST['consent'] : '';

    
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(); // defaults to using php "mail()"
	$mail->isSMTP();
	$mail->Host = gethostname();
    $mail->SMTPAuth = true;
    $mail->Username = 'info@caringhealthservices.us';
    $mail->Password = '@Caringhealthservices1';
	$mail->SetFrom($email);
	$mail->AddAddress('info@caringhealthservices.us');


    // Email information
   
$message = "<p><strong>Name:</strong> $Surname $FirstName</p>"
    . "<p><strong>Position Applied For:</strong> $position</p>"
    . "<p><strong>Date Completed:</strong> $date</p>"
    . "<br>"
    . "<p><strong>Reference Name:</strong> $referenceName</p>"
    . "<p><strong>Availability:</strong> $availability</p>"    
    . "<p><strong>Phone:</strong> $phone</p>"
    . "<p><strong>Other Name (Yes/No):</strong> $otherName</p>"
    . "<p><strong>Other Name:</strong> $otherNameName</p>"
    . "<p><strong>Home Phone:</strong> $homePhone</p>"
    . "<p><strong>Work Phone:</strong> $workphone</p>"
    . "<p><strong>Email:</strong> $email</p>"
    . "<p><strong>Insurance Number:</strong> $insuranceNumber</p>"
    . "<p><strong>Date of Birth:</strong> $dob</p>"    
    . "<p><strong>UK Driver's Licence :</strong> $ukDriversLicense</p>"
    ."<br>"
    . "<p><strong>Kin Name:</strong> $kinname</p>"
    . "<p><strong>Kin Contact:</strong> $kinContact</p>"
    . "<p><strong>Kin Relationship:</strong> $kinRelationship</p>"
    . "<p><strong>Restrictions:</strong> $restrictions</p>"
    . "<p><strong>Permission:</strong> $permission</p>"
    . "<p><strong>Registration Number:</strong> $regNumber</p>"
    . "<p><strong>Date of Expiry:</strong> $doexpiry</p>"
    . "<p><strong>Date of Revalidation:</strong> $dorevalidation</p>"
    . "<p><strong>Insurance:</strong> $insurance</p>"
    . "<p><strong>Policy:</strong> $policy</p>"
    . "<p><strong>Policy Expiry:</strong> $policyExpiry</p>"
    . "<p><strong>Year of Study:</strong> $yearStudy</p>"
    . "<p><strong>Previous Employer:</strong> $previousEmployer</p>"
    . "<p><strong>Address (Employer):</strong> $addressEmployer</p>"
    . "<p><strong>Job Title:</strong> $jobtitle</p>"
    . "<p><strong>Duties:</strong> $duties</p>"
    . "<p><strong>Reasons for Leaving:</strong> $reasonsLeaving</p>"
    . "<p><strong>Reference Company:</strong> $refCompany</p>"
    . "<p><strong>Reference Details:</strong> $refDetails</p>"
    . "<p><strong>Reference Address:</strong> $refAddress</p>"
    . "<p><strong>Reference Phone:</strong> $refPhone</p>"
    . "<p><strong>Reference Email:</strong> $refEmail</p>"
    . "<p><strong>Reference Date of Employment:</strong> $refDateEmployment</p>"
    . "<p><strong>Disability (Yes/No):</strong> $disability</p>"
    . "<p><strong>Disability Reference:</strong> $disabilityReference</p>"
    . "<p><strong>Disability Reference Name:</strong> $disabilityReferenceName</p>"

    ."<br>"
    . "<p><strong>Problem in past that has prevented you from working at night:</strong> $nightShift</p>"
    . "<p><strong>Diabetic:</strong> $diabetic</p>"
    . "<p><strong>Heart problems affecting fitness:</strong> $fitnessProblem</p>"
    . "<p><strong>Duodenal or stomach ulcers in the past:</strong> $stomachUlcers</p>"
    . "<p><strong>Continuing bowel problem, for instance following major surgery:</strong> $bowelProblems</p>"
    . "<p><strong>Chronic chest problem such as asthma, emphysema or bronchiectasis:</strong> $chronicChest</p>"
    . "<p><strong>Disability affecting mobility that will cause difficulties in arranging night work:</strong> $mobility</p>"
    . "<p><strong>Recurrent or continuing sleep disturbance requiring medical advice:</strong> $sleepDisturbance</p>"
    . "<p><strong>Taking any medication to a strict timetable:</strong> $strictTimetable</p>"
    . "<p><strong>Other health problem that affects your fitness for night work:</strong> $nightFitness</p>"
    . "<p><strong>Having specialist care requiring your attendance at hospital clinics for treatment:</strong> $specialistCare</p>"

    . "<p><strong>Prescribed Medications:</strong> $prescribedMedications</p>"
    . "<p><strong>Attention to Detail:</strong> $attentionDetail</p>"
    . "<p><strong>Criminal Record:</strong> $crecord</p>"
    . "<p><strong>Signature:</strong> $signature</p>"
    . "<p><strong>Date of Criminal Record Check:</strong> $criminalRecDate</p>"
    . "<p><strong>Declaration Name:</strong> $decName</p>"
    . "<p><strong>Declaration Signature:</strong> $decSignature</p>"
    . "<p><strong>Declaration Date:</strong> $decDate</p>"
    . "<p><strong>Bank:</strong> $bank</p>"
    . "<p><strong>Sort Code:</strong> $sortCode</p>"
    . "<p><strong>Account Number:</strong> $accountNumber</p>";
    
    
    $mail->Subject ="New Vacancy Application"; 
	$mail->AltBody = $message; 
	$mail->MsgHTML('This is a new Application from <p></p>' .$message );
    
    if(!$mail->Send()) {
		 //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mail->ErrorInfo.'</pre>'
	    ));
	} else {
	   echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Application has been successfully'
		));
	}
}
?>