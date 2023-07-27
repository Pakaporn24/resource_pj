<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-wrench"></i> แจ้งซ่อม

		</h1>

	</section>


	<section class="content">

		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-12">

						<style>
							.custom-placeholder::placeholder {
								color: #0f007d;
								font-weight: bold;
							}

							.text-primary {
								color: #4a89ff;
								
								font-size: 18px;
							}

							.text-primary .fa {
								color: #07c700;
								
							}

							.button-container {
								display: flex;
								justify-content: flex-end;
								
							}

							.btn-primary {
								background-color: green;
								
								color: white;
								
								margin-right: 5px;
								
							}

							.btn-danger {
								background-color: red;
								
								color: white;
							
							}
						</style>

						<p class="text-primary"><i class="fa fa-circle text-primary"></i> ข้อมูลผู้แจ้งซ่อม</p>

						<from>
							<div class="col-md-4 mb-2">
								<label><strong class="text-danger">*</strong>ชื่อ-นามสกุล </label>

								<input type="text" id="cus_name" name="cus_name"
									class="form-control rounded-0 custom-placeholder"
									value="<?php echo $_SESSION['user_name']; ?>">
							</div>




							<div class="col-md-4 mb-2">

								<label><strong class="text-danger">*</strong>เบอร์โทรศัพท์ </label>

								<input type="text" id="cus_tel" name="cus_telxs" class="form-control rounded-0"
									placeholder="กรอกเบอร์โทร" maxlength="10" ">

						</div>

						<div class=" col-md-4 mb-2">

								<label>อีเมล</label>
								<input type="email" id="cus_email" class="form-control rounded-0"
									placeholder="กรอกอีเมล">
							</div>


							<br>
							<br>
							<br>
							<br>

							<p class="text-primary"><i class="fa fa-circle"></i> ข้อมูลแจ้งซ่อม</p>
							<div class="col-md-3 mb-2">

								<label>วันที่แจ้งซ่อม :</label>
								<input type="datetime-local" id="time_add" class="form-control rounded-0"
									placeholder="วันที่และเวลาส่งซ่อม" value="<?= date('Y-m-d\TH:i'); ?>"
									min="<?= date('Y-m-d\TH:i'); ?>">
							</div>

							<br>
							<br>
							<br>
							<br>

							<div class="col-md-4 mb-2">

								<label><strong class="text-danger">*</strong>ประเภทงานซ่อม </label>

								<input type="text" id="cus_type" class="form-control rounded-0"
									placeholder="ประเภทงานซ่อม">

							</div>

							<div class="col-md-4 mb-2">

								<label><strong class="text-danger">*</strong>อุปกรณ์ </label>

								<input type="text" id="cus_equipment" class="form-control rounded-0"
									placeholder="กรอกอุปกรณ์">

							</div>


							<br>
							<br>
							<br>
							<br>


							<div class="col-md-10 mb-2">

								<label><strong class="text-danger">*</strong>รายละเอียดเพิ่มเติม </label>

								<input type="text" id="cus_details" class="form-control rounded-0">

							</div>

							<br>
							<br>
							<br>
							<br>

							<p class="text-primary"><i class="fa fa-circle text-primary"></i> ข้อมูลสถานที่แจ้งซ่อม</p>


							<div class="col-md-4 mb-2">


								<label><strong class="text-danger">*</strong>อาคาร </label>

								<input type="text" id="repair_type" class="form-control rounded-0"
									placeholder="ประเภทงานซ่อม">

							</div>

							<div class="col-md-4 mb-2">

								<label><strong class="text-danger">*</strong>ห้อง </label>

								<input type="text" id="repair_equipment" class="form-control rounded-0"
									placeholder="กรอกอุปกรณ">

							</div>



						</from>
					</div>



				</div>

				<br>

				<div class="col-md-12 mt-2">
					<div class="button-container">


						<input class="btn btn-primary rounded-0" type="button" name="btnSave" id="btnSave"
							value="สร้างรายการซ่อม" onclick="onSave()">
						<button onclick="clearForm()" class="btn btn-danger rounded-0">เคลียร์</button>
					</div>
				</div>



			</div><!-- /.box-body -->

		</div>


	</section><!-- /.content -->
</div><!-- /.content-wrapper -->



<script>

	function clearForm() {

		// $('#cus_name').val('');
		$('#cus_tel').val('');
		$('#cus_email').val('');
		$('#cus_type').val('');
		$('#cus_equipment').val('');
		$('#cus_details').val('');
		$('#repair_type').val('');
		$('#repair_equipment').val('');

	}

	function onSave() {

		var cus_name = $("#cus_name").val();
		var cus_email = $("#cus_email").val();
		var cus_tel = $("#cus_tel").val();
		var cus_type = $("#cus_type").val();
		var cus_equipment = $("#cus_equipment").val();
		var cus_details = $("#cus_details").val();
		var repair_type = $("#repair_type").val();
		var repair_equipment = $("#repair_equipment").val();

		var time_add = $("#time_add").val();

		var repair_address = repair_type + repair_equipment;

		if (confirm("คุณต้องการแจ้งซ่อมใช้หรือไหม")) {
			if (cus_tel == "") {
				alert("กรอกเบอร์โทรศัพท์ ");
				$("#cus_tel").focus();
				return false;
			} else if (cus_email == "") {
				alert("กรอกอีเมล");
				$("#cus_email").focus();
				return false;
			}
			else {

				var pmeters = 'cus_name=' + cus_name + '&cus_email=' + cus_email + '&cus_tel=' + cus_tel + '&cus_type=' + cus_type +
					'&cus_equipment=' + cus_equipment + '&cus_details=' + cus_details + '&repair_address=' + repair_address + '&time_add=' + time_add;

				pmeters = pmeters.replace("undefined", "");

				$.ajax({
					url: "<?= base_url(); ?>repair_system/repair/repair_add",
					type: 'POST',
					data: pmeters,
					async: false,
					success: function (data) {
						alert(data);
						$("#btnSave").attr("disabled", true);
						window.location = "<?= base_url(); ?>repair_system/repair";
					}
				});
				return false;
			}
		}
		return false;

	}

</script>
