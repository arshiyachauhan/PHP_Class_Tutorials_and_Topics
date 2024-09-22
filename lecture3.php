<!-- Control Statements : used inside a block of code to check certain inputs and give output if condition is true-->
 <!-- sequential statements- nested if
 decision making statements: if, if else, switch
 loops- foreach, while, do while
 jumping statements- break, continue-->
<?php
//  using if else 
// give discount to a regular customer
$customer= readline("Enter type of customer:");
$amount = readline("Enter amount:");
if($customer == "regular"){
    if($amount > 500){
        echo "20% discount";
    }else{
        echo "10% discount";
    }

}else {
    if($amount > 500){
        echo "5% discount";
    }else{
        echo "No discount is given";
    }
}

// validate a given date
$date = readline("Date: ");
$month = readline("Month: ");
$year = readline("Year: ");

if ($month >= 1 && $month <= 12) {
    if ($month == 2) {
        // Check for leap year
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            if ($date >= 1 && $date <= 29) {
                echo "Valid date\n";
            } else {
                echo "Invalid Date\n";
            }
        } else {
            if ($date >= 1 && $date <= 28) {
                echo "Valid date\n";
            } else {
                echo "Invalid Date\n";
            }
        }
    } else if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
        // Months with 31 days
        if ($date >= 1 && $date <= 31) {
            echo "Valid date\n";
        } else {
            echo "Invalid Date\n";
        }
    } else {
        // Months with 30 days
        if ($date >= 1 && $date <= 30) {
            echo "Valid date\n";
        } else {
            echo "Invalid Date\n";
        }
    }
} else {
    echo "Invalid Month\n";
}


//calculates the tax based on income and age
$income= readline("Income:");
$age= readline("Age: ");
if($income >= 10000 && $income <= 20000){
        if( $age < 65){
        echo "10%";
    }else{
        echo "5%";
    }
}
    else{
        if($age < 65){
            echo "20%";
        }else{
            echo "15%";
        }
}


//Switch statement
// enter meal type and display menu items and display message after selecting a menu
$meal = readline("Meal type: ");
$menuitem = readline("Menu item: ");
switch($meal){
    case "Breakfast":
        switch($menuitem){
            case "Breadtoast":
                echo "Breadtoast: bread with potato stuffing\n";
                break;
            case "Idli":
                echo "Idli with coconut chutney\n";
                break;
            case "Parantha":
                echo "Onion Parantha\n";
                break;
            case "Cornflakes":
                echo "Cornflakes with milk\n";
                break;
            default:
                echo "Invalid menu item for Breakfast\n";
        }
        break;
    case "Lunch":
        switch ($menuitem){
            case "Rajma":
                echo "Rajma with rice\n";
                break;
            case "Kadhi":
                echo "Kadhi Rice\n";
                break;
            default:
                echo "Invalid menu item for Lunch\n";
        }
        break;
    case "Snack":
        switch($menuitem){
            case "Pav bhaji":
                echo "Pav bhaji\n";
                break;
            case "Noodles":
                echo "Veg noodles\n";
                break;
            default:
                echo "Invalid menu item for Snack\n";
        }
        break;
    case "Dinner":
        switch($menuitem){
            case "Kadhi":
                echo "Kadhi with rice or roti\n";
                break;
            case "Kofta":
                echo "Kofta with rice or roti\n";
                break;
            default:
                echo "Invalid menu item for Dinner\n";
        }
        break;
    default:
        echo "Invalid meal type\n";
}

if ($meal == "Breakfast" || $meal == "Lunch" || $meal == "Snack" || $meal == "Dinner") {
    echo "Enjoy your " . $menuitem . " for " . $meal . "!\n";
}


//calculate  utility bill for electricity usage
$input = readline("Enter customer type (Residential/Commercial): "); 
$units = (int)readline("Units consumed: ");
$total = 0;
switch($input) {
    case "Residential":
        if ($units <= 100) {
            $total = $units * 0.5;
            echo "Charge: 0.5 per unit\n";
        } elseif ($units <= 200) {
            $total = $units * 0.75;
            echo "Charge: 0.75 per unit\n";
        } else {
            $total = $units * 1;
            echo "Charge: 1 per unit\n";
        }
        break;

    case "Commercial":
        if ($units <= 100) {
            $total = $units * 1;
            echo "Charge: 1 per unit\n";
        } elseif ($units <= 200) {
            $total = $units * 1.5;
            echo "Charge: 1.5 per unit\n";
        } else {
            $total = $units * 2;
            echo "Charge: 2 per unit\n";
        }
        break;

    default:
        echo "Invalid customer type. Please enter either 'Residential' or 'Commercial'.\n";
        exit();
}

echo "Total amount: " . $total . " units\n";


?>