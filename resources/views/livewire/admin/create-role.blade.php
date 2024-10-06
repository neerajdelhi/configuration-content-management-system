<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createRole">
        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" id="name" wire:model="name" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Role</button>
    </form>
</div>
