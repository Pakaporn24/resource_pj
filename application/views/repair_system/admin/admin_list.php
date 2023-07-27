<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-wrench"></i> รายการแจ้งซ่อมทั้งหมด
		</h1>
	</section>

	<section class="content">


		<div class="box">



			<div class="box-body">
				<div class="row">

					<div class="col-sm-6 d-flex justify-content-between">
						<a class="btn btn-success" href="<?= site_url('repair_system/repair'); ?>" role="button"><i
								class="fa fa-fw fa-plus-circle"></i> เพิ่มรายการแจ้งซ่อม</a>

						<br>
						<br>
						<div>
							เลือกสถานะ :
							&nbsp;&nbsp;
							<select class="custom-select" name="type_status" id="type_status" onchange="cartype()">
								<option value="">- ระบุสถานะ -</option>
								<option value="1">รอดำเนินการ</option>
								<option value="2">กำหลังดำเนินการ</option>
								<option value="3">เสร็จเรียบร้อย</option>
								<option value="4">ยกเลิก</option>
							</select>
							&nbsp;&nbsp;
							<input class="" type="button" value="ค้นหา" style="width: 50px" onclick="onSearch()">
						</div>

					</div>




					<div class="col-sm-12">
						<br>
						<table id="example1" class="table table-bordered table-striped dataTable" role="grid"
							aria-describedby="example1_info">
							<thead>
								<tr role="row" class="info">
									<th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">No.</th>
									<th tabindex="0" rowspan="1" colspan="1" style="width: 25%;">ชื่อผู้แจ้งซ่อม</th>
									<th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">หัวข้อแจ้งซ่อม</th>
									<th tabindex="0" rowspan="1" colspan="1" style="width: 25%; ">รายละเอียดงานซ่อม</th>

									<th tabindex="0" rowspan="1" colspan="1" style="width: 10%">สถานะ</th>
									<th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จัดการ</th>

								</tr>
							</thead>
							<tbody>
								<?php foreach ($query as $rp_case) { ?>

									<tr role="row">
										<td align="center">
											<?= $rp_case->rp_case_id; ?>
										</td>
										<td>
											<?= $rp_case->rp_case_username; ?>
										</td>
										<td>
											<?= $rp_case->rp_case_type; ?>
										</td>
										<td>
											<?= $rp_case->rp_case_detail; ?>
										</td>
										<td align="center">
											<?= $rp_case->rp_case_status; ?>
										</td>


									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>



				</div>



			</div><!-- /.box-body -->
		</div>


	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
