@extends('layouts.app')


@section('content')


    @include('admin.errors.errors')

<div class="card">
<div class="card card-header">
        Create a new Category
    </div>


    <div class="card-body">
        <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"> 
                        Save Category
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop