 <!-- container section start -->

    <!-- javascripts -->
    <?php echo e(Html::script('assets/admin/js/jquery.js')); ?>


    <?php echo e(Html::script('assets/admin/js/jquery-ui-1.10.4.min.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery-1.8.3.min.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery-ui-1.9.2.custom.min.js')); ?>

    <!-- bootstrap -->
    <?php echo e(Html::script('assets/admin/js/bootstrap.min.js')); ?>

    <!-- nice scroll -->
    <?php echo e(Html::script('assets/admin/js/jquery.scrollTo.min.js')); ?>


    <?php echo e(Html::script('assets/admin/js/jquery.nicescroll.js')); ?>

    <!-- charts scripts -->
    <?php echo e(Html::script('assets/admin/assets/jquery-knob/js/jquery.knob.js')); ?> 
    <?php echo e(Html::script('assets/admin/js/jquery.sparkline.js')); ?>

    <?php echo e(Html::script('assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')); ?>


    <?php echo e(Html::script('assets/admin/js/owl.carousel.js')); ?>

    <!-- jQuery full calendar -->
    <!-- Full Google Calendar - Calendar -->
    <?php echo e(Html::script('assets/admin/js/fullcalendar.min.js')); ?>

    <?php echo e(Html::script('assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.js')); ?>

    <!--script for this page only-->
    <?php echo e(Html::script('assets/admin/js/calendar-custom.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery.rateit.min.js')); ?>

    <!-- custom select -->
 
    <?php echo e(Html::script('assets/admin/js/jquery.customSelect.min.js')); ?>

    <?php echo e(Html::script('assets/admin/assets/chart-master/Chart.js')); ?>


    <!--custome script for all page-->
    <?php echo e(Html::script('assets/admin/js/scripts.js')); ?>

    <!-- custom script for this page-->
    <?php echo e(Html::script('assets/admin/js/sparkline-chart.js')); ?>

    <?php echo e(Html::script('assets/admin/js/easy-pie-chart.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery-jvectormap-1.2.2.min.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery-jvectormap-world-mill-en.js')); ?>

    <?php echo e(Html::script('assets/admin/js/xcharts.min.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery.autosize.min.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery.placeholder.min.js')); ?>


    <?php echo e(Html::script('assets/admin/js/gdp-data.js')); ?>

    <?php echo e(Html::script('assets/admin/js/morris.min.js')); ?>


    <?php echo e(Html::script('assets/admin/js/sparklines.js')); ?>

    <?php echo e(Html::script('assets/admin/js/charts.js')); ?>

    <?php echo e(Html::script('assets/admin/js/jquery.slimscroll.min.js')); ?>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
