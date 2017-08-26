<script>
    $(document).ready(function() {
      $('#provinceSelect').change(function() {
        var id = $('#provinceSelect').val();
        var code = 'city';
        changeData(code, id);
      });

      $('#citySelect').change(function() {
        var id = $('#citySelect').val();
        var code = 'district';
        changeData(code, id);
      });

      $('#districtSelect').change(function() {
        var id = $('#districtSelect').val();
        var code = 'village';
        changeData(code, id);
      });

      function changeData(code, id) {
        // console.log(code, id)
        $.ajaxSetup({
          type: 'post',
          url: '{{ url("district")}}',
          cache: false
        });

        var token = $('input[name="_token"]').val();
        $.ajax({
          data: {_token:token, code: code, id:id},
          success: function(respond) {
            $('#citySelect').html(respond.cities);
            $('#districtSelect').html(respond.districts);
            $('#villageSelect').html(respond.villages);
              // console.log(respond);
          }
        });
      }
    });
</script>
