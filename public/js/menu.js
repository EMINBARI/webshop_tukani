$(document).ready(function () {
    largeMenu();

    if (document.location.pathname == "/") {
        $("#first_item").addClass("active");
        $("#home").addClass("active");
    }
    else if (document.location.pathname == "/products") {
        $("#second_item").addClass("active");
        $("#product").addClass("active");
    }
    else if (document.location.pathname == "/about") {
        $("#third_item").addClass("active");
        $("#about").addClass("active");
    }
    

});

function get_cookie(cookie_name) {
    
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

    if (results){
        return (unescape(results[2]));
    }
        
    else{
        return null;
    }
       
}


function largeMenu() {
    let pagename = "Главная";

    $("#home").click(function () {
        $("#home").removeClass("btn-light").addClass("btn-primary active");
        pagename = $("#home").text();
        document.cookie = "pagename=" + pagename + ";";
    });

    $("#home").blur(function () {
        $("#home").removeClass("btn-primary").addClass("btn-light");
    });


    $("#product").click(function () {
        $("#product").removeClass("btn-light").addClass("btn-success active");
        pagename = $("#product").text();
        document.cookie = "pagename=" + pagename + ";";
    });

    $("#product").blur(function () {
        $("#product").removeClass("btn-success").addClass("btn-light ");
    });


    $("#about").click(function () {
        $("#about").removeClass("btn-light").addClass("btn-info active");
        pagename = $("#about").text();
        document.cookie = "pagename=" + pagename + ";";
    });

    $("#about").blur(function () {
        $("#about").removeClass("btn-info").addClass("btn-light ");
    });


//have made for site without backend in html
   /*
    var page = get_cookie("pagename");

    if (page == "Главная") {
        $("#home").addClass("active");
    }
    else if (page == "Товары") {
        $("#product").addClass("active");
    }
    else if (page == "О нас") {
        $("#about").addClass("active");
    }
    */
}

//have made for site without backend in html
function smallMenu() {
    let pagename = "Главная";

    $("#sm_home").click(function () {
        pagename = $("#sm_home").text();
        document.cookie = "pagename=" + pagename + ";";
    });


    $("#sm_products").click(function () {
        pagename = $("#sm_products").text();
        document.cookie = "pagename=" + pagename + ";";
    });


    $("#sm_about").click(function () {
        pagename = $("#sm_about").text();
        document.cookie = "pagename=" + pagename + ";";
    });

    var page = get_cookie("pagename");

    if (page == "Главная") {
        $("#first_item").addClass("active");
    }
    else if (page == "Товары") {
        $("#second_item").addClass("active");
    }
    else if (page == "О нас") {
        $("#third_item").addClass("active");
    }
}

