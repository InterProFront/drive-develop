(function( $ ) {
    $(function(){

        'use strict';

        var Adminka = document.adminkaInterpro;
        Adminka.init({});

        var anySave = function anySave(){

            var $this = $(this);

            var block_name    = $this.data('block');
            var group_name    = $this.data('group');
            var entity_name   = $this.data('entity');
            var description   = $this.data('descr');//Описание элемента группы для сообщения

            var messagecontainer;
            var item_id;

            var dataobj = {};
            dataobj['block'] = block_name;
            dataobj['entity'] = entity_name;

            dataobj['stringfields'] = {};
            dataobj['textfields'] = {};
            dataobj['bools'] = {};
            dataobj['pdatetimes'] = {};
            dataobj['numbs'] = {};
            dataobj['images'] = {};

            var add_fields = function(selector, image_selector, obj){
                $(selector).each(function(){
                    var $this = $(this);

                    var field_type = $this.data('field-type');
                    var field_name = $this.data('field-name');

                    if (field_type == 'bool') {
                        obj['bools'][field_name] = $this.is(':checked');

                    } else if (field_type == 'text') {
                        obj['textfields'][field_name] = $this.val();

                    } else if (field_type == 'string') {
                        obj['stringfields'][field_name] = $this.val();

                    } else if (field_type == 'numb') {
                        obj['numbs'][field_name] = $this.val();

                    } else if (field_type == 'datetime') {

                        //obj['datetimes'][field_name] = $this.val();dddd, MMMM DD YYYY, h:mm:ss
                        obj['pdatetimes'][field_name] = $this.parent().data('DateTimePicker').date().format('YYYY-DD-MMTHH:mm:ss+06:00');

                    } else if (field_type == 'image') {
                        obj['images'][field_name] = {
                            original_link: $('.original_link'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            primary_link: $('.primary_link'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            secondary_link: $('.secondary_link'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            preview_link: $('.preview_link'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            icon_link: $('.icon_link'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            prefix: $('.prefix'+image_selector+'[data-field-name="'+field_name+'"]').val(),
                            alt:          $('.alt-text'+image_selector+'[data-field-name="'+field_name+'"]').val()
                        };
                    } else {

                        obj['stringfields'][field_name] = $this.val();//Если тип не указан, будем считать что это строка
                    }
                });
            };

            var add_pre_fields = function(selector, obj){

                $(selector).each(function(){

                    var $this = $(this);
                    var field_name = $this.data('field-name');
                    var field_type = $this.data('field-type');

                    if (field_type == 'bool') {
                        obj[field_name] = $this.is(':checked');
                    }else{
                        obj[field_name] = $this.val();
                    }
                });
            };

            if(entity_name == 'block') {

                add_fields(
                    '.block_field[data-block="'+block_name+'"]',
                    '[data-block="'+block_name+'"]',
                    dataobj);

                add_pre_fields('.block_pre_field[data-block="'+block_name+'"]', dataobj);

                //Информатор:
                messagecontainer = $('.message-container');

                description = 'Блок ' + description;
            } else if(entity_name == 'groupitem') {

                item_id = $this.data('item-id');

                dataobj['group_id'] = item_id;

                add_fields(
                    '.group_field[data-block="'+block_name+'"][data-item-id='+item_id+']',
                    '[data-block="'+block_name+'"][data-item-id="'+item_id+'"]',
                    dataobj);

                add_pre_fields('.group_pre_field[data-block="'+block_name+'"][data-item-id='+item_id+']', dataobj);

                //Информатор:
                messagecontainer = $('.message-container');

                description = 'Элемент группы блока ' + description;
            }

            //Сброс информатора:
            messagecontainer.removeClass('success');
            messagecontainer.removeClass('alert');
            messagecontainer.text('');
            //-------------------------------------------

            $(this).adminka(
                'savecontent',
                {
                    type: 'POST',
                    url: '/adm/update/'+entity_name,
                    data: dataobj
                },
                {
                    done_callback: function(data){
                        if (data.status === 'OK') {
                            messagecontainer.addClass('success');
                            messagecontainer.text(description + ' сохранен.');
                        }else{
                            messagecontainer.addClass('alert');
                            messagecontainer.text(description + ' НЕ сохранен. Статус ошибки: ' + data.status);
                        }
                    },
                    fail_callback: function(data){
                        messagecontainer.addClass('alert');
                        messagecontainer.append('Что-то пошло не по плану: <br>' + JSON.stringify(data));
                    },
                    always_callback: function(data){
                        //Убрать индикатор загрузки, если появится
                    }
                }
            );
        };


        $.fn.anysave = function (button_selector){

            this.on('click', button_selector, function(){
                    anySave.call(this);
                });

            return this.first();
        };

        $(document).anysave('.any_save');

    });

})(jQuery);