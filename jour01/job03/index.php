<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        $str = "LaPlateforme";
        $int = 6;
        $bool = true;
        $float = 12.3
        ?>

        <?php
            $tableau = "<table>
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Nom</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>";
            $tableau .= "<tr>
                            <td>".gettype($str)."</td>
                            <td>str</td>
                            <td>$str</td>
                        </tr>";
            $tableau .= "<tr>
                            <td>".gettype($int)."</td>
                            <td>int</td>
                            <td>$int</td>
                        </tr>";
            $tableau .= "<tr>
                            <td>".gettype($bool)."</td>
                            <td>bool</td>
                            <td>$bool</td>
                        </tr>";
            $tableau .= "<tr>
                            <td>".gettype($float)."</td>
                            <td>float</td>
                            <td>$float</td>
                        </tr>";
            $tableau .= "</tbody>
                        </table>";
            echo $tableau;
        ?>

    </body>
</html>