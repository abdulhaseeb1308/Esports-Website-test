<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'esports');

$result = mysqli_query($con,"SELECT * FROM feedback");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Response</th>
<th>Feedback</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['response'] . "</td>";
echo "<td>" . $row['feedback'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
