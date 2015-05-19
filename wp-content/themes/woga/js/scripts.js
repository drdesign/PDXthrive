$(function() {
  /*
   * dropdown menu responsive
   */
  $.fn.dropdown_menu = function(prop){
    jQuery(this).click(function(event){
       $( ".navigation" ).toggle( "slow");
      return false;
    });

    return this;
  };
  $('#dropdown_menu').dropdown_menu();

  /*
   * superfish menu
   */
  $('.navigation ul').superfish();
  
	/*
	 * nivoLightbox
	 */
  $('.zoom').nivoLightbox();

  /*
	 * carouFredSel
	 */
  $('#foo2').carouFredSel({
    responsive : true,
    auto: true,
            auto : false,
    prev: '#prev2',
    next: '#next2',
    mousewheel: true,
    swipe: {
      onMouse: true,
      onTouch: true
    }
  });
  
  $.each($('.list_carousel'), function() {
      var tab = $(this);
      $('#' + tab.attr('id')).find('.carousel').carouFredSel({
          responsive : true,
          height : 'auto',
          width : 'variable',
          auto : false,
          prev : {
              button : function() {
                  return tab.find('.left');
              }
          },
          next : {
              button : function() {
                  return tab.find('.right');
              }
          },
          items : {
              height : 'auto'
          }
      });
  });

  /*
   * BMI calculator
   */
  var bmi_m_weight = bmi_m_height = bmi_i_weight = bmi_i_height = bmi_m = bmi_i = 0;

  jQuery( "#weight-slider" ).slider({
    min: 40,
    max: 185,
    step: 5,
    slide: function( event, ui ) {
    	bmi_m_weight = ui.value;
    	bmi_i_weight = Math.floor(bmi_m_weight * 2.2046);
      jQuery( "#val-weight" ).text( bmi_m_weight + 'kg' );
    }
  });
  bmi_m_weight = jQuery( "#weight-slider" ).slider( "value" );
  bmi_i_weight = Math.floor(bmi_m_weight * 2.2046);
  jQuery( "#val-weight" ).text( bmi_m_weight + 'kg');

  jQuery( "#height-slider" ).slider({
    min: 1.4,
    max: 2.14,
    step: 0.01,
    //value: 1,
    slide: function( event, ui ) {
    	bmi_m_height = Math.floor(ui.value*100);
    	bmi_i_height = Math.round(bmi_m_height * 0.39);
      jQuery( "#val-height" ).text( bmi_m_height + 'cm' );
    }
  });
  bmi_m_height = Math.floor(jQuery( "#height-slider" ).slider( "value" ) *100);
  bmi_i_height = Math.round(bmi_m_height * 0.39);
  jQuery( "#val-height" ).text( bmi_m_height + 'cm');


  jQuery( "#calc_bmi_m, #calc_bmi_i" ).click(function() {
		$(".calculate-bmi").fadeOut( "slow", function() {
		    $(".result-bmi").fadeIn();
		});
    	return false;
	});
	
  jQuery( "#close-result" ).click(function() {
		$(".result-bmi").fadeOut( "slow", function() {
		    $(".calculate-bmi").fadeIn();
		});
    	return false;
	});
  jQuery( "#calc_bmi_m" ).click(function() {
    bmi_m_height_input = jQuery(".size-responsive input[name='height_bmi']").val();
    if(bmi_m_height_input)
      bmi_m_height = bmi_m_height_input;
    bmi_m_weight_input = jQuery(".size-responsive input[name='weight_bmi']").val();
    if(bmi_m_weight_input)
      bmi_m_weight = bmi_m_weight_input;

  	bmi_m = (bmi_m_weight / ( (bmi_m_height / 100) * (bmi_m_height / 100) )).toFixed(1);
  	jQuery("#result-bmi").text(bmi_m);

  	return false;
	});

  jQuery( "#calc_bmi_i" ).click(function() {
    bmi_i_height_input = jQuery(".size-responsive input[name='height_bmi']").val();
    if(bmi_i_height_input)
      bmi_i_height = bmi_i_height_input;
    bmi_i_weight_input = jQuery(".size-responsive input[name='weight_bmi']").val();
    if(bmi_i_weight_input)
      bmi_i_weight = Math.floor(bmi_i_weight_input * 2.2046);

  	bmi_i = (703 * bmi_i_weight / ( bmi_i_height * bmi_i_height )).toFixed(1);
  	jQuery("#result-bmi").text(bmi_i);
  	return false;
	});
});