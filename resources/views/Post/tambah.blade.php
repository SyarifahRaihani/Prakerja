@extends('template')

@section('content')

<h2>Tambah Posting</h2>
    <form action="{{ route('post.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi</label>
            <input type="text" class="form-control  @error('isi') is-invalid @enderror" name="isi" value="{{ old('isi') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tgl_buat') is-invalid @enderror" name="tgl_buat" value="{{ old('tgl_buat') ?: date('Y-m-d') }}">
            @error('tgl_buat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection