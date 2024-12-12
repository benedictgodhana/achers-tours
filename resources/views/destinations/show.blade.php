<x-app-layout>
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            Destination Details
            <small>View the details of a destination</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('destinations.index') }}">Destinations</a></li>
            <li class="active">Destination Details</li>
        </ol>
    </section>

    <!-- Main Content Section -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Destination Details Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Destination: {{ $destination->name }}</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <!-- Destination Name -->
                        <div class="form-group">
                            <label for="name">Destination Name</label>
                            <p>{{ $destination->name }}</p>
                        </div>

                        <!-- Destination Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <p>{{ $destination->description }}</p>
                        </div>

                        <!-- Current Image Display -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            @if ($destination->image)
                                <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" class="img-thumbnail" style="max-width: 150px;">
                            @else
                                <p class="text-muted">No image available</p>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- Back Button -->
                    <div class="box-footer">
                        <a href="{{ route('destinations.index') }}" class="btn btn-default">Back to Destinations</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</x-app-layout>
