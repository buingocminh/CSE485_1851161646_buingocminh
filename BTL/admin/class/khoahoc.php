
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="admin.html"><i class="fas fa-home"></i></a></li>    
                <li class="active">Quản lý khóa học</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý Khóa học</h1>
			</div>
		</div>
		<!--/.row-->
		<div id="toolbar" class="btn-group">
			<a href="add_khoahoc.html" class="btn btn-success">
				<i class="glyphicon glyphicon-plus"></i> Thêm Khóa học
			</a>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toolbar="#toolbar" data-toggle="table">

							<thead>
								<tr>
									<th data-field="id" data-sortable="true">ID</th>
									<th>Tên Khóa học</th>
									<th>ngày bắt đầu</th>
									<th>số buổi</th>
									<th>Hành động</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="">1</td>
									<td style="">khóa 1</td>
									<td>14/8/2020</td>
									<td>24</td>
									<td class="form-group">
										<a href="edit_khoahoc.html" class="btn btn-primary"><i
												class="glyphicon glyphicon-pencil"></i></a>
										<a href="/" class="btn btn-danger"><i
												class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>
								<tr>
									<td style="">2</td>
									<td style="">khóa 2</td>
									<td>14/9/2020</td>
									<td>24</td>
									<td class="form-group">
										<a href="edit_khoahoc.html" class="btn btn-primary"><i
												class="glyphicon glyphicon-pencil"></i></a>
										<a href="/" class="btn btn-danger"><i
												class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>
								<tr>
									<td style="">3</td>
									<td style="">khóa 3</td>
									<td>14/10/2020</td>
									<td>24</td>
									<td class="form-group">
										<a href="edit_khoahoc.html" class="btn btn-primary"><i
												class="glyphicon glyphicon-pencil"></i></a>
										<a href="/" class="btn btn-danger"><i
												class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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


