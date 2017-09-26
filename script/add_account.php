
<html lang="th">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>สมัครสมาชิก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/themes.css"/>
  <link rel="stylesheet" href="css/plugins.css"/>

</head>
<body>
  <div class="container" id="site-content">
    <div class="block" style="margin-top:10px">
	  <?php
include 'connect.php';

      if($_POST[email]!=''&&$_POST[password]!='')
      {
        $sqw="select * from web where 1 order by id desc";
        $qu=mysql_query($sqw);
        $webdata=array();
        while($web=mysql_fetch_array($qu))
        {
          $webdata[]=array('url'=>trim(str_replace('http://','',$web[url])),'status'=>"0");
        }
        $wb=json_encode($webdata);
        $query=mysql_query("select * from account where email='{$_POST[email]}'");
        $chk=mysql_num_rows($query);
        if($chk==0)
        {
          $sql="INSERT INTO `account` (`id`, `email`, `password`, `web`) VALUES (NULL, '{$_POST[email]}', '{$_POST[password]}', '$wb');";
          mysql_query($sql);
          echo 'เพิ่มข้อมูลบัญชีเรียบร้อย';
        }
        else
        {
          echo 'ขออภัยมีการใช้งาน email นี้แล้ว โปรดใช้ email อื่น';
        }

      }

      ?>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="block-title">
            <h4><strong>เพิ่ม Account </strong></h4><br>
          </div>
          <form action="" method="post">
            <div class="form-group ">
              <label class="col-md-4 control-label" >อีเมลล์</label>
              <div class="col-md-6">
                <input id="email" type="email" name="email" maxlength="60" class="form-control" placeholder="email" required="">
              </div>
            </div>
            <div class="form-group ">
              <label class="col-md-4 control-label" >พาสเวิร์ด</label>
              <div class="col-md-6">
                <input id="password" type="password" name="password" maxlength="60" class="form-control" placeholder="password" required="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-md btn-primary">เพิ่มบัญชี</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- end block-->
    <div class="block" style="margin-top:10px">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="block-title">
            <h4><strong>รายการบัญชีในระบบ</strong></h4><br>
          </div>
          <table class="table table-bordered">
            <tr><td>Email</td><td>Password</td><td>Operation</td></tr>
          <?php
          $sqq="select * from account where 1 order by id desc";
          $query=mysql_query($sqq);
          while($r=mysql_fetch_array($query))
          {
            echo '<tr><td>'.$r[email].'</td><td>'.$r[password].'</td><td><a href="register.php?id='.$r[id].'" class="btn btn-block btn-success">เริ่มสมัคร</a></td></tr>';
          }
          ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
