<?php
error_reporting(0);
/**
 * @package ALA Pizzeria Sopranos
 * @author Daniël van Straten
 * @author Luc van Koppen
 * @copyright 2019 MBOrijnland
 *
 */
 $title = 'Sopranos Pizza';
    // Start a session
     session_start();
     if (!$_SESSION['cartid']) {
         $_SESSION['cartid'] = rand(1000, 9999);
     }
?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">

<?php
    // Include the head
    include('includes/head.php');
?>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 bg-red border-bottom shadow-sm">

<?php
    // Include the header
    include('includes/header.php');
    ?>
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-1">Aanbiedingen!</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <!-- Aanbieding 1 -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Aanbieding!</h4>
                </div>
                <div class="card-body">
                    <!-- Card 1 -->
                    <h1 class="card-title pricing-card-title">Na uw eerste pizza 50 procent korting!</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li></li>
                        <li>Als u 1 pizza besteld krijgt u 50 procent korting op de rest van uw pizza's</li>
                        <li>Niet te combineren met andere kortingen</li>
                        <li><br></li>
                    </ul>
                    <!-- Button 1 -->
                    <button onclick="window.location.href = 'assortiment.php';" type="button" class="btn btn-lg btn-block btn-danger">Bestel uw pizza nu!
                </div>
            </div>

            <!-- Aanbieding 2 -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <!-- Card 2 -->
                    <h4 class="my-0 font-weight-normal">Aanbieding!</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Nieuwe pizza! Sopranos Deluxe!</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Onze nieuwe pizza pizza Sopranos Deluxe!</li>
                        <li>Onze specialiteit op een pizza!</li>
                        <li>U kunt hem nu bestellen!</li>
                        <br>
                    </ul>
                    <!-- Button 2 -->
                    <button onclick="window.location.href = 'assortiment.php';" type="button" class="btn btn-lg btn-block btn-danger">Bestel uw pizza nu!</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Include the footer
        include('includes/footer.php');
    ?>
