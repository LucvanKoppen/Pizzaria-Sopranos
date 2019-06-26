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
     // Start the session
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

    <div class="text-center" id="contact">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-1">Contact</h1>
        </div>
        <!-- Information contact -->
        <h5>U kunt contact opnemen met Don Corleone via: <br> Email: Doncorleone@gmail.com <br> Telefoonnummer: 0642841294 <br></h5>
        <h5><br> Openingstijden: <br> Maandag: 17:00 tot en met 22:00 <br> Dinsdag: 17:00 tot en met 22:00 <br> Woensdag: 17:00 tot en met 22:00 <br> Donderdag: 17:00 tot en met 22:00 <br> Vrijdag: 17:00 tot en met 22:00 <br> Zaterdag: 17:00 tot en met 22:00 <br> Zondag: 17:00 tot en met 22:00 </h5> <br> <h5>Wij hebben 3 pizzeria Op de volgende locaties:<br> &#8226; Amsterdam <br> &#8226; Rotterdam <br> &#8226; Utrecht <br> Er staat meer informatie over de locaties onderaan de pagina.</h5>
    </div>


<?php
    // Include the footer
    include('includes/footer.php');
?>
