jQuery(document).ready(function () {

    $('.treeview').click(function () {
        $(".treeview-menu").toggle("slow", function () {

        });
    });

    $("#searchString").autocomplete({
        source: "display-search-queries",
        minLength: 1,
        select: function (e, ui) {
            if (confirm('Would you like to add this hotel?')) {
                var hotelName = ui.item.value;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/hotel/complite",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        hotel: hotelName
                    },
                    success: function () {
                        console.log('s');
                        window.location.href = "/hotel";
                    },
                    error: function () {
                        console.log('e');
                    }
                });
            } else {

            }
        }
    });


    var count = $('#roomss').val();

    $('#dell').click(function (e) {
        e.preventDefault();
        if (count > 0) {
            $(".castom-nav li:last-child").remove();
            $(".mm:last-child").remove();
            count--;
            $('#roomss').val(count);
        } else {

        }
    });
    var c = 2;


    var pric = 1;
    $('#add').click(function (e) {
        e.preventDefault();
        $(".castom-nav").append('<li class=""><a data-toggle="tab" aria-expanded="true" href="#menu' + (Number(count) + Number(2)) + '">Room ' + (Number(count) + Number(2)) + '</a></li>');

        $(".tab-content").append('<div class="tab-pane fade mm" id="menu' + (Number(count) + Number(2)) + '"><br>' +
            '<div class="form-group tab-pane">' +
            '   <label for="name">Price</label>\n' +
            '   <input type="number" class="form-control" name="price[]" placeholder="Price" value="price.' + (Number(count) + Number(1)) + '">' +
            '</div>' +
            '<div class="form-group">' +
            '   <label for="type">Type</label>' +
            '   <select class="form-control" name="type[]">' +
            '   <option>Single</option>' +
            '   <option>Double</option>' +
            '   <option>Triple</option>' +
            '   </select>' +
            '</div>' +
            '<div class="form-group">' +
            '   <label for="name">Photo room</label>' +
            '   <input name="room[]" type="file">' +
            '</div>' +
            '</div>');
        count++;
        pric++;
        $('#roomss').val(count);
    });


    $('.showRoom').click(function (e) {
        $('tr[data-hotel-id="' + $(this).attr('data-id') + '"]').toggle();
    });
});