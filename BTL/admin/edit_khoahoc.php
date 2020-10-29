<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="admin.html"><i class="fas fa-home"></i></a></li>
            <li><a href="khoahoc.html">Quản lý khóa học</a></li>
            <li class="active">khóa 1</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Khóa học:khóa 1</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <div class="alert alert-danger">khóa học đã tồn tại !</div>
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên khóa học:</label>
                                <input type="text" name="course_name" required value="khóa học 1" class="form-control" placeholder="Tên khóa học...">
                            </div>
                            <div class="form-group">
                                <label>Ngày bắt đầu:</label>
                                <input type="text" name="course_date" required value="14/8/2020" class="form-control" placeholder="ngày bất đầu...">
                            </div>
                            <div class="form-group">
                                <label>Số buổi:</label>
                                <input type="text" name="course_num" required value="24" class="form-control" placeholder="số buổi...">
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
</div>    
    <!--/.main-->