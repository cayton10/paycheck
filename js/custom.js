//Benjamin Cayton
//4.1.2020
//This jQuery file was created to account for added functionality regarding
//the 'payType' select form field as well as the addition of 'paySchedule'
//radio buttons. Some control flow is needed in order to deactivate specific
//form fields based on user choice. We don't necessarily want someone to input 
//the hours they work if they're salaried employees. The rule of thumb is salaried
//employees are ineligible for OT pay. 

//When html is loaded and ready
$(document).ready(function(){
    //Declare select field variable

    let dropdown = $('#payType');
    var payType;

    //In case people are using back button for new checks
    //Resets form, otherwise hours were populated along with salary, etc. 
    $(window).load(function() {
        $(dropdown).reset();
    })
    
    //Function for appropriate changes on select field changes
    $(dropdown).change(function(){
        payType = $('option:selected');
        //Control flow for Salaried employees
        if(payType.val() == "Salary")
            $('#hours').addClass('disabled');
            //If employee is salaried, assume 40 hour work week
            $('#hours').val("40");
            $('#hoursHelp').html('Salary pay type assumes a 40 hour work week.');
    });
    
});