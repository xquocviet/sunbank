<?php
include('PHP_VALUE/Head.php');
include('PHP_VALUE/MixHome.php');
?>


<div class="row mt-2">
<div class="col-lg-6" id="index-box-ketqua" style="padding: 0px 5px !important">
<div class="card border-info" style="-webkit-user-select: none; -ms-user-select: none; user-select: none;">
<div class="card-header bg-info text-light border-seccond text-center font-weight-bold" style="margin: -1px;">
    <span class="fas fa-history">
    
</span> Luật Chơi </div>
<div class="card-body bg-light text-dark" id="cardBodyKetQua">

<b> TỶ LỆ TRẢ THƯỞNG : </b>
<br>
<br>
<div class="panel panel-primary">
                                    <div class="table-responsive shadow">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr role="row" class="bg-info">
                                                    <th class="text-center text-white bg-info">NỘI DUNG CHƠI</th>
                                                    <th class="text-center text-white bg-info">SỐ CUỐI MGD</th>
                                                    <th class="text-center text-white bg-info">SỐ TIỀN NHẬN</th>
                                                </tr>
                                            </thead>
                                                                                      <tbody role="alert" aria-live="polite" aria-relevant="all" id="phone-tablechung" class="">
                                                <tr>
                                                    <td id="677">
                                                        <b id="sdt" style="position: relative;">C</b> 
                
                                                    </td>
                                                    <td id="677">
                                                        <b id="nearzekdev" style="position: relative;"><code>2</code> - <code>4</code> - <code>6</code> - <code>8</code></b>
                                                    </td>
                                                    <td id="677">
                                                        <b id="nearzekdev" style="position: relative;"><?=$rate1;?></b>
                                                    </td>
                                                </tr>
                                                                                            </tbody><tbody role="alert" aria-live="polite" aria-relevant="all" id="phone-tablechung" class="">
                                                <tr>
                                                    <td id="677">
                                                        <b id="sdt" style="position: relative;">L</b> 
                
                                                    </td>
                                                    <td id="677">
                                                        <b id="nearzekdev" style="position: relative;"><code>1</code> - <code>3</code> - <code>5</code> - <code>7</code></b>
                                                    </td>
                                                    <td id="677">
                                                        <b id="nearzekdev" style="position: relative;"><?=$rate1;?></b>
                                                    </td>
                                                </tr>
                                                                                            </tbody>
                                                </table>
                                            </div>
                                        </div>


<center> <p class="text-dark" style="font-size: 20px; padding-top: 3px;"> Dự Đoán Kết Quả: </p>
<button class="btn btn-primary" id="dudoan"> Chẳn Lẻ </button><br><br>
<p style="font-size: 20px"> Kết Quả Dự Đoán: </p>

 <b class="text-primary" id="ketquadudoan"> 0 </b>
</center>


</div>
</div>

</div>


  <script type="text/javascript">
    $("#dudoan").on("click", function() {
        $('#dudoan').html('<img src="/img/dudoan.gif" width="20px"> Đang Dự Đoán ... ').prop('disabled',
            true);
        $.ajax({
            url: "/Ajaxs/DuDoanKetQua.php",
            method: "POST",
            data: {
            type: 'CL1'
        },
            success: function(response) {
                $("#ketquadudoan").html(response);
                $('#dudoan').html(
                        'Chẳn Lẻ')
                    .prop('disabled', false);
            }
        });
    });
    </script>
    
    
    

<div class="col-lg-6" style="padding: 0px 5px !important">
<div class="card border-info">
<div class="card-header bg-info text-light border-seccond text-center font-weight-bold" style="-webkit-user-select: none; -ms-user-select: none; user-select: none;margin: -1px;">
    <span class="fas fa-gavel">
    
</span> MINI GAME CHẲN LẺ </div>
<div class="card-body border-seccond bg-light text-dark" style="padding: 30px 15px">
<div class="input-group form-group">
<span class="input-group-prepend">
<div class="input-group-text bg-light border-right-0" style="color: green;">
    <i class="fa fa-coins">
    
</i>
</div>
</span>

<input class="form-control py-2 border-left-0 border" style="font-weight: bold; color: green" type="search" value="<?=number_format($monney);?>đ" readonly>

</div>
<form>

<center style="margin-bottom: 1rem;" class="font-weight-bold text-info">
    <i class="fa fa-trophy" aria-hidden="true">
    
</i> Đặt Cược <i class="fa fa-trophy" aria-hidden="true">
    
