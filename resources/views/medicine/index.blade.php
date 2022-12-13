@extends('home')
@include('includes.sidebar')
<div id="content" class="pl-5">
@include('includes.navbar')
 @section('content')
 <div class="container">
   <div class="row">
    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#createModal">Add medicine</button>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Category</th>
                <th>Name</th>
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
          @foreach ($medicines as $medicine)
            <tr>
                <td>{{ $medicine->category->category_name }}</td>
                <td>{{ $medicine->name }}</td>
                <td>{{ $medicine->store_box }}</td>
                <td>{{ $medicine->purchase_price }}</td>
                <td>{{ $medicine->sell_price }}</td>
                <td>{{ $medicine->qty }}</td>
                <td>{{ $medicine->generic_name }}</td>
                <td>{{ $medicine->company }}</td>
                <td>{{ $medicine->effects }}</td>
                <td>{{ $medicine->expiry_date }}</td>
                <td>
                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>                  
          @endforeach
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
            <form method="POST" action="{{ url('medicine/create') }}">
              @csrf
              <div class="form-group">
                <label for="category_id">Category <span class="text-danger">*</span></label>
                <select class="form-control" name="category_id" id="category_id" required>
                    <option value="" selected disabled>Select Category</option>
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
              </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="store_box" id="store_box" placeholder="Store Box">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="purchase_price" id="purchase_price" placeholder="Purchase price">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="sell_price" id="sell_price" placeholder="Selling price">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="generic_name" id="generic_name" placeholder="Generic name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="company" id="company" placeholder="company">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="effects" id="effects" placeholder="Effects">
                </div>
                <div class="form-group">
                  <label for="expiry_date">Expire Date</label>
                  <input type="date" class="form-control" name="expiry_date" id="expiry_date" placeholder="Expiry date">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save</button>
              </form>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Save</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
    {{-- Edit modal ends --}}

   </div>
 </div>
    
 @endsection