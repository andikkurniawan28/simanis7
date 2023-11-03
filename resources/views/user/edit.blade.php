@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "user")) }}
@endsection

@section("root")
    {{ route("user.index") }}
@endsection

@section("form-create")
    <form action="{{ route("user.update", $user->username) }}" method="POST">
        @csrf @method("PUT")

        <input type="hidden" name="kode" value="20020801">

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("username") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="username" value="{{ $user->username }}"/ required>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("password") }}</span>
            </label>
            <input type="password" class="form-control form-control-solid" placeholder="" name="password" value="{{ $user->password }}"/ required>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("fullname") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="fullname" value="{{ $user->fullname }}"/ required>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("level") }}</span>
            </label>
            <select name="menulevel" class="form-control">
                <option disabled selected value> -- select an option -- </option>
                @foreach ($userlevels as $userlevel)
                    <option value="{{ $userlevel->kode }}"
                            @if($user->menulevel == $userlevel->kode)
                                {{ "selected" }}
                            @endif
                    >{{ $userlevel->keterangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("status") }}</span>
            </label>
            <select name="status" class="form-control">
                <option disabled selected value> -- select an option -- </option>
                <option value="1" @if($user->status == '1') {{ "selected" }} @endif >Aktif</option>
                <option value="0" @if($user->status == '0') {{ "selected" }} @endif >Nonaktif</option>
            </select>
        </div>

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection

@section("supervisor")
    {{ "active show" }}
@endsection
