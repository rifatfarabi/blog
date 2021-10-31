@extends('layouts.admin')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Edit Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category List</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>

        <!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title"> Edit Category</h3>
                            <a href="{{ route('category.index')}}" class="btn btn-primary">Go Back to Category Index</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2 my-5">
                                <form action="{{ route('category.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $category->name }}" aria-describedby="emailHelp" placeholder="Enter name">
                                      @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>

                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Description</label>
                                      <textarea name="description" class="form-control" placeholder="Enter description">{{ $category->description }}</textarea>
                                      @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.content-header -->
@endsection