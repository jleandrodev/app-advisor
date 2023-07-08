@csrf

<div class="form-group row">
    <label for="name" class="col-form-label col-sm-2 required">Nome<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="name" name="name" maxlength="255"
            class="form-control @error('name') is-invalid @enderror" value="{{ old('name', @$employee->name) }}" />
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-form-label col-sm-2 required">Celular<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        @error('cel')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="cel" maxlength="16" class="cel form-control @error('cel') is-invalid @enderror"
            value="{{ old('cel', @$employee->cel) }}" />
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-form-label col-sm-2 required">Email</label>
    <div class="col-sm-10">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="email" name="email" maxlength="100"
            class="form-control @error('email') is-invalid @enderror" value="{{ old('email', @$employee->email) }}" />
    </div>
</div>
<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
