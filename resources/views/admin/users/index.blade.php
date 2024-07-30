@extends('layouts.app')

@section('content')
    <div class="ms-auto">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
            Add New User
        </button>
    </div>

    <div class="card radius-10 w-100">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h6 class="mb-0">Users</h6>
                <div class="fs-5 ms-auto dropdown">
                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered align-middle mb-0" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Region</th>
                            <th>Constituency</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $index }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['role'] }}</td>
                                <td>{{ $user['region']['name'] ?? 'N/A' }}</td>
                                <td>{{ $user['constituency']['name'] ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $users->links('vendor.pagination.syn-ui') }}
            </div>
        </div>

        @include('admin.users.create', ['regions' => $regions, 'constituencies' => $constituencies])
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "paging": false,
                    "info": false,
                    "searching": false
                });

                // Filter constituencies based on selected region
                $('#region_id').change(function() {
                    var regionId = $(this).val();
                    var constituencySelect = $('#constituency_id');
                    constituencySelect.find('option').show();
                    if (regionId) {
                        constituencySelect.find('option').not('[data-region="' + regionId + '"]').hide();
                    }
                    constituencySelect.val('');
                });

                // Set password to email value before form submission
                $('#createUserForm').submit(function(e) {
                    e.preventDefault();
                    $('#password').val($('#email').val());

                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            $('#createUserModal').modal('hide');
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error creating user:", error);
                            var errors = xhr.responseJSON.errors;
                            if (errors) {
                                var errorMessage = errors[Object.keys(errors)[0]];
                                alert(errorMessage);
                            }
                        }
                    });
                });
            });
        </script>
    @endpush
