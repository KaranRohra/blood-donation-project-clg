<?php
require_once '../php/DBConnect.php';
$db = new DBConnect();

if(isset($_GET['search'])){
    // var_dump($_GET);
    $banks = $db->getFilteredBanks($_GET['search']);
}
?>

<!-- <?php //var_dump($banks) ?> -->
    <?php if(isset($banks[0])): ?>
        <label>Total number of banks: <span class="emphasize"><?= count($banks); ?> Banks</span> </label>
        <table class="table table-condensed">
            <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>City</th>
            </thead>
            
            <?php 
            $i=0;
            foreach($banks as $b): $i++;?>
            
            <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                <td><?= $b['bname'] ?></td>
                <td><?= $b['baddress']; ?></td>
                <td><?= $b['bphone']; ?></td>
                <td><?= $b["bcity"]; ?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <?php endif; ?>