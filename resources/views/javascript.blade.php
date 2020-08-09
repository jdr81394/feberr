<script src="{{ asset('public/assets/js/vendor/jquery/jquery-1.12.3.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery/uikit.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/chart.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/grid.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/jquery.easing1.3.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/tether.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/trumbowyg.min.js') }}"></script>
<script src="{{ asset('public/assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('public/assets/js/main.js') }}"></script>
<script src="{{ asset('public/assets/js/map.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  
}

        CKEDITOR.replace( 'summary-ckeditor' );
		
		$(document).ready(function(){
		/*$("#scripts1").hide();
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
		$("#demourl").hide();*/
		
		
    $('#item_type').on('change', function() {
      if ( this.value == 'scripts')
      //.....................^.......
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


//$(document).ready(function(){
//    $('.payment_method').click(function(){
//	alert('hai');
//        if($(this).val() == 'stripe')
//		{
//        $("#stripe_card").show();
//		}
//		else
//		{
//		$("#stripe_card").hide();
//		}
//    });
//});



</script>
@if($allsettings->google_analytics != "")
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', '{{ $allsettings->google_analytics }}', 'auto');
  ga('send', 'pageview');
</script>
@endif
<script src="{{ asset('public/assets/validate/jquery.bvalidator.min.js') }}"></script>
<script src="{{ asset('public/assets/validate/themes/presenters/default.min.js') }}"></script>
<script src="{{ asset('public/assets/validate/themes/red/red.js') }}"></script>
<link href="{{ asset('public/assets/validate/themes/red/red.css') }}" rel="stylesheet" />
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
	$('#footer_form').bValidator(options);
	$('#coupon_form').bValidator(options);
	$('#subscribe_form').bValidator(options);
    });
</script>


<script src="{{ asset('public/assets/pagination/pagination.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $(this).cPager({
            pageSize: {{ $allsettings->site_item_per_page }}, 
            pageid: "pager", 
            itemClass: "li-item",
			pageIndex: 1
 
        });
		
	$(this).cPager({
            pageSize: {{ $allsettings->site_item_per_page }}, 
            pageid: "commpager", 
            itemClass: "commli-item",
			pageIndex: 1
 
        });	
		
		
		
	$(this).cPager({
            pageSize: {{ $allsettings->site_post_per_page }}, 
            pageid: "blogpager", 
            itemClass: "li-items",
			pageIndex: 1
 
        });	
		
	/*$("#slider-range").change(function() {
    $(".col-lg-9").addClass("items");
    });	*/
	
	
		
    });
	
	
    </script>
    
<script src="{{ asset('public/share/share.js') }}"></script> 
<script type="text/javascript">

	$(document).ready(function(){

		$('.share-button').simpleSocialShare();

	});

</script> 

<script src="{{ asset('public/filter/jplist.core.min.js') }}"></script>
<script src="{{ asset('public/filter/jplist.sort-bundle.min.js') }}"></script>
<script src="{{ asset('public/filter/jplist.textbox-filter.min.js') }}"></script>
<script src="{{ asset('public/filter/jplist.filter-toggle-bundle.min.js') }}"></script>
<script src="{{ asset('public/filter/jplist.pagination-bundle.min.js') }}"></script>

<script type="text/javascript">
        $('document').ready(function(){

            $('#demo').jplist({
                itemsBox: '.list'
                ,itemPath: '.list-item'
                ,panelPath: '.jplist-panel'

            });
        });
</script>
@if(!empty($minprice_count) && !empty($maxprice_count)) 
<script type="text/javascript">
  function showProducts(minPrice, maxPrice) 
  {
    $(".items .list-item").hide().filter(function() 
	{
        var price = parseInt($(this).data("price"), 10);
        return price >= minPrice && price <= maxPrice;
    }).show();
  }

$(function() 
{
    var options = 
	{
        range: true,
        min: {{ $allsettings->site_range_min_price }},
        max: {{ $allsettings->site_range_max_price }},
        values: [{{ $allsettings->site_range_min_price }}, {{ $allsettings->site_range_max_price }}],
        slide: function(event, ui) {
            var min = ui.values[0],
                max = ui.values[1];

            $("#amount").val("{{ $allsettings->site_currency }} " + min + " - {{ $allsettings->site_currency }} " + max);
            showProducts(min, max);
       }
    }, min, max;

    $("#slider-range").slider(options);

    min = $("#slider-range").slider("values", 0);
    max = $("#slider-range").slider("values", 1);

    $("#amount").val("{{ $allsettings->site_currency }} " + min + " - {{ $allsettings->site_currency }} " + max);

    showProducts(min, max);
});
</script>
@endif
<script src="{{ asset('public/lightbox/topbox.js') }}"></script>

