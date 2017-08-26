<script>
  $(document).ready(function() {
    $('.delete-form').submit(function(e) {
      var conf = confirm('Hapus data ini?');
      // e.prevenDefault();
      if (conf == false) {
        return false;
      }
    });

    $('input[name="status"]').click(function() {
      $('#status-form').submit();
    });
  });
</script>
