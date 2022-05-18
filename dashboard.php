<?php 
 
// function date yang awalnya bahasa inggris menjadi b indonesia
 
function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return "<b>" . $hari_ini . "</b>";
 
}
?>

<div class="container-fluid">
    <div class="card shadow mb-5 m-0 border border-dark ">
        <div class="card-header border border-dark m-0  py-3 bg-info">
            <o class="m-0">
                <?php 
                date_default_timezone_set('Asia/Jakarta'); // setting zona waktu lokal
                $jam =date("H");
                ?>
                <!-- menampilan waktu pagi siang sore malam -->
                <p class="h5 fw-bold text-white font-weight-bold">Selamat <?php 
                if (($jam >= 3) && ($jam <= 9)) {
                    echo 'Pagi,&nbsp;' . 'Selamat Datang di Dashboard' .' &nbsp; <img src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/64/000000/external-sunrise-weather-tulpahn-outline-color-tulpahn.png" width="50px" heigth="50px"/>';
                } elseif (($jam >= 9) && ($jam <= 15)) {
                    echo 'Siang,&nbsp;' . 'Selamat Datang di Dashboard' . '&nbsp; <img src="https://img.icons8.com/color/48/000000/sun--v3.png" width="50px" heigth="50px"/>';
                } elseif (($jam >= 15) && ($jam <= 17)) {
                    echo 'Sore,&nbsp;' . 'Selamat Datang di Dashboard' . '&nbsp; <img src="https://img.icons8.com/external-phatplus-lineal-color-phatplus/64/000000/external-sunset-weather-phatplus-lineal-color-phatplus.png" width="50px" heigth="50px"/>';
                } else {
                    echo 'Malam,&nbsp;' . 'Selamat Datang di Dashboard' . '&nbsp; <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/64/000000/external-moon-halloween-xnimrodx-lineal-color-xnimrodx.png" width="50px" heigth="50px"/>';
                };
                ?></p>
            </ol>
        </div>
    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <div class="card border-left-primary shadow h-100 w-100 py-2">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 ">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Anda Login Sebagai:</div>
                                            <div class="h5 mb-0 font-weight-bold fs-15 text-gray-800"><?php echo $_SESSION['nama_lengkap'] ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i  class="fas fa-user fa-2x text-blue-300 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Login Pukul:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo date("h:i:s:a")?></div>
                                        </div>
                                        <div class="col-auto"> <i  class="fas fa-clock fa-2x text-blue-300 text-success"></i>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hari ini:
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo hari_ini(); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-blue-300 text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fs-15 font-weight-bold text-warning text-uppercase mb-1">
                                                Tanggal:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo date("d-m-y")?></div>
                                        </div>
                                        <div class="col-auto"><i  class="fas fa-calendar-alt fa-2x text-blue-300 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>                    
            </div>
         </div>
    </div>
</div>
            