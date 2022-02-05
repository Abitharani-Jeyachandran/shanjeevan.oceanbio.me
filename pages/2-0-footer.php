<?php include('2-1-footer-bar.php'); ?>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/js/google-form.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
<script src="http://www.webglearth.com/v2/api.js"></script>
<script>
  function initialize() {
    var earth = new WE.map('contact');
    WE.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(earth);

    var marker = WE.marker([43.355, 42.439167]).addTo(earth);
    marker.bindPopup("<b>Mt.Elbrus</b>", {maxWidth: 150, closeButton: false}).openPopup();
  }
</script>

</body>

</html>
