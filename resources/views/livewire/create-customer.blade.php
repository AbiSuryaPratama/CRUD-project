<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
          Create Customer
        </div>
        <livewire:flash-message></livewire:flash-message>
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    <div>
                        @error('name')
                            <span class="text-danger" >{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <div>
                    @error('email')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input wire:model="phone" type="text" class="form-control" id="phone">
                  <div>
                    @error('phone')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                </div>
                <button wire:navigate href="/customers" class="btn btn-secondary btn-sm">Back</button>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form> 
        </div>
      </div>
</div>
