<?php
require_once getcwd() . '/config.php';


//-- If var is not empty
if (!empty($_POST['emmenagement']) && !empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])  && !empty($_POST['phoneNumber']) && !empty($_POST['email'])  && !empty($_POST['city'])) 
    
    {

    $emmenagement   = htmlspecialchars($_POST['emmenagement']);
    $gender         = htmlspecialchars($_POST['gender']);
    $lastName       = htmlspecialchars($_POST['lastName']);
    $firstName      = htmlspecialchars($_POST['firstName']);
    $city           = htmlspecialchars($_POST['city']);
    $phoneNumber    = htmlspecialchars($_POST['phoneNumber']);
    $eMail          = htmlspecialchars($_POST['email']);
    $codePromo      = htmlspecialchars($_POST['codepromo']);
    

    $objetDemande = "Objet de la demande - test";
    $typeDemande = "Type de la demande - test";
    $idFormWeb = "om_depex_";


    $currentTimeStamp = time();
    $_SESSION['currentTimeStamp'] = $currentTimeStamp;
    $_SESSION["emmenagement"]=$offre;


    if (!filter_var($eMail, FILTER_VALIDATE_EMAIL))
        die("Adresse email au format incorrect");

    $from = MAIL_FROM;
    $toAdmin = array(MAIL_TO);

    
    $messageText = 'OBJET_DE_LA_DEMANDE : ' . $objetDemande . '
                    TYPE_DEMANDE : ' . $typeDemande . '
                    PARCOURS_CLIENT : ' . PARCOURS_CLIENT . '
                    THEME_DEMANDE : ' . THEME_DEMANDE . '
                    MARQUE : ENGIE
                    CODE_PROMOTION : ' . $codePromo .'
                    CIVILITE : ' . $gender . '
                    NOM : ' . $lastName . '
                    PRENOM : ' . $firstName . '
                    E-MAIL : ' . $eMail . '
                    TELEPHONE : ' . $phoneNumber . '
                    COMMUNE  : ' . $city . '
                    ID_FORM_WEB : ' . $idFormWeb. '' . $currentTimeStamp;
    
    require_once 'lib/swiftmailer/swift_required.php';

    // Create the Transport
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance()
            ->setSubject($mailSubject)
            ->setFrom($from)
            ->setReplyTo($eMail)
            ->setTo($toAdmin)
            ->setBody($messageText);
            

   // var_dump($_POST); die();

    // Send the message
    $mailer->send($message);
    header('Location:confirmation.php');
    
} else {
    die("Il manque une information dans le formulaire");
}

