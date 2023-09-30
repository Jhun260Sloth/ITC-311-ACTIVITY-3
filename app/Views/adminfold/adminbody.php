
<body>
	
<div class="container mt-5">
    <div class="card">
    	<div class="container">
        <div class="card-header">
        </div>
        <div class="card-body">

            <form action="/insert" method="post" enctype="multipart/form-data" >

                <div class="row">
                    <div class="col-md-6">
                      
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description"></textarea>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>