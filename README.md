# Paycheck Calculator
Base PHP project for CIT 313. This is the first time we've used server-side scripting to build anything. This is fun!

## Access
The project has been placed on a Marshall U. web server. You can access it <a href="http://cit.marshall.edu/cit313/cayton10/PHP/HW1/paycheck/index.php" target='_blank'>here</a>. This may become inactive at any time, as I do not operate this server. Please notify me if it doesn't work so I can either remove the link or find web hosting for the example. 

### Project Specification:

"Provide the user with a form (must use Bootstrap form classes and form validation) to collect from the user the following: 

    *   Employee Name
    *   Rate of pay per hour
    *   Hours worked in a week

Once the form is submitted, it should calculate the net pay due to the employee over a 2 week period (HINT... 2 weeks, and in the form, you are entering hours worked per week), showing the employee's name, their gross income for the 2 week period, amount of federal tax, state tax, social security tax, medicare tax and net pay.

The employee's pay is based on a 40 hour week and they are paid time and a half for anything over 40 hours. Deductions are based on the following income levels:

    * Federal Taxes:
        * 10% if yearly gross is projected to be less than $9,525
        * 12% if yearly gross is projected to be between $9,526 and $38,700
        * 22% if yearly gross income is projected to be between $38,701 and $82,500
        * 24% if income is projected to be more than $82,500 annually
        * THINK... you are calculating a paystub for 2 weeks, but federal tax amounts are based on yearly income
    * State Taxes:
        * 3% if yearly gross income is projected to be less than $10,000
        * 4% if yearly gross income is projected to be between $10,000 and $25,000
        * 5% for anything over $25,000
    * Social Security:
        * 6.2% of gross income
    * Medicare:
        * 1.45% of gross income"

## Added Functionality 4.1.2020


#### Salary vs. Hourly Function
I decided to add an option to select whether a person's pay type is either hourly or salary. This required a simple jQuery function to disable the <strong>Hours Worked</strong> field upon selection of the <em>Salary</em> '<option>'. The salary option assumes a 40 hour work week and, as such, the previously mentioned function populates a value of 40 for weekly hours worked. 

#### Weekly vs. Bi-Weekly Pay Schedule
Also added on 4.1.2020 is a radio button option to select a weekly or bi-weekly pay schedule.

#### jQuery Control Flow
The addition of these functions highlighted the need for a few jQuery control flow statements. Based on a user selection of Salary or Hourly employee, example text within input fields changes to accomodate. The form field help text will also change based on pay type selection, and tells the user that a 40 hour work week is assumed for salaried employees. 

