<script>
    $(document).ready(function() {

        function checkBase() {
            $('.checkInput').each(function() {
                let model = $(this).attr('model');
                let checked = true;
                $('.baseCheck_' + model).each(function() {
                    if (!$(this).is(':checked')) {
                        checked = false;
                    }
                });
                $('.baseCheckbox').each(function() {
                    if ($(this).attr('model') == model) {
                        $(this).prop('checked', checked);
                    }
                });
            });
        }
        window.onload = checkBase;
    });

    $('.baseCheckbox').click(function() {
        let model = $(this).attr('model');
        console.log(model);
        if ($(this).is(':checked')) {
            $('.baseCheck_' + model).prop('checked', true);
        } else {
            $('.baseCheck_' + model).prop('checked', false);
        }
    });

    let checked;
    $('.checkInput').click(function() {
        let model = $(this).attr('model');
        checked = true;
        $('.baseCheck_' + model).each(function() {
            if (!$(this).is(':checked')) {
                checked = false;
            }
        });
        $('.baseCheckbox').each(function() {
            if ($(this).attr('model') == model) {
                $(this).prop('checked', checked);
            }
        });
    });
</script>