</i>
</center>
<div class="form-group" id="divValue">
<div class="btn-group" style="width: 100%;margin-left: 15px;">
<div class="row" style="width: 100%;">
  
  <div class="input-group form-group">
<span class="input-group-prepend" style="border-right: 1px solid red;">
<div class="input-group-text bg-light border-right-1">
     <i class="fa fa-gamepad">
    
</i>
</div>
</span>
<input class="form-control py-2 border-left-0 border" style="font-weight: bold;" type="search" value="" id="noidung" placeholder="C Hoặc L">
</div>

</div>
</div>
</div>
<div class="input-group form-group">
<span class="input-group-prepend" style="border-right: 1px solid red;">
<div class="input-group-text bg-light border-right-1">
    <i class="fa fa-gavel">
    
</i>
</div>
</span>
<input class="form-control py-2 border-left-0 border" style="font-weight: bold;" type="search" value="" id="monney" placeholder="Nhập số tiền đặt cược">
</div>
</form>
<div id="alert">
    
</div>
<button type="submit" class="btn btn-info font-weight-bold text-uppercase form-control" id="Bem">
    
    <i class="fa fa-star" aria-hidden="true">
    
    
</i> CHƠI NGAY <i class="fa fa-star" aria-hidden="true">
    
    
</i>

</button>
<hr>
<br>
<center> 
<a class="text-white" href="<?=$CaiDat['PageMessage'];?>" target="_blank"><span class="btn btn-success text-uppercase">Chát Box </span></a></center>
</div>
</div>
</div>
</div>



    <script type="text/javascript">
    $("#Bem").on("click", function() {
        $('#Bem').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
            true);
        $.ajax({
            url: "/Ajaxs/AjaxsMiniGame.php",
            method: "POST",
            data: {
                type: 'CL',
                noidung: $("#noidung").val(),
                monney: $("#monney").val(),
            },
            success: function(response) {
                $("#status").html(response);
                $('#Bem').html(
                        '<i class="fa fa-star" aria-hidden="true"> </i> BEM NGAY <i class="fa fa-star" aria-hidden="true">')
                    .prop('disabled', false);
            }
        });
    });
    </script>
    
    
    
<div id="status">
    
    
</div>




<div style="padding-top: 20px"></div>






<div class="row scrl" id="row-lich-su-tx" style="padding: 0px 5px !important">
<div style="width: 100%;border-bottom: 1px solid #dee2e6;border-radius: 3px;" class="text-center font-weight-bold">
<div id="darkMode555" class="card-header bg-info text-light border-seccond text-center font-weight-bold" style="-webkit-user-select: none; -ms-user-select: none; user-select: none;">
    <span class="fas fa-gavel">
    
</span> LỊCH SỬ CHƠI <span class="fas fa-gavel">
    
</span>
</div>
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover text-center" style="border-style: hidden;">
<thead class="bg-info text-white">
<tr>
    <th scope="col" class="nowrap"> Username </th>

<th scope="col" class="nowrap"> Mã GD </th>
<th scope="col" class="nowrap"> Số Tiền </th>
<th scope="col" class="nowrap"> Kết Quả  </th>
<th scope="col" class="nowrap"> Loại </th>
<th scope="col" class="nowrap"> Trả Thưởng  </th>
<th scope="col" class="nowrap">Thời Gian</th>
</tr>
</thead>

<tbody id="lichsugd" class="text-dark">
    
     <?php
		$result = mysqli_query($connect, "SELECT * FROM PlayList WHERE uid  AND time2 = '$time2' AND game = 'CL1' ORDER BY id DESC limit 0, 8");
		$id = '0';
		while($chauthebao = mysqli_fetch_assoc($result)){
		  $id++;  
			?>
			
    <tr style="background-color: #E0FFFF" class="text-dark">
                 <td style="white-space:nowrap; padding: 7px"><?=substr($chauthebao['username'], 0, 4).'*****';?></td>

         <td style="white-space:nowrap; padding: 7px">#<?=$chauthebao['magiaodich'];?></td>
    
    <td style="white-space:nowrap; padding: 7px"> <?=number_format($chauthebao['monneycuoc']);?>đ </td>
    
    <td style="white-space:nowrap; padding: 7px">  <?php if($chauthebao['monney'] == '0'){
        echo '<span class="badge badge-danger text-uppercase font-weight-bold"> Thua </span>';
    } else {
        echo '<span class="badge badge-success text-uppercase font-weight-bold"> Thắng </span>';
        } ?> </td>
    
    <td style="white-space:nowrap; padding: 7px"> <?=$chauthebao['game'];?> </td>
  
    
    <td style="white-space:nowrap; padding: 7px"> <?=number_format($chauthebao['monney']);?>đ </td> 
    
    <td style="white-space:nowrap; padding: 7px"> <?=$time;?>  </td>
    

</td>

</tr>

<?php } ?>



