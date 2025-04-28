<?php 
require_once 'vendor/autoload.php';
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

$payload = @file_get_contents('php://input');
$event = null;

try {
    $event = \Stripe\Event::constructFrom(
        json_decode($payload, true)
    );
} catch(\UnexpectedValueException $e) {
    http_response_code(400);
    exit();
}

// Gérer l'événement de paiement réussi
if ($event->type == 'payment_intent.succeeded') {
    $paymentIntent = $event->data->object;
    
    // Trouver le don dans WordPress
    $posts = get_posts([
        'post_type' => 'donation',
        'meta_key' => '_don_payment_intent_id',
        'meta_value' => $paymentIntent->id
    ]);
    
    if(!empty($posts)) {
        $post_id = $posts[0]->ID;
        update_post_meta($post_id, '_don_status', 'completed');
        update_post_meta($post_id, '_don_transaction_id', $paymentIntent->charges->data[0]->id);
    }
}

http_response_code(200);
?>