function showPass() {
    var x = document.getElementById("login_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

//////////////
//POPUP
//////////////

$(document).ready(function() {
    $(".btn-cerrarPop").click(function() {
        $("#overlay").removeClass('active');
        $("#popup").removeClass('active');
    });
    $(".btn-abrirPop").click(function() {
        $("#popup").removeClass('hide');
        $("#overlay").addClass('active');
        $("#popup").addClass('active');
        $("#popup2").addClass('hide');
    });


    // $(".btn-abrirPop2").click(function() {
    //     $("#popup2").removeClass('hide');
    //     $("#overlay").addClass('active');
    //     $("#popup2").addClass('active');
    //     $("#popup").addClass('hide');



    // });

});


// ////////Obtener valores del id
// function getvalues(id) {
//     var name = $(`.nombre[data*='${id}` + "||'").attr('data-name');
//     var surname = $(`.apellido[data*='${id}` + "||'").attr('data-sur');
//     var email = $(`.email[data*='${id}` + "||'").attr('data-mail');
//     var age = $(`.edad[data*='${id}` + "||'").attr('data-age');

//     console.log(name + "  " + age + "  " + id);
//     $("#popup2 #nombre").val(name);
//     $("#popup2 #apellido").val(surname);
//     $("#popup2 #edad").val(age);
//     $("#popup2 #id").val(id);
// }