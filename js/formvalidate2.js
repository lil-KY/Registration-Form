// CHILD ONE
$.validator.addMethod("dob", function (value, element) {
    let result = true;
    let ageMin = 3;
    let ageMax = 85;

    let subDay = parseInt($("#dayOne").val());
    let subMonth = parseInt($("#monthOne").val()) - 1;
    let subYear = parseInt($("#yearOne").val());
    let subDate = new Date(subYear, subMonth, subDay);

    let calcDay = subDate.getDate();
    let calcMonth = subDate.getMonth();
    let calcYear = subDate.getFullYear();
    
    if (calcDay != subDay || calcMonth != subMonth || calcYear != subYear) {
        result = false;
    }
    if(!$("#dayOne").val() || !$("#monthOne").val() || !$("#yearOne").val()){
        result = true;
    }

    if (result) {
        let currDate = new Date();
        let currYear = currDate.getFullYear();
        let currMonth = currDate.getMonth();
        let currDay = currDate.getDate();

        let age = currYear - subYear;
        
        if (subMonth > currMonth) {
            age = age - 1;
        } else if (subMonth == currMonth && currDay < subDay) {
            age = age - 1;
        } 

        if (ageMin != undefined) {
            if (age < ageMin) {
                result = false;
            } 
        }
        
        if (ageMax != undefined) {
            if (age > ageMax) {
                result = false;
            }
        }
    }
    return this.optional(element) || result;
}, "");



// CHILD TWO
$.validator.addMethod("dobTwo", function (value, element) {
    let result = true;
    let ageMin = 3;
    let ageMax = 85;

    let subDay = parseInt($("#dayTwo").val());
    let subMonth = parseInt($("#monthTwo").val()) - 1;
    let subYear = parseInt($("#yearTwo").val());
    let subDate = new Date(subYear, subMonth, subDay);

    let calcDay = subDate.getDate();
    let calcMonth = subDate.getMonth();
    let calcYear = subDate.getFullYear();

    if (calcDay != subDay || calcMonth != subMonth || calcYear != subYear) {
        result = false;
    }

    if(!$("#dayTwo").val() || !$("#monthTwo").val() || !$("#yearTwo").val()){
        result = true;
    }

    if (result) {
        let currDate = new Date();
        let currYear = currDate.getFullYear();
        let currMonth = currDate.getMonth();
        let currDay = currDate.getDate();

        let age = currYear - subYear;
        
        if (subMonth > currMonth) {
            age = age - 1;
        } else if (subMonth == currMonth && currDay < subDay) {
            age = age - 1;
        } 

        if (ageMin != undefined) {
            if (age < ageMin) {
                result = false;
            } 
        }
        
        if (ageMax != undefined) {
            if (age > ageMax) {
                result = false;
            }
        }
    }
    return this.optional(element) || result;
}, "");

// CHILD THREE
$.validator.addMethod("dobThree", function (value, element) {
    let result = true;
    let ageMin = 3;
    let ageMax = 85;

    let subDay = parseInt($("#dayThree").val());
    let subMonth = parseInt($("#monthThree").val()) - 1;
    let subYear = parseInt($("#yearThree").val());
    let subDate = new Date(subYear, subMonth, subDay);

    let calcDay = subDate.getDate();
    let calcMonth = subDate.getMonth();
    let calcYear = subDate.getFullYear();

    if (calcDay != subDay || calcMonth != subMonth || calcYear != subYear) {
        result = false;
    }
    if(!$("#dayThree").val() || !$("#monthThree").val() || !$("#yearThree").val()){
        result = true;
    }

    if (result) {
        let currDate = new Date();
        let currYear = currDate.getFullYear();
        let currMonth = currDate.getMonth();
        let currDay = currDate.getDate();

        let age = currYear - subYear;
        
        if (subMonth > currMonth) {
            age = age - 1; 
        } else if (subMonth == currMonth && currDay < subDay) {
            age = age - 1;
        } 

        if (ageMin != undefined) {
            if (age < ageMin) {
                result = false;
            } 
        }
        
        if (ageMax != undefined) {
            if (age > ageMax) {
                result = false;
            }
        }
    }
    return this.optional(element) || result;
}, "");

// CHILD FOUR 
$.validator.addMethod("dobFour", function (value, element) {
    let result = true;
    let ageMin = 3;
    let ageMax = 85;

    let subDay = parseInt($("#dayFour").val());
    let subMonth = parseInt($("#monthFour").val()) - 1;
    let subYear = parseInt($("#yearFour").val());
    let subDate = new Date(subYear, subMonth, subDay);


    let calcDay = subDate.getDate();
    let calcMonth = subDate.getMonth();
    let calcYear = subDate.getFullYear();

    if (calcDay != subDay || calcMonth != subMonth || calcYear != subYear) {
        result = false;
    }
    if(!$("#dayFour").val() || !$("#monthFour").val() || !$("#yearFour").val()){
        result = true;
    }

    if (result) {
        let currDate = new Date();
        let currYear = currDate.getFullYear();
        let currMonth = currDate.getMonth();
        let currDay = currDate.getDate();

        let age = currYear - subYear;
        
        if (subMonth > currMonth) {
            age = age - 1; 
        } else if (subMonth == currMonth && currDay < subDay) {
            age = age - 1;
        } 

        if (ageMin != undefined) {
            if (age < ageMin) {
                result = false;
            } 
        }
        
        if (ageMax != undefined) {
            if (age > ageMax) {
                result = false;
            }
        }
    }
    return this.optional(element) || result;
}, "");

