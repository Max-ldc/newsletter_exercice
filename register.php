<?php

require_once 'functions.php';
require_once 'classes/Email.php';
require_once 'classes/EmailDb.php';
require_once 'classes/NewsletterError.php';

$newMail = $_POST['email'];
if (empty($newMail)){ 
    redirect('index.php?error=' . NewslettorError::EMAIL_REQUIRED); 
}

try {
    $email = new Email($_POST['email']);
} catch (InvalidArgumentException $ex) {
redirect('index.php?error=' . NewslettorError::EMAIL_INVALID);
}

// Je charge ma base de données
$db = new EmailDb();
try {
    $db->add($email);
} catch (InvalidArgumentException $ex) {
    redirect('index.php?error=' . NewslettorError::EMAIL_ALREADY_IN);
} catch (DomainException $ex) {
    redirect('index.php?error=' . NewslettorError::EMAIL_IS_SPAM);
}

echo "Adresse email enregistrée";