
<?php include 'html-components/header.html'; ?>
<?php include 'html-components/nav.html'; ?>
<?php include 'home.html'; ?>
<?php include 'html-components/form.php'; ?>
<?php include 'html-components/footer.html'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>

<script type="text/javascript">
  $('.variable-width').slick({
  dots: true,
  infinite: true,
  speed: 200,
  slidesToShow: 5,
  centerMode: false,
  arrows: true,
  variableWidth: true,
  autoplay: true,
  autoplaySpeed: 2000
});
</script>

<script>
  $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  dots: true,
  arrows: true
});
</script>

<script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>



</body>
</html>


