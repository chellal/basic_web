@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">About Page</h4><br><br>
                            <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $aboutPage->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text"
                                            value="{{ $aboutPage->title }}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input name="short_title" class="form-control" type="text"
                                            value="{{ $aboutPage->short_title }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="short_description" class="form-control" rows="5">{{ $aboutPage->short_description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="long_description">{{ $aboutPage->long_description }}</textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Page Image</label>
                                    <div class="col-sm-10">
                                        <input name="about_image" class="form-control" type="file"
                                            value="{{ $aboutPage->about_image }}" id="about_page">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="show_about_page" class="rounded avatar-lg"
                                            src="{{ !empty($aboutPage->about_image) ? url($aboutPage->about_image) : url('upload/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update About Page">


                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#about_page').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_about_page').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection