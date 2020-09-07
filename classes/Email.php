<?php

    class Email
    {
        private $mailer;

        public function __construct($host,$username,$senha,$name)
        {
           require ("phpmailer/class.phpmailer.php"); // path to the PHPMailer class
            require ("phpmailer/class.smtp.php");

            $this->mailer = new PHPMailer; 
            //$mail->SMTPDebug = 2;
            //$mail->Debugoutput = 'html';
            //try {
                //Server settings
                $this->mailer->isSMTP();  
                                                  
                $this->mailer->Host = $host;              //'alphacastt.com.br';                    
                $this->mailer->SMTPAuth = true;           // Enable SMTP authentication
                $this->mailer->Username =  $username;     //'contato@alphacastt.com.br';                     
                $this->mailer->Password   = $senha;       //'1277-Arthur';                               
                $this->mailer->SMTPSecure = 'ssl';        
                $this->mailer->Port  = 465;       // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                $this->mailer->setFrom($username,$name);
                $this->mailer->isHTML(true);    
                $this->mailer->CharSet = 'UTF-8';                              
            
        }

        public function addAdress($email, $nome){
            $this->mailer->addAddress($email, $nome);
        }

        public function formatarEmail($info){
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail(){
            if($this->mailer->send()){
                return true;
            }else{
                return false;
            }
        }
    }

?>