<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-12">
            <br>
            <table class="table table-bordered table-hover">
                <h4>รายงานข้อมูลชั้นเรียน</h4>
                <thead>
                    <tr>
                        <th>รายงานข้อมูลชั้นเรียน</th>

                        <th align="end">

                            <a href="<?php echo site_url('classroom/insert'); ?>">เพิ่มข้อมูลชั้นเรียน</a>

                        </th>
                    </tr>
                </thead>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>รหัสชั้นเรียน</th>
                            <th>ชื่อชั้นเรียน</th>
                            <th>หัวหน้าชั้นเรียน</th>
                            <th>ครูประจำชั้นชั้นเรียน</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($query as $rs) { ?>
                            <tr>
                                <td><?php echo $rs->c_id ?></td>
                                <td><?php echo $rs->c_name ?></td>
                                <td></td>
                                <td></td>
                                <td>จัดการรายละเอียดชั้นเรียน</td>
                                <td> <a  href="<?php echo site_url('classroom/edit/').$rs->c_id; ?>">แก้ไข</a></td>
                                <td><a onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')" href="<?php echo site_url('classroom/delete/').$rs->c_id; ?>">ลบ</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </table>
        </div>
    </div>
</div>