@extends('template.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-cube"></i> Data Kriteria</h1>

    <a href="/kriteria" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data Kriteria</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label class="font-weight-bold">Kode Kriteria</label>
                <input autocomplete="off" type="text" name="kode_kriteria" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Nama Kriteria</label>
                <input autocomplete="off" type="text" name="keterangan" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Bobot Kriteria</label>
                <input autocomplete="off" type="number" name="bobot" step="0.01" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Jenis Kriteria</label>
                <select name="jenis" class="form-control" required>
                    <option value="">--Pilih Jenis Kriteria--</option>
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" class="btn btn-primary"><i class="fa fa-sync-alt"></i> Reset</button>
    </div>
</div>

@endsection