<script type="text/javascript">
		$(document).ready(function() {
			$('.lightbox').topbox({
				skin: 'darkroom'
			});

			// Extra - Trigger a TopBox via a page anchor
			if (window.location.hash) {
				var hashValue = location.hash.replace(/^#/, '');
				$("." + hashValue).click();
			}

		});
</script>

<!-- stripe code -->

<script src="https://js.stripe.com/v3/"></script>
<script>

$(function () {
$("#ifYes").hide();
        $("input[name='payment_method']").click(function () {
		
            if ($("#opt1-stripe").is(":checked")) {
                $("#ifYes").show();
				
				/* stripe code */
				
				var stripe = Stripe('{{ $stripe_publish_key }}');
   
				var elements = stripe.elements();
					
				var style = {
				base: {
					color: '#32325d',
					lineHeight: '18px',
					fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
					fontSmoothing: 'antialiased',
					fontSize: '14px',
					'::placeholder': {
					color: '#aab7c4'
					}
				},
				invalid: {
					color: '#fa755a',
					iconColor: '#fa755a'
				}
				};
			 
				
				var card = elements.create('card', {style: style, hidePostalCode: true});
			 
				
				card.mount('#card-element');
			 
			   
				card.addEventListener('change', function(event) {
					var displayError = document.getElementById('card-errors');
					if (event.error) {
						displayError.textContent = event.error.message;
					} else {
						displayError.textContent = '';
					}
				});
			 
				
				var form = document.getElementById('checkout_form');
				form.addEventListener('submit', function(event) {
					/*event.preventDefault();*/
			        if ($("#opt1-stripe").is(":checked")) { event.preventDefault(); }
					stripe.createToken(card).then(function(result) {
					
						if (result.error) {
						
						var errorElement = document.getElementById('card-errors');
						errorElement.textContent = result.error.message;
						
						
						} else {
							
							document.querySelector('.token').value = result.token.id;
							 
							document.getElementById('checkout_form').submit();
						}
						/*document.querySelector('.token').value = result.token.id;
							 
							document.getElementById('checkout_form').submit();*/
						
					});
				});
							
					
					
					
							
			/* stripe code */	
				
				
				
            } else {
                $("#ifYes").hide();
            }
        });
    });
	
	
	
$(function () {
$("#ifstripe").hide();
$("#ifpaystack").hide();
$("#iflocalbank").hide();
        $("input[name='withdrawal']").click(function () {
		
            if ($("#withdrawal-paypal").is(":checked")) 
			{
			   $("#ifpaypal").show();
			   $("#ifstripe").hide();
			   $("#ifpaystack").hide();
			   $("#iflocalbank").hide();
			}
			else if ($("#withdrawal-stripe").is(":checked"))
			{
			  $("#ifpaypal").hide();
			  $("#ifstripe").show();
			  $("#ifpaystack").hide();
			  $("#iflocalbank").hide();
			}
			else if ($("#withdrawal-paystack").is(":checked"))
			{
			  $("#ifpaypal").hide();
			  $("#ifstripe").hide();
			  $("#ifpaystack").show();
			  $("#iflocalbank").hide();
			}
			else if ($("#withdrawal-localbank").is(":checked"))
			{
			   $("#ifpaypal").hide();
			   $("#ifstripe").hide();
			   $("#ifpaystack").hide();
			   $("#iflocalbank").show();
			}
			else
			{
			$("#ifpaypal").hide();
			$("#ifstripe").hide();
			$("#ifpaystack").hide();
			$("#iflocalbank").hide();
			}
		});
    });
	
</script>

<!-- stripe code -->

<!--- video code --->

<script src="{{ asset('public/video/video.popup.js') }}"></script>

<script>
            $(function(){
                $("#feberr-video").videoPopup({
                    autoplay: 1,
                    controlsColor: 'white',
                    showVideoInformations: 0,
                    width: 1000,
                    customOptions: {
                        rel: 0,
                        end: 60
                    }
                });
				
            });
        </script>

<!--- video code --->
<script type="text/javascript" src="{{ URL::to('resources/views/admin/template/datepicker/picker.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#coupon_start_date").datepicker({
     minDate: 0, dateFormat: 'yy-mm-dd',
    onSelect: function (selected) {
      var dt = new Date(selected);
      dt.setDate(dt.getDate() + 1);
 $("#coupon_end_date").datepicker("option", "minDate", dt);
}                                 
});
  $("#coupon_end_date").datepicker({
    minDate: 0, dateFormat: 'yy-mm-dd',
    onSelect: function (selected) {
      var dt1 = new Date(selected);
      dt1.setDate(dt1.getDate() - 1);
      $("#coupon_start_date").datepicker("option", "maxDate", dt1);
    }
  });
});
</script>
<script type="text/javascript" src="{{ URL::to('public/countdown/jquery.countdown.js?v=1.0.0.0') }}"></script>

