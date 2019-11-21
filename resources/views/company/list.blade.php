@extends('layouts.backend')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Company</h1>
</div>
<table class="table table-bordered" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 109px;">Nama</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 184px;">Email</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 76px;">Website</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Logo</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Nama</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Website</th>
            <th rowspan="1" colspan="1">Logo</th>
            <th rowspan="1" colspan="1">Action</th>
        </tr>
    </tfoot>
    <tbody>
        <tr role="row" class="odd">
            <td class="sorting_1">Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
        </tr>
        <tr role="row" class="even">
            <td class="sorting_1">Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
            <td>47</td>
            <td>2009/10/09</td>
        </tr>
    </tbody>
</table>
@endsection