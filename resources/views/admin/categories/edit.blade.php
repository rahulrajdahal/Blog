@extends('layouts.app')


@section('content')


   @include('admin.errors.errors')

<div class="card">
<div class="card card-header">
        Update Category  {{ $category->name }}
    </div>


    <div class="card-body">
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-info" type="submit"> 
                        Update Category
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop