@extends('home')
@include('includes.sidebar')
<div id="content" class="pl-5">
@include('includes.navbar')
 @section('content')
 <div class="container">
   <div class="row">
    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#createModal">Add category</button>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Store Box</th>
                <th>Purchase price</th>
                <th>Selling price</th>
                <th>Quantity</th>
                <th>Generic Name</th>
                <th>Company</th>
                <th>Effects</th>
                <th>Expiry date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Syrup</td>
                <td>Chidren drug</td>
                <td>Syrup</td>
                <td>Chidren drug</td>
                <td>Syrup</td>
                <td>Chidren drug</td>
                <td>Syrup</td>
                <td>Chidren drug</td>
                <td>Syrup</td>
                <td>Chidren drug</td>
                <td>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>


    <!-- create Modal starts -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">New Medicine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="category_name">Name</label>
                  <input type="text" class="form-control" id="category_name" placeholder="Enter category name">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" placeholder="Enter category description">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info">Save</button>
        </div>
      </div>
    </div>
  </div>
{{-- Create modal ends --}}

    <!-- Edit Modal starts -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Medicine</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="category_name">Name</label>
                      <input type="text" class="form-control" id="category_name" placeholder="Enter category name">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" placeholder="Enter category description">
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info">Save</button>
            </div>
          </div>
        </div>
      </div>
    {{-- Edit modal ends --}}

   </div>
 </div>
    
 @endsection