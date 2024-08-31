
@extends('layouts.admin')

@section('content')
   
<!-- resources/views/categories.blade.php -->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                    <form>
                                    @csrf
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            
                                                <button type="submit" class="btn btn-warning btn-sm">Update</button>
                                                
                                            
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                  
                 <!-- ******************* 
                  form to add new categories 
                  ************************************* -->
                    <button href="" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Click to Add a category</button>
                 @if(session('addSuccess'))
                    <div class="alert alert-success my-2">
                        {{session('addSuccess')}}
                    </div>
                @endif
                 @if(session('addError'))
                    <div class="alert alert-danger my-2">
                        {{session('addError')}}
                    </div>
                @endif

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel">Add new Catagory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- form to submit  -->
                    <form action="{{route('category.create')}}" method="post">
                        @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Category-name" class="col-form-label">Category Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                  
                    
                    </div>
                </div>
                </div>
                   
                </div>
            </div>
        </div>
    </div>

  @endsection

    

