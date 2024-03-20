
$(document).ready(function() {
    $('#registerForm').submit(function(e) {
        e.preventDefault();

        var formData = {
            name: $("#name").val(),
            dob: $("#dob").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            pwd: $("#pwd").val()
        };

        console.log(formData);


        $.ajax({
            type: 'POST',
            url: './php/register.php',
            data: formData,
            success: function(response) {
                console.log(response);
                if(response=="Error: Email already exists"){
                    window.alert("Email already exists")
                }else{
                window.alert("Registration Successfull")
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
        $('#registerForm')[0].reset();
    });
});


