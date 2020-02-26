/*
function myFunction() {
    var x = document.getElementById("modell").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
*/

$('#marka').change(function () {

    

    var url = "index.php";
    $.ajax({

        type: "POST", //üzenet típusa
        url: "function.php",
        data: $(this).serialize(), // itt alakul ár jsonná, küldött adat
        success: function post() {

            var aktualis = $("#aktualis").val(); //az adoztt kiválasztott elem id-jét adom át
            

            $.post('function.php', { postszam: aktualis },
                function (data) {
                   // $('#result').html(data);// itt kapom majd vissza az értéket
                   alert(data);
                });
        }

    }); //{} ez egy objektum

    return false;
})//