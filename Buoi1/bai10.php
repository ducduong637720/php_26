<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	 <?php 
            $result = '';
            $giaithua = 1;
			if (isset($_POST['calculate'])){
				$n = isset($_POST['n']) ? $_POST['n'] : '';
				do {
					if ($n <= 0) {
						$result = "Bạn phải nhập n là số nguyên dương";
					}
				} while ( $n <= 0);
				    $result = 0;
				for ($i=1; $i < $n; $i++) { 
					$giaithua *= $i;
					$result += ($i /  $giaithua); 
				}
				$result = "Tổng = ".$result;
			}
        ?>
        <h1>Tính tổng: 1/1! + 2/2! + ... + n/n!</h1>
	 <form method="post" action="">
            <input type="text" style="width: 50px" name="n" value="" placeholder="Nhập n"><br>
            <input type="submit" name="calculate" value="Tính" />
        </form>
        <?php echo $result; ?>
</body>
</html>