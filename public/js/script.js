$(document).ready(function () {
    $('.mdb-select').materialSelect();
});

/// ADD ROOM ///
$(document).on('submit', '.AddRoomsData', function () {
    var data = $(".AddRoomsData")[0];
    var formData = new FormData(data);
    //alert(formData);return false;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        enctype: 'multipart/form-data',
        url: webUrl + "/add-data",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (response) {
            //console.log(response.img);
            $.notify("Data Added");
                $(".uncheck").val('');
                $('#modalRoomsAddForm').modal('hide');
                response.img.images != ''               
                ? $('.append').prepend('<tr>\n\
                <th scope="row">' + response.data.id + '</th>\n\<td>' + response.data.room_number + '</td>\n\
               <td><img src="' + response.img.images + '" width="100px"></td><td></td>\n\
                <td>\n\
                <a href="javascript:void(0)" edit_id="' + response.data.id + '" id="edit-data"  class="btn-floating btn-sm cyan">\n\
                <i class="fas fa-edit pl-1"></i></a>\n\
                <a href="javascript:void(0)" room_id="' + response.data.id + '" id="delete" class="btn-floating btn-sm purple-gradient">\n\
                <i class="fas fa-trash" aria-hidden="true"></i>\n\
                </a>\n\
                </td>\n\
                </tr>')                   
                : $('.append').prepend('<tr>\n\
                <th scope="row">' + response.data.id + '</th>\n\
                <td>' + response.data.room_number + '</td>\n\
                <td></td>\n\
                <td>\n\
                <a href="javascript:void(0)" edit_id="' + response.data.id + '" id="edit-data"  class="btn-floating btn-sm cyan">\n\
                <i class="fas fa-edit pl-1"></i></a>\n\
                <a href="javascript:void(0)" room_id="' + response.data.id + '" id="delete" class="btn-floating btn-sm purple-gradient">\n\
                <i class="fas fa-trash" aria-hidden="true"></i>\n\
                </a>\n\
                </td>\n\
                </tr>')                      
                        
        }
    });
});

/////  Rooms Defects Form /////

$(document).on('submit', '.roomsDefectsForm', function () {
    var formData = $(".roomsDefectsForm").serialize();
    //alert(formData);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: webUrl + "/add-defects",
        type: "POST",
        data: formData,
        dataType: 'json',
        success: function (data) {
            if (data.message == 'success') {
                $.notify("Data Added");
                $(".clearValue").val('');
            } else {
                alert(data.message);
            }
        }
    });
});


///// Delete rooms data ///

$(document).on('click', '#delete', function () {
    var roomId = $(this).attr('room_id');
    var obj = $(this);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: webUrl + '/delete-room',
        type: "DELETE",
        data: {id: roomId},
        dataType: 'json',
        success: function (response) {
            if (response.message == 'success') {
                // alert('deleted');
                $(obj).parents('tr').remove();

            } else
            {
                alert(response.message)
            }
        }
    });
});

////  EDIT ROOM DETAILS  /////

$(document).on('click', '#edit-data', function () {
    $('#modalRoomsEditForm').modal('show');
    var data_id = $(this).attr('edit_id');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        enctype: 'multipart/form-data',
        url: webUrl + '/edit-details',
        type: 'GET',
        data: {id: data_id},
        dataType: 'json',
        success: function (response) {
            if(response.message == 'success'){
            $('.viewImage').html('');
            $('#room-id').val(response.data.id);
            $('#roomNumber').val(response.data.room_number);
            $('#roomDefect').val(response.data.defects);
            $.each(response.image, function (key, val) {
                $('.viewImage').append('<img src="' + val.images + '" width="100px" id="changeImage" class="ml-5 mb-3"/>')
            });
            }else{
                alert(response.message);
            }
        }
    });
});

////// UPDATE ROOM DETAILS ///////

