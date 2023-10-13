<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ulasan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('produk.index') }}" class="btn btn-md btn-primary mb-3">HALAMAN PRODUK</a>
                        <a href="{{ route('ulasan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ULASAN</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">NO</th>
                                    <th scope="col" class="text-center">USERNAME</th>
                                    <th scope="col" class="text-center">ULASAN</th>
                                    <th scope="col" class="text-center">FOTO</th>
                                    <th scope="col" class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ulasans as $ulasan)

                                @php
                                $no =1;
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $ulasan->username }}</td>
                                    <td>{!! $ulasan->ulasan !!}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/ulasans/').$ulasan->image }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('ulasan.destroy', $ulasan->id) }}" method="POST">
                                            <a href="{{ route('ulasan.edit', $ulasan->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $ulasans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{session('success ') }}', 'BERHASIL!');

        @elseif(session()-> has('error'))

            toastr.error('{{session('error ') }}', 'GAGAL!');

        @endif

    </script>

</body>

</html>