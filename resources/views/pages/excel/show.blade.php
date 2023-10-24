@extends('layouts.backend.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Detail</h3>
                            <a href="{{ route('vehicle.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            <label>Name</label><br />
                            <label class="text-secondary">{{ $item->name ?? null }}</label>
                        </p>
                        <p>
                            <label>Series</label><br />
                            <label class="text-secondary">{{ $item->series ?? null }}</label>
                        </p>
                        <p>
                            <label>Police Number</label><br />
                            <label class="text-secondary">{{ $item->police_number ?? null }}</label>
                        </p>
                        <p>
                            <label>Chassis Number</label><br />
                            <label class="text-secondary">{{ $item->chassis_number ?? null }}</label>
                        </p>
                        <p>
                            <label>Machine Number</label><br />
                            <label class="text-secondary">{{ $item->machine_number ?? null }}</label>
                        </p>
                        <p>
                            <label>Owner</label><br />
                            <label class="text-secondary">{{ $item->owner_name ?? null }}</label>
                        </p>
                        <p>
                            <label>Color</label><br />
                            <label class="text-secondary">{{ $item->color ?? null }}</label>
                        </p>
                        <p>
                            <label>Model</label><br />
                            <label class="text-secondary">{{ $item->model ?? null }}</label>
                        </p>
                        <p>
                            <label>Brand</label><br />
                            <label class="text-secondary">{{ $item->brand ?? null }}</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection