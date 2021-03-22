
<?php
$title = "Home";
include 'layout/_header.php';

include 'layout/_top_nav.php';
require_once 'php/DBConnect.php';
$db = new DBConnect();
$banks = $db->getBanks();
?>

<?php
if(isset($_GET['search'])){
    // var_dump($_GET);
    $banks = $db->getFilteredBanks($_GET['search']);
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group col-md-12">
                <form class="form-horizontal" method="post" action="blood_bank.php" >
                    <div class="form-group" >
                        <label class="col-sm-6">Search Blood Bank by city </label>
                        <div class="col-sm-4">
                            <input id="hidden" type="text" name="city" value="" required="true" class="form-control" onkeyup="filterBanks(this.value)"/>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="filter">
            
        </div>
    </div>
</div>
<?php include 'layout/_footer.php'; ?>

<script>
function filterBanks(str) {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                // document.getElemetById("hidden").innerHTML = "";
                document.getElementById("filter").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "bloodbankdata/filter.php?search=" + str, true);
        xmlhttp.send();
    
}
filterBanks("");
</script>