$(function() {
    var controller = new ScrollMagic.Controller();

    //This triggers img 1
    function update_img_1(e) {

        if (e.type == "enter") {
            $("#img__1 img").show();
        } else {
            $("#img__1 img").hide();
        }
    }

    var scene__1 = new ScrollMagic.Scene({
            triggerElement: "#trigger__1",
            duration: 300,
            triggerHook: 0

            // This doesnt work just to remind you that texts trigger this

        })
        .setPin("#img__1")
        .setClassToggle("#img__1", "green")
        .on("enter leave", update_img_1)
        .addIndicators()
        .addTo(controller);



    //This triggers img 2
    function update_img_2(e) {

        if (e.type == "enter") {
            $("#img__2 img").show();
        } else {
            $("#img__2 img").hide();
        }
    }

    var scene__2 = new ScrollMagic.Scene({
            triggerElement: "#trigger__2",
            duration: 300,
            // offset: 1000,
            // This doesnt work just to remind you that texts trigger this

        })
        .setPin("#img__2")
        .setClassToggle("#img__2", "green")
        .on("leave", update_img_2)
        .addIndicators()
        .addTo(controller);



});