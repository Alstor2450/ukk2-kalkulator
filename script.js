document.getElementById("ambil-datanya").addEventListener("click", function (event) {
    event.preventDefault();
    var datanya = document.getElementById("hasil-proses").value;
    document.getElementById("input1aja").value = datanya;
});