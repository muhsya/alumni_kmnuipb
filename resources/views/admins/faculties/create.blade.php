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
            {!! Form::open(['url' => $adminUrl]) !!}
              <div class="form-group">
                {!! Form::label('name', 'Nama Fakultas', ['class' => 'control-label']) !!}
                {!! Form::text('name', '', ['placeholder' => 'Masukan nama fakultas', 'class' => 'form-control', 'required']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('code', 'Kode Fakultas', ['class' => 'control-label']) !!}
                {!! Form::text('code', '', ['placeholder' => 'Masukan kode fakultas', 'class' => 'form-control', 'required']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('ipb', 'Universitas', ['class' => 'control-label']) !!}
                {!! Form::select('ipb', ['1' => 'IPB', '0' => 'Non IPB'], 1, ['class' => 'form-control', 'required']) !!}
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
