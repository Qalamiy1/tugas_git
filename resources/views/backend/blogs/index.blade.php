@extends('backend/layouts/master')
@section('content')

{{-- bagian content blog --}}

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blog Page</h1>


    <a type="submit" class="btn btn-primary btn-user" href="{{route('blog_tambah')}}">
      tambah
  </a>  
    {{-- <a class="nav-link" href="{{ route('tambah_blog') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>tambah</span></a> --}}

    <table class="table table-bordered align-middle">
        <thead class="table table-hover">
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">file</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contoh data, biasanya akan di-loop dari backend -->
          @foreach($Callblog as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->description}}</td>
            <td>
              <img 
              src="{{asset($item->file)}}"
              width="200"
              alt="images"
              ></td>
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

{{-- bagian penutup dari blog --}}

@endsection