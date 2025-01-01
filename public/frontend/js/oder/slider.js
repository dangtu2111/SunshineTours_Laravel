$(document).ready(function($) {
    let totalCost = 0;
    let discount = 0;
    let vat = 0;
    let downPayment = 0;
    // Thêm sự kiện xóa cho nhóm input ban đầu
    $('.remove-button').on('click', function() {
        $(this).closest('.input-group').remove();
        updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
    });

    // Xử lý thêm nhóm input mới khi nhấn nút
    $('#add-button').on('click', function() {
        const container = $('#input-group-container');
        const tourPrice = parseFloat("{{$tour->price}}");

        // Tạo nhóm input mới
        const newInputGroup = $(`
        <div class="input-guest input-group mb-3">
            <div class="input-group-prepend" style="width:20%">
                <select name='numberOfPeople[]' class="numberOfPeople fs-6 custom-select">
                    <option selected>Select number of people</option>
                </select>
            </div>
            <select name='guest-type[]' class="guest-type custom-select text-center fs-6"  style="width:55%">
                <option value="2" selected>Guests (8 years and older)</option>
                <option value="1">Guests (4 to 7 years old)</option>
                <option value="0">Guests (3 years and under)</option>
            </select>
            <div class="input-group-append" style="width:15%">
                <span class="input-group-text notranslate fs-6">$0.00</span>
            </div>
            <div class="input-group-append" style="width:10%">
                <button class="btn ml-2 remove-button" type="button"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    `);

        // Chèn nhóm mới vào container mà không thay đổi #input-group-container
        container.find('#add-button').before(newInputGroup);

        // Tạo options cho select mới
        const $newSelectElement = newInputGroup.find('.numberOfPeople');
        for (let i = 1; i <= 100; i++) {
            $newSelectElement.append(`<option value="${i}">${i}</option>`);
        }

        // Thêm sự kiện xóa cho nút "Remove" trong nhóm input mới
        newInputGroup.find('.remove-button').on('click', function() {
            newInputGroup.remove();
            updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
        });

        // Thêm sự kiện tính toán chi phí khi chọn số lượng người hoặc loại khách
        // Gán sự kiện cho các select mới
        newInputGroup.find('.guest-type').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });
        newInputGroup.find('.numberOfPeople').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });

        // Gọi trực tiếp hàm cập nhật lại giá trị trong span ngay sau khi thêm nhóm
        updatePriceSpan(newInputGroup);
    });

    // Thêm sự kiện cho checkbox video và car-bus
    $('#video').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox thay đổi
    });

    $('#car-bus').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox thay đổi
    });
    $('#checkvipcheckvip').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox bị thay đổi
    });

    function updateSliderVal() {
        const sliderValue = $("#ex6").val(); // Lấy giá trị hiện tại của slider
        const result = (totalCost / 100 * sliderValue).toFixed(2); // Tính toán giá trị
        $("#ex6SliderVal").text(result); // Cập nhật vào giao diện
        $('#downPayment').text('$' + result);
        $('#downPayment1').text('$' + result);
        $('#down_payment').val(result);
    }
    // Hàm tính toán tổng chi phí
    function updateTotalCost() {
        totalCost = 0;
        const tourPrice = parseFloat("{{$tour->price}}");
        // Lặp qua tất cả các nhóm input và tính tổng chi phí
        $('.input-guest').each(function() {
            const numberOfPeople = $(this).find('.numberOfPeople').val(); // Lấy số người
            const pricePerPerson = $(this).find('.guest-type').val(); // Lấy giá cho loại khách

            // Kiểm tra nếu giá trị hợp lệ
            if (numberOfPeople && pricePerPerson && !isNaN(numberOfPeople) && !isNaN(pricePerPerson)) {
                const totalPrice = canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice);
                $(this).find('.input-group-text').text('$' + totalPrice.toFixed(2));
                totalCost += totalPrice;
            } else {
                $(this).find('.input-group-text').text('$00.00'); // Đặt giá trị mặc định nếu không hợp lệ
            }
        });

        // Thêm chi phí cho các checkbox nếu được chọn
        if ($('#video').prop('checked')) {
            totalCost += 50; // Thêm $50 nếu video được chọn
        }
        if ($('#car-bus').prop('checked')) {
            totalCost += 60; // Thêm $60 nếu car/bus được chọn
        }
        if ($('#checkvipcheckvip').prop('checked')) {
            totalCost += 30; // Thêm $60 nếu car/bus được chọn
        }


        // Cập nhật tổng chi phí vào thẻ
        $('#total-cost').text('$' + totalCost.toFixed(2));

        // Tính toán discount và vat (giả sử bạn đã có giá trị này từ các input hoặc logic khác)
        // Ví dụ: discount = 20; vat = totalCost * 0.1; (10% VAT)

        // Cập nhật giá trị tổng (cộng tổng chi phí, giảm giá và VAT)
        $('#total').text('$' + (totalCost + discount + vat).toFixed(2));
        const sliderValue = $("#ex6").val(); // Lấy giá trị hiện tại của slider
        const result = (totalCost / 100 * sliderValue).toFixed(2);
        $('#downPayment').text('$' + result);
        $('#downPayment1').text('$' + result);
        $('#total_money').val(totalCost);
        $('#down_payment').val(result);
        var newHref = "{{ route('processPaypal', ['amount' => '__downPayment__']) }}".replace('__downPayment__', result);
        $('#paypal-link').attr('href', newHref); // Cập nhật href của thẻ <a>
        updateSliderVal();
    }

    function canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice) {
        if (pricePerPerson == 2) {
            return numberOfPeople * parseFloat(tourPrice);
        } else if (pricePerPerson == 1) {
            return numberOfPeople * parseFloat(tourPrice * 0.6);
        } else {
            return 0;
        }
    }
    // Hàm cập nhật giá trị trong thẻ span khi thay đổi giá trị select
    function updatePriceSpan(inputGroup) {
        const numberOfPeople = inputGroup.find('.numberOfPeople').val(); // Lấy số người
        const pricePerPerson = inputGroup.find('.guest-type').val(); // Lấy giá cho loại khách
        const tourPrice = parseFloat("{{$tour->price}}");
        console.log(numberOfPeople * parseFloat(tourPrice));

        // Kiểm tra nếu giá trị hợp lệ
        if (numberOfPeople && pricePerPerson && !isNaN(numberOfPeople) && !isNaN(pricePerPerson)) {
            const totalPrice = canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice);
            // Tính toán tổng chi phí
            inputGroup.find('.input-group-text').text('$' + totalPrice.toFixed(2)); // Cập nhật giá trị trong span
        } else {
            inputGroup.find('.input-group-text').text('$00.00'); // Đặt giá trị mặc định nếu không hợp lệ
        }
    }

    function create() {
        const container = $('#input-group-container');
        const tourPrice = parseFloat("{{$tour->price}}");

        // Tạo nhóm input mới
        const newInputGroup = $(`
        <div class="input-guest input-group mb-3">
            <div class="input-group-prepend" style="width:20%">
                <select name='numberOfPeople[]' class="numberOfPeople fs-6 custom-select">
                    <option selected>Select number of people</option>
                </select>
            </div>
            <select  name='guest-type[]' class="guest-type custom-select text-center fs-6"  style="width:55%">
                <option value="2" selected>Guests (8 years and older)</option>
                <option value="1">Guests (4 to 7 years old)</option>
                <option value="0">Guests (3 years and under)</option>
            </select>
            <div class="input-group-append" style="width:15%">
                <span class="input-group-text notranslate fs-6">$0.00</span>
            </div>
            <div class="input-group-append" style="width:10%">
                <button class="btn ml-2 remove-button"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    `);

        // Chèn nhóm mới vào container mà không thay đổi #input-group-container
        container.find('#add-button').before(newInputGroup);

        // Tạo options cho select mới
        const $newSelectElement = newInputGroup.find('.numberOfPeople');
        for (let i = 1; i <= 100; i++) {
            $newSelectElement.append(`<option value="${i}">${i}</option>`);
        }

        // Thêm sự kiện xóa cho nút "Remove" trong nhóm input mới
        newInputGroup.find('.remove-button').on('click', function() {
            newInputGroup.remove();
            updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
        });

        // Thêm sự kiện tính toán chi phí khi chọn số lượng người hoặc loại khách
        // Gán sự kiện cho các select mới
        newInputGroup.find('.guest-type').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });
        newInputGroup.find('.numberOfPeople').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });

        // Gọi trực tiếp hàm cập nhật lại giá trị trong span ngay sau khi thêm nhóm
        updatePriceSpan(newInputGroup);

    }
    create();
    // With JQuery
    $("#ex6").slider({
        formatter: function(value) {
            return 'Percent: ' + value + "%";
        }
    });
    $("#ex6").on("slide", function(slideEvt) {
        updateSliderVal();
    });


});