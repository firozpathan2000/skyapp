@extends ('components.header') 
@section('title', 'Products')
@extends ('components.navbar') 
@extends ('components.sidebar') 
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
   <div class="card">
      <div class="card-body row">
         <h4 class="col card-title">All Products</h4>
         <button type="button" class="btn btn-primary col-md-0 mr-5 btn-icon-text btn-sm float-right" data-toggle="modal" data-target="#AddProductModal">Add&nbsp;&nbsp;<i class="fa fa-plus btn-icon-prepend" aria-hidden="true"></i> </button>
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>User</th>
                     <th>First name</th>
                     <th>Progress</th>
                     <th>Amount</th>
                     <th>Deadline</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- Product Modal -->
<div class="modal fade" id="AddProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="forms-sample" action="#" enctype="multipart/form-data">
               <div class="row">
                  <div class="col form-group">
                     <label for="ProductName">Product Name</label>
                     <input type="text" class="form-control" name="product-name" id="ProductName" placeholder="Product Name">
                  </div>
                  <div class="col form-group">
                     <label for="category">Category</label>
                     <input type="email" class="form-control" name="category" id="category" placeholder="Category">
                  </div>
               </div>
               <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
               </div>
               <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status" id="status">
                     <option>Active</option>
                     <option>In Active</option>
                  </select>
               </div>
               
              <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

               <div class="form-group">
                  <label>Product Image</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                     <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                     <span class="input-group-append">
                     <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                     </span>
                  </div>
               </div>
               <div class="modal-footer">
                  <button class="btn btn-light">Cancel</button>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection