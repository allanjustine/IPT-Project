<div>
    {{-- add modal for roles --}}
    <div wire:ignore.self class="modal fade" id="modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title1" id="exampleModalLabel">Add Roles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="addRoles">
            <div class="modal-body">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add Roles</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- end add modal for roles --}}

    {{-- modal update for roles --}}
    <div wire:ignore.self class="modal fade" id="update-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Update Roles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateRoles">
            <div class="modal-body">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update Roles</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- end modal update for roles --}}

    {{-- delete roles modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to delete this roles?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center text-black ">This deletion can not be undone</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" wire:click="deleteRoles()">Delete Roles</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end delete roles modal --}}

    {{-- modal for permissions --}}
    <div wire:ignore.self class="modal fade" id="modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title1" id="exampleModalLabel">Add Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add Permissions</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal for permissions --}}

    {{-- modal update for permissions --}}
    <div wire:ignore.self class="modal fade" id="update-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Edit Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" wire:click="updatePermissions()">Update Permissions</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal update for permissions --}}

    {{-- delete permissions modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Are you sure you want to delete this permissions?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center text-black ">This deletion can not be undone</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" wire:click="deletePermissions()">Delete Permissions</button>
            </div>
            </div>
        </div>
    </div>
    {{--end delete permissions modal --}}

    {{-- modal update for users --}}
    <div wire:ignore.self class="modal fade" id="update-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Edit Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="updateUsers">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="recipient-name" wire:model.defer="email" required="">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <select wire:model.defer="gender" class="mt-2" id="" required="">
                            <option hidden="true">Gender</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Bisexual">Bisexual</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{--end modal update for users --}}

    {{-- delete users modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center text-black ">This deletion can not be undone</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" wire:click="deleteUsers()">Delete User</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end delete users modal --}}

    {{-- modal for add users --}}
    <div wire:ignore.self class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title1" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addUser">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="recipient-name" wire:model.defer="email" required="">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password" required="">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password_confirmation" required="">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        {{-- <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password_confirmation" required="">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror --}}
                        <select class="mt-2" id="" wire:model.defer="gender">
                            <option hidden="true">Gender</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Bisexual">Bisexual</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                        @error('gender')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn" id="closee" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal for add users --}}
</div>


<style>
    .modal-content {
        background-image: linear-gradient(to right, rgb(217, 217, 221), rgb(196, 196, 199), rgb(174, 175, 174));
    }
    #closee {
        border: 1px solid rgb(107, 107, 107);
        background-color: rgb(216, 214, 214);
    }
    #closee:hover {
        background-color: rgb(171, 166, 166);
    }
</style>
