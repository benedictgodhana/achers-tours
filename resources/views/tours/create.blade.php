<x-app-layout>
    <section class="content-header">
        <h1>
            Create Tour
            <small>Add a new travel tour</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Create Tour</li>
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
                        <h3 class="box-title">Add Tour</h3>
                    </div>
                    <!-- /.box-header -->

                    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Tour Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Tour Name" required>
                            </div>

                            <div>
                                <textarea class="textarea" placeholder="Description" name="description" id="editor"
                                    style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="destination_id">Destination</label>
                                <select name="destination_id" id="destination_id" class="form-control" required>
                                    <option value="">Select a destination</option>
                                    @foreach ($destinations as $destination)
                                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                    @endforeach
                                </select>
                                @error('destination_id')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" required>
                                @error('start_date')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" required>
                                @error('end_date')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*" required onchange="previewImage(event)">
                                <div id="image-preview-container" style="display: none; margin-top: 10px;">
                                    <img id="image-preview" class="img-thumbnail" style="max-width: 200px;" alt="Image Preview">
                                </div>
                            </div>




                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Create Tour</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.25.0/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for the content area
    CKEDITOR.replace('editor', {
        // CKEditor configuration options
        filebrowserImageBrowseUrl: '{{ route('ckeditor.image_browser') }}',  // URL to browse image files
        filebrowserUploadUrl: '{{ route('ckeditor.image_upload') }}',       // URL to upload images
        allowedContent: true,  // Allows any content in the editor
        height: 300,  // Optional: Set custom height for CKEditor
    });

    // Image preview functionality
    function previewImage(event) {
        const file = event.target.files[0];  // Get the uploaded file
        const previewContainer = document.getElementById('image-preview-container');  // Container to show the image preview
        const imagePreview = document.getElementById('image-preview');  // Image preview element

        if (file) {
            const reader = new FileReader();  // Create a FileReader instance
            reader.onload = function(e) {
                imagePreview.src = e.target.result;  // Set the image source to the loaded file
                previewContainer.style.display = 'block';  // Show the preview container
            };
            reader.readAsDataURL(file);  // Read the file as a data URL
        } else {
            previewContainer.style.display = 'none';  // Hide the preview container if no file is selected
        }
    }

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
