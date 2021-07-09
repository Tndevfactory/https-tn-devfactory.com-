@extends('layouts.app_dashboard') @section('fixed_drawer')
@include('pages.dashboards.admin.drawer') @endsection
@section('dashboard_content')

<div style="width: 81%" class="d-flex justify-content-end position-absolute">
    <div class="spinner-border d-none text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div class="stats_admin_content d-none tabcontent_admin">
    @include('pages.dashboards.admin.stats')
</div>
<div class="orders_admin_content d-none tabcontent_admin">
    @include('pages.dashboards.admin.orders')
</div>
<div class="profile_admin_content d-none tabcontent_admin">
    @include('pages.dashboards.admin.profile')
</div>
<div class="reclamation_admin_content d-none tabcontent_admin">
    @include('pages.dashboards.admin.reclamation')
</div>
<div class="demande_admin_content d-none tabcontent_admin">
    @include('pages.dashboards.admin.demande')
</div>
<div class="upload_admin_content d-block tabcontent_admin">
    @include('pages.dashboards.admin.upload')
</div>

@include('pages.dashboards.admin.mobile_drawer') @endsection
