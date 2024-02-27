<?php

// common
function echoHead($jsFile, $cssFile){
    echo "<html>
        <head>
            <title>Product Discount Calculator</title>
            <link rel='stylesheet' type='text/css' href='" . $cssFile . "'>
            <script src= '" . $jsFile . "'></script>
        </head>";
};

function echoHeader($title) {
    require_once("../app_config.php");
    echo "<main>
        <body>
        <header>
        <h2> $title </h2>
            <img src='".WEB_ROOT.APP_FOLDER_NAME."/images/business.jpeg' height='240px' width='420'>
        </header><br>";
};

function echoFooter() {
    $date = date("Y");
    echo "<footer>
            &copy; Wiley Battles, $date, Please contact <a href='wrb5288@utulsa.edu'> Admin</a> for more information.
            <button id='backButton' onclick='window.history.back()'>Go back</button>
        </footer>
        </main>
        </body>
        </html>";
};


// index page
function echoHome() {
    echo "<form action='display_discount.php' onsubmit='return checkValues()' method='post'>

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
};



// display discount
function echoDiscountDisplay($product_description, $list_price, $discount_percent, $discount_formatted, $discount_price){
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
};

