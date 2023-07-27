<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			แจ้งซ่อม
		</h1>
	</section>


	<section class="content">
		<div class="box">


			<div class="box-body">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

					<!-- ปุ่ทเพิ่มข้อมูลช่าง -->
					<div class="row">
						<div class="col-sm-6">

							<a class="btn btn-success" href="<?= site_url('admin_repair/add'); ?>" role="button"><i
									class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูลช่าง</a>

							<!-- <a class="btn btn-default" href="<?= site_url('admin_repair'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a> -->

						</div>

						<!-- <div class="col-sm-6">
						</div> -->
					</div>


					<div class="row">
						<div class="col-sm-12">

							<br />

							<div class="box-header">
								<h3 class="box-title">รายการทั้งหมด</h3>
							</div>

							<table id="" class="table table-bordered table-striped dataTable" role="grid"
								aria-describedby="example1_info">
								<thead>

									<tr role="row" class="info">
										<th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ID</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รูปภาพ</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 30%;">ชื่อ-สกุล</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Email</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ตําแหน่ง</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานะ</th>
										<!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">stauts</th> -->
										<!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;"></th> -->
										<th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
										<th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($query as $query1) { ?>
										<tr role="row">
											<td align="center">
												<?= $query1->id; ?>
											</td>

											<td>
												<img src="<?php echo base_url('img'); ?>/repair.png" alt="" width="80%">
											</td>
											<td>
												<?= $query1->user_name; ?>
											</td>

											<td>
												<?= $query1->user_login; ?>
											</td>
											<td>
												employee
											</td>
											<!-- <td>
												<?php
												if ($query1->user_level == 1) {
													echo 'Online';
												} else {
													echo 'Ban';
												}
												?>
											</td> -->

											<!-- <td>
												<a href="<?php echo site_url('Admin_repair/pwd/' . $query1->id); ?>"
													class="btn btn-info btn-xs">
													pwd
												</a>
											</td> -->

											<td>
												admin
											</td>

											<td>
												<a href="<?php echo site_url('Admin_repair/edit/' . $query1->id); ?>"
													class="btn btn-warning btn-xs">
													แก้ไข
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-xs"
													href="<?= site_url('Admin_repair/del/' . $query1->id); ?>" role="button"
													onclick="return confirm('ยืนยันการลบข้อมูล??');"><i
														class="fa fa-fw fa-trash"></i> ลบ</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div><!-- /.box-body -->
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
