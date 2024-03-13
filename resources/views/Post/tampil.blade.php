@extends('template')

@section('content')
    <h2> Postingan </h2>

    <a href="{{ route('post.create') }}" class="btn btn-primary md-2 mb-3">Tambah Posting</a>

    <div class="row">
        @foreach ($data as $item)
            <div class="col-sm-3">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ $item->isi }}</p>
                        <a href="{{url('post/'. $item->id . '/edit')}}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-primary">Hapus</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $item->tgl_buat }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    


@endsection