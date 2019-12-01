var images = [], imagesFile = [];
var image_upload = new FormData();

$('#add-picture').on('click', function () {
    var inputVal = $('#hotel-img').val();
    if(inputVal !== '') {
        console.log(inputVal);
        inputVal = inputVal.split("\\")[2];
        images.push(inputVal);
        imagesFile.push($('#hotel-img')[0].files[0]);
        image_upload.append($('#hotel-img')[0].files[0], 'da');
        // $('#hotel-img').val('');

    }
});

// $('#save-hotel').on('click', function () {
//     console.log(images, imagesFile, image_upload);
//     $.ajax({
//         url: "/save-hotel",
//         method: 'POST',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         data: {
//             image_upload: image_upload,
//             hotelName: $('#hotel-name').val(),
//             hotelDescriptions: $('#hotel-description').val()
//         },
//         cache:false,
//         contentType: false,
//         processData: false,
//         success: function(result){
//             $("#div1").html(result);
//         },
//         error: function (e) {
//             console.log(e);
//         }
//     });
// });

$('#save-hotel').on('click', function () {
    console.log(images, imagesFile, image_upload);
    $.ajax({
        url: "/save-hotel",
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            image_upload: $('#hotel-img')[0].files[0].name,
            hotelName: $('#hotel-name').val(),
            hotelDescriptions: $('#hotel-description').val()
        },
        cache:false,
        contentType: false,
        processData: false,
        success: function(result){
            $("#div1").html(result);
        },
        error: function (e) {
            console.log(e);
        }
    });
});
