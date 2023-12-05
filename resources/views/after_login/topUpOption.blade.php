@extends ('/after_login.components.topUpTemplate')

@section('form')

        <div class="row g-1">
            <div class="col-md-6">
            <div class="form-floating">
                <input
                type="text"
                class="form-control"
                id="game_id1"
                name="game_id1"
                placeholder="Masukkan User ID"/>
                <label for="name">Masukkan User ID</label>
            </div>
            </div>
            <div class="col-md-6">
            <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" style="height: 57.5px;" id="SERVER" name="SERVER">
                <option selected>Pilih Server:</option>
                <option value="1">America</option>
                <option value="2">Europe</option>
                <option value="3">Asia</option>
            </select>
            </div>
        </div>

@endsection

