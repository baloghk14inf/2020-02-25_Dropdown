function myFunction() {
    var x = document.getElementById("modell").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}

$('#modell').myFunction(function (e) {

    var url = "index.php";
    $.ajax({

        type: "POST", //üzenet típusa
        url: "function.php",
        data: $(this).serialize(), // itt alakul ár jsonná, küldött adat
        success: function post() {

            var aktualis = $('#aktualis').val();

            $.post('function.php', { postszam: aktualis },
                function (data) {
                    $('#result').html(data);
                });
        }

    }); //{} ez egy objektum

    return false;
})//