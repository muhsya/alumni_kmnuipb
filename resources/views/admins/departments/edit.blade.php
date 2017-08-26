@extends('admins._layouts.web')
@section('content')
  <div class="page-title">
      <div>
        <h1><i class="fa fa-users"></i> Fakultas</h1>
      </div>
      <div>
        <!-- <a href="{{ asset('lazisnu/donasi/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-title">Formulir Data Fakultas</h3>
          <div class="card-body">
            {!! Form::model($model, ['url' => $adminUrl . $model->slug, 'method' => 'put']) !!}
              <div class="form-group">
                {!! Form::label('name', 'Nama Fakultas', ['class' => 'control-label']) !!}
                {!! Form::text('name', $model->name, ['placeholder' => 'Masukan nama fakultas', 'class' => 'form-control', 'required']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('code', 'Kode Fakultas', ['class' => 'control-label']) !!}
                {!! Form::text('code', $model->code, ['placeholder' => 'Masukan kode fakultas', 'class' => 'form-control', 'required']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('faculty_id', 'Universitas', ['class' => 'control-label']) !!}
                {!! Form::select('faculty_id', $model->getFaculties(true), $model->faculty_id, ['class' => 'form-control', 'required']) !!}
              </div>
              <div>
                <button type="submit" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a href="{{ asset($adminUrl) }}" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
@endsection

@section('page-script')
  <script>
    $(document).ready(function() {
      $('.add-image').click( function () {
        var image = "<div class='form-group'> \
                <!--<label for='image' class='control-label btn btn-info'>Pilih Gambar</label>-->\
                <input class='form-image' name='image[]' type='file' id='image'>\
              </div>";

        $('.add-image').after(image);
      });
    });
  </script>
@endsection
