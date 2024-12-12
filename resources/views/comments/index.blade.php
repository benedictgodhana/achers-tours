<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Comments</h3>
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
                    <input type="text" id="search" class="form-control" placeholder="Search by commenter or content..." onkeyup="filterComments()">
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>Author</th>
                            <th>Comment</th>
                            <th>For Blog</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="comment-table-body">
                        @foreach ($comments as $comment)
                            <tr data-author="{{ $comment->author }}" data-content="{{ $comment->content }}">
                                <td>{{ $comment->author }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($comment->content, 100) !!}</td>
                                <td>{{ $comment->blog->title }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>
    @if ($comment->is_approved == 1)
        Approved
    @else
        Pending
    @endif
</td>
                                <td>
                                    <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline-block;">
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

            <div class="pagination-wrapper">
                <ul class="pagination">
                    @if ($comments->onFirstPage())
                        <li class="disabled"><span>«</span></li>
                    @else
                        <li><a href="{{ $comments->previousPageUrl() }}">«</a></li>
                    @endif

                    @foreach ($comments->getUrlRange(1, $comments->lastPage()) as $page => $url)
                        <li class="{{ ($comments->currentPage() == $page) ? 'active' : '' }}">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($comments->hasMorePages())
                        <li><a href="{{ $comments->nextPageUrl() }}">»</a></li>
                    @else
                        <li class="disabled"><span>»</span></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="{{ route('comments.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Comment</a>
            <a href="{{ route('comments.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Comments</a>
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

        function filterComments() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const tableRows = document.querySelectorAll('#comment-table-body tr');

            tableRows.forEach(row => {
                const content = row.getAttribute('data-content').toLowerCase();
                const author = row.getAttribute('data-author').toLowerCase();
                const showRow = (content.includes(searchInput) || author.includes(searchInput));

                row.style.display = showRow ? '' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('comment-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('comment-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Author,Comment,Email,Created By,Actions\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'comments.csv';
            a.click();
        }
    </script>
</x-app-layout>
