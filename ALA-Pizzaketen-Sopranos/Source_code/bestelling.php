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
        <h1 class="display-1">Vul uw bestelling in</h1>
    </div>

    <!-- Form bestelling -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal Bestelling">Bestelling</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">Vragenlijst</h1>
            <form method="POST" action="store.php" class="list-unstyled mt-3 mb-4">
                <table>
                    <tr>
                        <td>
                            Naam: *
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" name="naam_bestelling" placeholder="Naam" required >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adres: *
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" name="adres_bestelling" placeholder="Adres" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Postcode: *
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" name="postcode_bestelling" placeholder="Postcode" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Woonplaats: *
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" name="woonplaats_bestelling" placeholder="Woonplaats" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Datum: *
                        </td>
                        <td colspan="2">
                            <input type="date" class="form-control" name="datum_bestelling" required min= max="2020-12-31">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tijdstip: *
                        </td>
                        <td colspan="2">
                            <input type="time" class="form-control" name="tijdstip_bestelling" placeholder="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail: *
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" name="email_bestelling" placeholder="Adress" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Telefoon nummer: *
                        </td>
                        <td colspan="2">
                            <input type="number" class="form-control" name="telefoonnummer_bestelling" placeholder="0612345678" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a>* Verplicht veld</a>
                        </td>
                    </tr>
                    <?php
                    // To show what the customer ordered
                        $discountprices = array();
                        $orderitems = getOrderItems();
                        $items = 0;
                        echo "<tr>";
                        echo "<td>Maat</td>";
                        echo "<td>Soort</td>";
                        echo "<td>Prijs</td>";
                        echo "</tr>";
                        foreach ( $orderitems as $item ) {
                            $product = getProduct($item['product_id']);
                            $price = getSizeDetail($item['price_id']);
                            if ($items == 0) {
                                $discountprice = "";
                            }
                            else {
                                $discountprice = calculateDiscount($price[0]['price']);
                                $discountprice = "($discountprice)";
                            }
                            $discountprices[] = "";
                            echo "<tr>";
                            echo "<td>".$price[0]['size']."</td>";
                            echo "<td>".$product[0]['name']."</td>";
                            echo "<td>".$price[0]['price']." $discountprice</td>";
                            echo "</tr>";
                            $items++;
                        }
                    ?>
                </table>
                <br><br>
                <!-- Button to order a pizza -->
                <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Bestel uw pizza nu!</button>
            </form>
        </div>
    </div>

<?php
    // Include the footer
    include('includes/footer.php');
?>
