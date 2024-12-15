<x-app-layout>
    <section class="content-header">
        <h1>
            View Testimonial
            <small>Details of the testimonial</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Testimonial</li>
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

                <!-- Form Card -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Testimonial Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Author Name</label>
                            <p class="form-control-static">{{ $testimonial->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="email">Author's Email</label>
                            <p class="form-control-static">{{ $testimonial->email }}</p>
                        </div>

                        <div class="form-group">
                            <label for="message">Testimonial Content</label>
                            <p class="form-control-static">{{ $testimonial->message }}</p>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-thumbnail" style="max-width: 200px;" alt="Testimonial Image">
                            @else
                                <p class="form-control-static">No Image Available</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="is_approved">Status</label>
                            <p class="form-control-static">
                                {{ $testimonial->is_approved == 1 ? 'Approved' : 'Pending' }}
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
            const message = document.getElementById('success-message');  // Select the success message element
            if (message) {
                message.style.transition = 'opacity 0.5s';  // Smoothly fade out the message
                message.style.opacity = '0';  // Set opacity to 0
                setTimeout(() => message.remove(), 500);  // Remove the message after 0.5 seconds
            }
        }, 4000);  // Set timeout to 4 seconds
    </script>
</x-app-layout>
