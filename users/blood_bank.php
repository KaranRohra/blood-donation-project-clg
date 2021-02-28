<?php
$title = "Home";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-group col-md-12">
                
                <form class="form-horizontal" method="post" action="blood_bank.php">
                    <div class="form-group">
                        <label class="col-sm-6">Search Blood Bank by city </label>
                        <div class="col-sm-4">
                            <input type="text" name="city" value="" required="true" class="form-control"/>
                        </div>
                        <div class="col-sm-2">
                     
                            <button class="btn btn-info btn-sm" name="searchByCityBtn" >Search</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include 'layout/_footer.php'; ?>