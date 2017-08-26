<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url({{ asset('img/main-bg.jpg') }});">
    <div class="main">
      <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 main-content">
        <div class="col-md-12 col-sm-12 col-xs-12 inner-content">
          {!! Form::open(['url' => asset('isi/data/alumni/kmnu/ipb'), 'class' => 'col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 col-sm-12', 'id' => 'data-alumni', 'files' => true]) !!}
            <div class="fields">
              <div class="item">
                <legend>Informasi Pribadi</legend>
                <div class="form-group">
                  <label for="full_name">Nama Lengkap dan Gelar</label><span class="must">*</span>
                  <input id="full_name" name="full_name" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="nick_name">Nama Panggilan</label><span class="must">*</span>
                  <input id="nick_name" name="nick_name" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="born_place">Tempat Lahir</label><span class="must">*</span>
                  <input id="born_place" name="born_place" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="born_date">Tanggal Lahir</label><span>(dd/mm/yyyy)</span><span class="must">*</span>
                  <input id="born_date" name="born_date" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="sex" class="control-label">Jenis Kelamin</label>
                  <select name="sex" id="sex" class="form-control" required>
                    <optgroup label="Pilih Jenis Kelamin">
                      <option value="0">Laki-laki</option>
                      <option value="1">Perempuan</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="photo" id="photo-label">Foto</label>
                  <input id="photo" name="photo" type="file" class="form-control">
                </div>
              </div>

              <div class="item">
                <legend>Informasi Pribadi Lanjutan</legend>
                <div class="form-group">
                  <label for="faculty_id">Fakultas di IPB</label><span class="must">*</span>
                  <select id="faculty_id" name="faculty_id" class="form-control" required>
                    @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ ucwords(strtolower($faculty->name)) }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="department_id">Departemen di IPB</label><span class="must">*</span>
                  <select id="department_id" name="department_id" class="form-control" required>
                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ ucwords(strtolower($department->name)) }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="entrance">Angkatan</label><span class="must">*</span>
                  <input id="entrance" name="entrance" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="pesantren">Pondok Pesantren</label>
                  <span>(Jika Ada)</span>
                  <input id="pesantren" name="pesantren" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sex" class="control-label">Status Pernikahan</label><span class="must">*</span>
                  <select name="sex" id="sex" class="form-control" required>
                    <optgroup label="Pilih Status Pernikahan">
                      <option value="0">Belum Menikah</option>
                      <option value="1">Menikah</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="item">
                <legend>Informasi Pribadi Lanjutan Lagi</legend>
                <div class="form-group">
                  <label for="from_place">Alamat Asal</label><span class="must">*</span>
                  <textarea id="from_place" name="from_place" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label for="now_place">Alamat Domisili</label><span class="must">*</span>
                  <textarea id="now_place" name="now_place" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label for="skill">Bidang Keahlian</label><span class="must">*</span>
                  <input id="skill" name="skill" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="activity" class="control-label">Aktivitas Saat Ini</label>
                  <span>(boleh lebih dari satu)</span>
                  <div class="checkbox">
                    <label><input type="checkbox" value="kerja" name="activity[]" required>Kerja</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="kuliah" name="activity[]" required>Kuliah</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="mondok" name="activity[]" required>Mondok</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="mengabdi" name="activity[]" required>Mengabdi</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="kursus" name="activity[]" required>Kursus</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="activity[]" required>Lainnya <input id="skill" name="skill" type="text"></label>
                  </div>
                </div>
              </div>

              <div class="item">
                <legend>Informasi Kontak</legend>
                @foreach ($contacts as $contact)
                <div class="form-group">
                  <label for="{{ $contact->slug }}">{{ ucwords(strtolower($contact->name)) }}</label><span class="must">*</span>
                  <input id="{{ $contact->slug }}" name="{{ $contact->slug }}" type="text" class="form-control">
                </div>
                @endforeach
              </div>

              <div class="item">
                <legend>Informasi Tahun Lulus Pendidikan</legend>
                @foreach ($educations as $education)
                <div class="form-group">
                  <label for="{{ $education->slug }}">{{ strtoupper($education->name) }}</label><span class="must">*</span>
                  <input id="{{ $education->slug }}" name="{{ $education->slug }}" type="text" class="form-control" required>
                </div>
                @endforeach
              </div>

              <div class="item">
                <legend>Bagi yang Memiliki Usaha</legend>
                <div class="form-group">
                  <label for="sector">Bidang Usaha</label>
                  <input id="sector" name="sector" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="position">Jabatan</label>
                  <input id="position" name="position" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="address">Alamat Usaha</label>
                  <textarea id="address" name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="postal_code">Kode Pos</label>
                  <input id="postal_code" name="postal_code" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="omzet" class="control-label">Penghasilan Kotor Perbulan</label>
                  <select name="omzet" id="omzet" class="form-control">
                    <optgroup label="Pilih Rentang Penghasilan">
                      <option value="0">0 - 500.000</option>
                      <option value="500000">500.000 - 1.000.000</option>
                      <option value="1000000">1.000.000 - 3.000.000</option>
                      <option value="3000000">3.000.000 - 5.000.000</option>
                      <option value="5000000"> > 5.000.000</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="item">
                <legend>Bagi yang Sedang Melanjutkan Studi</legend>
                <input type="hidden" name="type" value="0">
                <div class="form-group">
                  <label for="level_on" class="control-label">Jenjang Pendidikan</label>
                  <select name="level_on" id="level_on" class="form-control">
                    <optgroup label="Pilih Jenjang Pendidikan">
                      <option value="0">-- Jenjang Pendidikan --</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="place" class="control-label">Tempat Pendidikan</label>
                  <select name="place" id="place" class="form-control">
                    <optgroup label="Pilih Tempat Pendidikan">
                      <option value="0">Dalam Negeri</option>
                      <option value="1">Luar Negeri</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="country">Negara</label>
                  <input id="country" name="country" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="university">Universitas</label>
                  <textarea id="university" name="university" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="field">Jurusan</label>
                  <input id="field" name="field" type="text" class="form-control">
                </div>
              </div>

              <div class="item">
                <legend>Bagi yang Berencana Melanjutkan Studi</legend>
                <input type="hidden" name="type" value="1">
                <div class="form-group">
                  <label for="level_plan" class="control-label">Jenjang Pendidikan</label>
                  <select name="level_plan" id="level_plan" class="form-control">
                    <optgroup label="Pilih Jenjang Pendidikan">
                      <option value="0">-- Jenjang Pendidikan --</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="place" class="control-label">Tempat Pendidikan</label>
                  <select name="place" id="place" class="form-control">
                    <optgroup label="Pilih Tempat Pendidikan">
                      <option value="0">Dalam Negeri</option>
                      <option value="1">Luar Negeri</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="country">Negara</label>
                  <input id="country" name="country" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="university">Universitas</label>
                  <textarea id="university" name="university" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="field">Jurusan</label>
                  <input id="field" name="field" type="text" class="form-control">
                </div>
              </div>

              <div class="item">
                <legend>Bagi yang Bekerja</legend>
                <input type="hidden" name="type" value="1">
                <div class="form-group">
                  <label for="work" class="control-label">Bekerja</label>
                  <select name="work" id="work" class="form-control">
                    <optgroup label="Pilih Pekerjaan">
                      <option value="0">Tidak Bekerja</option>
                      <option value="1">Bekerja</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="field">Bidang</label>
                  <input id="field" name="field" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="place">Tempat</label>
                  <textarea id="place" name="place" class="form-control"></textarea>
                </div>
              </div>

              <div class="item">
                <legend>Saran dan Masukan untuk HA KMNU IPB</legend>
                <div class="form-group">
                  <label for="content">Saran dan Masukan</label>
                  <textarea id="content" name="content" class="form-control"></textarea>
                </div>
              </div>

            </div>
            <div class="form-group">
              <button type="submit" id="save-button" class="btn btn-info">Simpan data Alumni</button>
            </div>
          {!! Form::close() !!}
          <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 col-sm-12">
            <ul class="arrow-slider">
              <li class="next-field prev-icon"><i class="fa fa-angle-double-left" id="prev"></i></li>
              <li class="next-field next-icon"><i class="fa fa-angle-double-right" id="next"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
      (function(window, document, $) {
        $('#born_date').datepicker();
        $('#born_date').click( function() {
          $('#born_date').datepicker("show");
        })

        var prev = $('#prev');
        var prevIcon = $('.prev-icon');
        var next = $('#next');
        var nextIcon = $('.next-icon');
        var items = $('.item').length;
        var position = 1;
        var submit = $('#save-button');

        submit.hide();
        buttonSlider(position);

        prev.click( function() {
          position--;
          buttonSlider(position);
        })

        next.click( function() {
          position++;
          buttonSlider(position);
        })

        function buttonSlider(position) {
          if (position == items) {
            nextIcon.hide();
            submit.show();
            prevIcon.show();
            position = items;
          } else if (position == 1) {
            prevIcon.hide();
            nextIcon.show();
            submit.hide();
            position = 1;
          } else {
            prevIcon.show();
            nextIcon.show();
            submit.hide();
          }
        }

        $('.fields').slick({
          autoplay: false,
          autoplaySpeed: 2000,
          dots: false,
          infinite: false,
          adaptiveHeight: true,
          prevArrow: $('#prev'),
          nextArrow: $('#next')
        });

        $('#faculty_id').change( function () {
          var facultyId = $('#faculty_id').val();
          getDepts(facultyId);
        });

        function getDepts(faculty) {
          $.ajaxSetup({
            type: 'post',
            url: '{{ asset('/faculties') }}',
            cache: false
          });

          var token = $('input[name="_token"]').val();
          $.ajax({
            data: {_token: token, faculty_id: faculty},
            success: function(response) {
              $('#department_id').html(response.departments);
            }
          });
        }
      })(window, document, jQuery);
    </script>
  </body>
</html>
