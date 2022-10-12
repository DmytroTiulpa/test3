$(document).ready(function() {

    $('#registration').on('submit', function(e){
        e.preventDefault();
        $("#emailError").css("display", "none");
        $("#passwordError").css("display", "none");
        $("#userError").css("display", "none");

        let name = $("input[name*='name']").val();
        let surname = $("input[name*='surname']").val();
        let email = $("input[name*='email']").val();
        let password = $("input[name*='password']").val();
        let confirm = $("input[name*='confirm']").val();

        $.ajax({
            type: 'POST',
            url: "php/validate.php",
            data: {"name": name, "surname": surname, "email": email, "password": password, "confirm": confirm},
            dataType: 'json' })
            .done( function(data) {
                if (data.hasOwnProperty('emailError')) {
                    //console.log("Ошибка: " + data['emailError'])
                    $("#emailError p").empty().append(data['emailError']);
                    $("#emailError").css("display", "block");
                }
                if (data.hasOwnProperty('passwordError')) {
                    //console.log("Ошибка: " + data['passwordError'])
                    $("#passwordError p").empty().append(data['passwordError']);
                    $("#passwordError").css("display", "block");
                }
                if (data.hasOwnProperty('userError')) {
                    //console.log("Ошибка: " + data['userError'])
                    $("#userError p").empty().append(data['userError']);
                    $("#userError").css("display", "block");
                }
                //if (!data.hasOwnProperty('emailError') && !data.hasOwnProperty('passwordError') && !data.hasOwnProperty('userError')) {
                if ( data.length === 0 ) {
                    $("#registration").empty().html("<h3>Регистрация прошла успешно!</h3>");
                }
            })
            .fail( function( jqXhr, textStatus, errorThrown ){
                console.log( jqXhr );
                console.log( textStatus );
                console.log( errorThrown );
            });
    });

});