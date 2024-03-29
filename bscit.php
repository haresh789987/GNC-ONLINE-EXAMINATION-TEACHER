<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>BSC IT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="bscit.php" style="font-size:40px;">BSC IT<em style="font-size: 30px;">  Bachelor of Science in Information TechnologY</em></a>
        </div>
        <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome <em>Teacher</em></h1>
              <p>PLEASE SELECT EXAM AND DEPARTMENT</p>
        <form action="validbscit.php" method="POST">
            <center>
        
              
                <div>
                    <?php 
                                        include "conn.php";
                    $stmt = $conn->query("SELECT cou_id FROM course_tbl");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    echo "<select name='coseid' style='padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; box-shadow: inset 0 1px 1px rgba(0,0,0,.075);'>";
                    echo "<option selected>course</option>";
                    foreach ($rows as $row) {
                        echo "<option value='{$row['cou_id']}'>{$row['cou_id']}</option>";
                    }
                    echo "</select>";
                    ?>
                <?php
                    include "conn.php";
                    $stmt = $conn->query("SELECT ex_title FROM exam_tbl");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    echo "<select name='exam_id' style='padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; box-shadow: inset 0 1px 1px rgba(0,0,0,.075);'>";
                    echo "<option selected>exam</option>";
                    foreach ($rows as $row) {
                        echo "<option value='{$row['ex_title']}'>{$row['ex_title']}</option>";
                    }
                    echo "</select>";
                ?>
                <select name="yr" style='padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; box-shadow: inset 0 1px 1px rgba(0,0,0,.075);'>
                    <option value="">year</option>
                    <option value="first year">first year</option>
                    <option value="second year">second year</option>
                    <option value="third year">third year</option>
                </select>
                    <select name="sec" style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; box-shadow: inset 0 1px 1px rgba(0,0,0,.075);">
                        <option value="">section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                              </div>
                <input type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-top: 40px;" value="submit">
            </div>
        </div>
                    </center>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </div>



                </form>

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="login.php" style="font-size: 70px; margin-bottom: 90px;">logout</a>
                  </li>
              </ul>
              <p style="font-size: 40px;">THANKS FOR VISITING </p>
              <img src="12log.gif" style="width: 250px; height:250px;">
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
                
