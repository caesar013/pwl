@extends('main.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="container">
                <form action="/articles" method="post" enctype="multipart/formdata">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input type="text" class="form-control" required="required" name="title">
                        <label for="content">Content: </label>
                        <textarea type="text" class="form-control" required="required" name="content"></textarea>
                        <label for="image">Feature Image: </label>
                        <input type="file" class="form-control" required="required" name="image">
                        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
