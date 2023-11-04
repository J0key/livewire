<div>
    <div class="mb-3">
        <p class="fs-6">Masukkan Nama Anda:</p>
        <input type="text" class="form-control" wire:model.lazy="nama" >
        <br>
    
        <p class="fw-bold">Nama anda adalah {{ $nama }}</p>
        {{-- <input type="radio" name="jenis_kelamin" value="pria" wire:model.lazy="nama">Laki-Laki
        <input type="radio" name="jenis_kelamin" value="wanita" wire:model.lazy="nama">Perempuan --}}
        <br>


        <select class="form-select" wire:model.lazy="jenisKelamin">
            <option hidden>Pilih Jenis Kelamin Anda</option>
            <option value="Perempuan">Wanita</option>
            <option value="Laki-laki">Pria</option>
        </select>
        <br>
        <p class="fw-bold">Jenis kelamin anda {{ $jenisKelamin }}</p>
        <br>

        <p class="fs-6">Masukkan Password:</p>
        <div>
            <input
                @if ($showPassword)
                    type="text"
                @else
                    type="password"
                @endif
                wire:model.lazy="password" class="form-control">
                <br>
            <label for="showPassword">Show password</label>
            <input id="showPassword" type="checkbox" wire:model.lazy="showPassword">
        </div><br>

        <p class="fw-bold">Put Your Count of Product Here</p>
        <input type="number" class="form-control" wire:model.lazy = "cart"><br>
        <button class="btn btn-primary rounded-circle" wire:click = "plus">+</button>
        @if ($cart >= 1)
        <button class="btn btn-danger rounded-circle" wire:click = "minus" >-</button>            
        @endif



      
    </div>
</div>
