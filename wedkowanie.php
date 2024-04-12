<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="nav">
        <h1>Portal dla wedkarzy</h1>

    </div>
    <div class="left">
        <div class="up">
            <h3>Ryby zamieszkujace rzeki</h3>
            <?php
                    $servername= "localhost";
                    $username="root";
                    $password="";
                    $dbname="wedkowanie";
                    $conn= new mysqli($servername, $username, $password, $dbname);
                    $sql="SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby. id=lowisko.Ryby_id and lowisko.rodzaj = 3;
                    ";
                                $result=$conn->query($sql);
                                echo "<ol>";
                                if ($result->num_rows > 0) {
                                
                                    while($row = $result->fetch_assoc()) {
                                        echo "<li> $row[nazwa] pływa w rzece $row[akwen] , $row[wojewodztwo] </li>";
                                    }
                                
                                } else {
                                    echo "0 results";
                                } 
                                echo "</ol>";
                                $conn-> close();
                ?>


        </div>
        <div class="down">
            <h3>Ryby drapiezne naszych wod</h3>
            <?php
            $servername= "localhost";
            $username="root";
            $password="";
            $dbname="wedkowanie";
            $conn= new mysqli($servername, $username, $password, $dbname);
            $sql="SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1;";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>
                <td>L.p.</td>
                <td>Gatunek</td>
                <td>Występowanie</td>
              </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn-> close();
           
            ?>

            

        </div>


    </div>
    <div class="right">
        <img src="ryba2.jpg" alt="Sum">
        <a href="kwerendy.txt"></a>

    </div>
    <div class="footer">
        <p>Strone wykonał adampandabaj</p>

    </div>
    
</body>
</html>