<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer();
// if (true) {
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
    
    // $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'nyambanealfred1539@gmail.com';
    $mail->Password = 'bvgrasbhveewprvt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port = 587;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    
    $mail->setFrom('nyambanealfred1539@gmail.com', 'Health Caring Services');
    $mail->addAddress('nyambanealfred1539@gmail.com', 'Health Caring Services');

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
        . "<br>"
        . "<p><strong>Kin Name:</strong> $kinname</p>"
        . "<p><strong>Kin Contact:</strong> $kinContact</p>"
        . "<p><strong>Kin Relationship:</strong> $kinRelationship</p>"
        . "<p><strong>Disability (Yes/No):</strong> $disability</p>"
        . "<p><strong>Night Shift (Yes/No):</strong> $nightShift</p>"
        . "<p><strong>Diabetic (Yes/No):</strong> $diabetic</p>"
        . "<p><strong>Mobility (Yes/No):</strong> $mobility</p>"
        . "<p><strong>Specialist Care (Yes/No):</strong> $specialistCare</p>"
        . "<p><strong>Fitness Problem (Yes/No):</strong> $fitnessProblem</p>"
        . "<p><strong>Stomach Ulcers (Yes/No):</strong> $stomachUlcers</p>"
        . "<p><strong>Bowel Problem (Yes/No):</strong> $bowelProblem</p>"
        . "<p><strong>Chronic Chest (Yes/No):</strong> $chronicChest</p>"
        . "<p><strong>Sleep Disturbance (Yes/No):</strong> $sleepDisturbance</p>"
        . "<p><strong>Night Fitness (Yes/No):</strong> $nightFitness</p>"
        . "<p><strong>Strict Timetable (Yes/No):</strong> $strictTimetable</p>"
        . "<br>"
        . "<p><strong>Criminal Record (Yes/No):</strong> $crecord</p>"
        . "<p><strong>Criminal Record Date:</strong> $criminalRecDate</p>"
        . "<p><strong>Declaration Name:</strong> $decName</p>"
        . "<p><strong>Declaration Signature:</strong> $decSignature</p>"
        . "<p><strong>Declaration Date:</strong> $decDate</p>"
        . "<br>"
        . "<p><strong>Bank Name:</strong> $bank</p>"
        . "<p><strong>Sort Code:</strong> $sortCode</p>"
        . "<p><strong>Account Number:</strong> $accountNumber</p>"
        . "<br>"
        . "<p><strong>Prescribed Medications:</strong> $prescribedMedications</p>"
        . "<p><strong>Attention Detail:</strong> $attentionDetail</p>"
        . "<p><strong>Consented:</strong> $consent</p>"
        . "<p><strong>Restrictions:</strong> $restrictions</p>"
        . "<p><strong>Permission:</strong> $permission</p>"
        . "<br>"
        . "<p><strong>Registration Number:</strong> $regNumber</p>"
        . "<p><strong>Date of Expiry:</strong> $doexpiry</p>"
        . "<p><strong>Date of Revalidation:</strong> $dorevalidation</p>"
        . "<p><strong>Insurance:</strong> $insurance</p>"
        . "<p><strong>Policy:</strong> $policy</p>"
        . "<p><strong>Policy Expiry:</strong> $policyExpiry</p>"
        . "<p><strong>Year of Study:</strong> $yearStudy</p>"
        . "<br>"
        . "<p><strong>Previous Employer:</strong> $previousEmployer</p>"
        . "<p><strong>Employer Address:</strong> $addressEmployer</p>"
        . "<p><strong>Job Title:</strong> $jobtitle</p>"
        . "<p><strong>Duties:</strong> $duties</p>"
        . "<p><strong>Reasons for Leaving:</strong> $reasonsLeaving</p>"
        . "<p><strong>Referee Company:</strong> $refCompany</p>"
        . "<p><strong>Referee Details:</strong> $refDetails</p>"
        . "<p><strong>Referee Address:</strong> $refAddress</p>"
        . "<p><strong>Referee Phone:</strong> $refPhone</p>"
        . "<p><strong>Referee Email:</strong> $refEmail</p>"
        . "<p><strong>Date of Employment Reference:</strong> $refDateEmployment</p>"
        . "<p><strong>Disability Reference (Yes/No):</strong> $disabilityReference</p>"
        . "<p><strong>Disability Reference Name:</strong> $disabilityReferenceName</p>";
  
    $mail->Subject = 'Employment Application Form';
    $mail->Body = $message;
    $mail->isHTML(true);

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
} else {
    echo "Form submission failed. Please try again.";
}
?>
