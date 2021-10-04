<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyra 1</title>
</head>
<Style>
    table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 4px;
    text-align: left;
    width: 33%;
    }
    td {
        color: red;
    }
</style>
<body>
    <?php
        $str_data = file_get_contents("starlabs.json");
        $data = json_decode($str_data, true);
        
        $temp = "<table>";
        $temp .= "<tr><th>Name</th>";
        $temp .= "<th>Age</th>";
        $temp .= "<th>School</th></tr>";

        for($i = 0; $i < sizeof($data ["starlab"]); $i++)
        {
            $temp .= "<tr>";
            $temp .= "<td>" . $data["starlab"][$i]["name"] . "</td>";
            $temp .= "<td>" . $data["starlab"][$i]["age"] . "</td>";
            $temp .= "<td>" . $data["starlab"][$i]["school"] . "</td>";
            $temp .="</tr>";
        }
        $temp .= "</table>";
        echo $temp;
    ?>
</body>
</html>