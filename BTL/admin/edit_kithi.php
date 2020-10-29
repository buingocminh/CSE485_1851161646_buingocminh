
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="admin.html"><i class="fas fa-home"></i></a></li>
                <li><a href="ki_thi.html">Quản lý kì thi</a></li>
                <li class="active"> sát hạch A1 </li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kì thi: sát hạch A1</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <!-- <div class="alert alert-danger">khóa học đã tồn tại !</div> -->
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Tên kì thi:</label>
                                    <input type="text" name="exam_name" required value="Sát hạch A1" class="form-control"
                                        placeholder="Tên kì thi...">
                                </div>
                                <div class="form-group">
                                    <label>Ngày bắt đầu:</label>
                                    <input type="text" name="exam_date" required value="30/8/2020" class="form-control"
                                        placeholder="ngày bất đầu...">
                                </div>
                                <div class="form-group">
                                    <label>lớp:</label>
                                    <input type="text" name="exam_class" required value="A1-k24" class="form-control"
                                        placeholder="lớp...">
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
    <!--/.main-->


