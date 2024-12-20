<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Tours</h3>
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
                    <input type="text" id="search" class="form-control" placeholder="Search by title or creator..." onkeyup="filterTours()">
                </div>

                <!-- Filter Field -->

            </div>

            <br>

            <div class="table-responsive mt-3">
                <table class="table  table-bordered table-hover no-margin">
                    <thead>
                        <tr class="bg-primary">
                            <th>Image</th>
                            <th>Title</th>
                            <th>Destination</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tour-table-body">
                        @foreach ($tours as $tour)
                            <tr data-creator="{{ $tour->user->name }}" data-title="{{ $tour->name }}">
                                <td>
                                <img src="{{ Storage::url($tour->image) }}" class="img-thumbnail" style="max-width: 100px;">

                                </td>
                                <td>{{ $tour->name }}</td>
                                <td>{{ $tour->destination?->name ?? 'N/A' }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($tour->description, 100) !!}</td>
                                <td>{{ $tour->user->name }}</td>
                                <td>
                                    <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" style="display:inline-block;">
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
                        @if ($tours->onFirstPage())
                            <li class="disabled"><span>«</span></li>
                        @else
                            <li><a href="{{ $tours->previousPageUrl() }}">«</a></li>
                        @endif

                        @foreach ($tours->getUrlRange(1, $tours->lastPage()) as $page => $url)
                            <li class="{{ ($tours->currentPage() == $page) ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($tours->hasMorePages())
                            <li><a href="{{ $tours->nextPageUrl() }}">»</a></li>
                        @else
                            <li class="disabled"><span>»</span></li>
                        @endif
                    </ul>
                </div>
        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="{{ route('tours.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Tour</a>
            <a href="{{ route('tours.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Tours</a>
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

        function filterTours() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const filterSelect = document.getElementById('filter').value;
            const tableRows = document.querySelectorAll('#tour-table-body tr');

            tableRows.forEach(row => {
                const title = row.getAttribute('data-title').toLowerCase();
                const creator = row.getAttribute('data-creator').toLowerCase();
                const showRow = (title.includes(searchInput) || creator.includes(searchInput)) &&
                                (filterSelect === '' || filterSelect === creator);

                row.style.display = showRow ? '' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('tour-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('tour-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Image,Title,Description,Created By,Actions\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'tours.csv';
            a.click();
        }
    </script>
</x-app-layout>
