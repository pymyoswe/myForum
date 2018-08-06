@extends('admin.layouts.master')

@section('title')
   New Proposal Session
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Proposal Session
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="{{ route('dashboard.proposal.index') }}">Proposal</a></li>
        <li>Create</li>
      </ol>
    </section>

    <div class="clearfix"></div>

    <div class="content">
      <div class="row">
        <div class="col-sm-12">
          <!-- Input addon -->
          <div class="box box-primary">
            <div class="box-body">
                <div class="col col-lg-6 col-lg-offset-3">
                    <form action="{{ route('dashboard.proposal.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }} has-feedback">
                            <label for="author">Author</label>
                            <input id="author" type="text" class="form-control" name="author"  value="{{ old('author') }}" required>
                            @if ($errors->has('author'))
                                <span class="help-block">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                            @endif
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group {{ $errors->has('type_id') ? ' has-error' : '' }} ">
                            <label for="type_id">Select Proposal Type</label>
                            <select id="type_id" name="type_id" class="select2 form-control" style="width: 100%;" required tabindex="-1" aria-hidden="true">
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                            </select>
                            @if ($errors->has('type_id'))
                                <span class="help-block">
                                <strong>{{ $errors->first('type_id') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('file_name') ? ' has-error' : '' }} ">
                            <label>PDF File</label>
                            <input type="file" name="file_name" required>
                            @if ($errors->has('file_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('file_name') }}</strong>
                            </span>
                            @endif
                        </div>


                        <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default bg-purple-gradient form-control">Submit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
                </div>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
@stop