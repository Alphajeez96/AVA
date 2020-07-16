
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script>
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
</script> -->


        <script src="https://code.jquery.com/jquery-1.11.1.min.js "></script>
        <!-- <script src="https://scrollmagic.io/scrollmagic/uncompressed/ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script> -->
        <!-- <script src="./js/intersect.js"></script> -->
        <script src="./js/main.js"></script>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('.wrapper').addClass('loaded');

                }, 3000);
            });



            jQuery(function() {

                $(window).load(function() {

                    $('.wrapper').removeClass('preload');

                });

            });
        </script>
        <script>
    AOS.init();
  </script>