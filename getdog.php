<?php
include_once 'db.php';
$q = (isset($_GET['q']) ? $_GET['q'] : 'default');
$sql = "SELECT * FROM breed_info_wlad_arkusz1 WHERE name = '" . $q . "'";
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
<th>Dietary requirements</th>
<th>Shouldn't eat</th>
<th>Weight range</th>
<th>Height range</th>
<th>Life expectancy</th>
<th>Common health problems</th>
<th>Temperament</th>
</tr>";
while ($row = mysqli_fetch_array($results))
{
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Origin:'] . "</td>";
    echo "<td>" . $row['Dietary requirements:'] . "</td>";
    echo "<td>" . $row["Shouldn't eat:"] . "</td>";
    echo "<td>" . $row['Weight range:'] . "</td>";
    echo "<td>" . $row['Height range:'] . "</td>";
    echo "<td>" . $row['Life expectancy:'] . "</td>";
    echo "<td>" . $row['Common health problems:'] . "</td>";
    echo "<td>" . $row['Temperament:'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
