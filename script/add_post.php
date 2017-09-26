<?php
include 'setting.php';
include 'connect.php';
?>
<html lang="th">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>สมัครสมาชิก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/themes.css"/>
  <link rel="stylesheet" href="css/plugins.css"/>
<script src="js/jquery.js"></script>
<script>
    $(function(){
        
        // เมื่อเปลี่ยนค่าของ select id เท่ากับ list1
         $("select#cate_id").change(function(){  
             // ส่งค่า ตัวแปร list1 มีค่าเท่ากับค่าที่เลือก ส่งแบบ get ไปที่ไฟล์ data_for_list2.php
             $.get("<?=$website;?>/data_for_list2.php",{
                 cate_id:$(this).val()
             },function(data){ // คืนค่ากลับมา
			 //alert(data);
                    $("select#sub_cate_id").html(data);  // นำค่าที่ได้ไปใส่ใน select id เท่ากับ list2      
                    $("select#sub_cate_id").trigger("change"); // อัพเดท list2 เพื่อให้ list2 ทำงานสำหรับรีเซ็ตค่า
             });
        });          
        
    });
</script>
</head>
<body>
  <div class="container" id="site-content">
    <div class="block" style="margin-top:10px">
      <?php
	  function js_thai_encode($data)
	{	// fix all thai elements
		if (is_array($data))
		{
			foreach($data as $a => $b)
			{
				if (is_array($data[$a]))
				{
					$data[$a] = js_thai_encode($data[$a]);
				}
				else
				{
					$data[$a] = iconv("tis-620","utf-8",$b);
				}
			}
		}
		else
		{
			$data =iconv("tis-620","utf-8",$data);
		}
		return $data;
	}
	 $k=array();
	  foreach($_POST as $key=>$v)
	  {
		
		$k[]=$key;
	  }
	  $key= implode(';', $k);
	  $value = implode(';', $_POST);
	  $ss= $key.'<sep>'.$value;
	 //$ss= json_encode($_POST);
	 //echo $ss;
      if($_POST[submit]=='ยืนยันการประกาศ')
      {
	$sqw="select * from web where 1 order by id desc";
        $qu=mysql_query($sqw);
        $webdata=[];
        while($web=mysql_fetch_array($qu))
        {
          $webdata[]=array('url'=>trim(str_replace('http://','',$web[url])),'status'=>"0");
        }
        $wb=json_encode($webdata);
          $sql="INSERT INTO `task` (`id`, `detail`, `web`,`post_count`) VALUES (NULL, '{$ss}','$wb', '0');";
          mysql_query($sql);
          echo 'เพิ่มงานเรียบร้อย';
       
      }

      ?>
	   <div class="col-lg-10 col-lg-offset-1">
