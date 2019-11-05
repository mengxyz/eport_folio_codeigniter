<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-12">
            <br>
            <table class="table table-bordered table-hover">
                <h4>รายงานข้อมูลนักเรียน</h4>
                <thead>
                    <tr>
                        <th>รายงานข้อมูลนักเรียน</th>

                        <th align="end">

                            <a href="<?php echo site_url('student/insert'); ?>">เพิ่มข้อมูลชั้นเรียน</a>

                        </th>
                    </tr>
                </thead>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>รหัสนักเรียน</th>
                            <th>ชื่อนักเรียน</th>
                            <th>ชั้นเรียน</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($query as $rs) { ?>
                            <tr>
                                <td><?php echo $rs->std_id ?></td>
                                <td><?php echo $rs->std_name ?></td>
                                <td><?php echo $rs->c_name ?></td>
                                <td><a  href="<?php echo site_url('student/edit/').$rs->std_id; ?>">แก้ไข</a></td>
                                <td><a onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')" href="<?php echo site_url('classroom/delete/').$rs->c_id; ?>">ลบ</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </table>
        </div>
    </div>
</div>