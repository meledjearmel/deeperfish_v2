<div class="card">
    <div class="card-header">
        <h5>Liste des utilisateurs</h5>
    </div>
    <div style="padding-top: 0" class="card-body">
        <div class="dt-ext table-responsive">
            <div id="responsive_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="display dataTable dtr-inline" id="responsive" role="grid" aria-describedby="responsive_info" style="width: 1157px;">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 183px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 286px;" aria-label="Position: activate to sort column ascending">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 139px;" aria-label="Office: activate to sort column ascending">Liens</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $odd = true @endphp
                            @foreach($guests as $guest)
                                @if($guest->is_admin())
                                    @continue
                                @endif
                                <tr role="row" @class(['odd' => $odd, 'even' => !$odd])>
                                    <td tabindex="0" class="sorting_1">{{ $guest->fullname??'Inconnu' }}</td>
                                    <td>{{ $guest->email }}</td>
                                    <td>{{ count($guest->shorturls) }}</td>
                                </tr>
                                @php $odd = !$odd @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
