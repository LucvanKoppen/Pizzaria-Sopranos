<?php
/**
 * @package ALA Pizzeria Sopranos
 * @author Daniël van Straten
 * @author Luc van Koppen
 * @copyright 2019 MBOrijnland
 *
 */
// To get information about the products
function getProducts()
{
    global $db;

    return $db->get('products');
}

function getProduct($productid)
{
    global $db;

    $db->where("id = $productid");
    return $db->get('products');
}
// To get the prices of every size
function getSizeDetails()
{
    global $db;

    return $db->get('prices');

}
// If there is a a price in the database then get the information
function getSizeDetail($priceid)
{
    global $db;

    $db->where("id = $priceid");
    return $db->get('prices');

}

function storeItem($data)
{
    global $db;
    //
    $orderitem = array(
        'order_id' => $_SESSION['cartid'],
        'product_id' => $data['product_id'],
        'price_id' => $data['size']
    );
    $db->insert('order_items', $orderitem);
}

function getNewCart()
{
    global $db;
    $result = $db->insert('orders', array('ordertime' => date('Y-m-d H:i:s')));

    return $result;
}

function getOrderItems()
{
    global $db;
    $orderid = $_SESSION['cartid'];

    $db->where("order_id = $orderid");
    $result = $db->get('order_items');

    return $result;
}

function placeOrder($bestelling, $orderdetails, $cartid)
{
    global $db;
    $ordertime = $orderdetails['datum']." ".$orderdetails['tijdstip'].":00";
    $customer = $db->insert('customers', $bestelling);

    $db->where("id = $cartid");
    $order = $db->update('orders', array('customer_id' => $customer, 'ordertime' => $ordertime));
}

function calculateDiscount($price)
{
    //
    $discount = '50';
    $newprice = $price/100;
    $newprice = ($price/100)*$discount;
    return round($newprice, 2);
}
 ?>
