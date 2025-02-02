@extends('layout.main')
@section('content')

<h3>Edit Data Guru</h3>
<div class="card">
    <div class="card-body">
    <form action="{{ route('guru.update', $guru->id_guru) }}" >
      @csrf
            <div class="row mb-3">
              <label for="id_guru" class="col-sm-2 col-form-label">ID Guru</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="id_guru" name="id_guru" value="{{ $guru->id_guru }}">              
              </div>
            </div>

            <div class="row mb-3">
              <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_guru') is-invalid @enderror" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}">
                @error('nama_guru')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $guru->alamat }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
             
              </div>
            </div>

            <div class="row mb-3">
              <label for="phone" class="col-sm-2 col-form-label">Handphone</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $guru->phone }}">
                @error('phone')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm @error('gender') is-invalid @enderror" name="gender" id="gender">
                  <option value="" selected>-Pilih-</option>
                  <option value="M" {{ ($guru->gender=='M') ? 'selected' : '' }}>Male</option>
                  <option value="F" {{ ($guru->gender=='F') ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
          </form>
    </div>
</div>
@endsection