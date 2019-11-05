<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md2">
            <br>
            <h4>เเก้ไขข้อมูลชั้นเรียน</h4>
            <form action="<?php echo site_url('classroom/editdata'); ?> " method="post" class="form-horizontal">
                <br>
                <div class="from-group row">
                    <div class="col-sm-5 container-label">ชื่อชั้นเรียน</div>
                    <div class="col-sm-7">
                        <input value="<?php echo $query->c_name; ?>" name="c_name" type="text" required class="form-control" placeholder="ชื่อชั้นเรียน">
                    </div>
                </div>
                <br>
                <div class="from-group row">
                    <div class="col-md-5"></div>
                    <div class="col-sm-7">
                        <input type="hidden" name="c_id" value="<?php echo $query->c_id; ?>">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>