</table>
</div>
</div>
<div style="margin-top: 40px;">
    
</div>


</div>




  <script type="text/javascript">
    $("#dudoan").on("click", function() {
        $('#dudoan').html('<img src="/img/dudoan.gif" width="20px"> Đang Dự Đoán ... ').prop('disabled',
            true);
        $.ajax({
            url: "/Ajaxs/DuDoanKetQua.php",
            method: "POST",
            data: {
            type: 'CL1'
        },
            success: function(response) {
                $("#ketquadudoan").html(response);
                $('#dudoan').html(
                        'Chẳn Lẻ')
                    .prop('disabled', false);
            }
        });
    });
    </script>
    

<style>
  #vongquay {
    width: 70%;
    position: relative;
    transition: transform .5s;
    transition-duration: 7s;
  }

  #btnStart {
    left: 50%;
    top: 50%;
    position: absolute;
    margin-top: -66px;
    margin-left: -50px;
  }

  #imgStart {
    max-width: 100px;
  }

  @media (max-width: 720px) {
    #vongquay {
      width: 100%;
    }

    #imgStart {
      width: 60%;
      height: 60%;
    }

    #btnStart {
      left: 50%;
      top: 50%;
      margin-top: -40px;
    }
  }
</style>


</div>
<div id="divModal">
</div>

</div>




<style>
    @media only screen and (min-width: 678px) {
      #modalThongBao .modal-header button{
        display: none;
      }
    }
    #ptItemBieuTuong {
      overflow-y: auto;
      height: 195px;
      overflow-x: hidden;
    }

    #ptHeader {
      padding: 7px 0;
      text-align: center;
    }

    .ptBtnHeader {
      background-color: #EEEBE6;
      border: none;
      width: 70px;
      padding: 0;
    }

    #ptTitle {
      font-weight: bold;
      text-align: center;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #501c04;
      margin: 0;
    }

    .ptIcon {
      background-color: rgb(133, 70, 7);
      text-align: center;
      padding: 0;
    }

    .ptItem {
      display: inline-block;
      width: 100%;
      border-top: 1px solid #D9C8B4;
      background-color: #EEEBE6;
      cursor: pointer;
    }

    .ptName {
      padding: 0;
      margin: 0;
      font-weight: bold;
      color: rgb(46, 43, 38);
    }

    .ptPoint {
      color: royalblue;
    }

    .ptAlert {
      padding-top: 5px;
      text-align: center;
      background-color: #FEE4C6;
      width: 96%;
      border-radius: 7px;
      border: 1px black solid;
      z-index: 999;
      position: absolute;
      top: 130px;
      left: 2%;
    }

    .ptAlertTitle {
      font-weight: bold;
      padding-top: 15px;
    }

    .ptAlertInput {
      border: none;
      border-radius: 5px;
      padding: 3px 10px;
      width: 85%;
    }

    .ptAlertFooter {
      margin-top: 10px;
      padding-bottom: 15px;
    }

    .ptAlertBtn {
      border-radius: 7px;
      border: 1px black solid;
      background-color: #E17B3A;
      font-weight: bold;
      color: #532905;
      width: 75px;
    }

    .ptBieuTuongGold {
      padding-top: 15px;
      cursor: pointer;
    }

    .ptBieuTuongGold:hover {
      color: red;
    }

    .alertInfoContent {
      background-color: white;
      border: 1px solid black;
      border-radius: 7px;

    }

    .alertInfo {
      z-index: 999;
      position: absolute;
      width: 80%;
      left: 2%;
      top: 20%;
    }

    .ptScreenName {
      padding: 0;
      margin: 0;
      font-weight: bold;
    }

    .ptScrenText {
      color: black;
    }

    .ptItemBtn {
      border-radius: 5px;
      background-color: #cc7e49;
      color: #532905;
      font-weight: bold;
      padding: 3px 7px;
      border: 1px solid #532905;
    }
  </style>
  

<?php include('PHP_VALUE/Footer.php');?>

