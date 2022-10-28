<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>Log In System</title>
</head>
<body>
    <?php
        session_start();
            if(isset($_POST['SgnInBtn']) && isset($_POST['UserType'])){
                $Arrtype = $_POST['UserType'];

            foreach ($Arrtype as $key => $typeValue){
            if(($typeValue == "Admin")){            
                $Admin1 ="admin";
                $PAdmin1 ="pass1234";
                $Admin2 = "renmark";
                $PAdmin2 = "pogi1234";
            
            if(($_POST['Username'] == $Admin1 && $_POST['Password']==$PAdmin1))
            {
                $_SESSION['Username'] = $Admin1;

                echo '<div class="alert alert-success w-20 p-3 mx-auto">
                Welcome to the system: ',$Admin1,
               '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
            }
            elseif(($_POST['Username'] == $Admin2 && $_POST['Password']==$PAdmin2)){
                    $_SESSION['Username'] = $Admin2;
                    echo '<div class="alert alert-success w-20 p-3 mx-auto">
                    welcome to my system ',$Admin2,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                }
                else
                {
                echo '<div class="alert alert-danger w-20 p-3 mx-auto">
                Invalid Username / Password
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                }         
            }
            if(($typeValue == "CntMngr")){
            
                $CntMngr1 ="pepito";
                $PcntMngr1 ="manaloto";
                $CntMngr2 = "juan";
                $PcntMngr2 = "delacruz";
                   
                if(($_POST['Username'] == $CntMngr1 && $_POST['Password']==$PcntMngr1))
                {
                    $_SESSION['Username'] = $CntMngr1;

                    echo '<div class="alert alert-success w-20 p-3 mx-auto">
                    Welcome to the system: ',$CntMngr1,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                }
                elseif(($_POST['Username'] == $CntMngr2 && $_POST['Password']==$PcntMngr2)){
                        $_SESSION['Username'] = $CntMngr2;
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        Welcome to the system: ',$CntMngr2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-20 p-3 mx-auto">
                    Invalid Username / Password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }

                if(($typeValue == "SystemUs")){
            
                    $SystmUsr1 ="pedro";
                    $PSystmUsr1 ="penduko";
                           
                    if(($_POST['Username'] == $SystmUsr1 && $_POST['Password']==$PSystmUsr1))
                    {
                        $_SESSION['Username'] = $SystmUsr1;
    
    
                        echo '<div class="alert alert-success w-20 p-3 mx-auto">
                        Welcome to the system: ',$SystmUsr1,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }
                        else
                        {
                        echo '<div class="alert alert-danger w-20 p-3 mx-auto">
                        Invalid Username / Password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }
                }
            }
            
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                <img src="blankDPinLogin.png" alt="Blank" class="profile-img-card rounded-circle w-50" >              
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="post">
                <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <select class="form-control w-75 d-flex text-center" id="UType" name ="UserType[]">
                <option value="Admin">Admin</option>
                <option value="CntMngr">Content Manager</option>
                <option value="SystemUs">System User</option><br>
                <input type="text" name="Username" id="username" class="form-control w-75" placeholder="User Name" required autofocus>
                <input type="password" name="Password"  id="password" class="form-control w-75" placeholder="Password" required>
                <button class="btn btn-lg btn-info btn-block btn-signin form-control w-75" type="submit" name="SgnInBtn">Sign in</button>
                </form>
                </select>
                </div>
             </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</body>
</html>