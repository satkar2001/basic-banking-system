<?php include('constants.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic-banking-system</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style1.css">

</head>
<body>



<header>



    <div class="header">

        <div id="menu-bar" class="fas fa-bars"></div>
        <h1>SATKAR BANK</h1>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="transactions.php">transfer</a>
            <a href="history.php">view history</a>
        </nav>


    </div>

</header>
<div class="main-content">
<div class='wrapper'>
<table class="tbl-full">
                       <tr>
                               <th>ID</th>
                               <th>Sender</th>
                               <th>Reciever</th>
                               <th>Transferred Amount</th>
                       </tr>
                <?php
                        $sql='SELECT * FROM  transfers';
                        $res=mysqli_query($conn,$sql);
                        if($res==TRUE){
                                $count=mysqli_num_rows($res);
                                 $sn=1;
                                if($count>0){
                                        while($rows=mysqli_fetch_assoc($res)){
                                                $id=$rows['id'];
                                                $sender=$rows['fromuser'];
                                                $reciever=$rows['touser'];
                                                $trans=$rows['transamount'];
                                                ?>

                                                <tr>
                                                        <td>
                                                           <?php echo $sn++;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $sender;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $reciever;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $trans;?>
                                                         </td>
                                                </tr>
                                                <?php
                                        }
                                }
                                else{
                                        //no data in database
                                }

                        }
                      ?>

               </table>
</div>
</div>
<footer class="sticky-footer">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="transactions.php">transfer</a></li>
            <li><a href="history.php">history</a></li>
            <li><a href="#">about</a></li>
        </ul>
        <p> © Copyright satkar acharya 2021.</p>
    </footer>

</body>
</html>
