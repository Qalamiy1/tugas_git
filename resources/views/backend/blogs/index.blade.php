@extends('backend/layouts/master')
@section('content')

{{-- bagian content blog --}}

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blog Page</h1>


    <table class="table table-bordered align-middle">
        <thead class="table table-hover">
          <tr>
            <th scope="col">ID Blog</th>
            <th scope="col">Judul Blog</th>
            <th scope="col">File</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contoh data, biasanya akan di-loop dari backend -->
          <tr>
            <td>1</td>
            <td>Belajar HTML & CSS</td>
            <td>file_html_css.pdf</td>
            <td class="text-center">
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Menguasai Bootstrap 5</td>
            <td>file_bootstrap.pdf</td>
            <td class="text-center">
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Panduan JavaScript Dasar</td>
            <td>file_javascript.pdf</td>
            <td class="text-center">
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          <!-- Tambah baris data blog lainnya -->
        </tbody>
      </table>
</div>
<!-- /.container-fluid -->

{{-- bagian penutup dari blog --}}

@endsection