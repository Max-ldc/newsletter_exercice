<?php

class Email
{
    private string $email;

    /**
     * Creates a new Email instance
     *
     * @param string $email The value to be stored in instance
     * @throws EmailInvalidFormatException if email format is not valid
     */
    public function __construct(string $email)
    {
        $this->email = $email;

        if (!$this->isValid()) {
            throw new EmailInvalidFormatException("Le format de l'adresse email est invalide");
        }
    }

    public function isValid(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDomain(): string
    {
        $emailParts = explode('@', $this->email);
        return $emailParts[1];
    }
}