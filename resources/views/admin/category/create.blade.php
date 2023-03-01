@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h4> Category
                        <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm float-end" >back</a>
                    </h4>
                </div>
                <div class="card-body" >
                    <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <label for="name">Name</label>
                                <input type="text" name="name"class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug"class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label for="description">Description</label>
                                <textarea type="text" name="description"class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="image">Image</label>
                                <input type="file" name="image"class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="status">Status</label><br/>
                                <input type="checkbox" name="status"/>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title"class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword"class="form-control"rows="3"/>
                            </div>
                            <div class="col-md-12 mb-3 ">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description"class="form-control" rows="3"/>
                            </div>
                            <div class="col-md-12 mb-3 ">
                               <button type="submit" class="btn btn-primary  float-end">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
