@extends('layouts.default')

@section('content')
<div class="col-md-10">
    <form action="/freshdesk/template" method="post"> 
        @csrf
        <input  type="hidden" name="user_id" value="{{ \Auth::id() }}" />
        <div class="form-group">
            <label>Tên mẫu tin</label>
            <input required name="title" class="form-control" placeholder="Tên mẫu"/>
        </div>
        <div class="form-group">
            <textarea required id="summernote" name="content" rows="5"></textarea>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Sử dụng toàn hệ thống</label>
                    <select class="form-control" name="is_global">
                        <option value="0" selected>Không</option>
                        <option value="1">Có</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit">Lưu</button>
        </div>
    <form>
@endsection

@section('footer')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height: 300
  });
});
</script>
@endsection

@section('breadcrumb')

<div class="page-title">
    <h3>Tạo Mẫu tin</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li>Tạo mẫu tin mới</li>
        </ol>
    </div>
</div>

@stop