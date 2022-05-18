<Style>
     input::-webkit-outer-spin-button,
     input::-webkit-inner-spin-button {
         -webkit-appearance: none;
          margin: 0;
     }
 </Style>

<div class="card">
    <div class="card-header">
    <a href="user.php?url=dashboard" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <form action="simpan_catatan.php" method="post">
        <div class="form-group">
            <label>Pilih Tanggal</label>
            <input disable value="<?php echo date('d-m-Y');?>" name="tanggal" id="tanggal" type="text" required class="form-control" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label>Pilih Jam</label>
            <input  disabled value="<?php date_default_timezone_set('Asia/Jakarta');
            ?>"id="test" name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
            
        </div>
        <div class="form-group">
            <label>Pilih Lokasi</label>
            <input name="lokasi" onkeypress='return harusHuruf(event)' type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu Tubuh</label>
            <input name="suhu" max="45" min="20" type="number" required class="form-control" placeholder="Masukan Suhu Tubuh 20-45">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN </button>
        </div>
    </form>
    </div>
</div>
<script>

    //  Update Jam Supaya Live
    setInterval(() => {
            let a = new Date();
            document.getElementById("test").value = `${a.getHours()}:${a.getMinutes()}`;
    }, 1000);
    //  Update Jam Supaya Live

    function harusHuruf(evt){ 
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
    }
</script>