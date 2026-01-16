<?php
header('Content-Type: application/json');

// Load Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load .env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// function to sanitize input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

try {
    // Check for POST request
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Método no permitido. Use POST.", 405);
    }

    // Get raw input if JSON (for fetch) or $_POST
    $input = json_decode(file_get_contents('php://input'), true);
    if (!$input) {
        $input = $_POST;
    }

    // Capture and sanitize fields
    $firstName = sanitize_input($input['first_name'] ?? '');
    $lastNameP = sanitize_input($input['last_name_p'] ?? '');
    $lastNameM = sanitize_input($input['last_name_m'] ?? '');
    $email = sanitize_input($input['email'] ?? '');
    $phoneWhatsApp = sanitize_input($input['phone_whatsapp'] ?? '');
    $phoneFixed = sanitize_input($input['phone_fixed'] ?? '');
    $cp = sanitize_input($input['cp'] ?? '');

    // Validation: Only WhatsApp is required among phones
    if (empty($firstName) || empty($lastNameM) || empty($email) || empty($phoneWhatsApp)) {
        throw new Exception("Por favor completa los campos obligatorios (Nombre, Apellido Materno, Email, WhatsApp).");
    }

    // Resend API Key
    $apiKey = $_ENV['RESEND_API_KEY'] ?? null;
    if (!$apiKey) {
        throw new Exception("Error de configuración del servidor (API Key faltante).");
    }

    $resend = Resend::client($apiKey);

    // Construct Email Body
    $htmlContent = "<h1>Nueva Solicitud de Registro - Linaje Alba</h1>";
    $htmlContent .= "<p><strong>Nombre:</strong> $name</p>";
    $htmlContent .= "<p><strong>Email:</strong> $email</p>";
    $htmlContent .= "<p><strong>Celular:</strong> $phone</p>";
    // Add more fields to the email body as they are in the form logic

    // Send Email
    // IMPORTANT: 'from' must be a verified domain. Using 'onboarding@resend.dev' for testing if domain not verified yet.
    // Replace 'onboarding@resend.dev' with 'tu-email@tudominio.com' once verified.
    $result = $resend->emails->send([
        'from' => 'Linaje Alba Form <onboarding@resend.dev>', 
        'to' => ['mena_vh@hotmail.com'], // Replace with actual recipient or use environment variable
        'subject' => 'Nuevo Registro de Consultor(a): ' . $name,
        'html' => $htmlContent
    ]);

    echo json_encode([
        'success' => true,
        'message' => '¡Solicitud enviada con éxito! Te contactaremos pronto.',
        'data' => $result->toArray()
    ]);

} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
