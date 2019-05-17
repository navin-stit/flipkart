@extends('layouts.app')
@section('content')

<div class="container" style="height:55vh">
    <div class="row">   
        <form method="post" action="javascript:void(0)" class="roomsDefectsForm" style="width: 100%">
            <div class="col-12 d-flex">                 
                <div>
                    <select name = "roomValue" class="mdb-select md-form py-1 pl-1" searchable="Search here.." 
                            style="display:block!important;font-size: 14px;width:200px;">
                        <option value="" disabled selected>Select Room</option>
                        @foreach ( $rooms as $room )
                        <option value="{{ $room->id }}">{{ $room->room_number }}</option> 
                        @endforeach
                    </select>
                </div>              
            </div>
            <div class="col-12">
                <!--Material textarea-->
                <div class="md-form">
                    <textarea id="form7"  class="md-textarea clearValue form-control" rows="3" name="defects"></textarea>
                    <label for="form7">Write Something..</label>
                </div>
                <div>
                    <button type="submit"  class="btn btn-primary">Submit</button>
                </div>          
            </div>
        </form>
    </div>
</div>

@endsection