<?php
include_once 'db.php';
$q = (isset($_GET['q']) ? $_GET['q'] : 'default');
$sql = "SELECT * FROM breed_info_wlad_arkusz1 WHERE Label = '" . $q . "'";
$results = mysqli_query($conn, $sql);
if (!$results)
{
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

echo "<table>
<tr>
<th>Name</th>
<th>Origin</th>
<th>Male Weight Range</th>
<th>Female weight range</th>
<th>Male Height Range</th>
<th>Female height range</th>
<th>Life expectancy</th>
<th>Food to avoid</th>
<th>Common health problems</th>
<th>Temperament</th>
</tr>";
while ($row = mysqli_fetch_array($results))
{
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Origin'] . "</td>";
    echo "<td>" . $row['Male Weight Range'] . "</td>";
    echo "<td>" . $row['Female weight range'] . "</td>";
    echo "<td>" . $row['Male Height Range'] . "</td>";
    echo "<td>" . $row['Female height range'] . "</td>";
    echo "<td>" . $row['Life expectancy'] . "</td>";
    echo "<td>" . $row['Food to avoid'] . "</td>";
    echo "<td>" . $row['Common health problems'] . "</td>";
    echo "<td>" . $row['Temperament:'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
