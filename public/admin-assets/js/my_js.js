

$(document).ready(function () {
    $('.pickadate').pickadate({
        max: true
    });
$('#invoice_details').on('keyup blur' , '.quantity' , function () {
    let $row = $(this).closest('tr');
    let quantity = $row.find('.quantity').val() || 0;
    let unit_price = $row.find('.unit_price').val() || 0;
    $row.find('.partial_price').val((quantity * unit_price));
    $('.sub_total').val(sum_total('.partial_price'));
});


    $('#invoice_details').on('keyup blur' , '.unit_price' , function () {
        let $row = $(this).closest('tr');
        let quantity = $row.find('.quantity').val() || 0;
        let unit_price = $row.find('.unit_price').val() || 0;
        $row.find('.partial_price').val((quantity * unit_price));
        $('.sub_total').val(sum_total('.partial_price'));
    });



    let sum_total = function ($selector) {
        let sum = 0;
        $($selector).each(function () {
            let inpVal = $(this).val() != '' ? $(this).val() : 0;
            sum += parseFloat(inpVal);
        });
        return sum.toFixed(2);
    }

    $(document).on('click' , '.btn-add' , function () {
        let trCount = $('#invoice_details').find('tr.cloning_row').length;
        let numIncrem = trCount > 0 ? parseInt($('#invoice_details').find('tr.cloning_row:last').attr('id')) + 1 : 0;
        $('#invoice_details').find('tbody').append('<tr class="cloning_row" id="numIncrem">\n' +
            '\t\t\t\t\t<td><button type="button" class="btn btn-danger btn-sm delegate-btn"><i class="fa fa-minus" </td>\n' +
            '\t\t\t\t\t<td><input type="text" name="product_name[]"\n' +
            '\t\t\t\t\t\t\t\t\t\tclass="form-control product_name" id="product_name"></td>\n' +
            '\t\t\t\t\t<td>\n' +
            '\t\t\t\t\t\t<select name="material[]" class="form-control material" id="material">\n' +
            '\t\t\t\t\t\t\t<option ></option>\n' +
            '\t\t\t\t\t\t\t<option>material 1</option>\n' +
            '\t\t\t\t\t\t\t<option>material 2</option>\n' +
            '\t\t\t\t\t\t\t<option>material 3</option>\n' +
            '\t\t\t\t\t\t\t</select>\n' +
            '\t\t\t\t\t\t</td>\n' +
            '\t\t\t\t\t<td><input type="number" name="unit_price[]"\n' +
            '\t\t\t\t\t\t\t\t\t\tclass="form-control unit_price" id="unit_price"></td>\n' +
            '\t\t\t\t\t<td><input type="number" step="0.1" name="quantity[]"\n' +
            '\t\t\t\t\t\t\t\t\t\t class="form-control quantity" id="quantity"></td>\n' +
            '\t\t\t\t\t<td><input type="number" step="0.1" name="partial_price[]"\n' +
            '\t\t\t\t\t\t\t\t\t\t class="form-control partial_price" id="partial_price" readonly value="0"></td>\n' +
            '\t\t\t\t\t<tr>')
    });

$(document).on('click' , '.delegate-btn' , function (e) {
    e.preventDefault();
    $(this).parent().parent().remove();
    $('.sub_total').val(sum_total('.partial_price'));
})





});