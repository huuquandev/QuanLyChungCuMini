<?php
	include_once "../../function.php";
	if($_GET['partnerCode']){
		$parterCode = $_GET['partnerCode'];
		$orderId = $_GET['orderId'];
		$amount = $_GET['amount'];
		$orderInfo = $_GET['orderInfo'];
		$orderType = $_GET['orderType'];
		$transId = $_GET['transId'];
		$payType = $_GET['payType'];
	}
	if(CreateMoMoPayment($parterCode,
		$orderId,
		$amount,
		$orderInfo,
		$orderType,
		$transId,
		$payType)){
			$id = "";
			$count = 0;
			for ($i = 0; $i < strlen($orderId); $i++) {
				$char = $orderId[$i];
				if ($char == "9" && substr($orderId, $i, 5) == "90009") {
					break; // Kết thúc vòng lặp nếu gặp số "90009"
				}
				$id = $id . $orderId[$i];
			}
			if(UpdateThanhToanHoaDon($id)){
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn đã thanh toán</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title">Cảm ơn đã thanh toán!</h2>
                        <p class="card-text">Chúng tôi đã nhận được thanh toán của bạn.</p>
                        <a href="thanhtoanhoadon.php" class="btn btn-primary">Quay lại trước</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>