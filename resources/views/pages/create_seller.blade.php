@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Seller</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>


        @endif
        {!! Form::open(['url' => ['store-seller'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email','Email') }}
                {{ Form::text('email',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('product_type','Product Type') }}
                {{ Form::text('product_type',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('total_sales','Total Sales') }}
                {{ Form::text('total_sales',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
