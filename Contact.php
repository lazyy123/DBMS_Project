
<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  
  <!-- Favicons -->
  <link href="./assets/Images/page/books.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link href="CSSAll/ContactCSS.css" rel="stylesheet">

  <!--======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

        <?php
     $IDD= $_SESSION['IID'];
     if($IDD[0]=='F')
     {
      echo'<li><a href="Homepage_fac.php">Home</a></li>';
     }
     else if($IDD[0]=='S')
     {
      echo'<li><a href="Homepage_std.php">Home</a></li>';
     }
     else
     {
     echo' <li><a href="Homepage_lib.php">Home</a></li>';
     }
        ?>
        
          
         
          <li><a href="profilePage.php">Account</a></li>
         
          <li class="active"><a href="Contact.php">Contact</a></li>
          
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->

<div class="container">
  <h2>For Any Query or Need, Contact With Us.</h2><br>
    

  <div class="row">
        <div class="col-10">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#report">Report</a>
                </li>
                                    
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#LibrarianList">Contact Librarians</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#requestBook">Request a Book</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content ml-1" id="myTabContent">
                <div id="report" class="tab-pane fade show active"><br>
                <form action="Contact.php" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input disabled type="text" name="Pname" class="form-control" value=<?php echo '"'.$_SESSION["NNAME"].'"'?> id="name" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="col">
                            <input disabled type="text" name="Pid" class="form-control" value=<?php echo '"'.$_SESSION["IID"].'"'?> id="id" placeholder="Enter Your ID" name="id">
                        </div>
                        <br><br>
                            <input disabled type="text" name="Pemail" class="form-control" value=<?php echo '"'.$_SESSION["Mail_ID"].'"'?> id="topic" placeholder="Enter Your Email" name="topic">
                        <br><br>
                            <input type="text" name="topic" class="form-control" id="topic" placeholder="What its about?" name="topic">
                        <br>
                        <br>
                        <textarea class="form-control" name="reportmsg" rows="5" id="msg" placeholder="Your Massage.." name="msg"></textarea>
                        <br><br><br>
                    </div>
                    <br><button type="submit" name="save" class="btn btn-primary">Submit</button>
                    <br><br>
                </form>
            </div>

            <!-- Tab panes -->
            <div id="LibrarianList" class="container tab-pane fade"><br>
            <p>Search Librarian:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

  <?php
              echo '<table id="mytable1" class="table table-hover">'
              ?>
                
    <?php echo '<thead>
      <tr>
        <th>Librarian ID</th>
        <th>Librarian Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>'?>

    <?php
      $usr_name = 'SYSTEM';
      $pass = '123ORacle';
  
      $connectionString = 'localhost/xe';
  
      $connect = oci_connect($usr_name,$pass,$connectionString);
  
      if (!$connect){
          echo '<p>Could Not Connect!</p>';
      }

      $show_table = "select * from PERSON_TABLE where ID like 'L%'";
      $out = oci_parse($connect,$show_table);
      oci_execute($out);

      while ($row = oci_fetch_array($out, OCI_RETURN_NULLS+OCI_ASSOC)){
        echo "
              <tr>
              <td>".$row['ID']."</td>
              <td>".$row['NAME']."</td>
              <td>".$row['EMAIL']."</td>
              <td>".$row['PHONE_NUM']."</td>
              
              ";
      }
    ?>
    <?php echo '</table>' ?>
              
  
</div>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
            

<!-- Tab panes -->
<div id="requestBook" class="container tab-pane fade"><br>
<form action="Contact.php" method="POST">
    <div class="form-row">
        <div class="col">
            <input disabled type="text" name="Prname" value=<?php echo '"'.$_SESSION["NNAME"].'"'?> class="form-control" id="name" placeholder="Enter Your Name">
        </div>
        <div class="col"><!--ekhaner Prid Report_at_libr te niye row delete korte hobe-->
            <input disabled type="text" name="Prid" value=<?php echo '"'.$_SESSION["IID"].'"'?> class="form-control" id="id" placeholder="Enter Your ID">
        </div>
            <br><br>
            <input disabled type="text" name="Premail" value=<?php echo '"'.$_SESSION["Mail_ID"].'"'?> class="form-control" id="email" placeholder="Enter your Email">
            <br><br>          
            <input type="text" name="bkname" class="form-control" id="Bookname" placeholder="Name of the Book">
            <br><br>
            <input type="text" name="arname" class="form-control" id="authorname" placeholder="Name of the Author">
            <br><br>
            
    </div>
        <br><button type="submit" name="saave" class="btn btn-primary">Submit</button>
        <br><br>
