<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		error_reporting(-1);
		
		$payout = 5000;
		function countSum($percent, $comission, $firstMoney){
			$totalMoney = 0;
			$creditSum = 40000;
			$creditSum = $creditSum + $firstMoney;
			for ($month=1; $month < 50; $month++) { 
				$creditSum = $creditSum * $percent + $comission;
				if($creditSum < 5000){
					$totalMoney = $totalMoney + $creditSum;
					$creditSum = 0;
					
					break;
				}

				$creditSum = $creditSum - 5000;
				$totalMoney = $totalMoney + 5000; 
			};
			return $totalMoney;
		};

		
		$homoCreditTotal = countSum(1.04, 500, 0);
		$softBankTotal = countSum(1.03, 1000, 0);
		$strawberryBankTotal = countSum(1.02, 0, 7777);

		echo "homoCredit: {$homoCreditTotal} руб. <br>";
		echo "softbank: {$softBankTotal} руб. <br>";
		echo "strawberryBank: {$strawberryBankTotal} руб.";

	?>
</body>
</html>