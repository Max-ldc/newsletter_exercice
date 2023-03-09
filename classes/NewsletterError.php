<?php

class NewslettorError
{
    public const EMAIL_REQUIRED = 1;
    public const EMAIL_ALREADY_IN = 2;
    public const EMAIL_INVALID = 3;
    public const EMAIL_IS_SPAM = 4;

    public static function getErrorMessage(int $code): string
    {
        switch ($code) {
            case self::EMAIL_REQUIRED:
            return "Merci de renseigner un email";
            break;
    
            case self::EMAIL_ALREADY_IN:
            return "Cet email est déjà inscrit à la newsletter";
            break;
    
            case self::EMAIL_INVALID:
            return "Le format de l'email est invalide";
            break;
    
            case self::EMAIL_IS_SPAM:
            return "Cet email semble être un spam";
            break;
            
            default:
            return "Contactez l'administrateur de l'application";
        }
    }
}