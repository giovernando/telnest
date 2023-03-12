@extends('app')

@section('title', 'houtel - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>houtel Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/houtel') }}">houtel</a></li>
          <li class="breadcrumb-item">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <form class="row g-3"  action="{{ url('houtel/store') }}" method="POST">
                  @csrf
                  <div class="col-12">
                    <label for="cities_id" class="form-label">Cities_id</label>
                    <input type="number" name="cities_id" id="cities_id" class="form-control">
                </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="about" class="form-label">About</label>
                        <input type="text" name="about" id="about" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="fasility" class="form-label">fasility</label>
                        <input type="text" name="fasility" id="fasility" class="form-control">
                    </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <div class="col g-12">
                    <button type="submit" class="btn btn-primary btn-pill">Save</button>
                </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection