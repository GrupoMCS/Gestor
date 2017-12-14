 <!-- Grafica de Dona -->
<div><br></div>

<div class="col-xs-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Grafica de Dona</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
        <canvas id="pieChart" height="150"></canvas>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<!--Estilo jQuery Perilla Tron -->
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header whith-border">
        <h3 class="box-title">Estilo jQuery Perilla Tron</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <input type="text" class="knob" value="80" data-skin="tron"  data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true" />
            <div class="knob-label">data-width="90"</div>
          </div><!-- ./col -->
          <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f56954" />
            <div class="knob-label">data-width="120"</div>
          </div><!-- ./col -->
          <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a" />
            <div class="knob-label">data-thickness="0.1"</div>
          </div><!-- ./col -->
          <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120" data-fgColor="#00c0ef" />
            <div class="knob-label">data-angleArc="250"</div>
          </div><!-- ./col -->
        </div><!-- /.row -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->




      <script type="text/javascript">
      //$(function () {
        /* jQueryKnob */

        $(".knob").knob({
          /*change : function (value) {
           //console.log("change : " + value);
           },
           release : function (value) {
           console.log("release : " + value);
           },
           cancel : function () {
           console.log("cancel : " + this.value);
           },*/
          draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              var a = this.angle(this.cv)  // Angle
                      , sa = this.startAngle          // Previous start angle
                      , sat = this.startAngle         // Start angle
                      , ea                            // Previous end angle
                      , eat = sat + a                 // End angle
                      , r = true;

              this.g.lineWidth = this.lineWidth;

              this.o.cursor
                      && (sat = eat - 0.3)
                      && (eat = eat + 0.3);

              if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value);
                this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                this.g.beginPath();
                this.g.strokeStyle = this.previousColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });
        /* END JQUERY KNOB */

         //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [
              {
                value: 700,
                color: "#f56954",
                highlight: "#f56954",
                label: "Chrome"
              },
              {
                value: 500,
                color: "#00a65a",
                highlight: "#00a65a",
                label: "IE"
              },
              {
                value: 400,
                color: "#f39c12",
                highlight: "#f39c12",
                label: "FireFox"
              },
              {
                value: 600,
                color: "#00c0ef",
                highlight: "#00c0ef",
                label: "Safari"
              },
              {
                value: 300,
                color: "#3c8dbc",
                highlight: "#3c8dbc",
                label: "Opera"
              },
              {
                value: 100,
                color: "#d2d6de",
                highlight: "#d2d6de",
                label: "Navigator"
              }
            ];
            var pieOptions = {
              //Boolean - Whether we should show a stroke on each segment
              segmentShowStroke: true,
              //String - The colour of each segment stroke
              segmentStrokeColor: "#fff",
              //Number - The width of each segment stroke
              segmentStrokeWidth: 2,
              //Number - The percentage of the chart that we cut out of the middle
              percentageInnerCutout: 50, // This is 0 for Pie charts
              //Number - Amount of animation steps
              animationSteps: 100,
              //String - Animation easing effect
              animationEasing: "easeOutBounce",
              //Boolean - Whether we animate the rotation of the Doughnut
              animateRotate: true,
              //Boolean - Whether we animate scaling the Doughnut from the centre
              animateScale: false,
              //Boolean - whether to make the chart responsive to window resizing
              responsive: true,
              // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
              maintainAspectRatio: false,
              //String - A legend template
              legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
            };
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart.Doughnut(PieData, pieOptions);
         </script>