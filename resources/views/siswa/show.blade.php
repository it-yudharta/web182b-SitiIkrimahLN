@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <table class="table">
                   <thead>
                        <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $siswas as $item )
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>{{$item->jenisKelamin}}</td>
                        <td>
                        <a class="btn btn-warning" href="/siswa/{{$item->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-danger" href="/siswa/{{$item->id}}/hapus" role="button">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                   </div>
                </div>
            </div>
       </div>
</div>
@endsection
