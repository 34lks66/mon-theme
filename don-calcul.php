<?php
if(isset($_POST['montant'])) {
    $montant = floatval($_POST['montant']);
    if($montant < 0) $montant = 0;
    
    $reduction = $montant * 0.66 ;
    $cout_reel = $montant - $reduction;

    echo json_encode([
        'montant' => number_format($montant, 2, ',', ' '),
        'cout_reel' => number_format($cout_reel, 2, ',', ' ')
    ]);
}
?>