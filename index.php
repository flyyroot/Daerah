<?php
include('./Layout/header.php');
$data = json_decode(file_get_contents('./Data/region.json'), true);
$banyak_data = count($data);
$banyak_data_akhir = $banyak_data-1;
// mengambil semua propinsi
$arr=array();
$x=0;
while($x<$banyak_data_akhir){
    $x++;
    $prop = $data[$x]['propinsi'];
    $arr[] = $prop;
}
// menghapus duplikat
$propinsi = array_values(array_unique($arr,SORT_REGULAR));
?>
<div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Propinsi</th>
                <th>OPSI</th>
            </tr>
            
        </thead>
        <tbody>
        <?php
            $no =1;
            $p15 = array_slice($propinsi,0,17);
            foreach($p15 as $a){ 
                ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$a ?></td> 
                <td> <a href="deskripsi.php?view=<?=$a ?>"><button type="button" class="btn btn-secondary btn-sm">Lihat</button></a></td>  
            </tr>
            <?php }?>
                
        </tbody>
        </table>
    </div>
    <div class="col py-3 px-lg-5">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Propinsi</th>
                <th>OPSI</th>
            </tr>
            
        </thead>
        <tbody>
        <?php
            $no =18;
            $p32 = array_slice($propinsi,17,34);
            foreach($p32 as $a){ 
                ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$a ?></td>
                <td><a href="deskripsi.php?view=<?=$a ?>"><button type="button" class="btn btn-secondary btn-sm">Lihat</button></a></td>
                
            </tr>
            <?php }?>
                
        </tbody>
        </table>
    </div>
  </div>
</div>

