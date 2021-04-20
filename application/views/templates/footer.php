<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <span>SIRT</span>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assets/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Data RT tambah RT -->

<script>
  $("#provinsi").change(function(){

// variabel dari nilai combo box kendaraan
    var id = $("#provinsi").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
    url : "<?php echo base_url();?>datart/get_kabupaten",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+'</option>'
        }
        $("#kota").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });

    $("#kota").change(function(){

// variabel dari nilai combo box kendaraan
    var id = $("#kota").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
    url : "<?php echo base_url();?>datart/get_kecamatan",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+'</option>'
        }
        $("#kecamatan").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });
    
    $("#kecamatan").change(function(){

// variabel dari nilai combo box kendaraan
    var id = $("#kecamatan").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
    $.ajax({
    url : "<?php echo base_url();?>datart/get_desa",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+'</option>'
        }
        $("#kelurahan").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/js/adminlte.min.js"></script>
</body>
</html>