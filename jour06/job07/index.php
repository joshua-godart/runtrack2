<!DOCTYPE html>
<html>
<head>
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required><br><br>
        
        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>
        
        <input type="submit" value="Valider">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        
        if ($fonction === "gras") {
            // Fonction pour mettre en gras les mots commençant par une majuscule
            $words = preg_split('/\s+/', $str);
            foreach ($words as $word) {
                $firstChar = $word[0];
                if ($firstChar >= 'A' && $firstChar <= 'Z') {
                    echo "<b>$word</b> ";
                } else {
                    echo "$word ";
                }
            }
        } elseif ($fonction === "cesar") {
            // Fonction de décalage de caractères (César)
            $decalage = isset($_POST["decalage"]) ? (int)$_POST["decalage"] : 2;
            $result = "";
            $length = strlen($str);
            
            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                
                if ($char >= 'a' && $char <= 'z') {
                    $newChar = chr((ord($char) - ord('a') + $decalage) % 26 + ord('a'));
                    $result .= $newChar;
                } elseif ($char >= 'A' && $char <= 'Z') {
                    $newChar = chr((ord($char) - ord('A') + $decalage) % 26 + ord('A'));
                    $result .= $newChar;
                } else {
                    $result .= $char;
                }
            }
            
            echo $result;
        } elseif ($fonction === "plateforme") {
            // Fonction pour ajouter "_" aux mots finissant par "me"
            $words = preg_split('/\s+/', $str);
            foreach ($words as $word) {
                if (substr($word, -2) === "me") {
                    echo $word . "_ ";
                } else {
                    echo $word . " ";
                }
            }
        }
    }
    ?>
</body>
</html>


