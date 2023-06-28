@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/developer/update/ {{ $developer->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="{{ old('company', $developer->company) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $developer->email) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ old('owner', $developer->owner) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ old('address', $developer->address) }}" required>
                            </div>
                            <br>
                            <div class="col-auto">
                                @foreach ($licenses as $index => $license)
                                    <div class="file-container my-2">
                                        <a href="{{ route('pdf.preview', ['file' => $license]) }}" target="_blank">Tampilkan
                                            {{ pathinfo($license, PATHINFO_FILENAME) }}</a>
                                    </div>
                                    <input type="file" class="form-control noscroll" id="license"
                                        name="license[{{ $index }}]" multiple>
                                @endforeach
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telp" class="form-label">Phone number</label>
                                <input type="number" class="form-control" id="telp" name="telp"
                                    value="{{ old('telp', $developer->telp) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/developer/show/{{ $developer->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
