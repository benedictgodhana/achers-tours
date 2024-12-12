<x-app-layout>
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            Tour Details
            <small>View the details of a tour</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('tours.index') }}">Tours</a></li>
            <li class="active">Tour Details</li>
        </ol>
    </section>

    <!-- Main Content Section -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Tour Details Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tour: {{ $tour->name }}</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <!-- Tour Name -->
                        <div class="form-group">
                            <label for="name">Tour Name</label>
                            <p>{{ $tour->name }}</p>
                        </div>

                        <!-- Tour Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <p>{!!$tour->description !!}</p>
                        </div>

                        <!-- Destination Display -->
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <p>{{ $tour->destination->name ?? 'Unknown' }}</p>
                        </div>

                        <!-- Start Date -->
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <p>{{ $tour->start_date ? \Carbon\Carbon::parse($tour->start_date)->format('d M, Y') : 'N/A' }}</p>
                        </div>

                        <!-- End Date -->
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <p>{{ $tour->end_date ? \Carbon\Carbon::parse($tour->end_date)->format('d M, Y') : 'N/A' }}</p>
                        </div>

                        <!-- Image Display -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            @if ($tour->image)
                                <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->name }}" class="img-thumbnail" style="max-width: 150px;">
                            @else
                                <p class="text-muted">No image available</p>
                            @endif
                        </div>

                        <!-- Created By -->
                        <div class="form-group">
                            <label for="created_by">Created By</label>
                            <p>{{ $tour->user->name ?? 'Unknown' }}</p>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- Back Button -->
                    <div class="box-footer">
                        <a href="{{ route('tours.index') }}" class="btn btn-default">Back to Tours</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</x-app-layout>
