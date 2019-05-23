@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class=" float-right">
                <!--                <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="$('#modalRoomsAddForm').modal('show');">
                                    Add
                                </a>-->
                <a href="javascript:void(0)" class="btn-floating peach-gradient" onclick="$('#modalRoomsAddForm').modal('show');">
                    <i class="fas fa-plus" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="col-12">
            <table class="table  table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rooms</th>                      
                        <th scope="col">Images</th>
                        <th scope="col">Defects</th>
                        <th scope="col">Action</th>
                    </tr>
                    
                <tbody class="append">
                    @foreach($rooms as $room)
                    <tr>
                        <th scope="row">{{ $room->id }}</th>
                        <td>{{ $room->room_number }}</td>
                        <td>
                            @if( !empty( $room->roomsImages ))
                            <img src="{{ $room->roomsImages->images  }}" width="100px" class="rounded">
                            @else 
                            <img src="{{ asset('img/images/default-product-img.jpg') }}" width="100px">
                            @endif
                        </td>
                        <td>{{ $room->defects }}</td>
                        <td>  
                            <a href="javascript:void(0)" edit_id="{{ $room->id }}" id="edit-data"  class="btn-floating btn-sm cyan">
                                <i class="fas fa-edit pl-1"></i>
                            </a>
                            <a href="javascript:void(0)" room_id="{{ $room->id }}" id="delete" class="btn-floating btn-sm purple-gradient">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </a>

                        </td>
                    </tr>           
                    @endforeach
                </tbody>
            </table>

        </div>

        {{ $rooms->links()}}
    </div>
</div>



@endsection