<div>
    <div class="card">
        <h5 class="card-header">View Customer</h5>
        <div class="card-body">
          <h5 class="card-title">Name : {{ $customer->name }}</h5>
          <p class="card-text">Email Address : {{ $customer->email }}</p>
          <p class="card-text">Phone : {{ $customer->phone }}</p>
          <a wire:navigate href="/customers" class="btn btn-primary">Back</a>
        </div>
      </div>
</div>
