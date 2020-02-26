/*
function myFunction() {
    var x = document.getElementById("modell").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
*/

$('#marka').change(function () {

    
    //window.alert("Valami");

    var url = "index.php";
    $.ajax({

        type: "POST", //üzenet típusa
        url: "function.php",
        data: $(this).serialize(), // itt alakul ár jsonná, küldött adat
        success: function post() {
                                                                //itt volt a probléma nem adtam ét id alapján a kiválasztottat
            var aktualis = $("#marka option:selected").val(); //az adoztt kiválasztott elem id-jét adom át
            

            $.post('function.php', { postszam: aktualis }, //ide  minenképpen belép
                function (data) {
                    $('#result').html(data);// itt kapom majd vissza az értéket
                   console.log(data);
                });
        }

    }); //{} ez egy objektum

    return false;
})//