<script src="<?php echo e(URL::to('resources/views/admin/template/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/main.js')); ?>"></script>

    <script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/jquery.min.js')); ?>"></script>
    
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/chart.js/dist/Chart.bundle.min.js')); ?>"></script>
    <!--<script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/init-scripts/chart-js/chartjs-init.js')); ?>"></script>-->
   
    <script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/widgets.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
	</script>
    
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/jszip/dist/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/vendors/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('resources/views/admin/template/assets/js/init-scripts/data-table/datatables-init.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>
	<script>
        CKEDITOR.replace( 'summary-ckeditor' );
		 CKEDITOR.replace( 'summary-ckeditor2' );
		CKEDITOR.replace( 'summary-ckeditor3' );
		
    </script>
    <script type="text/javascript">
	$(document).ready(function(){
		
		
		
    $('#item_type').on('change', function() {
      if ( this.value == 'scripts')
      
      {
        $("#scripts1").show();
		$("#scripts2").show();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#print1").hide();
		$("#print2").hide();
		$("#print3").hide();
		$("#print4").hide();
		$("#print5").hide();
		$("#mobile1").hide();
		$("#demourl").show();
      }
	  else if ( this.value == 'themes')
	  {
	     $("#themes1").show();
		 $("#themes2").show();
		 $("#themes3").show();
		 $("#scripts1").hide();
		 $("#scripts2").hide();
		 $("#print1").hide();
		 $("#print2").hide();
		 $("#print3").hide();
		 $("#print4").hide();
		 $("#print5").hide();
		 $("#mobile1").hide();
		 $("#demourl").show();
	  }
	  else if ( this.value == 'plugins')
	  {
	    $("#scripts1").show();
		$("#scripts2").show();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#print1").hide();
		$("#print2").hide();
		$("#print3").hide();
		$("#print4").hide();
		$("#print5").hide();
		$("#mobile1").hide();
		$("#demourl").show();
	  }
	  else if ( this.value == 'print')
	  {
	     $("#print1").show();
		 $("#print2").show();
		 $("#print3").show();
		 $("#print4").show();
		 $("#print5").show();
		 $("#scripts1").hide();
		$("#scripts2").hide();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#mobile1").hide();
		$("#demourl").hide();
	  }
	  
	  else if ( this.value == 'graphics')
	  { 
	  
	    $("#print1").show();
		 $("#print2").show();
		 $("#print3").show();
		 $("#print4").show();
		 $("#print5").show();
		 $("#scripts1").hide();
		$("#scripts2").hide();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#mobile1").hide();
		$("#demourl").hide();
	  
	  }
	  else if ( this.value == 'mobile-apps')
	  {
	     $("#mobile1").show();
		 $("#scripts1").hide();
		$("#scripts2").hide();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#print1").hide();
		$("#print2").hide();
		$("#print3").hide();
		$("#print4").hide();
		$("#print5").hide();
		$("#demourl").show();
	  
	  }
	  
      else
      {
        $("#scripts1").hide();
		$("#scripts2").hide();
		$("#themes1").hide();
		$("#themes2").hide();
		$("#themes3").hide();
		$("#print1").hide();
		$("#print2").hide();
		$("#print3").hide();
		$("#print4").hide();
		$("#print5").hide();
		$("#mobile1").hide();
		$("#demourl").hide();
      }
    });
});
</script>


<script src="<?php echo e(asset('public/assets/validate/jquery.bvalidator.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/assets/validate/themes/presenters/default.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/assets/validate/themes/red/red.js')); ?>"></script>
<link href="<?php echo e(asset('public/assets/validate/themes/red/red.css')); ?>" rel="stylesheet" />
<script type="text/javascript">
    $(document).ready(function () {
        
		var options = {
		
		offset:              {x:5, y:-2},
		position:            {x:'left', y:'center'},
        themes: {
            'red': {
                 showClose: true
            },
		
        }
    };

    $('#item_form').bValidator(options);
	$('#profile_form').bValidator(options);
	$('#comment_form').bValidator(options);
	$('#support_form').bValidator(options);
	$('#order_form').bValidator(options);
	$('#checkout_form').bValidator(options);
    });
</script>

<script type="text/javascript" src="<?php echo e(URL::to('resources/views/admin/template/datepicker/picker.js')); ?>"></script>
<script>
  $( function() {
    $( "#site_flash_end_date" ).datepicker({ minDate: 0, dateFormat: 'yy-mm-dd' });
	$( "#site_free_end_date" ).datepicker({ minDate: 0, dateFormat: 'yy-mm-dd' });
  } );
  
  
  $(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script><?php /**PATH D:\xampp\htdocs\feberr\resources\views/admin/javascript.blade.php ENDPATH**/ ?>