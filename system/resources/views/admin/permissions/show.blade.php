@extends('admin.layouts.app')

@section("content")
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">{{$params['singular_title']}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <p>{{$row->title}}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="publishedAt">Published At</label>
                    <p>{{($row->publishedAt)?date('d-m-Y', strtotime($row->publishedAt)):"Not Published"}}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <p>{{$row->description}}</p>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Attachment</label>
                    <p>
                        <a target="_blank" class="attach_icon" href="{{url($row->attachment)}}">
                            <i class="fas fa-file-pdf"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Featured</label>
                    <p><a target="_blank" class="attach_icon" href="{{url($row->featured)}}">
                        <i class="fas fa-image"></i></a></p>
                </div>
            </div>
        </div>
    <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <a href="{{route($params['route'].".edit",$parm)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
    </div>
</div>

@endsection