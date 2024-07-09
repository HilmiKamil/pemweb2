<x-layout>
    <x-slot name="page_name">Halaman Pengajuan Cuti</x-slot>
    <x-slot name="page_content">

        @if (session('pesan'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <a href="{{ url('dashboard/pengajuan_cuti/create')}}" class="btn btn-primary">+ Tambah Pengajuan</a>
        <br><br>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Tanggal Awal</th>
                <th>Tanggal Akhir</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>NIP</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pengajuan as $pengajuan)
            <tr>
                <td>{{ $pengajuan->id }}</td>
                <td>{{ $pengajuan->tgl_awal }}</td>
                <td>{{ $pengajuan->tgl_akhir }}</td>
                <td>{{ $pengajuan->jumlah }}</td>
                <td>{{ $pengajuan->ket }}</td>
                <td>{{ $pengajuan->status}}</td>
                <td>{{ $pengajuan->nip}}</td>
                <td><a href="{{ route('pengajuan_cuti.show', $pengajuan->id) }}" class="btn btn-primary text-light"> <i class="far fa-eye"></i> Lihat </a> |
                    <button type="submit" class="btn btn-warning"><a href="{{url('dashboard/pengajuan_cuti/edit', $pengajuan->id) }}" class="text-dark"><i class="far fa-edit"></i> Edit</a></button> |
                    <form action="{{url('dashboard/pengajuan_cuti/destroy', $pengajuan->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>