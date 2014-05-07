$(document).ready(function() {
	var $validator = $("#commentForm").validate({
	errorPlacement: function(error, element) {
    },
	rules: {
	q1: {
	required: true
	},
	q2: {
	required: true
	},
	q3: {
	required: true
	},
	q4: {
	required: true
	},
	q5: {
	required: true
	}
	}
	});
	//#################################################################################
    $('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
	  var $valid = $("#commentForm").valid();
	  if(!$valid) {
	  $(document).trigger("add-alerts", [{'message': "<strong>Warning!</strong> Choose your answer.",'priority': 'error'}]);
	  return false;
	  }
	  else
	  {
	  $( "#commentForm" ).submit(); //alert('Finished!, Starting over!');
	  }
    }, onTabShow: function(tab, navigation, index) {
	  $('#rootwizard').find('.pager .next').removeClass('disabled');
	  }
	});
});