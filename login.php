<?php include 'template/header.php';
if(isset($_SESSION['loggedIn'])){
       echo '<meta http-equiv="refresh" content="0; URL=./Dashboard" />';

}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $telnum = $_POST['telnum'];
    $sql = "SELECT id FROM test1 WHERE telnum = ?";
    $statement = $connection->prepare($sql);
    $statement->bind_param('i',$telnum);
    $statement->execute();
    $statement->bind_result($id);
    if ($statement->fetch()){
        $_SESSION['loggedIn']=true;
        $_SESSION['id']=$id;
        $_SESSION['telnum']=$telnum;
        $connection->close();
       echo '<meta http-equiv="refresh" content="0; URL=./Dashboard" />';
    }else{
        $loggedinError = true;
          $connection->close();

    }
}
?>

<div class="container">
    <div class="row">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="./Home">خانه</a></li>
            <li class="breadcrumb-item active">ورود</li>
        </ol>
    </div>
</div>    
<div class="row row-content">
    <div class="col-12 col-md-6 mx-auto">
         <div class=" mx-auto my-3 p-3 bg-secondary text-white text-center">
                    <h2>ورود به صفحه کاربری</h2>
         </div>
         <div class="card bg-dashboard mb-3 ">
            <div class="card-header text-center">
             <label for="telnum" class=" col-form-label text-right"> لطفا شماره همراهی که برای ثبت نام اعلام کردید را وارد کنید:  </label >
             </div>
             <div class="card-body text-center">
                <form method="post">
                 <div class="form-group row mx-auto">
               
                     <div class="col-7 col-md-4 mr-auto " style="font-family : Tahoma;"dir="ltr">
                    <input
                            type="tel"
                            class="form-control"
                            id="telnum"
                            name="telnum"
                            placeholder="09123456789"
                    />
                      </div>
                    <button type="submit" class="btn btn-danger ml-auto">
                    بررسی
                     </button>
                </div>
                 <?php
                if(isset($loggedinError)){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        کاربری با این شماره یافت نشد!
                    </div>
                    <?php
                }
                ?>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'template/footer.php'; ?>
