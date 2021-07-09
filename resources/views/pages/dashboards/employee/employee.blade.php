@extends('layouts.app_dashboard') 

@section('fixed_drawer')

    @include('pages.dashboards.client.drawer')
    


@endsection

@section('dashboard_content')

   <div  class=" stats_client_content d-block tabcontent_client "> @include('pages.dashboards.client.stats') </div>
   <div  class="orders_client_content d-none tabcontent_client"> @include('pages.dashboards.client.orders')</div>
   <div   class="profile_client_content d-none tabcontent_client"> @include('pages.dashboards.client.profile')</div>
   <div   class="reclamation_client_content d-none tabcontent_client"> @include('pages.dashboards.client.reclamation')</div>
   <div  class="demande_client_content d-none tabcontent_client"> @include('pages.dashboards.client.demande')</div>
  
   @include('pages.dashboards.client.mobile_drawer')
@endsection
