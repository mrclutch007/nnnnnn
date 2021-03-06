function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

$(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
});

$(document).ready(function () {
    $(".addToCartBtn").click(function () {
        var url = "http://localhost:8080/librarysystem/lib/sepet_db.php";
        var data = {
            p: "addToCart",
            kitap_id: $(this).attr("kitap_id")
        }

        $.post(url, data, function (response) {
            $(".cart-count").text(response);

        })
    })
    $(".removeFromCartBtn").click(function () {

        var url = "http://localhost:8080/librarysystem/lib/sepet_db.php";
        var data = {
            p: "removeFromCart",
            kitap_id: $(this).attr("kitap_id")
        }

        $.post(url, data, function (response) {
            window.location.reload();
        })
    })

})