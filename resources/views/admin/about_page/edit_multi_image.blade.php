@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">About Multi Image</h4><br><br>
                            <form action="{{ route('update.multi.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $multi_image->id }}">



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Multi
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input name="multi_image" class="form-control" type="file" id="about_page">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="show_about_page" class="rounded avatar-lg"
                                            src="{{ asset($multi_image->multi_image) }}" alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Multi Image">


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
