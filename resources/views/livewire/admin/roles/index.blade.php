<div>
    <div class="container mt-2">
        <h1>Admin Roles</h1>
        @include('livewire.modals.admin-modal')
        <div class='btn btn-primary btn-sm float-end mb-2' data-toggle="modal" data-target="#modal-roles">Add Roles</div>
        <table class="table table-striped shadow table-bordered table-md table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="" class="btn btn-primary" id="ic" title="Edit"><i class=" fa fa-gear"></i></a>
                        <a href="" class="btn btn-danger" id="ic" title="Delete"><i class=" fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
