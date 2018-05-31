$(function() {
	var numChildList = ['one', 'two', 'three', 'four', 'five'];
	var numOfChildren = $('#numOfChildren');
	for(i = 0; i < numChildList.length; i++) {
		var num = i + 1;
		if(numOfChildren.val() === numChildList[i]) {
			var number = i;
			var cost = 200 + ((num - 1) * 180);
			$('#totalCost').val(cost);
			$('.childInfo').each(function(index) {
				if(number >= index){
					$(this).removeClass('hide');
					$(this).find('input').each(function() {
						$(this).prop('required', true);
					})
				}else {
					$(this).addClass('hide');
					$(this).find('input').each(function() {
						$(this).prop('required', false);
					});
				}
			});
		}
	}

    $('#agree').change(function () {
	    $('#submitButton').prop('disabled', !this.checked);
    }).change(); 
});


$('input.allergy').click(function() {
	var outerOuterThis = this;
	$('tr.showAllergy').each(function(index) {
		var outerThis = this;
		if($('input.yes-allergy')[index].checked) {
			$(outerThis).removeClass('hide');
			$('.allergyText').eq(index).prop("required", true);
		}else {
			$(outerThis).addClass('hide');
			$('.allergyText').eq(index).val("");
			$('.allergyText').eq(index).prop("required", false);
		}
	});
});


$.validator.addMethod('regex', function (value) { 
    return /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/.test(value); 
}, 'Please enter a valid US or Canadian postal code.');

$.validator.addMethod('postal', function (value) { 
    return /^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy][0-9][ABCEGHJKLMNPRSTVWXYZabceghjklmnprstvwxyz] ?[0-9][ABCEGHJKLMNPRSTVWXYZabceghjklmnprstvwxyz][0-9]/.test(value); 
}, 'Please enter a valid US or Canadian postal code.');

$().ready(function() {
	$("#myform").validate({
		rules: {
			nameParentFirst:"required",
			nameParentLast: "required",
			numPhone: {
				required: true,
				regex: true,
			},
			street: {
				required: true
			},
			postal: {
				required: true,
				postal: true
			},
			city: {
				required:true
			},
			province: {
				required: true
			},
			country: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			numAttend: {
				required: true
			},

		},
		messages: {
			nameParentFirst: "This field is required",
			nameParentLast: "This field is required",
			numPhone: {
				required: "This field is required",
				regex: "Please enter a phone number"
			},
			street: {
				required: "This field is required"
			},
			postal: {
				required: "This field is required",
				postal: "Please enter a valid postal code"
			},
			city: {
				required: "This field is required"
			},
			province: {
				required: "This field is required"
			},
			country: {
				required: "This field is required"
			},
			email: {
				required: "This field is required",
				email: "Please enter an email address"
			},
			numAttend: {
				required: "Please select an option"
			},
		},
		errorPlacement: function(error, element) {
	      	var placement = $(element).data('error');
	      	if (placement) {
		        $(placement).append(error);
		    }else if (element.attr("type") == "radio") {
                error.appendTo(element.parent().parent().next().children().children("div").append());
            }

		     else {
		        error.insertAfter(element);
	      	}
	    }
	});
})


