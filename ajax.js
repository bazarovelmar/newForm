$("#sendBtn").on("click", function () {
    var name = $("#inputName").val().trim();
    var surname = $("#inputSurname").val().trim();
    var email = $("#inputEmail").val().trim();
    var password = $("#inputPassword").val().trim();
    var passwordRepeat = $("#inputPasswordRepeat").val().trim();
    var pattern = /^([a-z0-9_\.-])+[@][a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    if(!(pattern.test(email))) {     //Выполняем проверку валидности почты
        $("#errorMessage").text("Invalid email");

    } else if (passwordRepeat !== password) { //Выполняем проверку правильности соответствия полей "password" и "passwordRepeat"

        $("#errorMessage").text("Passwords don't match");
    } else {
        $.ajax({
            url: 'main.php',
            type: 'POST',
            cache: false,
            dataType: 'json',
            data: {'email': email, 'password': password, 'passwordRepeat': passwordRepeat, 'name': name, 'surname': surname},
            success(data) {
                if (data.status) {
                    $("#sendForm").remove();
                    $('#successMessage').css('display', 'block');
                    $('#back').css('display', 'block');
                } else {
                    $("#errorMessage").text("Invalid email or password");
                }
            }
        })
    }
});

$("#back").on("click", function () {
    location.reload();
});