</form>
</div>



        </div>
    </div>

</div>
</div>




  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              MK University<br>
              Mirpur Cantonment,<br>
              Dhaka. <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> kothalibrary@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="">All the books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Send us massage</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Wanna get notification about new books?</h4>
            <p>Stay Conected..</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Click Here!">
            </form>
          </div>

        </div>
      </div>
    </div>

  <?php
  ob_flush();
  ?>
</body>

</html>

<!----Contact---->

<?php 
    //request book
    $usr_name1 = 'SYSTEM';
    $pass1 = '123ORacle';

    $connectionString1 = 'localhost/xe';

    $connect1 = oci_connect($usr_name1,$pass1,$connectionString1);
    if(isset($_POST['saave']))
    { 
      $Prname = $_SESSION["NNAME"];
      $Prid = $_SESSION["IID"];
      $Premail = $_SESSION["Mail_ID"];
      $bkname = $_POST['bkname'];
      $_SESSION['Bk_NAME'] = $bkname;
      $arname = $_POST['arname'];
      $_SESSION['Pr_ID']=$Prid;
      //$_SESSION['Pr_EmailID']=$Premail;

      $command1 = 'insert into Requst_book';
      $datas1 = ' values (' . "'".$Prname."'". "," . "'".$Prid."'". "," . "'".$Premail."'". ",". "'".$bkname."'". ",". "'".$arname."'".')';
      //echo $datas;
      $command1.=$datas1;
      $out1 = oci_parse($connect1,$command1);
      $res1 = oci_execute($out1);

      $j=0;
      while($row1=oci_fetch_array($out1,OCI_ASSOC+OCI_RETURN_NULLS)) {
      ?>
        <tr>
          <td><?php echo $row1["Prname"]; ?></td>
          <td><?php echo $row1["Prid"]; ?></td>
          <td><?php echo $row1["Premail"]; ?></td>
          <td><?php echo $row1["bkname"]; ?></td>
          <td><?php echo $row1["arname"]; ?></td>
        </tr>
      <?php
      $j++;
      }   
    }
?>


<?php 
//report
$usr_name = 'SYSTEM';
    $pass = '123ORacle';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);
    
    if(isset($_POST['save']))
    { 
      $Pname = $_SESSION["NNAME"];
      //echo $Pname;
      $Pid = $_SESSION["IID"];
      $Pemail = $_SESSION["Mail_ID"];

      $topic = $_POST['topic'];
      $_SESSION['R_TOPIC'] = $topic;
      $reportmsg = $_POST['reportmsg'];

      $command = 'insert into ReportTable';
      $datas = ' values (' . "'".$Pname."'". "," . "'".$Pid."'". ",". "'".$Pemail."'". ",". "'".$topic."'". ",". "'".$reportmsg."'".')';
      //echo $datas;
      $command.=$datas;
      echo $command;
      $out = oci_parse($connect,$command);
      $res = oci_execute($out);

      $i=0;
      while($row=oci_fetch_array($out,OCI_ASSOC+OCI_RETURN_NULLS)) {
      ?>
        <tr>
          <td><?php echo $row["Pname"]; ?></td>
          <td><?php echo $row["Pid"]; ?></td>
          <td><?php echo $row["Pemail"]; ?></td>
          <td><?php echo $row["topic"]; ?></td>
          <td><?php echo $row["reportmsg"]; ?></td>
        </tr>
      <?php
      $i++;
      }
    }
?>



