<?php
error_reporting(0);
require_once('includes/config.php');
/**
 * @package ALA Pizzeria Sopranos
 * @author Daniël van Straten
 * @author Luc van Koppen
 * @copyright 2019 MBOrijnland
 *
 */
$title = 'Sopranos Pizza';
$bestelling = array(
'name'            => $_POST['naam_bestelling'],
'adres'          => $_POST['adres_bestelling'],
'zipcode'          => $_POST['postcode_bestelling'],
'city'      => $_POST['woonplaats_bestelling'],
'email'           => $_POST['email_bestelling'],
'phone'  => $_POST['telefoonnummer_bestelling']
);
$orderdetails = array(
    'datum'           => $_POST['datum_bestelling'],
    'tijdstip'        => $_POST['tijdstip_bestelling']
);
$placeorder = placeOrder($bestelling, $orderdetails, $_SESSION['cartid']);
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
    <?php
    // Shows the information of the customer on the website
    echo "<div id='klant'>";
    echo "<font color='white'>Beste ".$bestelling['name'].",</font>";
    echo "<br><br>";
    echo "<font color='white'>U woont in ".$bestelling['city'].".</font>";
    echo "<br><br>";
    echo "<font color='white'>Uw adres is ".$bestelling['adres']."</font>";
    echo "<br><br>";
    echo "<font color='white'>Uw postcode is ".$bestelling['zipcode']."</font>";
    echo "<br><br>";
    echo "<font color='white'> U heeft uw pizza op ".$orderdetails['datum']." besteld om ".$orderdetails['tijdstip']."</font>";
    echo "<br><br>";
    echo "<font color='white'>Uw email is ".$bestelling['email']." en uw telefoonnummer is ".$bestelling['phone'].".</font>";
    echo "</div>";
    ?>
    </div>
<?php
    // Destroys the session
    // Include the footer
    session_destroy();
    include('includes/footer.php');
?>
