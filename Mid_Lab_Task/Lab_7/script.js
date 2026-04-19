let unitPrice = 1000;
let quantity = document.getElementById("quantity");
let total = document.getElementById("total");
let calculate = document.getElementById("calculate");

calculate.onclick = function () 
{
    let timesQuantity = parseInt(quantity.value);

    if (quantity.value === "") {
        alert("Please enter quantity");
        total.value = "";
        return;
    }

    if (timesQuantity <= 0) {
        alert("Quantity must be greater than 0");
        total.value = "";
        return;
    }

    let totalPrice = unitPrice * timesQuantity;
    total.value = totalPrice;

    if (totalPrice > 1000) {
        alert("You are now eligible for gift coupon");
    }
};