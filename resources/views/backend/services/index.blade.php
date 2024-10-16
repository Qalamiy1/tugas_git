@extends('backend/layouts/master')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Services Page</h1>


    <table class="table table-bordered align-middle">
        <thead class="table table-hover">
          <tr>
            <th scope="col">ID Blog</th>
            <th scope="col">Judul Blog</th>
            <th scope="col">Descripsi</th>
            <th scope="col">File</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contoh data, biasanya akan di-loop dari backend -->
          @foreach($Callservice as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td><img src="{{$item->file}}"></td>
            <td class="text-center">
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          @endforeach
          <!-- Tambah baris data blog lainnya -->
        </tbody>
      </table>
</div>
<!-- /.container-fluid -->


@endsection