<?php echo form_open_multipart('student/editdata') ?>
<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md2">
            <br>
            <h4>แก้ไขข้อมูลนักเรียน</h4>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ชื่อ - สกุล</div>
                    <div class="col-sm-7">
                        <input value="<?php echo $query->std_name ?>" name="std_name" type="text" required class="form-control" placeholder="ชื่อ - สกุล">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ที่อยู่</div>
                    <div class="col-sm-7">
                        <input name="std_address" value="<?php echo $query->std_address ?>" type="text" required class="form-control" placeholder="ที่อยู่">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">เบอร์โทร</div>
                    <div class="col-sm-7">
                        <input name="std_tel" value="<?php echo $query->std_tel ?>" type="text" required class="form-control" placeholder="เบอร์โทร">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">รูป</div>
                    <div class="col-sm-7">
                        <img src="<?php echo base_url('img').'/'.$query->std_pic ?>" width="100" height="100" alt="">
                        <br>
                        <input name="std_pic" type="file" accept="image/*" >
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ผู้ปกครอง</div>
                    <div class="col-sm-7">
                        <select name="pa_id" id="">

                        </select>
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ชั้นเรียน</div>
                    <div class="col-sm-7">

                        <select class="from_control" name="c_id" id="">
                        <?php  
                        foreach ($groups as $row){
                            if("$row" == "$query->c_id"){
                                echo '<option selected value="'.$row->c_id.'">'.$row->c_name.'</option>';
                            }
                            else{
                                echo '<option value="'.$row->c_id.'">'.$row->c_name.'</option>';
                            }
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-md-5"></div>
                    <div class="col-sm-7">
                    <input name="std_id" value="<?php echo $query->std_id ?>" type="hidden" required class="form-control" placeholder="เบอร์โทร">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>