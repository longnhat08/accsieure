<?php 
defined('KUNKEYPR') or exit('Restricted Access');

//echo $kun->hienthi_game('banaccff');
function option_default($value) {
    switch ($value) {
        case '1':
            return '<option value="1">Đang Bật</option>';
            break;
        case '0':
            return '<option value="0">Đang Tắt</option>';
            break;
    }
}

$banaccff = option_default($kun->hienthi_game('banaccff'));
$vanmayff = option_default($kun->hienthi_game('vanmayff'));
$homthinhff = option_default($kun->hienthi_game('homthinhff'));
$lattheff = option_default($kun->hienthi_game('lattheff'));
$sieucapff = option_default($kun->hienthi_game('sieucapff'));
$codesungff = option_default($kun->hienthi_game('codesungff'));


if(isset($_POST['submit'])) {

    $data = array(
        'banaccff' => $_POST['banaccff'],
        'vanmayff' => $_POST['vanmayff'],
        'homthinhff' => $_POST['homthinhff'],
        'lattheff' => $_POST['lattheff'],
        'sieucapff' => $_POST['sieucapff'],
        'codesungff' => $_POST['codesungff']
    );

    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value`='".mysqli_escape_string($kun->connect_db(), json_encode($data))."' WHERE `key`='hienthi_game'"); 
    echo '<div class="alert alert-success"><strong>CẬP NHẬT THÀNH CÔNG!</strong></div>';
    echo '<meta http-equiv=refresh content="1; URL=">';
}
?>




                            <form method="post" action="">
                <div class="row">



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> BÁN ACC FREEFIRE</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="banaccff" class="form-control" id="exampleFormControlSelect1">
                                            <?php echo $banaccff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> VẬN MAY BINGO</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="vanmayff" class="form-control" id="exampleFormControlSelect1">
                                           <?php echo $vanmayff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  HÒM KIM CƯƠNG</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="homthinhff" class="form-control" id="exampleFormControlSelect1">
                                             <?php echo $homthinhff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">   Vòng Quay Giải Cứu</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="sieucapff" class="form-control" id="exampleFormControlSelect1">
                                             <?php echo $sieucapff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  LẬT HÌNH MAY MẮN</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="lattheff" class="form-control" id="exampleFormControlSelect1">
                                              <?php echo $lattheff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  VÒNG QUAY CODE SÚNG</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="codesungff" class="form-control" id="exampleFormControlSelect1">
                                            <?php echo $codesungff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>






                            <div class="col-md-12"> 
                                        <center><button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT</button></center>
                            </div>


                            </form>
                </div>









