<!-- <h1>Home</h1> -->
<?php  require_once("backend/model/Data.php");
// use \App\backend\model\Data; 

$data = Data::getData();


foreach($data as $content){
}
?>
<div class="plugin-card-double">
    <div class="col col-1">
        <?php echo $content['data'] ?>        
    </div>
    <div class="col col-2">
        <?php echo $content['data_1'] ?>
    </div>
</div>