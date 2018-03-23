    $('#booking').submit(function(){
        var errors = [];
        if($("#range_control").length) {
            errors.push('V zadanom rozsahu je produkt už rezervovaný.');

        } if(!$('#start-date').val() || !$('#end-date').val()) {
            errors.push('Vyberte prosím v kalendári prvý a posledný deň rezervácie.');

        } if(!$("input[name='meno']" ).val()) {
            errors.push('Zadajte prosím meno a priezvisko.');
        } if(!$("input[name='email']" ).val()) {
            errors.push('Zadajte prosím emailovú adresu.');
        }

        if(errors.length) {
            $("#booking-form-errors").html(errors.join('<br>'));
            return false;
        }
    })

    function convertDate(date) {
        var temp = date.split(".");
        return new Date(temp[2] + "-" + temp[1] + "-" + temp[0]);
    }
    function validateDateRange() {

        var txtStartDate = $("#start-date");
        var txtEndDate = $("#end-date");
        var startDate;
        var endDate;
        var tempDate;

        if (txtStartDate.val() == "")
            return false;

        if (txtEndDate.val() == "")
            return false;

        startDate = convertDate(txtStartDate.val());
        endDate = convertDate(txtEndDate.val());

        var i;
        for (i = 0; i < unavailableDates.length; i++) {
            var temp = unavailableDates[i].split("-");
            tempDate = new Date(temp[0] + "-" + temp[1] + "-" + temp[2]);

            // if startdate < booked date and end date > booked date return hidden input
            if (startDate < tempDate && endDate > tempDate) {
                $('<input>').attr({
                    type: 'hidden',
                    id: 'range_control',
                    name: 'range_control',
                    value: '3'
                }).appendTo('form');
                return false;
            } else {
                // if select next available dates, remove hidden input
                if($('#range_control').length)  $('#range_control').remove();
            }
        }
    }
        var options = $.extend(
            {},                                  // empty object
            $.datepicker.regional["sk"],         // fr regional
            { dateFormat: "dd.mm.yy" /*, ... */ } // your custom options
        );
        $.datepicker.setDefaults(options);


        $("#datepicker").datepicker({
            beforeShowDay: function(date) {
                var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#start-date').val());
                var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#end-date').val());

                if ($.inArray($.datepicker.formatDate('yy-mm-dd', date), unavailableDates) != -1) {
                    return [false, 'reserved'];
                }

                else if (date1 && date && (date1.getTime() == date.getTime())) {
                    return [true, 'ui-red-start', ''];
                }

                else if (date2 && date && (date2.getTime() == date.getTime())) {
                    return [true, 'ui-red-end', ''];
                }

                else if (date >= date1 && date <= date2) {
                    return [true, 'ui-state-selected-range', ''];
                }

                return [true, '', ''];
            },
            onSelect: function(dateText, inst) {
                var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#start-date').val());
                var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#end-date').val());
                if (!date1 || date2) {
                    $('#start-date').val(dateText);
                    $('#end-date').val('');
                    $(this).datepicker('option', dateText);
                } else {
                    if (convertDate(dateText) < date1) {
                        var sDate = $('#start-date').val();
                        $('#start-date').val(dateText);
                        $('#end-date').val(sDate);
                        $(this).datepicker('option', null);
                    } else {
                        $('#end-date').val(dateText);
                        return validateDateRange();
                        $(this).datepicker('option', null);
                    }
                }
            }
        });

        $("#dostupnost").datepicker({
            showButtonPanel: false,
            minDate: 0,
            beforeShowDay: function(date) {
                if ($.inArray($.datepicker.formatDate('yy-mm-dd', date), unavailableDates) != -1) {
                    return [false, 'reserved'];
                }
                return [true, '', ''];
            },
        });