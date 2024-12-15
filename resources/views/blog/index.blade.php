<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">General Information</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->

        <!-- Success Message -->
        @if (session('success'))
            <div id="success-message" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="box-body">
            <div class="row">
                <!-- Search Field -->
                <div class="col-md-4">
                    <input type="text" id="search" class="form-control" placeholder="Search by title or author..." onkeyup="filterBlogs()">
                </div>

                <!-- Filter Field -->
                <!-- Add any additional filter options here -->
            </div>

            <div class="table-responsive mt-3">
                <!-- Table for large screens -->
                <table class="table  table-bordered table-hover no-margin" id="blog-table-body">
                    <thead>
                        <tr class="bg-primary">
                            <th>Image</th>
                            <th>Title</th>
                            <th>Information Category</th>
                            <th>Author</th>
                            <th>Excerpt</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr data-author="{{ $blog->author }}" data-title="{{ $blog->title }}">
                                <td>
                                    <img src="{{ Storage::url($blog->image) }}" class="img-thumbnail" style="max-width: 100px;width:100%">
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    @if($blog->category)
                                        {{ $blog->category->name }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $blog->author }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($blog->content, 50) !!}</td>
                                <td>{{ $blog->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="cards-container">
                <!-- Cards for small screens -->
                @foreach ($blogs as $blog)
                    <div class="blog-card" data-author="{{ $blog->author }}" data-title="{{ $blog->title }}">
                        <img src="{{ Storage::url($blog->image) }}" class="img-thumbnail" style="max-width: 200px;width:100%">
                        <h4>{{ $blog->title }}</h4>
                        <p>{!! \Illuminate\Support\Str::limit($blog->content, 50) !!}</p>
                        <p>Author: {{ $blog->author }}</p>
                        <p>Category: {{ $blog->category ? $blog->category->name : 'N/A' }}</p>
                        <p>Created At: {{ $blog->created_at->format('d M Y') }}</p>
                        <br>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>


                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                <ul class="pagination">
                    {{-- Display Previous Button --}}
                    @if ($blogs->currentPage() > 1)
                        <li><a href="{{ $blogs->previousPageUrl() }}">Previous</a></li>
                    @else
                        <li class="disabled"><span>Previous</span></li>
                    @endif

                    {{-- Display Page Numbers --}}
                    @foreach ($blogs->links()->elements[0] as $page => $url)
                        @if ($page == $blogs->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Display Next Button --}}
                    @if ($blogs->hasMorePages())
                        <li><a href="{{ $blogs->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="disabled"><span>Next</span></li>
                    @endif
                </ul>
            </div>

        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Information</a>
            <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Information</a>
            <button onclick="printTable()" class="btn btn-sm btn-primary btn-flat pull-right">Print</button>
            <button onclick="exportTable()" class="btn btn-sm btn-success btn-flat pull-right" style="margin-right: 10px;">Export</button>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->

    <!-- Success message auto-hide script -->
    <script>
        setTimeout(() => {
            const message = document.getElementById('success-message');
            if (message) {
                message.style.transition = 'opacity 0.5s';
                message.style.opacity = '0';
                setTimeout(() => message.remove(), 500);
            }
        }, 4000);

        function filterBlogs() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const filterSelect = document.getElementById('filter').value;
            const tableRows = document.querySelectorAll('#blog-table-body tr');

            tableRows.forEach(row => {
                const title = row.getAttribute('data-title').toLowerCase();
                const author = row.getAttribute('data-author').toLowerCase();
                const showRow = (title.includes(searchInput) || author.includes(searchInput)) &&
                                (filterSelect === '' || filterSelect === author);

                row.style.display = showRow ? '' : 'none';
            });

            const cards = document.querySelectorAll('.blog-card');
            cards.forEach(card => {
                const title = card.getAttribute('data-title').toLowerCase();
                const author = card.getAttribute('data-author').toLowerCase();
                const showCard = (title.includes(searchInput) || author.includes(searchInput)) &&
                                 (filterSelect === '' || filterSelect === author);
                card.style.display = showCard ? 'block' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('blog-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('blog-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Image,Title,Excerpt,Author,Created At,Actions\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'blogs.csv';
            a.click();
        }
    </script>

    <style>
        /* Hide table and show cards on small screens */
@media (max-width: 768px) {
    #blog-table-body {
        display: none;
    }

    .blog-card {
        display: block;
    }
}

/* Hide cards and show table on large screens */
@media (min-width: 769px) {
    #blog-table-body {
        display: table;
    }

    .blog-card {
        display: none;
    }
}

    </style>
</x-app-layout>
