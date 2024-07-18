<!--   Core JS Files   -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/popper.min.js"></script>
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/atlantis.min.js"></script>
<!-- sweetalert -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/setting-demo2.js"></script>
<script >
	$(document).ready(function() {
		$('#basic-datatables').DataTable({
		});

		$('#multi-filter-select').DataTable( {
			"pageLength": 5,
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo( $(column.footer()).empty() )
					.on( 'change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
							);

						column
						.search( val ? '^'+val+'$' : '', true, false )
						.draw();
					} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>


	<!-- sweetalert -->
	<?php if ($this->session->flashData('msg') == 'success_update') :  ?>
		<script type="text/javascript">
			$(function() {
				swal("Berhasil!", "Data Berhasil di Update!", {
					icon : "success",
					buttons: {        			
						confirm: {
							className : 'btn btn-success'
						}
					},
				});

			});
		</script>
		<?php elseif ($this->session->flashData('msg') == 'success') : ?>
			<script type="text/javascript">
				$(function() {
					swal("Berhasil!", "Data berhasil di tambahkan!", {
						icon : "success",
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});

				});
			</script>

			<?php elseif ($this->session->flashData('msg') == 'success_hapus') : ?>
				<script type="text/javascript">
					$(function() {
						swal("Berhasil!", "Data berhasil di Hapus!", {
							icon : "success",
							buttons: {        			
								confirm: {
									className : 'btn btn-success'
								}
							},
						});

					});
				</script>

				<?php elseif ($this->session->flashData('msg') == 'warning') : ?>
					<script type="text/javascript">
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 6000
							});

							Toast.fire({
								icon: 'danger',
								title: 'Gagal, Periksa Format File atau input ulang !'
							})

						});
					</script>

					<?php else : ?>

					<?php endif; ?>
