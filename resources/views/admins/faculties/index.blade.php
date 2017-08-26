@extends('admins._layouts.web')
@section('content')
	<div class="page-title">
    <div>
      <h1><i class="fa fa-users"></i> Fakultas</h1>
    </div>
    <div>
      <a href="{{ asset($adminUrl . 'create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    </div>
  </div>
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Fakultas</th>
                      <th>Kode</th>
                      <th>Universitas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($model as $key => $faculty)
                    <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ ucwords(strtolower($faculty->name)) }}</td>
                      <td>{{ strtoupper($faculty->code) }}</td>
                      <td>
                      @if ($faculty->ipb)
                        IPB
                      @else
                        Non IPB
                      @endif
                      </td>
                      <td>
                        <a href="{{ asset($adminUrl . $faculty->slug . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                        {!! Form::button('<i class="fa fa-trash"></i> Hapus', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('page-script')
  @include('admins._partials.delete-data')
@endsection
