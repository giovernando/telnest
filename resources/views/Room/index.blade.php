@extends('app')

@section('title', 'Room - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Room Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item">Room</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">
          <a href="{{ url('room/tambah') }}" class="btn btn-primary mb-3"> Tambah Data </a>
          <div class="card">
            <div class="card-body">
                <table class="table table-hover"></table>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">type</th>
                    <th scope="col">harga</th>
                    <th scope="col">photo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->harga }}</td>
                    <td>{{ $room->photo }}</td>
                    <td>
                        <button class="btn btn-info rounded-pill">edit</button>
                        <button class="btn btn-danger rounded-pill">delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

</main>
@endsection