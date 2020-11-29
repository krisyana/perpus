
<div class="container-fluid">
    
    <div class="row">

        {{-- list of kategori --}}
        <div class="col-2">
            <ul class="fa-ul">
                <li>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Kategori 1</label>
                    </div>
                </li>
            </ul>
        </div>
        {{-- list of kategori --}}

        <div class="col-8">
            <div id="searchkat">
                <input type="text" name="search" placeholder="Search..">
            </div>

            <div class="row">
                <div class="col">
                    <p class="lead">
                        Pencarian buku (ini)
                    </p>
                    <p class="lead">
                        Menemukan <i class="bold">5</i> Buku
                    </p>

                </div>
                <div class="col">
                    <select class="browser-default custom-select">
                        <option selected>Sort by</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
            </div>

        </div>
    </div>
</div>

@section('scripts')
<style>
    #searchkat {
        padding-bottom: 10px;
    }
</style>
@endsection