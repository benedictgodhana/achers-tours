<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Packages</h3>
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
                    <input type="text" id="search" class="form-control" placeholder="Search by title or creator..." onkeyup="filterPackages()">
                </div>

                <!-- Filter Field -->

            </div>

            <div class="table-responsive mt-3">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Tour</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="package-table-body">
                        @foreach ($packages as $package)
                            <tr data-creator="{{ $package->user->name }}" data-title="{{ $package->name }}">
                                <td>
                                    <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->title }}" width="50" height="50">
                                </td>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->tour->name}}</td>
                                <td>{!! \Illuminate\Support\Str::limit($package->description, 50) !!}</td>
                                <td>{{ $package->user->name }}</td>
                                <td>
                                    <a href="{{ route('packages.show', $package->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline-block;">
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
                        @if ($packages->onFirstPage())
                            <li class="disabled"><span>«</span></li>
                        @else
                            <li><a href="{{ $packages->previousPageUrl() }}">«</a></li>
                        @endif

                        @foreach ($packages->getUrlRange(1, $packages->lastPage()) as $page => $url)
                            <li class="{{ ($packages->currentPage() == $page) ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($packages->hasMorePages())
                            <li><a href="{{ $packages->nextPageUrl() }}">»</a></li>
                        @else
                            <li class="disabled"><span>»</span></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="{{ route('packages.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Package</a>
            <a href="{{ route('packages.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Packages</a>
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

        function filterPackages() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const filterSelect = document.getElementById('filter').value;
            const tableRows = document.querySelectorAll('#package-table-body tr');

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
            printWindow.document.write(document.getElementById('package-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('package-table-body');
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
            a.download = 'packages.csv';
            a.click();
        }
    </script>
</x-app-layout>
