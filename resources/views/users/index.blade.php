<x-app-layout>

<div class="relative flex flex-col text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
            <div class="flex items-center justify-between gap-8 mb-8">
                <div>
                    <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        User Management
                    </h5>
                    <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                        Manage your application users
                    </p>
                </div>
                <div class="flex space-x-4">
                    <button
                        class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"   data-dialog-target="animated-dialog">
                        Add User
                    </button>
                    <button
                        class="flex select-none items-center gap-3 rounded-lg bg-green-600 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        onclick="printTable()">
                        Print
                    </button>
                    <button
                        class="flex select-none items-center gap-3 rounded-lg bg-blue-600 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        onclick="exportToCSV()">
                        Export
                    </button>
                </div>
            </div>

            <div class="w-full md:w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                    <div class="absolute grid w-5 h-5 top-2/4 right-3 -translate-y-2/4 place-items-center text-blue-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg>
                    </div>
                    <form id="searchForm" method="GET" action="{{ route('users.index') }}" class="mb-4 flex">
                        <div class="relative w-full md:w-72">
                            <input
                                type="text"
                                name="search"
                                id="search"
                                placeholder="Search users..."
                                value="{{ request('search') }}"
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-1.5 !pr-9 text-sm text-blue-gray-700 focus:border-gray-900 focus:ring focus:ring-gray-300"
                                onkeyup="searchUsers()"
                            />
                            <button type="submit" class="absolute top-1/2 right-3 -translate-y-1/2 text-blue-gray-500" onclick="showSpinner(event)">
                                <svg id="searchIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0a7.5 7.5 0 10-10.607 0 7.5 7.5 0 0010.607 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <div class="p-6 px-0 overflow-scroll">
            <table class="w-full mt-4 text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            Name
                        </th>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            Email
                        </th>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            Added By
                        </th>

                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="p-4">
                                <p class="font-sans text-sm font-normal leading-normal text-blue-gray-900">{{ $user->name }}</p>
                            </td>
                            <td class="p-4">
                                <p class="font-sans text-sm font-normal leading-normal text-blue-gray-900">{{ $user->email }}</p>
                            </td>
                            <td class="p-4">
                                <p class="font-sans text-sm font-normal leading-normal text-blue-gray-900">{{ $user->added_by ?? 'Unknown' }}</p>
                            </td>

                            <td class="p-4 flex space-x-2">
                                <!-- Edit Button -->
                                    <button onclick="openEditModal(this)" data-id="{{ $user->id }}"
                                        class="relative h-10 w-10 max-h-[40px] max-w-[40px] rounded-lg text-center text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20">
                                        <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"/>
                                            </svg>
                                        </span>
                                    </button>
                                <!-- View Button -->
                                <button onclick="openViewModal(this)" data-id="{{ $user->id }}"
                                    class="relative h-10 w-10 max-h-[40px] max-w-[40px] rounded-lg text-center text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path d="M12 6.1a5.9 5.9 0 00-5.9 5.9c0 1.482.548 2.85 1.52 3.926l1.467-1.467A3.825 3.825 0 019.1 12c0-2.1 1.7-3.8 3.8-3.8 1.058 0 2.037.407 2.8 1.067l1.467-1.467A5.88 5.88 0 0012 6.1zm0 9.7a3.8 3.8 0 100-7.6 3.8 3.8 0 000 7.6zm-4.5 5.2h9a9 9 0 11-9-9 9 9 0 019 9z"/>
                                        </svg>
                                    </span>
                                </button>
                                <!-- Delete Button -->
                                <button onclick="deleteUser({{ $user->id }})"
                                    class="relative h-10 w-10 max-h-[40px] max-w-[40px] rounded-lg text-center text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path d="M3 6h18M5 6l1 12a2 2 0 002 2h8a2 2 0 002-2l1-12H5zm8 2v8M11 8h2m1-2a1 1 0 00-1-1H10a1 1 0 00-1 1v1h3V8z"/>
                                        </svg>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between p-4">
    <!-- Displaying information about the current pagination state -->
    <p class="text-sm">
        Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} users
    </p>
    <!-- Pagination links, maintaining the current search query -->
    <div>
        {{ $users->appends(['search' => request('search')])->links() }}
    </div>
</div>

    </div>
</div>


<div
  data-dialog-backdrop="animated-dialog"
  data-dialog-backdrop-close="true"
  class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
>
  <div
    data-dialog="animated-dialog"
    data-dialog-mount="opacity-100 translate-y-0 scale-100"
    data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
    data-dialog-transition="transition-all duration-300"
    class="relative m-4 p-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white shadow-sm"
  >
    <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
      Add New User
    </div>
    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
        <input type="text" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Enter user name">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
        <input type="email" name="email" id="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Enter user email">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
        <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Enter user password">
      </div>


      <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
        <button data-dialog-close="true" class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
          Cancel
        </button>
        <button class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="submit">
          Add User
        </button>
      </div>
    </form>
  </div>
</div>


<script>
function printTable() {
    const printWindow = window.open('', '', 'height=400,width=600');

    printWindow.document.write('<html><head><title>Print User List</title>');
    printWindow.document.write('<style>table { border-collapse: collapse; width: 100%; } th, td { border: 1px solid #000; padding: 8px; text-align: left; }</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h1>User List</h1>');
    printWindow.document.write(document.querySelector('.overflow-scroll').innerHTML);
    printWindow.document.write('</body></html>');

    printWindow.document.close();
    printWindow.print();
}

function exportToCSV() {
    const rows = [];
    const table = document.querySelector('table');

    for (let i = 0; i < table.rows.length; i++) {
        const row = [];
        for (let j = 0; j < table.rows[i].cells.length; j++) {
            row.push(table.rows[i].cells[j].innerText);
        }
        rows.push(row.join(','));
    }

    const csvContent = 'data:text/csv;charset=utf-8,' + rows.join('\n');
    const encodedUri = encodeURI(csvContent);

    const link = document.createElement('a');
    link.setAttribute('href', encodedUri);
    link.setAttribute('download', 'user_list.csv');
    document.body.appendChild(link); // Required for Firefox
    link.click();
    document.body.removeChild(link); // Remove the link after triggering download
}

function openEditModal(button) {
    const userId = button.getAttribute('data-id');
    // Logic to open edit modal and load user data
}

function openViewModal(button) {
    const userId = button.getAttribute('data-id');
    // Logic to open view modal and display user details
}

function deleteUser(userId) {
    if(confirm('Are you sure you want to delete this user?')) {
        // Logic to delete user
        console.log('User deleted:', userId);
    }
}
</script>



<script src="node_modules/@material-tailwind/html@latest/scripts/dialog.js"></script>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>


</x-app-layout>
