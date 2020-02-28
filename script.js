/*
function myFunction() {
    var x = document.getElementById("modell").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
*/

$('#marka').change(function (e) {

    alert("valami");
    
    //window.alert("Valami");

    var id = $("#marka option:selected").val();

    var data = { "id" : id };
    var url = "index.php";
    $.ajax({
        
        type: "POST", //üzenet típusa
        url: "function.php",
        data: $(data).serialize(),
        dataType: "json", 
        success: function (result) {
                                                                //itt volt a probléma nem adtam ét id alapján a kiválasztottat
            //var aktualis = $("#marka option:selected").val(); //az adoztt kiválasztott elem id-jét adom át
            console.log(result);
            //document.getElementById('charactername').innerHTML = result[0].username;

          /*  $.post('function.php', { postszam: aktualis }, //ide  minenképpen belép
                function (data) {
                    $('#result').html(data);// itt kapom majd vissza az értéket
                   console.log(data);
                });*/

        }

    }); //{} ez egy objektum

    return false;
})//