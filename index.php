<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial scale=1.>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lainalaskuri</title>
</head>
<body>
    <h3>Lainalaskuri</h3>
    <form action="laske.php" method="post">
        
        <div>
        <label>Lainasumma :</label>
        <input name="sum" type="number" step="0.01" required/><label>€</label> 
        </div>

        <div>
        <label>Korko :</label>
        <select name="korko">
            <?php
            for ($i = 0.25;$i <= 5;$i = $i+0.25){
                printf( "<option>%.2f</option>",$i);
            }
            ?>
        </select>
         </div>

         <div>
        <label>Aika :</label>
        <select name="aika">
            <?php
            for ($i = 1;$i <= 25;$i++){
                print "<option>$i</option>";
            }
            ?>
        </select>
       
        </div>
  
        <button>Laske</button>
        
    </form>
</body>

</html>