<?php
if (!defined("tem") && $_SESSION["user"]["user_lv"] == 2) { ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <?php echo "Bạn không có quyền truy cập file này" . "<br/>"; ?>
            <button><a href="index.php">Trở về</a></button>
        </div>
        <!--/.row-->
    </div>
<?php die('');
} ?>
<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$rows_per_page = 4;
$per_rows = $page * $rows_per_page - $rows_per_page;
// LAY TONG SO BAN GHI
$total_rows = mysqli_num_rows(mysqli_query($conn, " SELECT*FROM students"));
$total_page = ceil($total_rows / $rows_per_page);

// button phan trang
$list_pages = '';
// trang trc
$page_perv = $page - 1;
if ($page_perv < 1) {
    $page_perv = 1;
}
$list_pages .=  '<li class="page-item"><a class="page-link" href="index.php?page_layout=students&page=' . $page_perv . '">&laquo;</a></li>';

for ($i = 1; $i <= $total_page; $i++) {
    if ($i == $page) {
        $active = 'active';
    } else {
        $active = '';
    }
    $list_pages .= '<li class="page-item ' . $active . '"><a class="page-link" href="index.php?page_layout=students&page=' . $i . '">' . $i . '</a></li>';
}
// trang sau
$page_next = $page + 1;
if ($page_next > $total_page) {
    $page_next = $total_page;
}
$list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=studentspage=' . $page_next . '">&raquo;</a></li>';

?>
<script>
    function delItem(name) {
        return confirm('ban muon xoa thanh vien: ' + name + ' ?');
    }
</script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="admin.html"><i class="fas fa-home"></i></a></li>
            <li class="active">Danh sách học viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách học viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="add_hoc_vien.html" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm học viên
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th>Số điện thoại</th>
                                <th data-field="price" data-sortable="true">chương trình</th>
                                <th>địa chỉ</th>
                                <th>email</th>
                                <th>trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT*FROM students
                               INNER JOIN class ON students.class = class.id
                               ORDER BY students.id DESC LIMIT $per_rows, $rows_per_page;";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td style=""><?php echo $row[0] ?></td>
                                    <td style=""><?php echo $row[1] ?></td>
                                    <td><?php echo $row["phone_number"] ?></td>
                                    <td style=""><?php echo $row["name"] ?></td>
                                    <td><?php echo $row['addres'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php if ($row[8] == 1) echo 'Đã xác minh';
                                        else echo 'Chưa xác minh' ?></td>
                                    <td class="form-group">
                                        <a href="student/delete_hocvien.php?id=<?php echo $row[0] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $list_pages; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>