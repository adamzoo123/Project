<?php include("../project/frontend/view/header.php"); 
require_once 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

?>

<?php

$query = $conn->prepare("SELECT * FROM mitarbeiter");
$query->execute();
$result = $query->fetchall();
$yaml = Yaml::dump($result);
file_put_contents('../project/frontend/fields/file.yaml', $yaml);

// echo 
// "<table class='table'>
// <tr>
// <th>name</th>
// <th>vorname</th>
// <th>gebdatum</th>
// </tr>"
// ;

// foreach($result as $row)
// {
// echo "<tr>";
// echo "<td>" . $row['name'] . "</td>";
// echo "<td>" . $row['vorname'] . "</td>";
// echo "<td>" . $row['gebdatum'] . "</td>";
// }

// echo "</tr>";
// echo "</table>";


$getContent = file_get_contents('../project/frontend/fields/file.yaml', true);
$parseContent = Yaml::parse($getContent, Yaml::PARSE_OBJECT);
foreach($parseContent as $content){
    echo $content['name'];
}


?>





<?php include("../project/frontend/view/footer.php"); ?>