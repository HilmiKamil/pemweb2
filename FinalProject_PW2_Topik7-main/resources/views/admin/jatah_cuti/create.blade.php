<x-layout>
    <x-slot name="page_name">Halaman Jatah Cuti / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/jatah_cuti') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <select class="form-control" id="nip" name="nip">
                        <option value="">Pilih NIP</option>
                        @foreach($jatah_cutis as $jatah)
                        <option value="{{ $jatah->nip }}">{{ $jatah->nip }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>