@extends('home')
@include('includes.sidebar')
<div id="content" class="pl-5">
    @include('includes.navbar')
    @section('content')
        <div class="container">
            <div class="row">
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#createModal">Add category</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary editbtn" data-toggle="modal"
                                        data-target="#editModal" data-id="{{ $category->id }}"
                                        data-category_name="{{ $category->category_name }}"
                                        data-description="{{ $category->description }}"
                                        onclick="editModal(this)">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- create Modal starts -->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel">New category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('category/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_name">Name</label>
                                        <input type="text" class="form-control" name="category_name" id="category_name"
                                            placeholder="Enter category name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Enter category description">
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
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('category/edit') }}">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group">
                                        <label for="category_name">Name</label>
                                        <input type="text" class="form-control category_name" name="category_name"
                                            value="" id="category_name" placeholder="Enter category name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control description" name="description"
                                            value="" id="description" placeholder="Enter category description">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Edit modal ends --}}

            </div>
        </div>
    @endsection

    @push('page-js')
        <script>
            function editModal(el) {
                var link = $(el) //refer `a` tag which is clicked
                var modal = $("#editModal") //your modal
                var category_name = link.data('category_name')
                var description = link.data('description')
                modal.find('#category_name').val(category_name);
                modal.find('#description').val(description);
            }
        </script>
    @endpush
