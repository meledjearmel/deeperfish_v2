<form x-data x-ref="form">
    <div class="card">
        <div class="card-header pb-0">
            <h5 class="card-title">Creer un utlisateur</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Email address( Obligatoire )</label>
                <input wire:model.lazy="email" class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Nom( Facultatif )</label>
                <input wire:model.lazy="lastname" class="form-control" id="exampleFormControlInput1" type="text" placeholder="John">
            </div>

            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Prenom( Facultatif )</label>
                <input wire:model.lazy="firstname" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Doe">
            </div>

            <div class="mb-2">
                <label class="col-lg-12 form-label " for="appendedtext">Mot de passe</label>
                <div class="col-lg-12">
                    <div class="input-group">
                        <input wire:model.lazy="password" id="appendedtext" name="appendedtext" class="form-control btn-square" placeholder="Mot de passe" type="text">
                        <span wire:click="generate_pass" class="input-group-text btn btn-primary btn-right">Générer</span>
                    </div>
                </div>
            </div>

            <div wire:ignore class="mb-2">
                <label class="col-form-label">Role</label>
                <select wire:model.lazy="platform" id="role" class="js-example-placeholder-multiple col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option wire:key="0" value="">-- Choisissez le role --</option>
                    @foreach($roles as $role)
                        <option wire:key="{{ $role->id }}" value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="checkbox">
                <input id="checkbox1" wire:model="create_link" type="checkbox">
                <label for="checkbox1">Creer un lien juste apres</label>
            </div>
        </div>

        <div class="card-footer">
            <button wire:click.prevent="create_user" class="btn btn-primary m-r-15" type="submit">Creer</button>
        </div>
    </div>
</form>

@push('scripts')
    <script defer>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#role').on('change', function (e) {
                var data = $('#role').select2("val");
                @this.set('role_id', data);
            });
        });
    </script>
@endpush
