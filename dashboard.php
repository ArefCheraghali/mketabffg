<?php include 'template/header.php';
?>

<section id="Dashboard">
    <div class="container">
            <div class="row">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="./Home">خانه</a></li>
            <li class="breadcrumb-item active">صفحه کاربری</li>
        </ol>
       
    </div>
        <div class="row row-content">
            <div class="col-12 col-md-6">
                <div class=" mx-auto my-4 p-3 bg-secondary text-white text-center">
                    <h2>صفحه کاربری</h2>
                </div>
                <div class="card bg-dashboard mb-3 ">
                    <div class="card-header text-center">
                       
                        <h3 class="text-center ">آزمون دوم</h3>
                    </div>
                    <div class="card-body text-center">
                        <?php
                        if(isset($_SESSION['loggedIn'])){
                             echo ' شرکت کننده گرامی با شماره همراه '.$_SESSION['telnum'].' ';
                             echo '<br>';
                             echo '<br>';
                             $telnum=$_SESSION['telnum'];
                             $sqlCheck = "SELECT grade FROM test2 WHERE telnum = ?";
                             $stmt = $connection->prepare($sqlCheck);
                             $stmt->bind_param('i', $telnum);
                             $stmt->execute();
                             $stmt->bind_result($grade);
                             if ($stmt->fetch()) {
                                $error_description ='شما آزمون دوم را گذرانده اید  .';
                                echo $error_description;
                                         $connection->close();

                             }else{
                                 echo ' با کلیک بر روی ';
                                echo '<a id="myBtn"  class="btn btn-success disabled" href="./Test" role="button" aria-disabled="true" >ورود به آزمون</a>';
                                 echo '  مسابقه را آغاز کنید !';
                                         $connection->close();

                             }
                        }else{
                          echo '<meta http-equiv="refresh" content="0; URL=./LogIn" />';                }
                        ?>
                    </div>
                </div>
            </div>
           <div class=" m-auto">
                <img class="img-thumbnail img-fluid m-auto" src="./images/1984.png" alt="1984" style="width:220px; height:330px;">
            </div>
        </div>
    </div>
     
</section>



<?php include 'template/footer.php'; ?>



