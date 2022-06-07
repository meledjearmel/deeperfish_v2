<form x-data x-ref="form">
    <div class="card">
        <div class="card-header pb-0">
            <h5 class="card-title">Creer un lien</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <label class="col-lg-12 form-label " for="appendedtext">Shork link key</label>
                <div class="col-lg-12">
                    <div class="input-group">
                        <input wire:model.lazy="shortkey" id="appendedtext" name="appendedtext" class="form-control btn-square" placeholder="Short key" type="text" disabled>
                        <span wire:click="generate_key" class="input-group-text btn btn-primary btn-right">Générer</span>
                    </div>
                </div>
            </div>
            <div wire:ignore class="mb-2">
                <label class="col-form-label">Email</label>
                <select wire:model="user" id="user" class="js-example-placeholder-multiple col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option wire:key="0" value="">-- Email --</option>
                    @foreach($guests as $guest)
                        @if($guest->is_admin())
                            @continue
                        @endif
                    <option wire:key="{{ $guest->id }}" value="{{ $guest->id }}">{{ $guest->fullname ? $guest->fullname .'( '. $guest->email .')' : $guest->email }}</option>
                    @endforeach
                </select>
            </div>
            <div wire:ignore class="mb-2">
                <label class="col-form-label">Plate-form</label>
                <select wire:model.lazy="platform" id="platform" class="js-example-placeholder-multiple col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option wire:key="0" value="">-- Choisissez la plate-forme --</option>
                    @foreach($websites as $website)
                    <option wire:key="{{ $website->id }}" value="{{ $website->id }}">{{ ucfirst($website->name) }}</option>
                    @endforeach
                </select>
            </div>
            <div wire:ignore class="form-group">
                <label class="col-form-label">Date d'expiration</label>
                <div class="col-sm-12">
                    <div class="input-group">
                        <input x-ref="date" class="datepicker-here form-control digits" type="text" data-language="en" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button @click.prevent="@this.set('expire_at', $refs.date.value)" wire:click.prevent="create_link" class="btn btn-primary m-r-15" type="submit">Creer</button>
        </div>
    </div>
</form>

@push('scripts')
    <script defer>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#user').on('change', function (e) {
                var data = $('#user').select2("val");
                @this.set('user', data);
            });
            $('#platform').on('change', function (e) {
                var data = $('#platform').select2("val");
                @this.set('platform', data);
            });
        });
    </script>
@endpush

