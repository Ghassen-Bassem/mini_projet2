<?php
include('includes/header.php');
include('includes/login_header.php') 
?>
<div class="py-5">
 <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-5">
 <div class="mt-5 card">
 <div class="card-header">
 <h4>Login</h4>
 </div>
 <div class="card-body">
 <form action="logincode.php" method="POST">
 <div class="form-group mb-3">
 <label>Email ID</label>
 <input type="text" name="email" required
placeholder="Saisir votre adresse mail"
 class="form-control">
 </div>
<div class="form-group mb-3">
 <label>Mot de passe</label>
 <input type="password" name="password" required
placeholder="Saisir votre mot de passe"
 class="form-control">
 </div>
<div class="form-group mb-3">
 <button type="submit" name="login_btn" class="btn btn-primary">Se connecter</button>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>
<?php
include('includes/footer.php'); 
?> 