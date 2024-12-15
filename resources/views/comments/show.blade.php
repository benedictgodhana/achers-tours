<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Comment</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('comments.index') }}" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i> Back to Comments</a>
            </div>
        </div>

        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="content">Comment</label>
                    <textarea id="content" name="content" class="form-control" rows="5" readonly>{{ old('content', $comment->content) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">For Blog</label>
                    <textarea id="content" name="content" class="form-control" rows="5" readonly>{{ old('content', $comment->blog->title) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $comment->author) }}" readonly>
                    @error('author')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Author's Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $comment->email) }}" readonly>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control" readonly>
                        <option value="approved" {{ old('status', $comment->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="pending" {{ old('status', $comment->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
            </div>

            
        </form>
    </div>
</x-app-layout>
