@extends('app')

@section('title', 'Houtel - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Houtel Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item">Houtel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">
          <a href="{{ url('houtel/tambah') }}" class="btn btn-primary mb-3"> Tambah Data </a>
          <div class="card">
            <div class="card-body">
                <table class="table table-hover"></table>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Address</th>
                    <th scope="col">About</th>
                    <th scope="col">fasility</th>
                    <th scope="col">photo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($houtels as $houtel)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $houtel->address }}</td>
                    <td>{{ $houtel->about }}</td>
                    <td>{{ $houtel->fasility }}</td>
                    <td>{{ $houtel->photo }}</td>
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