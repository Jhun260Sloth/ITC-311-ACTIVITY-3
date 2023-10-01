<!DOCTYPE html>
<html lang="en">

<body>

<?= $this->include('homepage/head') ?>

<?= $this->include('adminfold/adminhead') ?>

<?= $this->include('shopsrc/body') ?>


<br>
<br>
<br>
<br>

<?= $this->include('adminfold/admintable') ?>

<!-- Your view file -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


              <form action="/insert" method="post" enctype="multipart/form-data" >

              	<input type="hidden" name="id" value="<?= $datz['id']?>">

                <div class="row">
                    <div class="col-md-6">
                      
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?= $datz['name']?>">
                        </div>

                        <div class="form-group">
						    <label for="description">Description:</label>
						    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description">
						        <?= $datz['description'] ?>
						    </textarea>
						</div>

						<h6>Current Image: </h6>
						  <img src="<?= $datz['image'] ?>" alt="Null Image" width="100" border-radius="20"></td>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Update Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?= $datz['price']?>">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category" value="<?= $datz['category']?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" value="<?= $datz['quantity']?>" >
                        </div>
                    </div>

                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>


        </div>
    </div>
</div>
 </form>


<?= $this->include('adminfold/adminfoot') ?>

<?= $this->include('homepage/foot') ?>


<script>
        // Use JavaScript/jQuery to show the modal when the view is loaded
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>

</body>


</html>
