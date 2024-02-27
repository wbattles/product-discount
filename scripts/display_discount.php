<?php

require "calculateUtils.php";
require "error_display.php";


    // get the data from the form
if ($product_description = $_POST['product_description']){
    $product_description = cleanIO($_POST['product_description']);
};
if ($list_price = $_POST['list_price']){
    $list_price = cleanIO($_POST['list_price']);
}
if ($discount_percent = $_POST['discount_percent']);{
    $discount_percent = cleanIO($_POST['discount_percent']);
}

if (!filter_var($list_price, FILTER_VALIDATE_FLOAT)){
    var_dump($list_price);
    echo "<br>";
    exit("Need number for list_price");
}

if (!filter_var($discount_percent, FILTER_VALIDATE_FLOAT)){
    var_dump($discount_percent);
    echo "<br>";
    exit("Need number for discount_percent");
}

if ($product_description !== "Guitars" && $product_description !== "Pianos" && $product_description !== "Other") {
    echoError("Wrong product description", "check_values.js", "main.css");
};

    // calculate the discount
$discount = calcDiscount($list_price, $discount_percent);
$discount_price = $list_price - $discount;

    // apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$" . number_format($list_price, 2);
$discount_percent_formatted = number_format
($discount_percent, 1) . "%";
$discount_formatted = "$" . number_format($discount, 2);
$discount_price_formatted = "$" . number_format($discount_price, 2);

// escape the unformatted input
$product_description_escaped =
    htmlspecialchars($product_description);
// format for security

require "echoHTML.php";

echoHead("check_values.js", "main.css");
echoHeader("Product Discount Calculator");
// echoDiscountDisplay($product_description_escaped, $list_price_formatted, 
//     $discount_percent_formatted, $discount_formatted, $discount_price_formatted);

echo "<label>Product Description:</label>
    <span> $product_description </span><br>

    <label>List Price:</label>
    <span> $list_price </span><br>

    <label>Standard Discount:</label>
    <span> $discount_percent</span><br>
            
    <label>Discount Amount:</label>
    <span> $discount_formatted </span><br>
            
    <label>Discount Price:</label>
    <span> $discount_price </span><br><br>";

echoFooter();
