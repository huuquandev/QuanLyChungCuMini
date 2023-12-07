<?php 
    include_once 'function.php';
	$id = $_GET['id'];
    if(DeleteHoaDon($id)){
		echo "<script>alert('Xóa hóa đơn thành công');
		window.location.href = 'home.php?title=quanlythuphi';
		</script>";
	}
	else{
		echo "<script>alert('Xóa hóa đơn không thành công');
		window.location.href = 'home.php?title=quanlythuphi';
		</script>";
	}
?>