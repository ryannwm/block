import './bootstrap';
import 'basecoat-css/all';


$(docutment).ready(function(){
    var $userTypeInput = $('input[name="userType"]');
    var $trigger = $('#select-userType-trigger span');

    $('#select-user-type-listbox[role="option"]').on('click', function(){
        var value = $(this).data('value');
        var text = $(this).text();

        $userTypeInput.val(value);
        $trigger.text(text);
    })
})