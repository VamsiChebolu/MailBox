<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="Datepicker/flora.datepick.css">
<script src="Datepicker/jquery-1.4.2.js"></script>
<script src="Datepicker/jquery.datepick.js"></script>
<script>
$(function() {
var pattern={
dateFormat:"DD, dd-M-y"
};
$('#popupDatepicker').datepick(pattern);
});
</script>

</head>
<body>
<br>
<div class="col-lg-12">
<img src="images/m.png" class="img-fluid" height="200" width="250">
<button class="btn btn-light text-danger float-right mt-2" onClick="location.href='index.php'"><strong>Sign in</strong></button>
</div>
<hr><br><br>
<div class="col-lg-12">
<div class="row">
<div class="col-lg-7">
<ul class="list-unstyled ml-5">
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
<div class="col-lg-5">
<div class="table-responsive">
<table class="table bg-light">
<tr><td>
<form method="post" action="account2.php">
<p><strong>Enter your Details</strong></p>
<label class="ml-5">Enter FirstName:</label><input type="text" name="fn"><br>
<label class="ml-5">Enter LastName:</label><input type="text" name="ln"><br>
<label class="ml-5">Choose your username:</label><input type="text" name="cu"><br>
<label class="ml-5">Create a password:</label><input type="text" name="cp"><br>
<label class="ml-5">Confirm your password:</label><input type="text" name="cyp"><br>
<label class="ml-5">Date of birth:</label><input type="text" id="popupDatepicker" value="" name="dob"><br>
<label class="ml-5">Sex:</label>
<input type="radio" name="r"  value="Male" checked="checked"/>Male
<input type="radio" name="r"  value="Female"/>Female<br>
<label class="ml-5">Phone number:</label><input type="text" name="pn"><br>
<label class="ml-5">Country:</label>
<select name='country'>
<option>India</option>
<option>America</option>
<option>England</option>
<option>Bangladesh</option>
</select><br>
<button class="btn btn-primary ml-5">Create Account</button>
</form>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
<br><br>
<div class="col-12 bg-secondary">
<center>
<p>&copy;<strong>mailBOX.com 2021</strong></p>
</center>
</div>

</body>
</html>