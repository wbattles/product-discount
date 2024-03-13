<?php
require_once("../app_config.php");
require_once(APP_ROOT.APP_FOLDER_NAME."/scripts/echoHTML.php");
require_once(APP_ROOT . APP_FOLDER_NAME . "/scripts/error-display.php");
require_once(APP_ROOT . APP_FOLDER_NAME . "/scripts/utilities.php");
require_once(APP_ROOT . APP_FOLDER_NAME . "/scripts/echoHTML.php");

$jsFile = APP_ROOT . APP_FOLDER_NAME . "/client_scripts/check_values.js";
// $cssFile = APP_ROOT . APP_FOLDER_NAME . "/styles/main.css";
$cssFile = "main.css";

echoHead("check_values.js", "main.css");
echoHeader("Product Discount Calculator");
// echoHome();
echo "<form action='display-discount.php' onsubmit='return true: /*checkValues();*/' method='post'>
        <div id='data'>
                <label>Product Description:</label>
                <input type='string' id='product_description' name='product_description' required><br>

                <label>List Price:</label>
                <input type='number' id='list_price' name='list_price' required><br>
                    
                <label>Discount Percent:</label>
                <input type='number' id='discount_percent' name='discount_percent' required>
                <span>%</span><br>
            </div>
            <div id='buttons'>
                <label>&nbsp;</label>
                <input type='submit' value='Calculate Discount'><br>
            </div>
        </form>";
echoFooter();