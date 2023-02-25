<form class="form-horizontal" action="{{ route('admin.ot.create') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group col-sm-3">
        <input type="text" id="form-field-1" placeholder="talent" />
    </div>
    <div class="form-group col-sm-3">
        <input type="text" id="form-field-1" placeholder="service" />
    </div>
    <div class="form-group col-sm-3">
        <input type="text" id="form-field-1" placeholder="Jumlah" />
    </div>
    <div class="form-group col-sm-3">
        <button>Tambah</button>
    </div>
</form>