<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Create New Category</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('information_categories.index') }}" class="btn btn-box-tool">
                    <i class="fa fa-arrow-left"></i> Back to Categories
                </a>
            </div>
        </div>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="box-body">
                <!-- Category Name -->
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter category name" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category Description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter category description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Created By -->
                
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Category</button>
            </div>
        </form>
    </div>
</x-app-layout>
