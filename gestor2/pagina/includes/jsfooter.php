 <!-- jQuery 2.1.4 -->
    <script src="../gestor2/plugins/jQuery/jquery.min.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!--<script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
    </script>-->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../gestor2/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Select2 4.0.1-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <!--<script src="plugins/select2/select2.full.min.js" type="text/javascript"></script>-->

    <!-- InputMask -->
    <script src="../gestor2/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../gestor2/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../gestor2/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

    <!-- Sparkline -->
    <script src="../gestor2/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="../gestor2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="../gestor2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="../gestor2/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="../gestor2/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="../gestor2/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="../gestor2/plugins/datepicker/locales/bootstrap-datepicker.es.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="../gestor2/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="../gestor2/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../gestor2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../gestor2/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../gestor2/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../gestor2/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="dist/js/pages/dashboard.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../gestor2/dist/js/demo.js" type="text/javascript"></script>
     <!-- ChartJS 1.0.1 -->
    <script src="../gestor2/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--<script src="plugins/morris/morris.min.js" type="text/javascript"></script>-->

    <script src="../gestor2/plugins/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js"></script>
    <script src="../gestor2/plugins/modal/modal.js"></script>

 <script type="text/javascript">
    $(document).ready(function(){

       //$('[type="button"]').tooltip();
       $('[data-toggle="tooltip"]').tooltip();

    });
    function redireccionar($var){
        location.href=$var;
        //setTimeout(location.href="principal.php", 5000);
    }

    $(function () {
       //Initialize Select2 Elements
       $(".select2").select2();
       //Inicializa datepicker
       $('#datetimepicker1').datepicker({
          isRTL: false,
          format: 'dd-MM-yyyy',
          autoclose:true,
          language: 'es'
       });
       $('#datetimepicker2').datepicker({
          isRTL: false,
          format: 'dd-MM-yyyy',
          autoclose:true,
          language: 'es'
       });
       $('#datetimepicker3').datepicker({
          isRTL: false,
          format: 'dd-MM-yyyy',
          autoclose:true,
          language: 'es'
       });

    });
 </script>
