/*
function myFunction() {
    var x = document.getElementById("modell").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
*/

$('#marka').change(function (e) {


    var mid = $("#marka option:selected").val();

    $.ajax({
        
        type: "POST", //üzenet típusa
        url: "function.php",
        data: { id : mid},
        dataType: "json", 
        success: function (result) {
                                        //itt volt a probléma nem adtam át id alapján a kiválasztottat
              var len = result.length;

              if (len != 0)
                {
                $("#modell").removeAttr('disabled');
                $("#modell").empty();

                for( var i = 0; i<len; i++){
                  var id = result[i]['marka_ID'];
                   var nev = result[i]['Nev'];
                                                
                   //alert(id);
                    $("#modell").append("<option value='"+id+"'>"+nev+"</option>");
                }

              }
              else {
                $("#modell").attr('disabled', 'disabled');
                $("#modell").html("<option value='0'>Nincs találat</option>");

              }


        }

    }); //{} ez egy objektum

    return false;
})//