@extends('backend.app')
@section('title', 'Courses')

@section('style')

<link rel="stylesheet" href="{{ url('backend') }}/vendors/select2/select2.min.css">

<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '.editor'
  });
  </script>
</head>
@endsection

@section('content')
<div class="row">


    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Course</h4>
                <form class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Course Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Course Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Duration</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Duration e.g. 120 minutes/day">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Period</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Period e.g. 12 Months">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Select Category</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        @foreach ($categories as $category)
                                        <option>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Price</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Assessment</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Course Description</label>
                        <textarea class="editor form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Course Requirements</label>
                        <textarea class="editor form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<!-- Custom js for this page-->
<script src="{{ url('backend') }}/js/file-upload.js"></script>
<!-- <script src="{{ url('backend') }}/js/typeahead.js"></script> -->
<script src="{{ url('backend') }}/js/select2.js"></script>
<!-- End custom js for this page-->

@endsection