<div class="card-body">
    {!! Form::open(['url' => 'kelurahan']) !!}
        <div class="form-group row">
            
            <label class="col-sm-3 col-form-label">Nama Kelurahan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="kelurahan">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    {!! Form::close() !!}
</div>
