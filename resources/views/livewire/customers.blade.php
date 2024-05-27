<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-auto">
                <button wire:navigate href="/customers/create" class="btn btn-success btn-sm mb-3">Create</button>
            </div>
            <div class="col-auto">
                <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search customer">
            </div>
                <livewire:flash-message></livewire:flash-message>
            
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                @foreach ($customers as $customer)
                <?php $no++; ?>
                <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate href="/customers/{{ $customer->id }}" class="btn btn-primary btn-sm">View</button>
                        <button wire:navigate href="/customers/{{ $customer->id }}/edit" class="btn btn-warning text-white btn-sm">Edit</button>
                        <button wire:click="deletecust({{ $customer->id }})"class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
