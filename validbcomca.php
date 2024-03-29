<html>
    <head>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <body> <script src="https://cdn.lordicon.com/lordicon.js"></script>
<div style="display: flex; align-items: center;">
    <lord-icon
        id="myLordIcon"
        src="https://cdn.lordicon.com/epietrpn.json"
        trigger="hover"
        stroke="bold"
        style="width: 50px; height: 50px; cursor: pointer;">
    </lord-icon>
    <span style="margin-left: 10px; cursor: pointer;"><a href='bcomca.php' style='color: black; text-decoration: none;'>  Click me to go home </a></span>
</div>
   
    <script>
        const myLordIcon = document.getElementById('myLordIcon');
        myLordIcon.addEventListener('click', function() {
            window.location.href = 'bcomca.php';
        });
    </script>
<table class="table">
  <thead class="thead-dark">
                <tr>
                    <th>Fullname</th>
                    <th>Register Number</th>
                    <th>Course</th>
                 
                    <th>Year level</th>
                    <th>section</th>
                       <th>exam</th>
                    <th>score</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               <?php 
    include "conn.php";
    $examee = $_POST['exam_id'];
    $yre = $_POST['yr'];
    $sec = $_POST['sec'];
    $coseid=$_POST['coseid'];
    $selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_course='$coseid' AND exmne_year_level='$yre' AND exmne_section='$sec' ORDER BY exmne_id DESC");
    if ($selExmne->rowCount() > 0) {
        while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { 
?>
            <tr>
                <td><?php echo $selExmneRow['exmne_fullname']; ?></td>
                <td><?php echo $selExmneRow['exmne_regno']; ?></td>
                <td>
                    <?php 
                        $exmneCourse = $selExmneRow['exmne_course'];
                        $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' AND cou_name='BCOM CA' ")->fetch(PDO::FETCH_ASSOC);
                        if (is_array($selCourse) && !empty($selCourse['cou_name'])) {
                            echo $selCourse['cou_name'];
                        } 
                    ?>
                </td>
<td>
    <?php 
        echo $selExmneRow['exmne_year_level'] ;
    
    ?>
</td>
       <td><?php echo $selExmneRow['exmne_section']; ?></td>
              <td>
  <?php
  $eid = $selExmneRow['exmne_id'];
  $selExName = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id=ea.exam_id WHERE  ea.exmne_id='$eid' AND ex_title='$examee' ")->fetch(PDO::FETCH_ASSOC);
  if(!empty($selExName) && isset($selExName['ex_id'])){
    $exam_id = $selExName['ex_id'];
    echo $selExName['ex_title'];
  }else{
    echo $examee;
  }
  ?>
</td>
<td>
  <?php 
  if(!empty($exam_id)){
    $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$eid' AND ea.exam_id='$exam_id' AND ea.exans_status='new' ");
    $scoreCount = $selScore->rowCount();
    $over = isset($selExName['ex_questlimit_display']) ? $selExName['ex_questlimit_display'] : 0;
    echo "<span>$scoreCount/ $over</span>";
  }else{
    echo 'not yet';
  }
  ?>
</td>
            </tr>
<?php
        }
    }
?>

            </tbody>
        </body>
                                    </html>
