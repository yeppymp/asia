<div class="buat" id="buat_kartu">
	<!-- button modal -->
	<a class="buat-kartu" data-toggle="modal" data-target="#myModal">
		<div class="button animated rubberBand">
			Buat Kartu
		</div>
	</a>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Buat Kartu Member</h2>
				</div>
				<form action="<?php echo "member/createMember"; ?>" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<input type="text" placeholder="Nama" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<input type="number" placeholder="Nomor KTP" class="form-control" name="no_ktp">
						</div>
						<div class="form-group">
							<input type="number" placeholder="Nomor HP" class="form-control" name="no_hp">
						</div>
						<div class="form-group">
							<input type="date" placeholder="Tanggal Lahir" class="form-control" name="ttl">
						</div>
						<div class="form-group radio">
							<input type="radio" name="jk" id="pria" class="jk" value="L">
							<label for="#pria">Laki-laki</label>

							<input type="radio" name="jk" id="perempuan" class="jk" value="P">
							<label for="#perempuan">Perempuan</label>
						</div>
						<div class="form-group">
							<textarea name="alamat" id="" cols="30" rows="5"  class="form-control" placeholder="Alamat"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" name="btnSubmit">Buat</button>
						<button type="reset" class="btn btn-default">Batal</button>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- end-modal -->
</div>