// CHILD FIVE
$.validator.addMethod("dobFive", function (value, element) {
    let result = true;
    let ageMin = 3;
    let ageMax = 85;

    let subDay = parseInt($("#dayFive").val());
    let subMonth = parseInt($("#monthFive").val()) - 1;
    let subYear = parseInt($("#yearFive").val());
    let subDate = new Date(subYear, subMonth, subDay);

    let calcDay = subDate.getDate();
    let calcMonth = subDate.getMonth();
    let calcYear = subDate.getFullYear();

    if (calcDay != subDay || calcMonth != subMonth || calcYear != subYear) {
        result = false;
    }
    if(!$("#dayFive").val() || !$("#monthFive").val() || !$("#yearFive").val()){
        result = true;
    }

    if (result) {
        let currDate = new Date();
        let currYear = currDate.getFullYear();
        let currMonth = currDate.getMonth();
        let currDay = currDate.getDate();

        let age = currYear - subYear;
        
        if (subMonth > currMonth) {
            age = age - 1;
        } else if (subMonth == currMonth && currDay < subDay) {
            age = age - 1;
        } 

        if (ageMin != undefined) {
            if (age < ageMin) {
                result = false;
            } 
        }
        
        if (ageMax != undefined) {
            if (age > ageMax) {
                result = false;
            }
        }
    }
    return this.optional(element) || result;
}, "");



