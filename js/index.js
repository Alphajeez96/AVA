// Initialize AOS HERE
AOS.init();


// SWAL FUNCTION HERE
$(function() {
    $("form").submit(function(e) {
        let email2 = $("#email2").val();
        let email = $("#email").val();
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "./process.php",
            data: $(this).serialize(),
            success: function(data) {
                Swal.fire({
                    icon: "success",
                    title: "",
                    text: data,
                    type: "Success",
                });
            },
            error: function(data) {
                Swal.fire({
                    icon: "error",
                    title: "",
                    text: 'check your network connection',
                    type: "error",
                });
            },
        });

        // }else{

        // }
    });
});
// MAGNIFIC POPUP HERE

$(document).ready(function() {

    $('.rows').magnificPopup({
        delegate: 'img',
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });



});

// SUPPOSSEDLY REDUNCTANT

// SCREEN WRAPPER SCRIPTS HERE

// $(document).ready(function() {
//     setTimeout(function() {
//         $('.wrapper').addClass('loaded');

//     }, 3000);
// });

// jQuery(function() {

//     $(window).load(function() {

//         $('.wrapper').removeClass('preload');

//     });

// });