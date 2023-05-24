<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$dic = ["consonnes" => 0, "voyelles" => 0];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}
$count2 = 0;
for ($i = 0; $i < $count; $i++) {
    if ($str[$i] !== ' ') {
        $count2++;
    }
}
for ($i = 0; $i < $count; $i++) {
    $char = $str[$i];

    if ($char === 'a' || $char === 'e' || $char === 'i' || $char === 'o' || $char === 'u' || $char === 'y' || $char === 'A' || $char === 'E' || $char === 'I' || $char === 'O' || $char === 'U' || $char === 'Y') {
        $dic["voyelles"] ++;
    }
}
$dic["consonnes"] = $count2 - $dic["voyelles"];
?>

<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: center;
        padding: 8px;
        border: 1px solid black;
    }
</style>