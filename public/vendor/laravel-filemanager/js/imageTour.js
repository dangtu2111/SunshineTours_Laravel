(function( $ ){
    $.fn.filemanager = function(type, options) {
        type = type || 'file';

        this.on('click', function(e) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
            var table_body = $('#image-table-body'); // Lấy tbody để thêm hàng mới

            window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
            let maxValue = getMaxValueFromColumn();
            window.SetUrl = function (items) {
                items.forEach(function(item, index) {
                    // Tạo hàng mới với dữ liệu từ item
                    var newRow = `
                        <tr>
                            <td>
                                <img src="${item.thumb_url}" alt="Image" style="height: 5rem;">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="thumbnails[]" readonly  value="${item.url}">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="${maxValue + 1}">
                            </td>
                            <td>
                                <button class="btn btn-white btn-delete-row">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    
                    // Thêm hàng vào tbody
                    table_body.append(newRow);
                });

                // Thêm sự kiện xóa hàng
                $('.btn-delete-row').on('click', function() {
                    $(this).closest('tr').remove();
                });
            };
            return false;
        });
    }
})(jQuery);
function getMaxValueFromColumn() {
    let maxValue = 0;

    // Duyệt qua tất cả các input trong cột thứ 3
    $('#image-table-body tr').each(function() {
        let value = parseInt($(this).find('td:nth-child(3) input').val());
        if (!isNaN(value) && value > maxValue) {
            maxValue = value;
        }
    });

    return maxValue;
}
