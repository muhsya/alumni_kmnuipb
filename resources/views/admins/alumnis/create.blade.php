@extends('admins._layouts.web')
@section('content')
  <div class="page-title">
      <div>
        <h1><i class="fa fa-users"></i> Kontak</h1>
      </div>
      <div>
        <!-- <a href="{{ asset('lazisnu/donasi/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-title">Formulir Data Kontak</h3>
          <div class="card-body">
            {!! Form::open(['url' => $adminUrl]) !!}
              <div class="form-group">
                {!! Form::label('name', 'Nama Kontak', ['class' => 'control-label']) !!}
                {!! Form::text('name', '', ['placeholder' => 'Masukan nama kontak', 'class' => 'form-control', 'required']) !!}
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
