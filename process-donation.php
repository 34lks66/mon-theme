<?php
require_once 'vendor/autoload.php'; 
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php'); // Pour accéder aux constantes WP

// Clé Stripe depuis wp-config.php
\Stripe\Stripe::setApiKey(defined('STRIPE_SECRET_KEY') ? STRIPE_SECRET_KEY : '');

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

// Sécurité basique
if (!isset($data['amount']) || !isset($data['email']) || !isset($data['paymentMethod'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Données manquantes']);
    exit;
}

$amount = (float) $data['amount'] * 100; // Centimes
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$method = $data['paymentMethod'];

try {
    if ($method === 'stripe') {
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'eur',
            'receipt_email' => $email,
            'description' => 'Don pour le Bus Dentaire Gersois',
            'payment_method_types' => ['card'],
            'metadata' => [
                'don_email' => $email,
                'source' => 'website'
            ]
        ]);

        enregister_don_wp($amount/100, $email, 'stripe', [
            'payment_intent_id' => $paymentIntent->id,
            'status' => 'pending'
        ]);

        echo json_encode(['clientSecret' => $paymentIntent->client_secret]);
    } elseif ($method === 'paypal') {
        $paypalUrl = 'https://www.paypal.com/donate?hosted_button_id=TON_ID_PAYPAL'; // Remplace avec ton lien
        echo json_encode(['redirectUrl' => $paypalUrl]);
    } else {
        throw new Exception("Méthode de paiement non reconnue");
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}