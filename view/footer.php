<footer class="footer fixed-bottom container-fluid position-relative py-5">
    <hr class="text-light" ">


    <p class="text-light text-capitalize  text-lg-center text-md-center text-sm-center text-center">copyright &copy; <?php echo date("Y");?> </p>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<!--    <script src="view/js/bootstrap.bundle.js"></script>-->
    <script src="view/js/bootstrap.js"></script>
    <script src="view/dist/mds.bs.datetimepicker.js"></script>


</footer>



<script>
    const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
        targetTextSelector: '[data-name="dtp1-text"]',
        targetDateSelector: '[data-name="dtp1-date"]',
    });
</script>

</body>

</html>

