<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo machine</title>
</head>
<body>
<h1>Vendo Machine</h1>

<form method = "post">
    <fieldset class="fieldset">
      <legend >Product</legend>
        <input type="checkbox" name="Drinks[]" id="drnksCoke" value = "Coke" > <label for="drnksCoke">Coke - ₱15</label><br>
        <input type="checkbox" name="Drinks[]" id="drinksSprite" value = "Sprite"> <label for = "drinksSprite">Sprite - ₱20</label><br>
        <input type="checkbox" name="Drinks[]" id="drnksRoyal" value = "Royal"> <label for = "drnksRoyal">Royal - ₱20</label><br>
        <input type="checkbox" name="Drinks[]" id="drnksPepsi" value = "Pepsi"> <label for = "sodasPepsi">Pepsi - ₱15</label><br>
        <input type="checkbox" name="Drinks[]" id="drnksMountainDew" value = "Mountaindew"> <label for = "drnksMountainDew">Mountain Dew - ₱20</label><br>
  
    </fieldset>
    <fieldset class="fieldset">
      <legend>Options</legend>
        <label for="size">Size:</label>
        <select name="size[]" id="sizes">
        <option value="Regular">Regular </option>
        <option value="UpSize">Up-Size (add ₱5)</option>
        <option value="Jumbo">Jumbo (add ₱10)</option>
        </select>

        <label for="QtyDrnks"> Quantity: </label>
        <input type="number" name="QtyDrnks" id="QtyDrnks" min="1" max="1000000000000">
        <input type="submit" name="CheckOutbtn" value ="Check Out">
    </fieldset>
</form>

<?php
    error_reporting(0);
      if(isset($_POST['CheckOutbtn']) &&
        isset($_POST['Drinks']) && 
        isset($_POST['size']) && 
        isset($_POST['QtyDrnks'])){
        echo '<hr>';
        echo '<b>Purchase Summary:</b> <br>';

        $arrDrnks = $_POST['Drinks'];
        $arrSize = $_POST['size'];
        $DrinksQty = $_POST['QtyDrnks'];

      foreach($arrDrnks as $key => $DrnksValue){
      foreach($arrSize as $key => $SizeValue){
      if (($DrnksValue == "Coke")&&($SizeValue == "Regular")){
            $coke = 15 * $DrinksQty;
            $QtyCoke = $DrinksQty;

      if($DrinksQty > 1){
           echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }
      else
         {
           echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }      
         }

      if (($DrnksValue == "Sprite")&&($SizeValue == "Regular")){
            $sprite = 20 * $DrinksQty;
            $QtySprite = $DrinksQty;
      if($DrinksQty > 1){
           echo '&#9; <li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }                         
         }

      if (($DrnksValue == "Royal")&&($SizeValue == "Regular")){
            $royal = 20 * $DrinksQty; 
            $QtyRoyal = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         }                      
         }

      If (($DrnksValue == "Pepsi")&&($SizeValue == "Regular")){
            $pepsi = 15 * $DrinksQty;
            $QtyPepsi = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }                        
         }

      if (($DrnksValue == "Mountaindew")&&($SizeValue == "Regular")){
             $MountainDew = 20 * $DrinksQty;
             $QtyMountaindew = $DrinksQty;
      If($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }    
         }
 
      if (($DrnksValue == "Coke")&&($SizeValue == "UpSize")){
            $coke = 20*$DrinksQty;
            $QtyCoke = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }    
         }

      if (($DrnksValue == "Sprite")&&($SizeValue == "UpSize")){
            $sprite =25*$DrinksQty; 
            $QtySprite = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }                    
         }
      if (($DrnksValue == "Royal")&&($SizeValue == "UpSize")){
            $royal = 25*$DrinksQty; 
            $QtyRoyal = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         }                        
         }

      if (($DrnksValue == "Pepsi")&&($SizeValue == "UpSize")){
            $pepsi = 20 * $DrinksQty;
            $QtyPepsi = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }            
         }

      if (($DrnksValue == "Mountaindew")&&($SizeValue == "UpSize")){
            $MountainDew = 25 * $DrinksQty;
            $QtyMountaindew = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }         
         }

      if (($DrnksValue == "Coke")&&($SizeValue == "Jumbo")){
            $coke = 25 * $DrinksQty; 
            $QtyCoke = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
         }                    
         }

      if (($DrnksValue == "Sprite")&&($SizeValue == "Jumbo")){
            $sprite = 30 * $DrinksQty;
            $QtySprite = $DrinksQty;
      if($DrinksQty > 1){
           echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
         }                       
         }

      if (($DrnksValue == "Royal")&&($SizeValue == "Jumbo")){
            $royal= 30 * $DrinksQty; 
            $QtyRoyal = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         } 
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
         }                       
         }

      if (($DrnksValue == "Pepsi")&&($SizeValue == "Jumbo")){
            $pepsi= 25 * $DrinksQty;
            $QtyPepsi = $DrinksQty; 
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
         }                        
         }
      if (($DrnksValue == "Mountaindew")&&($SizeValue == "Jumbo")){
             $MountainDew = 30 * $DrinksQty;
             $QtyMountaindew = $DrinksQty;
      if($DrinksQty > 1){
            echo '<li> ',$DrinksQty,' ','pieces of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }
      else
         {
            echo '<li> ',$DrinksQty,' ','piece of ',$SizeValue,' ',$DrnksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
         }         
         }
         }
         } 
        

        $TotalAmounnt = $coke + $sprite + $royal + $pepsi + $MountainDew;
        $TotalDrinks = $QtyCoke + $QtySprite + $QtyRoyal + $QtyPepsi +  $QtyMountaindew;
        echo '<b>Total Number of Items: </b>',$TotalAmounnt,'<br>';
        echo '<b>Total Amount: </b>',$TotalDrinks,'<br>';
        }
    

?>
