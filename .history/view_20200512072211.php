<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
h2 {
        width:100px;
      background: -webkit-linear-gradient(rgb(212, 30, 30), rgb(218, 146, 146));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
</style>
</head>
<body>
<h2 style="text-align: center;">Registered Participant</h2>
<table>
<tr>
<th>Participant Name</th>
<th>Email</th>
<th>Event Registered</th>
<th>Number of tickets</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email, eventname, tickets FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["eventname"] . "</td><td>"
. $row["tickets"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>