/*!
 * Convert <select> elements to Dropdown Group
 *  
 * Author: John Rocela 2012 <me@iamjamoy.com>
 */
jQuery(function($){
        $('select').each(function(i,e) {attach(i,e) });
        
        
        function attach(i, e) {
                if (!($(e).data('convert') == 'no')) {
                        $(e).hide().wrap('<div class="btn-group" id="select-group-' + i + '" />');
                        var select = $('#select-group-' + i);
                        var current = ($(e).find(':selected').text()) ? $(e).find(':selected').text(): '&nbsp;';
                        select.html('<input type="hidden" value="' + $(e).val() + '" name="' + $(e).attr('name') + '" id="' + $(e).attr('id') + '" class="' + $(e).attr('class') + '" /><a class="btn" href="javascript:;">' + current + '</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:;"><span class="caret"></span></a><ul class="dropdown-menu"></ul>');
                        $(e).find('option').each(function(o,q) {
                                select.find('.dropdown-menu').append('<li><a href="javascript:;" data-value="' + $(q).attr('value') + '">' + $(q).text() + '</a></li>');
                                if ($(q).attr('selected')) select.find('.dropdown-menu li:eq(' + o + ')').click();
                        });
                        select.find('.dropdown-menu a').click(function() {
                                select.find('input[type=hidden]').val($(this).data('value'));
                                select.find('.btn:eq(0)').text($(this).text());
                                var form = $(this).closest("form");
                                $(form).find('.ctools-auto-submit-click').click();
                        });
                }
        }
        
        $('body').bind('ajaxSuccess', function(data, status, xhr) {
          $('select').each(function(i,e) {
            attach(i,e)
            });
        });
});