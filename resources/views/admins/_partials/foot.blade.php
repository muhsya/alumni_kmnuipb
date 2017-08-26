<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/essential-plugins.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery.vmap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery.vmap.world.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery.vmap.sampledata.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
@yield('page-script')
<script type="text/javascript">
  $('#sl').click(function(){
    $('#tl').loadingBtn();
    $('#tb').loadingBtn({ text : "Signing In"});
  });
      
  $('#el').click(function(){
    $('#tl').loadingBtnComplete();
    $('#tb').loadingBtnComplete({ html : "Sign In"});
  });
     
  $('#demoDate').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
  });

  $('#demoDate2').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
  });
</script>