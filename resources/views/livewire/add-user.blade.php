<div>
  <div class="card">

    <div class="card-header">
      <div class="card-title">Add User Form</div>
    </div>
    <div class="card-body">
      <form wire:submit.prevent="submit">
        <div class="row">
          <div class="col-6">
            <div class="form-group"> Email
              <input type="text" class="form-control" wire:model="email">
              @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group"> Ad, Soyad
              <input type="text" class="form-control" wire:model="name">
              @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group"> Boy
              <input type="text" class="form-control" wire:model="height">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group"> Ağırlık
              <input type="text" class="form-control" wire:model="weight">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group"> Görsel foto
              <input type="text" class="form-control" wire:model="avatar">
            </div>
          </div>
        </div>

        <button type="submit" class="btn bg-warning">Save Contact</button>
      </form>
    </div>

  </div>
</div>