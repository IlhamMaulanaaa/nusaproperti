@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <h2 class="card-title fs-2 text-primary col-md-8 text-uppercase">
                        {{ $tables }}
                    </h2>
                    <div class="col-md-4 text-end">
                        <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Property</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            {{-- <th scope="col">Type</th> 
                            <th scope="col">Developer</th> 
                            <th scope="col">Agent</th>  --}}
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($properties->count())
                            @foreach ($properties as $property)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $property->id ?></td> --}}
                                    <td class="text-start"><?= $property->unit ?></td>
                                    <td class="text-start"><?= $property->property ?></td>
                                    <td class="text-start"><?= $property->description ?></td>
                                    <td class="text-start"><?= $property->address ?></td>
                                    {{-- <td class="text-start "><?= $property->type->housing ?></td>
                                    <td class="text-start "><?= $property->developer->company ?></td>
                                    <td class="text-start "><?= $property->agent->name ?></td> --}}
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $property->id }}">Detail</a>
                                        <form action="delete/{{ $property->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($propertys->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/property/all">Back</a>
                                    </div> --}}
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection