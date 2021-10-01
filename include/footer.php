</div>
<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script src="js/nv.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION["status"] != '') {
    // echo "<h4>" . $_SESSION["status"] . "</h4>";
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION["status"]; ?>",
            icon: "<?php echo  $_SESSION["status_code"]; ?>",
            button: "OKE",


        });
    </script>
<?php
    unset($_SESSION['status']);
}

?>

<script>

</script>
</body>

</html>