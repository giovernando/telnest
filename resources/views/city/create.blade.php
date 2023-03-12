@extends('app')

@section('title', 'city - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>City Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/city') }}">City</a></li>
          <li class="breadcrumb-item">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <form class="row g-3"  action="{{ url('city/store') }}" method="POST">
                  @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                <div class="col-12">
                    <label for="name" class="form-label">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <div class="col g-12">
                    <button type="submit" class="btn btn-primary btn-pill">Save</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection