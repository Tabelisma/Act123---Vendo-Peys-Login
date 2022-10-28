<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>

    <form method="post">
        <label for="size">Select Photo Size:</label>
        <input type="range" id="size" name="size" min="0" max="100" step="10" value="60"><br>
        <label for="brdrcolor">Select Border Color:</label>
        <input type="color" id="brdrcolor" name="brdrcolor"><br>
        <input type="submit" name="btnProcess" value="Process"><br>


        <?php
            $phtSize;

            if(isset($_POST['btnProcess'])){
                $phtSize = $_POST['size'];
                $borderColor = $_POST['brdrcolor'];
            }
            else{
                $phtSize= '60';
                $borderColor='#000000';
            }
            
            echo '<br>';
            echo '<img src="profilepic.jpg" width="'.$phtSize.'%" alt="Profile Pic" style="border: 4px solid ' . $borderColor . ';">';

        ?>
    </form>
</body>
</html>