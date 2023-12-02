function showTotal() {    
    // Variable to store total
    var total = 0;
    
    // If checked, add value if true else 0
    total += document.getElementById("prod1").checked ? 3499.00 : 0;
    total += document.getElementById("prod2").checked ? 1899.00 : 0;
    total += document.getElementById("prod3").checked ? 1599.00 : 0;
    
    // Display total
    document.getElementById("total").innerHTML = 'RM' + total.toFixed(2);
}