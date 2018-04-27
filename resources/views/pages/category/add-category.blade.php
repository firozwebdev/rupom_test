@extends('admin_layout')
@section('add-category')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="container">
        
            @if (Session::has('successMessage'))
            <div class="alert-success">
                {{ Session::get('successMessage') }}
            </div>
            @endif
        
        <div class="row">
            <div class="col-md-6 ">
                <h1>Add Category</h1>
            <form action="{{ route('save.category') }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="categoryName" class="form-control">
                    </div>
               
               
                    <div class="form-group">
                        <label for="">Category Description</label>
                        <textarea class="form-control" name="categoryDescription" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit"  class="form-control btn btn-primary" value="Add Category">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection