@extends('backend.app')
@section('title', 'Edit Course Details')
@section('content')

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Course</h4>

                    <form class="form-sample" action="{{ route('course.update', $course->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <!-- <p class="card-description">
                            Personal info
                        </p> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Course Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $course->name) }}" placeholder="Course Name">
                                    @if ($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="duration">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        value="{{ old('duration', $course->duration) }}"
                                        placeholder="Duration e.g. 120 minutes/day">
                                    @if ($errors->has('duration'))
                                        <div class="error">{{ $errors->first('duration') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="period">Period</label>
                                    <input type="text" class="form-control" id="period" name="period"
                                        value="{{ old('period', $course->period) }}" placeholder="Period e.g. 12 Months">
                                    @if ($errors->has('period'))
                                        <div class="error">{{ $errors->first('period') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Select Category</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="category_id" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == old('category_id', $course->category_id) ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category_id'))
                                            <div class="error">{{ $errors->first('category_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price', $course->price) }}" placeholder="Price">
                                    @if ($errors->has('price'))
                                        <div class="error">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <select class="form-control" id="language" name="language" placeholder="Language">
                                        <option {{ old('language', $course->language) == 'Hindi' ? 'selected' : '' }}>Hindi
                                        </option>
                                        <option {{ old('language', $course->language) == 'English' ? 'selected' : '' }}>
                                            English</option>
                                        <option {{ old('language', $course->language) == 'Urdu' ? 'selected' : '' }}>Urdu
                                        </option>
                                        <option {{ old('language', $course->language) == 'Arabic' ? 'selected' : '' }}>
                                            Arabic</option>
                                    </select>
                                    @if ($errors->has('language'))
                                        <div class="error">{{ $errors->first('language') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Assessment</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-info">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="assessment"
                                                        id="assessment1" value="1"
                                                        {{ old('assessment', $course->assessment) == 1 ? 'checked' : '' }}>
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-info">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="assessment"
                                                        id="assessment2" value="0"
                                                        {{ old('assessment', $course->assessment) == 0 ? 'checked' : '' }}>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('assessment'))
                                        <div class="error">{{ $errors->first('assessment') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Course Description</label>
                            <textarea class="editor form-control" id="description" name="description"
                                rows="3">{!! old('description', $course->description) !!}</textarea>
                            @if ($errors->has('description'))
                                <div class="error">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="requirement">Course Requirements</label>
                            <textarea class="editor form-control" id="requirement" name="requirement"
                                rows="3">{!! old('requirement', $course->requirement) !!}</textarea>
                            @if ($errors->has('requirement'))
                                <div class="error">{{ $errors->first('requirement') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            @include('backend.components.goback')
                            <button class="btn btn-info btn-block ">Update Course Detail</button>
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