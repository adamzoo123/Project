<!DOCTYPE html>
<html lang="en">
    <?php   require_once("backend/model/Data.php"); 
    // use \App\backend\model\Data;
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/backend/view/assets/styles/main.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <title>CMS</title>
</head>
<body>



<?php
$data = Data::getData();
$insertData = Data::insertData();
$getID = Data::getById();
?>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Fields <b>Manager</b></h2>
                </div>
                <div class="col-lg-6">
                    <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Fields</span></a>
                </div>
            </div>
        </div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach($data as $row){ ?>
                <tr>
                <!-- <td style="width: 20%"><?php // echo $row["title"]; ?></td> -->
                <td style="width: 45%"><?php echo $row["data"]; ?></td>
                <td style="width: 45%"><?php echo $row["data_1"]; ?></td>
                <td style="width: 10%">
                <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
                </tr>
            <?php } ?>

                </tbody>
            </table>
    </div>
 <!-- Add Modal HTML -->
 <div id="addModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form method="POST" action="">
     <div class="modal-header">      
      <h4 class="modal-title">Add Fields</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Content</label>
       <textarea id="mytextarea" class="form-control" name="data"></textarea>
      </div>
      <div class="form-group">
       <label>Content</label>
       <textarea id="mytextarea_1" class="form-control" name="data_1"></textarea>
      </div>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success" name="add" value="Add">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Edit Modal HTML -->
 <div id="editModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Edit Fields</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Content</label>
       <textarea id="mytextarea" class="form-control" required></textarea>
      </div>
      <div class="form-group">
       <label>Content</label>
       <textarea id="mytextarea_1" class="form-control" required></textarea>
      </div>  
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Delete Modal HTML -->
 <div id="deleteModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Delete Fields</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>

 <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

<script src="/backend/view/assets/js/main.js"></script>




















</body>
</html>


