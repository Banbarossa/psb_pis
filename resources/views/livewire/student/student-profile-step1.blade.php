<div>
    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenjang" class="form-control-label">{{ __('Jenjang Lanjutan') }}</label>
                    <div class="@error('jenjang')border border-danger rounded-3 @enderror">
                        <select wire:model="jenjang" class="form-select"  id="jenjang">
                            <option value="smp">SD</option>
                            <option value="smp">SMP</option>
                            <option value="ma">MA</option>
                        </select>
                    </div>
                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama" class="form-control-label">{{ __('Nama Lengkap') }}</label>
                    <div class="@error('nama')border border-danger rounded-3 @enderror">
                        <input wire:model="nama" class="form-control" type="text" placeholder="Nama Lengkap"
                            id="nama">
                    </div>
                    @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tempat_lahir" class="form-control-label">{{ __('Tempat Lahir') }}</label>
                    <div class="@error('tempat_lahir')border border-danger rounded-3 @enderror">
                        <input wire:model="tempat_lahir" class="form-control" type="text" placeholder="tempat_lahir"
                            id="tempat_lahir">
                    </div>
                    @error('tempat_lahir') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal_lahir" class="form-control-label">{{ __('Tanggal Lahir') }}</label>
                    <div class="@error('tanggal_lahir')border border-danger rounded-3 @enderror">
                        <input wire:model="tanggal_lahir" class="form-control" type="date"
                            id="tanggal_lahir">
                    </div>
                    @error('tanggal_lahir') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="NISN" class="form-control-label">{{ __('NISN') }}</label>
                    <div class="@error('NISN')border border-danger rounded-3 @enderror">
                        <input wire:model="NISN" class="form-control" type="text" placeholder="NISN"
                            id="NISN">
                    </div>
                    @error('NISN') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="NISN" class="form-control-label d-block mb-3">{{ __('Jenis Kelamin') }}</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki">
                        <label class="form-check-label" for="jenis_kelamin1">Laki-Laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="jeniskelamin2" value="perempuan">
                        <label class="form-check-label" for="jeniskelamin2">Perempuaa</label>
                      </div>
                    @error('NISN') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="agama" class="form-control-label">{{ __('Agama') }}</label>
                    <div class="@error('agama')border border-danger rounded-3 @enderror">
                        <select wire:model="agama" class="form-select"  id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_kk" class="form-control-label">{{ __('Nomor Kartu Keluarga') }}</label>
                    <div class="@error('no_kk')border border-danger rounded-3 @enderror">
                        <input wire:model="no_kk" class="form-control" type="text" placeholder="Nomor Kartu Keluarga"
                            id="no_kk">
                    </div>
                    @error('no_kk') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nik" class="form-control-label">{{ __('Nomor Induk Kependudukan') }}</label>
                    <div class="@error('nik')border border-danger rounded-3 @enderror">
                        <input wire:model="nik" class="form-control" type="text" placeholder="Nomor Induk Kependudukan"
                            id="nik">
                    </div>
                    @error('nik') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_akte" class="form-control-label">{{ __('Nomor Registrasi Akte Lahir') }}</label>
                    <div class="@error('no_akte')border border-danger rounded-3 @enderror">
                        <input wire:model="no_akte" class="form-control" type="text" placeholder="Nomor Registrasi Akte Lahir"
                            id="no_akte">
                    </div>
                    @error('no_akte') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            
            
           
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
        </div>
    </form>
</div>
