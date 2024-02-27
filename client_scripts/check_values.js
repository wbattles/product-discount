var $ = function (id) {
    return document.getElementById(id);
}

function checkValues() {

    var x = $("product_description").value;
    var y = parseFloat($("list_price").value); 
    var z = parseFloat($("discount_percent").value);

    if (x !== "Guitars" && x !== "Pianos" && x !== "Other") {
        alert("error");
        return false;
    }

    if (isNaN(y) || y < 0) {
        alert("error");
        return false;
    }

    if (isNaN(z) || z >= 100 || z <= 0) {
        alert("error");
        return false;
    }

    return true;
}

function goBack() {
    window.history.back();
}