<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// 🛠 Define early so it can be used in anchor/redirect
$formType = $_POST['form_type'] ?? 'contact';

// Safer redirect fallback using a whitelist
$allowedPages = ['index.php', 'contact.php']; // Add other valid targets if needed
$requestedRedirect = $_POST['redirect_to'] ?? 'index.php';
$redirectBase = in_array($requestedRedirect, $allowedPages) ? $requestedRedirect : 'index.php';

$anchor = $formType === 'callback' ? '#footer-form-anchor' : '#contact-form-anchor';
$redirect = $redirectBase . $anchor;

// CSRF token check
if (
    !isset($_POST['csrf_token']) || 
    !isset($_SESSION['csrf_token']) || 
    !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
) {
    $_SESSION['form_errors'] = ['csrf' => 'Invalid CSRF token. Please try again.'];
    header("Location: $redirect");
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USERNAME'];
    $mail->Password   = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($_ENV['SMTP_USERNAME'], 'TopOne Painting');
    $mail->addAddress($_ENV['SMTP_USERNAME']);

    if ($formType === 'callback') {
        // Callback form
        $name = trim($_POST['name'] ?? '');
        $phone = trim($_POST['phone'] ?? '');

        $errorss = [];
        if (empty($name)) $errorss['name'] = "Name is required.";
        if (empty($phone)) $errorss['phone'] = "Phone number is required.";

        if (!empty($errorss)) {
            $_SESSION['errorss'] = $errorss;
            $_SESSION['oldd'] = ['name' => $name, 'phone' => $phone];
            header("Location: $redirect");
            exit;
        }

        $mail->Subject = 'Callback Request';
        $mail->isHTML(true);
        $mail->Body = "
            <h3>Callback Request</h3>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
        ";

        $mail->send();
        $_SESSION['successs'] = "Thank you! We’ll call you back shortly.";
        unset($_SESSION['csrf_token']);
        header("Location: $redirect");
        exit;

    } else {
        // ✉️ Contact form
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $message = trim($_POST['message'] ?? '');

        $errors = [];
        if (empty($name)) $errors['name'] = "Name is required.";
        if (empty($email)) $errors['email'] = "Email is required.";
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email.";
        if (empty($message)) $errors['message'] = "Message is required.";

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = ['name' => $name, 'email' => $email, 'message' => $message];
            header("Location: $redirect");
            exit;
        }

        $mail->addReplyTo($email, $name);
        $mail->Subject = 'New Contact Form Submission';
        $mail->isHTML(true);
        $mail->Body = "
            <h3>New Message from Website</h3>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();
        $_SESSION['success'] = "Thank you for trusting TopOne Painting! We’ve received your message.";
        unset($_SESSION['csrf_token']);
        header("Location: $redirect");
        exit;
    }

} catch (Exception $e) {
    $_SESSION['errors']['mail'] = "Mailer Error: {$mail->ErrorInfo}";
    $_SESSION['old'] = $_POST;
    header("Location: $redirect");
    exit;
}
