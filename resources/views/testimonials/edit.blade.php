<x-app-layout>
    <section class="content-header">
        <h1>
            Edit Testimonial
            <small>Edit an existing testimonial</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Testimonial</li>
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
                        <h3 class="box-title">Edit Testimonial</h3>
                    </div>
                    <!-- /.box-header -->

                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Author Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Author Name" value="{{ old('name', $testimonial->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Author's Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Author Email" value="{{ old('email', $testimonial->email) }}" required>
                            </div>

                            <div>
                                <textarea class="textarea" placeholder="Testimonial Content" name="message" id="editor"
                                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ old('message', $testimonial->message) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                                <div id="image-preview-container" style="display: none; margin-top: 10px;">
                                    <img id="image-preview" class="img-thumbnail" style="max-width: 200px;" alt="Image Preview" src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : '' }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="is_approved">Status</label>
                                <select name="is_approved" id="is_approved" class="form-control">
                                    <option value="0" {{ $testimonial->is_approved == 0 ? 'selected' : '' }}>Pending</option>
                                    <option value="1" {{ $testimonial->is_approved == 1 ? 'selected' : '' }}>Approved</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Testimonial</button>
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
