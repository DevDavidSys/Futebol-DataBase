<?php include('inicial.php');?>
<?php include('getTable.php');?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Futebol</title>
        <style>
            <?php include('style.css');?>
        </style>
    </head>
    <body>
        
        <div class="sidebar" id="sidebar">
            <div class="icon-hover">
                <img id="sidebar_icon" src="./Assets/soccer-ball-variant.png">
            </div>
            <ul id="list_sidebar" class="hide">
                <li>Pesquisar Jogo</li>
                <li>Contato</li>
            </ul>   
        </div>
        <div class="container">
            <form method="POST" action="table.PHP">
                <input type="text" placeholder="Time 1" list="times" name="team1" value="<?php echo $_POST['team1'];?>">
                <input type="text" placeholder="Time 2" list="times" name="team2" value="<?php echo $_POST['team2'];?>">
                <input type="submit" value="Enviar">
            </form>
           
            <?php 
                getTable($_POST['team1'],$_POST['team2'],$conn);
             ?>
            <datalist id="times">
                <?php
                    $result = $conn->query('SELECT DISTINCT Mandante FROM campeonato_brasileiro_full ORDER BY Mandante ASC');
                    if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['Mandante']."'>".$row['Mandante']."</option>";
                        
                        }
                    }
                ?>
            </datalist>
        </div>
    
        
    </body>
    <script src="script.js">
    </script>
</html>