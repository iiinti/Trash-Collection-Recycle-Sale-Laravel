@extends('layouts.app')
@section('content')
 <div class="row" style="width:50%">
    <form class="col s12" action="{{route('drives.store')}}" method="POST">
@csrf
      <div class="row">
        <div class="col s12">
          Drive Type:
          <div class="input-field">
    <select id="drive_type" name="drive_type">
      <option value="" disabled selected>Pickup / Sales</option>
      <option value="pickup">Pickup</option>
      <option value="sales">Sales</option>
     </select>
  </div>
  </div>
</div>

   <div class="row" >
        <div class="col s12">
          Date:
          <input name="date" type="text" class="datepicker">
  </div>
</div>

<div class="row">
    <div class="col s12">
          Drive Number:
          <div class="input-field">
          <input name="drive_number" placeholder="xyz123456" id="drive_number" type="text" class="validate" value="1234">
        </div>
</div>
</div>

 <div class="row" id="sources">
        <div class="col s12">
          Source:
          <div class="input-field">
    <select multiple name="sources">
      <option value="" disabled >Sources</option>
      <option value="1">Source 1</option>
      <option value="2">Source 2</option>
     </select>
  </div>
  </div>
</div>

<div class="row" id="destinations">
        <div class="col s12">
          Destination:
          <div class="input-field">
    <select multiple name="destinations">
      <option value="" disabled >Destinations</option>
      <option value="1">Destination 1</option>
      <option value="2">Destination 2</option>
     </select>
  </div>
  </div>
</div>
<button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
    </form>
    
  </div>

@push('custom-script')
<script>$(document).ready(function() {
    $("#sources").hide();
            $("#destinations").hide();
    $("#drive_type").on( "change", function() {

        var typeValue = this.value;
        console.log(typeValue);
         
        if (typeValue == "pickup") {
            $("#sources").show();
            $("#destinations").hide();
        } else if (typeValue == "sales") {
            $("#sources").hide();
            $("#destinations").show();
        }
    });
});</script>

@endpush
@endsection
