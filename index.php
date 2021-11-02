<?php
    function QueryTeams(){
        $servername = '127.0.0.1';
        $username = 'client';
        $password = '';
        $dbname = 'futebol';

        $conn = new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
                die('Server Connect Error');
        }
        else{
        }

        $result = $conn->query('SELECT Mandante,Visitante,`Mandante Placar`,`Visitante Placar` FROM campeonato_brasileiro_full WHERE Mandante LIKE "Flamengo" OR Visitante LIKE "Flamengo" ORDER BY Mandante ASC');
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                echo $row['Mandante']." x ".$row['Visitante'].' -> '.$row['Mandante Placar']."-".$row['Visitante Placar']."<br>";
            }
        }
    }
    QueryTeams();
?>