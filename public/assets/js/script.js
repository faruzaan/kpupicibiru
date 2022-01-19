new WOW().init();
AOS.init();

window.onload = () => {
    let myPaslon = $("[data-info-paslon=1]").html();
    $("#info").html(myPaslon);
};

$("body").on("click", ".paslon-wrap", function (e) {
    const paslon = $(this).data("paslon");
    // alert(paslon);
    let myPaslon = $("[data-info-paslon=" + paslon + "]").html();
    // let paslonInfo = $(".info-wrap");

    // for (i = 0; i < paslonInfo.length; i++) {
    //     $(".info-wrap")[i].data("info-paslon");
    // }
    $("#info").html(myPaslon);
    console.log(myPaslon);
});
