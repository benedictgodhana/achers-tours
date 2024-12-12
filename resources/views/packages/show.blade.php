<x-app-layout>
    <section class="content-header">
        <h1>
            View Package
            <small>Details of the travel package</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('packages.index') }}">Packages</a></li>
            <li class="active">View Package</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Success Message -->
                @if (session('success'))
                    <div id="success-message" class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif

                <!-- View Card -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Package Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Package Name:</label>
                            <p>{{ $package->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration in days:</label>
                            <p>{{ $package->duration }} days</p>
                        </div>

                        <div class="form-group">
                            <label for="tour_id">Tour:</label>
                            <p>{{ $package->tour->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <p>{!! $package->description !!}</p>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <p>
                            @if($package->image)
                                <img class="img-thumbnail" style="max-width: 200px;" src="{{ asset('storage/' . $package->image) }}" alt="Package Image">
                            @else
                                <p>No image available</p>
                            @endif
                            </p>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

    <script>
        // Auto-hide success message
        setTimeout(() => {
            const message = document.getElementById('success-message');
            if (message) {
                message.style.transition = 'opacity 0.5s';
                message.style.opacity = '0';

                setTimeout(() => message.remove(), 500);
            }
        }, 4000);
    </script>
</x-app-layout>
