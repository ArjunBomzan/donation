<?php

$sql="SELECT * FROM student";
$result=$db->query($sql);

?>

<div class="text-dark">
 <h2>Admited Students</h2> 
</div>
<table class="table">
<thead class="thead-dark">

<tr>

<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Address</th>
<th scope="col">Dob</th>
<th scope="col">Gender</th>
<th scope="col">guardian</th>
<th scope="col">Phone</th>
<th scope="col">Admited Date</th>
<th scope="col">category</th>
<th scope="col">Reason</th>
<th scope="col">Image</th>
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
  $gender=$row['gender'];
  $phone=$row['phone'];
  $reason=$row['reason'];
  $guardian=$row['guardian'];
  $admitdate=$row['admitdate'];
  $category=$row['category'];
  $img=$row['img'];

    echo"<tr>
     
      <td>$fname</td>
      <td>$lname</td>
      <td>$address</td>
      <td>$dob</td>
      <td>$gender</td>
      <td> $guardian</td>
      <td>$phone</td>
      <td>$admitdate</td>
      <td>$category</td>
      <td>$reason</td>
      <td><img height='50px' witdh='50px'src='../images/student/$img'></td>

    </tr>";
    


};
?>
  </tbody>
</table>
