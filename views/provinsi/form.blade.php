<form class="form-vertical" id="form" method="POST" action="{{ $form_action }}">
<fieldset>
    <legend>{{ $action_title }}</legend>
    <div class="col-lg-8">
        <div class="form-group">
          <label for="order">Nama Provinsi</label>  
          <input id="nama_provinsi" name="nama_provinsi" value="{{ isset($provinsi->nama_provinsi) ? $provinsi->nama_provinsi : '' }}" type="text" placeholder="" class="form-control input-md">
        </div>
        <div class="form-group">
            <button id="" name="" class="btn btn-primary">SIMPAN DATA</button>
        </div>
    </div>
</fieldset>
</form>