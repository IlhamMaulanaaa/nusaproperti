@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail Location</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ $location->location }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/location/data">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $location->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
