<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['smtp_debug'] = TRUE;
$config['protocol'] = 'smtp'; // Email protocol (e.g., 'smtp', 'mail', etc.)
$config['smtp_host'] = 'smtp.gmail.com'; // SMTP server address for Gmail
$config['smtp_port'] = '587'; // SMTP port for TLS/SSL (typically 587)
$config['smtp_user'] = 'vc981942@gmail.com'; // Your Gmail email address
$config['smtp_pass'] = 'fhji nigk iqmd dwfv'; // Your Gmail password
$config['smtp_crypto'] = 'tls'; // Encryption method (e.g., 'ssl' or 'tls')

$config['charset'] = 'utf-8'; // Character set (e.g., 'utf-8')
$config['mailtype'] = 'html'; // Email format (e.g., 'html' or 'text')
$config['newline'] = "\r\n"; // Newline character sequence

// Set the "from" email address and name
$config['from_email'] = 'KlizardTechnologies@gmail.com';    // just for lable not displayed anywhere in the received email
$config['from_name'] = 'Klizard';   // same for this just for labeling not used inside sended email

// Additional email configuration settings
$config['wordwrap'] = TRUE; // Enable word wrapping in emails
$config['validate'] = TRUE; // Validate email addresses

// Add more configuration settings as needed