<div class="box-title">
						<div class="row">
						
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1><i class="glyphicon glyphicon-list-alt" style="color: #fa6f57;"></i> เพิ่มประกาศใหม่</h1>
							</div>
						</div>
						<form action="" role="form" method="post" enctype="multipart/form-data">
						  <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputPostType">เลือกบัญชี</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="accoun_id" id="account_id" required="">
						<?php $sql="select * from account where 1 order by id desc";
						$re=mysql_query($sql);
						while($v=mysql_fetch_array($re))
						{
							echo '<option value="'.$v[id].'">'.$v[email].'</option>';
						}
						?>
                                                                                    
                                
                                                 </select>
                                    </div>
                            	</div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputCatename">หมวดหมู่</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="cate_id" id="cate_id" required="">
                                            <option value="">- เลือกหมวดหมู่หลัก -</option>
                                                                                    <option value="1">กล้อง อุปกรณ์ถ่ายภาพ</option>
                                                                                    <option value="2">การศึกษา</option>
                                                                                    <option value="3">กีฬา</option>
                                                                                    <option value="4">เกมส์ ของเล่น</option>
                                                                                    <option value="5">ของสะสม ของเก่า</option>
                                                                                    <option value="6">คอมพิวเตอร์</option>
                                                                                    <option value="7">เครื่องใช้ไฟฟ้า</option>
                                                                                    <option value="8">เครื่องดนตรี</option>
                                                                                    <option value="13">จิวเวลลี่ เครื่องประดับ</option>
                                                                                    <option value="9">ต้นไม้ สัตว์เลี้ยง</option>
                                                                                    <option value="10">ตั๋ว บัตร</option>
                                                                                    <option value="11">ท่องเที่ยว ทัวร์ ที่พัก</option>
                                                                                    <option value="12">ธุรกิจ งาน</option>
                                                                                    <option value="14">บันเทิง เพลง ดนตรี</option>
                                                                                    <option value="15">เฟอร์นิเจอร์</option>
                                                                                    <option value="16">แฟชั่น เสื้อผ้า</option>
                                                                                    <option value="17">มือถือ อุปกรณ์สื่อสาร</option>
                                                                                    <option value="18">แม่และเด็ก</option>
                                                                                    <option value="19">รถ ยานพาหนะ</option>
                                                                                    <option value="21">เสริมสวย สุขภาพ</option>
                                                                                    <option value="22">หนังสือ</option>
                                                                                    <option value="20">หัตถกรรม ของที่ระลึก</option>
                                                                                    <option value="23">อสังหาริมทรัพย์</option>
                                                                                    <option value="24">อาหาร</option>
                                                                                    <option value="27">อื่นๆ</option>
                                                                                    <option value="25">อุตสาหกรรม เครื่องจักร</option>
                                                                                    <option value="26">อุปกรณ์สำนักงาน</option>
                                                                                </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="sub_cate_id" id="sub_cate_id" required="">
                                            <option value="">- เลือกหมวดหมู่ย่อย -</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputPostType">ประเภทประกาศ</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                    	<input type="hidden" name="pass" id="pass" value="">
                                        <select class="form-control" name="class_type_id" id="class_type_id" required="">
                                                                                    <option value="1">ต้องการซื้อ</option>
                                                                                    <option value="2">ต้องการขาย</option>
                                                                                    <option value="3">ต้องการเช่า</option>
                                                                                    <option value="4">ให้เช่า</option>
                                                                                    <option value="5">แนะนำ</option>
                                                                                    <option value="6">รับจ้าง</option>
                                                                                    <option value="7">บริการ</option>
                                                                                </select>
                                    </div>
                            	</div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputTitle">หัวข้อประกาศ</label>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="post_title" id="post_title" placeholder="หัวข้อประกาศ" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputShortDetail">รายละเอียดย่อ</label>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="post_s_detail" id="post_s_detail" placeholder="รายละเอียดย่อ" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label for="InputDetail">รายละเอียด</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                     <textarea rows="10" id="detail" name="detail" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label for="InputTag">TAG</label>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag1" id="tag1">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag2" id="tag2">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag3" id="tag3">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag4" id="tag4">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag5" id="tag5">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag6" id="tag6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputPrice">ราคา</label>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="post_price_type" value="1" checked="checked" onclick="post_price.disabled=true">ไม่ระบุ
                                            </label>
                                            <label>
                                                <input type="radio" name="post_price_type" value="2" onclick="post_price.disabled=false">ระบุ
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-5 col-md-6 col-lg-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="post_price" id="post_price" disabled="disabled" placeholder="ตัวเลขเท่านั้น">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputProduct">สภาพสินค้า</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="prd_condition" id="prd_condition" required="">
                                            <option value="1" selected="selected">ไม่ระบุ</option>
                                            <option value="2">สินค้าใหม่</option>
                                            <option value="3">สินค้ามือสอง</option>
                                            <option value="4">ล้างสต๊อก</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputProduct">จำนวนวันประกาศ</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="post_day" id="post_day" required="">
                                            <option value="1" selected="selected">ไม่จำกัด</option>
                                            <option value="2">7</option>
                                            <option value="3">15</option>
                                            <option value="4">30</option>
                                            <option value="5">60</option>
                                            <option value="6">90</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputPrice">สถานะ</label>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="post_comment" value="1" checked="checked">Comment ได้ทุกคน
                                            </label>
                                            <label>
                                                <input type="radio" name="post_comment" value="2">เฉพาะสมาชิก
                                            </label>
                                            <label>
                                                <input type="radio" name="post_comment" value="3">ไม่ให้ Comment 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputName">ชื่อ-นามสกุล</label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อ-นามสกุล" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputAdd">ที่อยู่</label>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="add" id="add" placeholder="ที่อยู่" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputAdd">จังหวัด</label>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="province" id="province" required="">
                                            <option value="">- กรุณาเลือกจังหวัด -</option>
                                                                                    <option value="64">กระบี่</option>
                                                                                    <option value="1">กรุงเทพมหานคร</option>
                                                                                    <option value="56">กาญจนบุรี</option>
                                                                                    <option value="34">กาฬสินธุ์</option>
                                                                                    <option value="49">กำแพงเพชร</option>
                                                                                    <option value="28">ขอนแก่น</option>
                                                                                    <option value="13">จันทบุรี</option>
                                                                                    <option value="15">ฉะเชิงเทรา</option>
                                                                                    <option value="11">ชลบุรี</option>
                                                                                    <option value="9">ชัยนาท</option>
                                                                                    <option value="25">ชัยภูมิ</option>
                                                                                    <option value="69">ชุมพร</option>
                                                                                    <option value="45">เชียงราย</option>
                                                                                    <option value="38">เชียงใหม่</option>
                                                                                    <option value="72">ตรัง</option>
                                                                                    <option value="14">ตราด</option>
                                                                                    <option value="50">ตาก</option>
                                                                                    <option value="17">นครนายก</option>
                                                                                    <option value="58">นครปฐม</option>
                                                                                    <option value="36">นครพนม</option>
                                                                                    <option value="19">นครราชสีมา</option>
                                                                                    <option value="63">นครศรีธรรมราช</option>
                                                                                    <option value="47">นครสวรรค์</option>
                                                                                    <option value="3">นนทบุรี</option>
                                                                                    <option value="76">นราธิวาส</option>
                                                                                    <option value="43">น่าน</option>
                                                                                    <option value="77">บึงกาฬ</option>
                                                                                    <option value="20">บุรีรัมย์</option>
                                                                                    <option value="4">ปทุมธานี</option>
                                                                                    <option value="62">ประจวบคีรีขันธ์</option>
                                                                                    <option value="16">ปราจีนบุรี</option>
                                                                                    <option value="74">ปัตตานี</option>
                                                                                    <option value="5">พระนครศรีอยุธยา</option>
                                                                                    <option value="44">พะเยา</option>
                                                                                    <option value="65">พังงา</option>
                                                                                    <option value="73">พัทลุง</option>
                                                                                    <option value="53">พิจิตร</option>
                                                                                    <option value="52">พิษณุโลก</option>
                                                                                    <option value="61">เพชรบุรี</option>
                                                                                    <option value="54">เพชรบูรณ์</option>
                                                                                    <option value="42">แพร่</option>
                                                                                    <option value="66">ภูเก็ต</option>
                                                                                    <option value="32">มหาสารคาม</option>
                                                                                    <option value="37">มุกดาหาร</option>
                                                                                    <option value="46">แม่ฮ่องสอน</option>
                                                                                    <option value="24">ยโสธร</option>
                                                                                    <option value="75">ยะลา</option>
                                                                                    <option value="33">ร้อยเอ็ด</option>
                                                                                    <option value="68">ระนอง</option>
                                                                                    <option value="12">ระยอง</option>
                                                                                    <option value="55">ราชบุรี</option>
                                                                                    <option value="7">ลพบุรี</option>
                                                                                    <option value="40">ลำปาง</option>
                                                                                    <option value="39">ลำพูน</option>
                                                                                    <option value="30">เลย</option>
                                                                                    <option value="22">ศรีสะเกษ</option>
                                                                                    <option value="35">สกลนคร</option>
                                                                                    <option value="70">สงขลา</option>
                                                                                    <option value="71">สตูล</option>
                                                                                    <option value="2">สมุทรปราการ</option>
                                                                                    <option value="60">สมุทรสงคราม</option>
                                                                                    <option value="59">สมุทรสาคร</option>
                                                                                    <option value="18">สระแก้ว</option>
                                                                                    <option value="10">สระบุรี</option>
                                                                                    <option value="8">สิงห์บุรี</option>
                                                                                    <option value="51">สุโขทัย</option>
                                                                                    <option value="57">สุพรรณบุรี</option>
                                                                                    <option value="67">สุราษฎร์ธานี</option>
                                                                                    <option value="21">สุรินทร์</option>
                                                                                    <option value="31">หนองคาย</option>
                                                                                    <option value="27">หนองบัวลำภู</option>
                                                                                    <option value="6">อ่างทอง</option>
                                                                                    <option value="26">อำนาจเจริญ</option>
                                                                                    <option value="29">อุดรธานี</option>
                                                                                    <option value="41">อุตรดิตถ์</option>
                                                                                    <option value="48">อุทัยธานี</option>
                                                                                    <option value="23">อุบลราชธานี</option>
                                                                                </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputTel">เบอร์โทรศัพท์</label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tel" id="tel" placeholder="เบอร์โทรศัพท์" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <label for="InputEmail">Email</label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                        
                            <div class="row">
                            	<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs"></div>
                            	<div class="col-sm-9 col-md-9 col-lg-9 hidden-xs">
                                    <input type="submit" name="submit" id="submit" value="ยืนยันการประกาศ" class="btn btn-success">
                                    <input type="reset" name="submit" id="submit" value="ยกเลิก" class="btn btn-danger">
                                </div>
                            	<div class="col-xs-12 visible-xs">
                                    <input type="submit" name="submit" id="submit" value="ยืนยันการประกาศ" class="btn btn-success btn-block">
                                </div>
                            	<div class="col-xs-12 visible-xs" style="margin-top: 10px;">
                                    <input type="reset" name="submit" id="submit" value="ยกเลิก" class="btn btn-danger btn-block">
                                </div>
                            </div>
                        </form>
						</div>
					</div>
    </div><!-- end block-->
    <div class="block" style="margin-top:10px">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="block-title">
            <h4><strong>รายการบัญชีในระบบ</strong></h4><br>
          </div>
          <table class="table table-bordered">
            <tr><td>account_id</td><td>post_title</td><td>Opertion</td></tr>
          <?php
          $sqq="select * from task where 1 order by id desc";
          $query=mysql_query($sqq);
          while($r=mysql_fetch_array($query))
          {
		$data=explode('<sep>',$r[detail]);
		$key=explode(';',$data[0]);
		$val=explode(';',$data[1]);
		//print_r($key);
            echo '<tr><td>'.$r[id].'</td><td>'.$val[5].'</td><td><a href="post.php?id='.$r[id].'" class="btn btn-block btn-danger">เริ่มโพส</a></td></tr>';
          }
          ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
