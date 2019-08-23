$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    function totalPrice(product_count){
        var price = $(".price").text();
        var totalprice = price * product_count;
        $(".totalprice").empty().append(totalprice);
    }

/////////////////////////////////////////////////////////

    $("#minus").click(function () {
        var counter = $("#p").text();
        var res = isPosNum(counter);

        if (res && res > 1) {
            counter--;
            $("#p").empty().append(counter);
            totalPrice(counter);
        }
    });

    $("#plus").click(function () {
        var counter = $("#p").text();

        if (isPosNum(counter)) {
            counter++;
            $("#p").empty().append(counter);
            totalPrice(counter);
        }
    });
///////////////////////////////////////////////////////////////

    $('#btn_send').click(function () {
        var customerName = $('#customerName').val();
        var customerSurname = $('#customerSurname').val();
        var emailAddress = $('#emailAddress').val();
        var phoneNumber = $('#phoneNumber').val();
        var city = $('#city').val();
        var amount = $("#p").text();
        var product = $("#product-name").text();
        console.log(product);
        
        var name = nameValidation(customerName);
        var surname = surnameValidation(customerSurname);
        var mail = emailValidation(emailAddress);
        var phone = phoneNumberValidation(phoneNumber);

        if (mail && name && surname && phone) {
            $.ajax({
                type: "POST",
                url: "/send_order",
                data: { customerName: customerName, customerSurname: customerSurname, emailAddress: emailAddress, city: city, phoneNumber: phoneNumber, product: product, amount: amount},

                success: function (response) {
                    console.log(response);
                    $('#result').html(response);
                }
            });

            //$("#order-form").addClass("invisible");
            $("#order-form").css('display', 'none');
            $("#product-info").css('display', 'none');
            $("#order-sending-result").css('height', '400px');

            $("#loader").empty();
            $("#loader").html('<div id="load" style="position:absolute; height: 400px;display: flex; justify-content: center; align-items: center;" class="element d-flex container-fluid justify-content-center"><div class="loading3"><div></div><div></div><div></div><div></div><div></div></div></div>');

            $("#result").onload = function () {
                $("#load").remove();
            }; 

            setTimeout(function () {
                $("#load").remove();
            }, 2000)

           
        }

    });

});

function emailValidation(email){
    var rgxp = /([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}/;
    if (!rgxp.test(email)){
        console.log("wrong email!");
        $("#emailAddress").removeClass("is-valid").addClass("is-invalid");
        $("#email-invalid-feedback").addClass("visible");
        return false;
    }
    else{
        console.log("good email!");
        $("#emailAddress").removeClass("is-invalid").addClass("is-valid");
        $("#email-invalid-feedback").removeClass("visible").addClass("invisible");
        return true;
    }
}

function nameValidation(initial) {
    var rgxp = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;
    if (!rgxp.test(initial)) {
        console.log("wrong name!");
        $("#customerName").removeClass("is-valid").addClass("is-invalid");
        $("#name-invalid-feedback").addClass("visible");
        return false;
    }
    else{
        console.log("good name!");
        $("#customerName").removeClass("is-invalid").addClass("is-valid");
        $("#name-invalid-feedback").removeClass("visible").addClass("invisible");
        return true;
    }
}

function surnameValidation(initial) {
    var rgxp = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;
    if (!rgxp.test(initial)) {
        console.log("wrong initial!");
        $("#customerSurname").removeClass("is-valid").addClass("is-invalid");
        $("#email-invalid-feedback").addClass("visible");
        return false;
    }
    else {
        console.log("good initial!");
        $("#customerSurname").removeClass("is-invalid").addClass("is-valid");
        $("#surname-invalid-feedback").removeClass("visible").addClass("invisible");
        return true;
    }
}

function phoneNumberValidation(phone) {
    var rgxp = /(\+7|3)[- _]*\(?[- _]*(\d{3}[- _]*\)?([- _]*\d){7}|\d\d[- _]*\d\d[- _]*\)?([- _]*\d){6})/g;
    
    if (!rgxp.test(phone)) {
        console.log("wrong phone!");
        $("#phoneNumber").removeClass("is-valid").addClass("is-invalid");
        $("#phone-invalid-feedback").addClass("visible");
        return false;
    }
    else{
        console.log("good phone!");
        $("#phoneNumber").removeClass("is-invalid").addClass("is-valid");
        $("#phone-invalid-feedback").removeClass("visible").addClass("invisible");
        return true;
    }
}

function isPosNum(number) {
    num = parseInt(number, 10);

    if (!isNaN(num) && (num ^ 0) === num) {
        return num;
    }
    else {
        return false;
    }
}
