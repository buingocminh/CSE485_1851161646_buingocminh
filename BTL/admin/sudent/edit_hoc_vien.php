<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="admin.html"><i class="fas fa-home"></i></a></li>
                <li><a href="hoc_vien.html">Quản lý học viên</a></li>
                <li class="active">Nguyễn Văn A</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">học viên: Nguyễn Văn A</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <!-- <div class="alert alert-danger">Email đã tồn tại, Mật khẩu không khớp !</div> -->
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input type="text" name="
                                    stu_full" required class="form-control"
                                        value="Nguyễn Văn A" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="stu_num" required value="0123456789"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> Khóa học</label>
                                    <select name="
                                    course_id" class="form-control">
                                        <option selected value=1>Bằng A1</option>
                                        <option value=2>Bằng A2</option>
                                        <option value=3>Bằng B1</option>
                                        <option value=4>Bằng B2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lớp học</label>
                                    <input type="text" name="stu_class" required value="A1-k24"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> lịch học</label>
                                    <select name="
                                    course_id" class="form-control">
                                        <option selected value=1>Từ 18h-20h, Thứ 2,4,6</option>
                                        <option value=2>Từ 7h-9h, Thứ 2,4,6</option>
                                        <option value=3>Từ 18h-20h, Thứ 3,5,7</option>
                                        <option value=4>Từ 7h-9h, Thứ 3,5,7</option>
                                    </select>
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>