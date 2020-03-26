# Paycheck Calculator
Base PHP project for CIT 313. This is the first time we've used server-side scripting to build anything. This is fun!

## Project Specification:

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

