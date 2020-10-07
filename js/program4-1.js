function addNumbers() {
    // INPUT
    let number1 = parseFloat(document.getElementById("number1").value);
    let number2 = parseFloat(document.getElementById("number2").value);

    // PROCESSING
    let sum = number1 + number2;
    
    // OUTPUT
    document.getElementById("output").textContent = "Sum: " + sum + ".";
}