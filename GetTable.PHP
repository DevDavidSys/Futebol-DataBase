<?php 
    function getTable($TIME1,$TIME2,$conn){
        $sql = "SELECT * FROM `campeonato_brasileiro_full` 
        WHERE (Mandante = '{$TIME1}' AND Visitante = '{$TIME2}') 
            OR (Mandante = '{$TIME2}' AND Visitante = '{$TIME2}')
        ORDER BY DATA_JOGO ";
    
        $result = $conn->query($sql);
        
        if($result-> num_rows >= 0){
            $table = "<table>
            <tr>
                <thead>
                    <th>Jogo</th>
                    <th>Placar</th>
                    <th> Data </th>
                </thead>
            </tr>";
            
            while($row= $result->fetch_assoc()){
                $table .= "<tr><td>".$row['Mandante']." X ".$row['Visitante']." </td>
                    <td>".$row['Mandante_Placar']." X ".$row['Visitante_Placar']." </td>
                    <td>".$row['Data_Jogo']." </td>
                </tr>" ;
            }
            echo $table;
        }
    }
?>