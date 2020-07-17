// SWAL FUNCTION HERE
AOS.init();
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
                    text: data,
                    type: "error",
                });
            },
        });

        // }else{

        // }
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