$().ready(function() {
	$("#myform").validate({
		groups: {
        	nameGroup1: "yearOne monthOne dayOne",
        	nameGroup2: "yearTwo monthTwo dayTwo",
        	nameGroup3: "yearThree monthThree dayThree",
        	nameGroup4: "yearFour monthFour dayFour",
        	nameGroup5: "yearFive monthFive dayFive",
    	},
		rules: {
			// CHILD ONE
			nameChildOneFirst: "required",
			nameChildOneLast: "required",
			yearOne: {
				required: true,
				dob: true,
			}, 
			monthOne: {
				required: true,
				dob: true,
			},
			dayOne: {
				required: true,
				dob:true,
			},
			genderOne: "required",
			gradeOne: {
				required: true,
				number: true,
				max: 11,
				min: 3,
			},
			assistantOne: "required",
			allergiesOne: "required",
			allergyTextOne: {
				required: "#yes-allergyOne:checked"
			},

			// CHILD TWO
			yearTwo: {
				required: true,
				dobTwo: true,
			}, 
			monthTwo: {
				required: true,
				dobTwo: true,
			},
			dayTwo: {
				required: true,
				dobTwo:true,
			},

			// CHILD Three
			yearThree: {
				required: true,
				dobThree: true,
			}, 
			monthThree: {
				required: true,
				dobThree: true,
			},
			dayThree: {
				required: true,
				dobThree:true,
			},

			// CHILD Four
			yearFour: {
				required: true,
				dobFour: true,
			}, 
			monthFour: {
				required: true,
				dobFour: true,
			},
			dayFour: {
				required: true,
				dobFour:true,
			},

			// CHILD Five
			yearFive: {
				required: true,
				dobFive: true,
			}, 
			monthFive: {
				required: true,
				dobFive: true,
			},
			dayFive: {
				required: true,
				dobFive:true,
			},

            gradeTwo: {
                required: true,
                number: true,
                max: 11,
                min: 3,
            },
            gradeThree: {
                required: true,
                number: true,
                max: 11,
                min: 3,
            },
            gradeFour: {
                required: true,
                number: true,
                max: 11,
                min: 3,
            },
            gradeFive: {
                required: true,
                number: true,
                max: 11,
                min: 3,
            },
		},
		messages: {
			
			// CHILD ONE
			nameChildOneFirst: "This field is required",
			nameChildOneLast: "This field is required",
			yearOne:{
				required:"Please enter date of birth",
				dob: "Please enter a valid date",
			},
			monthOne:{
				required: "Please enter date of birth",
				dob: "Please enter a valid date",
			},
			dayOne: {
				required: "Please enter date of birth",
				dob: "Please enter a valid date",
			},
			genderOne: "Please select an option",
			gradeOne: {
				required: "This field is required",
				number: "Please enter a grade",
				max: "Must be between 3 and 11",
				min: "Must be between 3 and 11",
			},
			assistantOne: "Please select an option",
			allergiesOne: "Please select an option",
			allergyTextOne: "This field is required",

			// CHILD TWO
			nameChildTwoFirst: "This field is required",
			nameChildTwoLast: "This field is required",
			yearTwo: "Please enter date of birth",
			monthTwo: "Please enter date of birth",
			dayTwo: "Please enter date of birth",
			genderTwo: "Please select an option",
            gradeTwo: {
                required: "This field is required",
                number: "Please enter a grade",
                max: "Must be between 3 and 11",
                min: "Must be between 3 and 11",
            },
			assistantTwo: "Please select an option",
			allergiesTwo: "Please select an option",
			allergyTextTwo: "This field is required",
			yearTwo:{
				required:"Please enter date of birth",
				dobTwo: "Please enter a valid date",
			},
			monthTwo:{
				required: "Please enter date of birth",
				dobTwo: "Please enter a valid date",
			},
			dayTwo: {
				required: "Please enter date of birth",
				dobTwo: "Please enter a valid date",
			},

			// CHILD Three
			nameChildThreeFirst: "This field is required",
			nameChildThreeLast: "This field is required",
			yearThree: "Please enter date of birth",
			monthThree: "Please enter date of birth",
			dayThree: "Please enter date of birth",
			genderThree: "Please select an option",
            gradeThree: {
                required: "This field is required",
                number: "Please enter a grade",
                max: "Must be between 3 and 11",
                min: "Must be between 3 and 11",
            },
			assistantThree: "Please select an option",
			allergiesThree: "Please select an option",
			allergyTextThree: "This field is required",
			yearThree:{
				required:"Please enter date of birth",
				dobThree: "Please enter a valid date",
			},
			monthThree:{
				required: "Please enter date of birth",
				dobThree: "Please enter a valid date",
			},
			dayThree: {
				required: "Please enter date of birth",
				dobThree: "Please enter a valid date",
			},

			// CHILD Four
			nameChildFourFirst: "This field is required",
			nameChildFourLast: "This field is required",
			yearFour: "Please enter date of birth",
			monthFour: "Please enter date of birth",
			dayFour: "Please enter date of birth",
			genderFour: "Please select an option",
            gradeFour: {
                required: "This field is required",
                number: "Please enter a grade",
                max: "Must be between 3 and 11",
                min: "Must be between 3 and 11",
            },
			assistantFour: "Please select an option",
			allergiesFour: "Please select an option",
			allergyTextFour: "This field is required",
			yearFour:{
				required:"Please enter date of birth",
				dobFour: "Please enter a valid date",
			},
			monthFour:{
				required: "Please enter date of birth",
				dobFour: "Please enter a valid date",
			},
			dayFour: {
				required: "Please enter date of birth",
				dobFour: "Please enter a valid date",
			},

			// CHILD Five
			nameChildFiveFirst: "This field is required",
			nameChildFiveLast: "This field is required",
			yearFive: "Please enter date of birth",
			monthFive: "Please enter date of birth",
			dayFive: "Please enter date of birth",
			genderFive: "Please select an option",
            gradeFive: {
                required: "This field is required",
                number: "Please enter a grade",
                max: "Must be between 3 and 11",
                min: "Must be between 3 and 11",
            },
			assistantFive: "Please select an option",
			allergiesFive: "Please select an option",
			allergyTextFive: "This field is required",
			yearFive:{
				required:"Please enter date of birth",
				dobFive: "Please enter a valid date",
			},
			monthFive:{
				required: "Please enter date of birth",
				dobFive: "Please enter a valid date",
			},
			dayFive: {
				required: "Please enter date of birth",
				dobFive: "Please enter a valid date",
			},
		},
		errorPlacement: function(error, element) {
	      	let placement = $(element).data('error');
	      	if (placement) {
		        $(placement).append(error);
		    }else if (element.attr("type") == "radio") {
                error.appendTo(element.parent().parent().next().children().children("div").append());
            }else if(element.attr("name") == "yearOne" || element.attr("name") == "monthOne" || element.attr("name") == "dayOne") {
            	error.appendTo(element.parent().parent().next().children().children("div").append());
            }else if(element.attr("name") == "yearTwo" || element.attr("name") == "monthTwo" || element.attr("name") == "dayTwo") {
            	error.appendTo(element.parent().parent().next().children().children("div").append());
            }else if(element.attr("name") == "yearThree" || element.attr("name") == "monthThree" || element.attr("name") == "dayThree") {
            	error.appendTo(element.parent().parent().next().children().children("div").append());
            }else if(element.attr("name") == "yearFour" || element.attr("name") == "monthFour" || element.attr("name") == "dayFour") {
            	error.appendTo(element.parent().parent().next().children().children("div").append());
            }else if(element.attr("name") == "yearFive" || element.attr("name") == "monthFive" || element.attr("name") == "dayFive") {
            	error.appendTo(element.parent().parent().next().children().children("div").append());
            }
		     else {
		        error.insertAfter(element);
	      	}
	    }

	});	
})







