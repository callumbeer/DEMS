function delete_row(row, contWithmethod) {
    debugger;
    var box = $("#mb-remove-row");
    box.addClass("open");
    box.find(".mb-control-yes").on("click", function () {
        box.removeClass("open");
        $("#" + row).hide("slow", function () {
            (this).remove();
            $.ajax({
                type: 'post',
                url: base_url.concat(contWithmethod),
                data: { 'id': row },
                success: function (response) {
                    if (response == '1') {

                    }
                }
            });
        });
    });
}
