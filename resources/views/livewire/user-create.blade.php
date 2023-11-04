<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" live:wire.lazy="name" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>   
                    @enderror
                 
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" live:wire.lazy="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>   
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" live:wire.lazy="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>   
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>

            </form>

        </div>
    </div>
</div>
