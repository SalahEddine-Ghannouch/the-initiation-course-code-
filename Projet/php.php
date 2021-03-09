<?php
if(isset($_POST["confirmer"])){
		if(isset($_POST["email"])){
			$email = $_POST["email"];
			
		
		// connexion base de donnee
		
try{
	
	$pdo = new PDO("mysql:host=localhost;dbname=projetF","root","");
	
	// insertion
	$rst = $pdo->prepare("insert into email values(?)");
	$rst->execute(array($_POST["email"]));
	
	// deconnexion BD 
	$pdo=null;
	
}catch(PDOException $e){
	$e->getMessage();
	die();
}


}else{
	header("location:index.html");
}
}

?>