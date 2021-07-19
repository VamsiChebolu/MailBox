<?php
echo "<table border='1' align='center'>";
echo "<tr><th colspan='2'><u>ACCOUNT RESULTS</</th></tr>";
echo "<tr><td>USER:</td><td>".$_POST['fn'].$_POST['ln']."</td></tr>";
echo "<tr><td>PASSWORD:</td><td>".$_POST['cu']."</td></tr>";
echo "<tr><td>CONFIRMPASSWORD:</td><td>".$_POST['cp']."</td></tr>";
echo "<tr><td>PASSWORD:</td><td>".$_POST['cu']."</td></tr>";
echo "<tr><td>DOB:</td><td>".$_POST['dob']."</td></tr>";
echo "<tr><td>GENDER:</td><td>".$_POST['r']."</td></tr>";
echo "<tr><td>PHONE:</td><td>".$_POST['pn']."</td></tr>";
echo "<tr><td>COUNTRY:</td><td>".$_POST['country']."</td></tr>";
echo "</table>";
?>