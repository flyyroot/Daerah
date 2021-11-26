<?php
    $ab = $_GET['view'];
    if(isset($ab)){
        include('./Layout/header.php');
        $data = json_decode(file_get_contents('./Data/region.json'), true);
        $banyak_data = count($data);
        $banyak_data_akhir = $banyak_data-1;
        $y=0;
        $arr = array();
        while($y<$banyak_data_akhir){
            $y++;
            $prop = $ab;
            if($data[$y]['propinsi'] === $prop){
            $param=$data[$y];
            // var_dump($param); 
            $arr[] = $param;
            }   
        }
?>
<div class="container">
    <div class="row mt-3 mb-4">
       
            <?php 
            foreach($arr as $ar){
            ?>
             <div class="col-sm-4 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <?= $ab ?>
                </div>
                <div class="card-body p-3 justify-center">
                    <p class="card-text"> Kota : <?= $ar['kota']?></p>
                    <p class="card-text"> Kecamatan : <?= $ar['kecamatan']?></p>
                    <p class="card-text"> Latitude : <?= $ar['lat']?></p>
                    <p class="card-text"> Longitude : <?= $ar['lon']?></p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            </div>
            <?php
            }
            ?>
        
    </div>
    
</div>




<?php
    }
?>
