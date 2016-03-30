<div class="row">
  <div class="col-lg-12">
  		<h2>Provinsi</h2>
  		<p style="float:right;">
  		<a class="btn btn-primary" href="{{ url('provinsi/create') }}"><i class="fa fa-plus"></i> Tambah Provinsi</a>
  		</p>
  		<br><br>
  		@if ($count > 0)
  			@if(Session::has('message'))
				<br><br>
			    <div class="alert alert-success">
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <center>{{ Session::get('message') }}</center>
			    </div>
			@endif
	        <table class="table table-bordered">
	            <thead>
	            <tr>
	                <th><center>#</center></th>
	                <th><center>Nama Provinsi</center></th>
	                <th colspan="2"><center>Action</center></th>
	            </tr>
	            </thead>
	            <tbody>
	            <?php
	            $page = $provinsis->getCurrentPage();
	            if ($page == 1) {
	            	$i = 1;
	            } else {
	            	$i = $provinsis->getFrom();
	            }
	            ?>
	            @foreach ($provinsis as $provinsi)
	            <tr>
	            	<td><center>{{ $i }}</center></td>
	                <td>{{ $provinsi->nama_provinsi }}</td>
	                <td><center><a href="{{ url('provinsi/edit/'.$provinsi->id.'') }}">Ubah</a></center></td>
	                <td><center><a data-toggle="modal" href="#confirm{{ $i }}">Hapus</a></center></td>
	            </tr>
	            <div class="modal fade" id="confirm{{ $i }}" style="display:none;">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button class="close" data-dismiss="modal">×</button>
	                            <h4>Konfirmasi</h4>
	                        </div>
	                        <div class="modal-body">
	                            <p>Anda Yakin Menghapus Data Ini ?</p>
	                        </div>
	                        <div class="modal-footer">
	                            <a class="btn btn-primary" href="{{ url('provinsi/destroy/'.$provinsi->id.''); }}" >Ya</a>
	                            <a href="#" data-dismiss="modal" class="btn btn-danger">Tidak</a>
	                        </div>
	                    </div>
	                </div>
            	</div>
	            <?php $i++; ?>
	            @endforeach
	            </tbody>
	        </table>
	        <ul class="pagination">
			{{ $provinsis->links() }}
			</ul>
		@else
	    <br><br>
	    <div class="alert alert-danger"><center>DATA PROVINSI KOSONG</center></div>
	    @endif
  </div>
</div>
