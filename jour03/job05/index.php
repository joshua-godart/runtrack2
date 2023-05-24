<?php
$str = "on n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array(
    'consonnes' => 0,
    'voyelles' => 0
);

$voyelles = array('a', 'e', 'i', 'o', 'u', 'y');

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}
// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < $count; $i++) {
    $char = $str[$i];

    // Vérifier si le caractère est une lettre
    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        // Vérifier si le caractère est une voyelle
        if (in_array($char, $voyelles)) {
            $dic['voyelles']++;
        } else {
            $dic['consonnes']++;
        }
    }
}
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
        <td><?php echo $dic['voyelles']; ?></td>
        <td><?php echo $dic['consonnes']; ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>