

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complain</title>
      </head>

 <body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#212529;" id="mainNav"></nav>

<?php

if(isset($_POST['register'])) {
			$name = $_POST['name'];
			$cmp = $_POST['cmp'];
			$username = $_POST['user_id'];
			$fullname = $_POST['fullname'];
			
			try {
					$stmt = $connect->prepare('INSERT INTO cmps (name,cmp,username,fullname) VALUES (:name, :cmp,:username,:fullname)');
					$stmt->execute(array(
						':name' => $name,
						':cmp' => $cmp,
						':username' => $username,
						':fullname' => $fullname
					));

						$errMsg = 'Sent Successfully';
					//header('Location: register.php?action=joined');
			}catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
?>	


	<div class="container">
		<div class="row">
			<div class="col-12">
			
			<h2>Complaints</h2>
				<form action="" method="post">
			  		<div class="row">
				  	    <div class="col-6">
					  	  <div class="form-group">
						    <label for="name">Apartment No/Name Room No/Name</label>
						    <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required>

						    <input type="hidden" name="user_id" value="<?php echo $_SESSION['username']; ?>">
						    <input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']; ?>">
						    
						  </div>
						</div>
						<div class="col-6">
						  <div class="form-group">
						    <label for="cmp">Complaint</label>
						    <input type="text" class="form-control" id="cmp" placeholder="Text" name="cmp" required>
						  </div>
					    </div>
				   </div>

				  <button type="submit" class="btn btn-primary" name='register' value="register">Submit</button>
				</form>			
			</div>
		</div>
	</div>	



 <!-- Bootstrap core JavaScript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/rent.js"></script>
  </body>
</html>
