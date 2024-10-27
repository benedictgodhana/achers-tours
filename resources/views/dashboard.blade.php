<x-app-layout>

<style>
    /* Styling for DataTable */
    #usersTable {
        margin-top: 20px; /* Spacing above the table */
    }
     /* Add border to the table cells */
     #usersTable td {
            border: 1px solid #e5e7eb; /* Light gray border */
        }

    /* Styling the search input */
    .dataTables_filter {
        margin-bottom: 20px; /* Spacing below the search input */
    }

    .dataTables_filter input {
        height: 40px; /* Height of the search input */
        padding: 10px; /* Padding inside the search input */
        border-radius: 4px; /* Rounded corners */
        border: 1px solid #ddd; /* Border color */
    }

    .dataTables_length {
        margin-bottom: 20px; /* Space below the length select */
    }
</style>
<!-- Custom Simple Toast -->




    <div class="p-6">
    <div id="toast-success"
             class="hidden flex items-center w-full p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
             role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div id="toastMessage" class="ms-3 text-sm font-normal">Success message here</div>
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    aria-label="Close"
                    onclick="hideToast()">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden"> <!-- Card Container with elevation -->
            <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold">{{ __('User List') }}</h2>
    <div class="space-x-2">
        <button id="addUserButton" class="px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded-md transition">
            Add User
        </button>
        <a href="{{ route('users.export') }}" class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md transition">
            Export to Excel
        </a>
        <a href="{{ route('users.print.pdf') }}" class="px-4 py-2 text-white bg-purple-500 hover:bg-purple-600 rounded-md transition">
            Print PDF
        </a>
    </div>
</div>


                <!-- User Table -->
                <div class="overflow-x-auto">
                    <table id="usersTable" class="min-w-full bg-white border rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                            <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Created_by</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->added_by }}</td>

                                <td class="px-6 py-4  space-x-2">
                                    <button class="editButton px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md transition"
                                            data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-email="{{ $user->email }}" data-role="{{ $user->role }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Are you sure?');"
                                                class="px-4 py-2 text-white bg-red-500 hover:bg-red-600 rounded-md transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals with Elevation -->
    <div id="addUserModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg"> <!-- Shadow-xl for prominent elevation -->
            <h2 class="text-xl font-semibold mb-4">Add User</h2>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md" required>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeAddUserModal" class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div id="editUserModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg"> <!-- Shadow-xl for elevation -->
            <h2 class="text-xl font-semibold mb-4">Edit User</h2>
            <form method="POST" action="">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="editName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="editName" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="editEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="editEmail" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="editRole" class="block text-sm font-medium text-gray-700">Role</label>
                    <input type="text" name="role" id="editRole" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="editPassword" class="block text-sm font-medium text-gray-700">Password (Leave blank if no change)</label>
                    <input type="password" name="password" id="editPassword" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeEditUserModal" class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Toastify JS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script>
    $(document).ready(function () {
        // DataTables initialization
        $('#usersTable').DataTable();

        // Modal open/close handlers
        $('#addUserButton').click(() => $('#addUserModal').removeClass('hidden'));
        $('#closeAddUserModal').click(() => $('#addUserModal').addClass('hidden'));
        $('#closeEditUserModal').click(() => $('#editUserModal').addClass('hidden'));

        // Populate Edit User Modal with user data
        $('.editButton').click(function () {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const email = $(this).data('email');

            $('#editName').val(name);
            $('#editEmail').val(email);
            $('#editUserModal form').attr('action', `/users/${id}`);
            $('#editUserModal').removeClass('hidden');
        });



    });
</script>


<script>
        $(document).ready(function () {
            // Check for session messages and show the toast
            @if (session('success'))
                showCustomToast("{{ session('success') }}", 'success');
            @elseif (session('error'))
                showCustomToast("{{ session('error') }}", 'error');
            @endif
        });

        function showCustomToast(message, type) {
            const toast = $('#toast-success');
            const toastMessage = $('#toastMessage');

            // Set message
            toastMessage.text(message);

            // Change toast color based on type
            if (type === 'success') {
                toast.removeClass('bg-red-500').addClass('bg-white');
            } else if (type === 'error') {
                toast.removeClass('bg-white').addClass('bg-red-500 text-white');
            }

            // Show toast
            toast.fadeIn();

            // Auto-hide after 3 seconds
            setTimeout(() => {
                hideToast();
            }, 3000);
        }

        function hideToast() {
            $('#toast-success').fadeOut();
        }
    </script>


</x-app-layout>
