@extends('template')

@section('content')
<h2>Edit Posting</h2>
    <form action="{{ route('post.update', $data->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi</label>
            <input type="text" class="form-control  @error('isi') is-invalid @enderror" name="isi" value="{{ $data->isi }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tgl_buat') is-invalid @enderror" name="tgl_buat" value="{{ $data->tgl_buat ?: date('Y-m-d') }}">
            @error('tgl_buat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection