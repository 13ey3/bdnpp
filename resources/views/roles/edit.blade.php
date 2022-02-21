@extends('layouts.app')

@section('content')

    <div class="card mb-4">
        <div class="card-header">
            {{ __('Edit Role') }}
            <a class="btn btn-primary float-end" href="{{ route('roles.index') }}"> Back</a>
        </div>

        <div class="card-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <div class="fw-bold mb-1">Permission</div>
                        @php
                            $judul = '';
                        @endphp

                        @foreach ($permission as $value)
                            @php
                                $roleExp = explode('-', $value->name);
                                if ($judul !== $roleExp[0]) {
                                    $judul = $roleExp[0];
                                    echo '<span class="fw-semibold">' . $judul . ':</span><br>';
                                } 
                            @endphp
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                {{ $value->name }}</label>
                            <br />
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
