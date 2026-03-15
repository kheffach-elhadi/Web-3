<?php

if(isset($_POST['course'],$_POST['credits'],$_POST['grade'])){

$courses = $_POST['course'];
$credits = $_POST['credits'];
$grades = $_POST['grade'];

$totalPoints = 0;
$totalCredits = 0;

echo "<table>";

echo "<tr>
<th>Course</th>
<th>Credits</th>
<th>Grade</th>
<th>Points</th>
</tr>";

for($i=0;$i<count($courses);$i++){

$course = htmlspecialchars($courses[$i]);
$cr = floatval($credits[$i]);
$gr = floatval($grades[$i]);

$points = $cr * $gr;

$totalPoints += $points;
$totalCredits += $cr;

echo "<tr>
<td>$course</td>
<td>$cr</td>
<td>$gr</td>
<td>$points</td>
</tr>";

}

echo "</table>";

$gpa = $totalPoints / $totalCredits;

if($gpa >= 3.7)
$interpretation="Distinction";

elseif($gpa >=3)
$interpretation="Merit";

elseif($gpa >=2)
$interpretation="Pass";

else
$interpretation="Fail";

echo "<h2>Your GPA = ".number_format($gpa,2)." ($interpretation)</h2>";

}

?>
