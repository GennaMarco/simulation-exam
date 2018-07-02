$(document).ready(function () {
    initDatePicker();

    var lengthDates = $('.activity-dates-list input[data-role="activity-date"]').length - 1;

    $(document).on('click', 'a[data-role="add-activity-date"]', function (e) {
        
        lengthDates++;

        var dateNewtr = '<tr>' +
                            '<td class="text-center">' +
                                '<input class="form-control" name="activityDates[]" type="text" data-role="activity-date" data-input-type="date">' +
                            '</td>' +
                        '</tr>';

        $(this).closest("tr").before(dateNewtr);
        initDatePicker();
    });

    $(document).on('click', 'a[data-role="delete-activity-date"]', function (e) {
        lengthDates--;

        $(this).closest("tr").remove();
    });

    $(document).on('click', 'button[type="submit"]', function (e) {
        var inputs = $("input");

        for (var i = 0; i < inputs.length; i++) {

            if (!inputs[i].value) {
                e.preventDefault();
                alert("Attenzione! campi vuoti");
                break;
            }
        }
    });

    $(document).on('click', 'a[data-role="delete-link"]', function (e) {
        return confirm("Sei sicuro di effettuare la cancellazione?");
    });

    // BOOTSRAP DATE-PICKER
    function initDatePicker(){
        $('input[data-input-type="date"]').datepicker({
            format: "dd/mm/yyyy",
            todayBtn: true,
            language: "it",
            autoclose: true,
            orientation: "bottom auto",
            todayHighlight: true
        });
    }
});
