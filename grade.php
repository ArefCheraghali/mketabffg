<?php include 'template/header.php';
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];
        $answer7 = $_POST['question-7-answers'];
        $answer8 = $_POST['question-8-answers'];
        $answer9 = $_POST['question-9-answers'];
        $answer10 = $_POST['question-10-answers'];
        $answer11 = $_POST['question-11-answers'];
        $answer12 = $_POST['question-12-answers'];
        $answer13 = $_POST['question-13-answers'];
        $answer14 = $_POST['question-14-answers'];
        $answer15 = $_POST['question-15-answers'];
        $answer16 = $_POST['question-16-answers'];
        $answer17 = $_POST['question-17-answers'];
        $answer18 = $_POST['question-18-answers'];
        $answer19 = $_POST['question-19-answers'];
        $answer20 = $_POST['question-20-answers'];
        $answer21 = $_POST['question-21-answers'];
        $answer22 = $_POST['question-22-answers'];
        $answer23 = $_POST['question-23-answers'];
        $tash1 = $_POST['question-24-answers'];
        $tash2 = $_POST['question-25-answers'];

            $grade = 0;

       if ($answer1 == "C") {$grade = $grade+1; }
        if ($answer2 == "C") {$grade = $grade+1; }
        if ($answer3 == "A") {$grade = $grade+1; }
        if ($answer4 == "D") {$grade = $grade+3; }
        if ($answer5 == "A") {$grade = $grade+2; }
        if ($answer6 == "C") {$grade = $grade+1; }
        if ($answer7 == "D") {$grade = $grade+1; }
        if ($answer8 == "A") {$grade = $grade+1; }
        if ($answer9 == "D") {$grade = $grade+1; }
        if ($answer10 == "A") {$grade = $grade+2; }
        if ($answer11 == "D") {$grade = $grade+2; }
        if ($answer12 == "A") {$grade = $grade+1; }
        if ($answer13 == "B") {$grade = $grade+1; }
        if ($answer14 == "A") {$grade = $grade+2; }
        if ($answer15 == "A") {$grade = $grade+2; }
        if ($answer16 == "C") {$grade = $grade+3; }
        if ($answer17 == "D") {$grade = $grade+1; }
        if ($answer18 == "A") {$grade = $grade+1; }
        if ($answer19 == "A") {$grade = $grade+2; }
        if ($answer20 == "A") {$grade = $grade+3; }
         if ($answer21 == "A") {$grade = $grade+1; }
         if ($answer22 == "D") {$grade = $grade+2; }
         if ($answer23 == "A") {$grade = $grade+2; }
            $telnum=$_SESSION['telnum'];
            $sqlCheck = "SELECT id FROM test2 WHERE telnum = ?";
            $stmt = $connection->prepare($sqlCheck);
            $stmt->bind_param('i', $telnum);
            $stmt->execute();
            $stmt->bind_result($id);
            if ($stmt->fetch()) {
                $error = true;
               $connection->close();

              echo '<meta http-equiv="refresh" content="0; URL=./Dashboard" />';
            } else {
                 $sql = "INSERT INTO test2 (telnum ,grade,tash1,tash2)
                 VALUES (?,?,?,?)";
           
                 $statement = $connection->prepare($sql);
                 $statement->bind_param("iiss", $telnum, $grade,$tash1,$tash2);
                 $statement->execute();
                  $connection->close();

                 echo '<meta http-equiv="refresh" content="0; URL=./Dashboard" />';
               
            }
 ?>
 

            
<?php include 'template/footer.php'; ?>