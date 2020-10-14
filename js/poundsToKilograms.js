function convertWeight() {
    // INPUT
    let weightPounds = parseFloat(document.getElementById("weightPounds").value);

    // PROCESSING
    let weightKilos = weightPounds * 0.453592;
    //Round to 1 decimal place
    weightKilos = weightKilos.toFixed(1);
    
    // OUTPUT
    document.getElementById("output").textContent = weightKilos + " kilograms";
}