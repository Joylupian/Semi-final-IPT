@extends('layouts.app')
@section('content')


<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sellers as $seller)
                <tr>
                    <td>{{ $seller->name }}</td>
                    <td>{{ $seller->email }}</td>
                    <td>{{ $seller->product_type }}</td>
                    <td>{{ $seller->total_sales }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
