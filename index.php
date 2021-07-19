<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
<br><br>
<img src="images/m.png" class="img-fluid ml-4" height="200" width="250">
<br>
<div class="col-lg-11 text-right">
<a href="" class="text-danger">New to mailBOX?</a>
<button class="btn btn-danger" onClick="location.href='register.php'">CREATE AN ACCOUNT</button>
</div><br><br><br>
<div class="col-lg-12">
<div class="row">
<div class="col-lg-7">
<ul class="list-unstyled ml-4">
<li><img src="images/1.png" class="img-fluid float-left mr-4" height="70" width="70"><h2>Email by mailBox</h2><br><br>
<ul>
<ol>
<li class="list-unstyled"><img src="images/22.png" class="img-fluid float-left mr-4" height="50" width="70"><h4>Fast and Easy</h4>
<p>An efficient and useful email service by mailBOX<br>
Faster and easily accessible emails</p></li>
<li class="list-unstyled"><img src="images/secure-email.png" class="img-fluid float-left mr-4" height="50" width="70"><h4>Secured Emails</h4>
<p>All your emails secured with mailBox<br></p></li>
<li class="list-unstyled"><a href="" class="text-primary mr-4">About mailBOX</a> <a href="" class="text-primary mr-4">Create an account</a> <a href="" class="text-primary mr-4">About us</a></li>
</ol>
</ul>
</li>
</ul>
</div>
<div class="col-lg-4">
<div class="table-responsive">
<table class="table bg-light">
<tr><td>
<form method="post" action="account.php">
<p class="float-left"><strong>Sign in</strong><p>
<p class="float-right mb-4 text-light">mailBOX</p><br>
<hr>
<label class="ml-4">UserName</label><input type="text" name="u"><br><br>
<label class="ml-4">Password</label><input type="text" name="p"><br><br>
<div class="form-check">
      <label class="form-check-label float-right">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div><br><br>
	<center>
<button class="btn btn-secondary btn-center">Sign in</button><br><br>
<a href="">Don't have an account</a></center>
</form>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
<div class="col-11">
<hr class="bg-dark">
</div>
<div class="col-11">
<center>
<p>&copy;<strong>mailBOX.com 2021</strong></p>
</center>
</div>

</body>
</html>