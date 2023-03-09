<?php

require_once 'functions.php';
require_once 'classes/Email.php';
require_once 'classes/EmailDb.php';
require_once 'classes/Exceptions/NewsletterException.php';

$newMail = $_POST['email'];
if (empty($newMail)){ 
    redirect('index.php?error=' . NewslettorError::EMAIL_REQUIRED); 
}

try {
    $email = new Email($_POST['email']);
    $db = new EmailDb();
    $db->add($email);
} catch (NewsletterException $e) {
    redirect('index.php?error=' . $e->getCode());
}

echo "Adresse email enregistrée";