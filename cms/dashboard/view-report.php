<?php

$sql="SELECT * FROM report";
$result=$db->query($sql);

?>
<div class="text-dark">
 <h2>Reported Orphans</h2> 
</div>
<table class="table">
<thead class="thead-dark">

<tr>

<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Address</th>
<th scope="col">DOB</th>
<th scope="col">Age</th>
<th scope="col">Gender</th>
<th scope="col">Phone</th>
<th scope="col">Reason</th>
</tr>
</thead>
<tbody>
    <?php
While($row=mysqli_fetch_assoc($result))
{
    
  $fname=$row['fname'];
  $lname=$row['lname'];
  $address=$row['address'];
  $dob=$row['dob'];
  $age=$row['age'];
  $gender=$row['gender'];
  $phone=$row['phone'];
  $reason=$row['reason'];

    echo"<tr>
     
      <td>$fname</td>
      <td>$lname</td>
      <td>$address</td>
      <td>$dob</td>
      <td>$age</td>
      <td>$gender</td>
      <td>$phone</td>
      <td>$reason</td>
    </tr>";
    


};
?>
  </tbody>
</table>
