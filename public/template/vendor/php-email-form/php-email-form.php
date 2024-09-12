<?php

class PHP_Email_Form
{
    public $ajax = false;

    public $to = 'contact@example.com'; // Ganti dengan alamat email penerima yang sebenarnya

    public $from_name;

    public $from_email;

    public $subject = "New table booking request from the website";

    public $smtp = array(
        'host' => 'example.com',
        'username' => 'example',
        'password' => 'pass',
        'port' => '587'
    );

    public $message = '';

    public function add_message($message, $label = '')
    {
        if ($label === '') {
            $this->message .= $message . "<br>";
        } else {
            $this->message .= $label . ": " . $message . "<br>";
        }
    }

    public function send()
    {
        $this->add_message($this->from_name, 'Name');
        $this->add_message($this->from_email, 'Email');

        $this->message = wordwrap($this->message, 70);

        $headers = 'From: ' . $this->from_name . ' <' . $this->from_email . '>' . "\r\n";
        $headers .= 'Reply-To: ' . $this->from_email . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        if (mail($this->to, $this->subject, $this->message, $headers)) {
            return 'Message sent successfully!';
        } else {
            return 'Failed to send message. Please try again later.';
        }
    }
}
