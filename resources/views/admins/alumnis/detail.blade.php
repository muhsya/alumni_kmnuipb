@extends('admins._layouts.web')
@section('content')
    <div class="page-title">
    <?php
      $name = explode(',', $model->full_name);
    ?>
    <div>
      <h1><i class="fa fa-users"></i> Data Alumni {{ ucwords(strtolower($name[0])) }}, {{ $name[1] }}</h1>
    </div>
  </div>
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>{{ ucwords(strtolower($name[0]))}}, {{ $name[1] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Panggilan</td>
                      <td>{{ ucwords(strtolower($model->nick_name)) }}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>
                        @if ($model->sex == 0)
                          Laki-laki
                        @else
                          Perempuan
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Angkatan</td>
                      <td>{{ $model->entrance }}</td>
                    </tr>
                    <tr>
                      <td>Tempat, Tanggal Lahir</td>
                      <td>{{ ucwords(strtolower($model->born_place)) }}, {{ \Carbon\Carbon::parse($model->born_date)->format('d M Y') }}</td>
                    </tr>
                    <tr>
                      <td>Status Pernikahan</td>
                      <td>
                        @if ($model->married_status == 0)
                          Belum Menikah
                        @else
                          Sudah Menikah
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Pondok Pesantren</td>
                      <td>{{ $model->pesantren }}</td>
                    </tr>
                    <tr>
                      <td>Alamat Asal</td>
                      <td>{{ $model->from_place }}</td>
                    </tr>
                    <tr>
                      <td>Alamat Domisili</td>
                      <td>{{ $model->now_place }}</td>
                    </tr>
                    <tr>
                      <td>Keahlian</td>
                      <td>{{ $model->skill }}</td>
                    </tr>
                    <tr>
                      <td>Aktivitas</td>
                      <td>{{ ucwords(strtolower($model->activity)) }}</td>
                    </tr>

                    @foreach ($model->contacts as $contact)
                    <tr>
                      <td>{{ ucwords(strtolower($contact->type->name)) }}</td>
                      <td>{{ ucwords(strtolower($contact->value)) }}</td>
                    </tr>

                    @endforeach
                    @foreach ($model->educations as $education)
                    <tr>
                      <td>{{ strtoupper($education->type->name) }}</td>
                      <td>{{ $education->graduate }}</td>
                    </tr>
                    @endforeach

                    <?php
                      $business = $model->business;
                    ?>
                    <tr>
                      <td>Bidang Usaha</td>
                      <td>{{ $business->sector }}</td>
                    </tr>
                    <tr>
                      <td>Jabatan</td>
                      <td>{{ $business->position }}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{ $business->address }}</td>
                    </tr>
                    <tr>
                      <td>Kode Pos</td>
                      <td>{{ $business->postal_code }}</td>
                    </tr>
                    <tr>
                      <td>Omzet</td>
                      <td>
                        @if ($business->omzet == 0)
                          0 - 500.000
                        @elseif ($business->omzet == 500000)
                          500.000 - 1.000.000
                        @elseif ($business->omzet == 1000000)
                          1.000.000 - 3.000.000
                        @elseif ($business->omzet == 3000000)
                          3.000.000 - 5.000.000
                        @elseif ($business->omzet == 5000000)
                           > 5.000.000
                        @endif
                      </td>
                    </tr>
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
