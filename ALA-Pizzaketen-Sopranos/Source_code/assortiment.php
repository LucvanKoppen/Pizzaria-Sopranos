<!DOCTYPE html>
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
if (isset($_POST['submit'])) {
    print_r(storeItem($_POST));
}
?>

<html lang="nl" dir="ltr">
<?php
    // Include head
    include('includes/head.php');
?>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-red border-bottom shadow-sm">

<?php
    // Include header
    include('includes/header.php');
?>
    </div>

    <div class="container">
        <!-- For each products add a product with a card -->
        <!-- The information comes from the database -->
        <?php
        $products = getProducts();
        $prices = getSizeDetails();
        foreach ( $products as $product ) {
        ?>

        <div class="card shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Bestel nu!</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?= $product['name'] ?></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><?= $product['description'] ?></li>
                    <li><br></li>
                    <li><?= $product['ingredients'] ?></li>
                    <li><br></li>
                </ul>
                <form method="POST" action="assortiment.php">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <?php
                    foreach ( $prices as $price ) {
                        if ($price['id'] == 2)
                        {
                            $selected = "checked";
                        }
                        else {
                            $selected = "";
                        }
                        echo "<input type='radio' name='size' value='".$price['id']."' ".$selected."> ".$price['size']." (".$price['price'].")<br>";
                    }
                    ?>
                    <!-- Button to order a pizza -->
                    <button name="submit" onclick="window.location.href = 'assortiment.php';" type="submit" class="btn btn-lg btn-block btn-danger">Bestel uw pizza nu!</button>
                </form>
            </div>
        </div>
        <br />

        <?php
        }
        ?>
    </div>
<?php
    // Include the footer
    include('includes/footer.php');
?>
