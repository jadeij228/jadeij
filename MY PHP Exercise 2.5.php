<?php 
$amount_needed=0;
$interest_rate=0;
$payment_period=0;
$loan_amount=0.00;
$total_interest=0.00;
$total_payable=0.00;
$monthly_payable=0.00;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My PHP Exercise 2.5</title>
</head>

<body>
<form method="POST" action=""/>
	<h1>Loan Computation Exercise 2.5</h1>
	
<?php
if(isset($_POST['Compute'])){
	$amount_needed=$_POST['amount_needed'];
	$interest_rate=$_POST['interest_rate'];
	$payment_period=$_POST['payment_period'];	
	
	$loan_amount = floatval($amount_needed);
    $interest_rate = floatval($interest_rate);
    $payment_period = floatval($payment_period);
	
	$total_interest=($loan_amount * ($interest_rate/100)) * $payment_period;
	$total_payable=$loan_amount + $total_interest;
	$monthly_payable=$total_payable / $payment_period;
	
}
	?>
	<p>Amount Needed: <input type="text" name="amount_needed" value="<?=$amount_needed;?>"/></p>
	<p>Interest Rate: <input type="text" name="interest_rate" value="<?=$interest_rate;?>"/></p>
	<p>Payment Period: <input type="text" name="payment_period" value="<?=$payment_period;?>"/></p>
		<input type="submit" name="Compute"/>
	<p>Loan Amount: <?=(number_format($loan_amount,2));?></p>
	<p>Total interest: <?=(number_format($total_interest,2));?></p>
	<p>Total Payable: <?=(number_format($total_payable,2));?></p>
	<p>Monthly Payable: <?=(number_format($monthly_payable,2));?></p>
</body>
</html>