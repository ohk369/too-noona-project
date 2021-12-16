$(function() {
    $('#back_button').on('click', function() {
        if (window.requestUrl != undefined) {
            if (window.requestUrl.indexOf('create') != -1 || window.requestUrl.indexOf('edit') != -1 || window.requestUrl.indexOf('show') !== -1) {
                var is_null = 0;
                var elements = ['input[type=time]', 'input[type=date]', 'input[type=text]', 'input[type=password]', 'option:selected', 'input[type=checkbox]:checked', 'input[type=radio]:checked', 'textarea'];
                $(elements).each(function (count, element) {
                    if ($('table').find(element).length == 0) {
                        return true;
                    } else {
                        for (var i=0; i<$('table').find(element).length; i++) {
                            if (window.requestUrl.search('edit') !== -1 || window.requestUrl.search('create') !== -1 || window.requestUrl.search('show') !== -1) {
                                if ($(this).eq(i).val() != $(this).eq(i).data('form')) {
                                    console.log(element);
                                    if (element == 'textarea' && $(element).eq(i).text() != $(element).eq(i).data('form')) {
                                        is_null = 1;
                                    } else if ($(element).eq(i).val() != $(element).eq(i).data('form')) {
                                        is_null = 1;
                                    }
                                }
                            }
                        }
                    }
                });
                if (is_null == 1) {
                    $('#modal_confirm').modal();
                } else {
                    window.location.href = window.previousRoute;
                }
            }
        }
    });
});