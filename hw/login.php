<?php

	include 'config.php';
	
	if($_POST){
		$kullanici =$_POST['name'];
		$pass =$_POST['pass'];


		$query  = $db->query("SELECT * FROM users WHERE username='$kullanici' && sifre='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['name']=$kullanici;
				$_SESSION['pass']=$pass;
				
				print 'Hoş geldiniz '.$kullanici;
				echo '
					<a href="logout.php">çıkış yap</a>
				';
				
		}
            }else{
                header("Location:index.html");
			}
}
	
?>

