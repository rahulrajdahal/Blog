@extends('layouts.app')


@section('content')


    @include('admin.errors.errors')

<div class="card">
<div class="card card-header">
        Create a new Tag
    </div>


    <div class="card-body">
        <form action="{{ route('tag.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="tag">Name</label>
                <input type="text" name="tag" class="form-control">
            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"> 
                        Save Tag
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop