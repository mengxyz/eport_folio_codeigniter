<?php echo form_open_multipart('student/adding') ?>
<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md2">
            <br>
            <h4>เพิ่มข้อมูลนักเรียน</h4>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ชื่อ - สกุล</div>
                    <div class="col-sm-7">
                        <input name="std_name" type="text" required class="form-control" placeholder="ชื่อ - สกุล">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ที่อยู่</div>
                    <div class="col-sm-7">
                        <input name="std_address" type="text" required class="form-control" placeholder="ที่อยู่">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">เบอร์โทร</div>
                    <div class="col-sm-7">
                        <input name="std_tel" type="text" required class="form-control" placeholder="เบอร์โทร">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">รูป</div>
                    <div class="col-sm-7">
                        <input name="std_pic" type="file" required="image/*">
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
                            echo '<option value="'.$row->c_id.'">'.$row->c_name.'</option>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-md-5"></div>
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>