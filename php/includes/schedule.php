<?php
$create = new \Kendo\Data\DataSourceTransportCreate();
$create->url('https://demos.telerik.com/kendo-ui/service/meetings/create');
$create->dataType('jsonp');

$read = new \Kendo\Data\DataSourceTransportRead();
$read->url('https://demos.telerik.com/kendo-ui/service/meetings');
$read->dataType('jsonp');

$update = new \Kendo\Data\DataSourceTransportUpdate();
$update->url('https://demos.telerik.com/kendo-ui/service/meetings/update');
$update->dataType('jsonp');

$destroy = new \Kendo\Data\DataSourceTransportDestroy();
$destroy->url('https://demos.telerik.com/kendo-ui/service/meetings/destroy');
$destroy->dataType('jsonp');

$transport = new \Kendo\Data\DataSourceTransport();
$transport->create($create);
$transport->read($read);
$transport->update($update);
$transport->destroy($destroy);
$transport->parameterMap('function(options, operation) {
            if (operation !== "read" && options.models) {
                return {models: kendo.stringify(options.models)};
            }
        }');

$model = new \Kendo\Data\DataSourceSchemaModel();

$meetingIDField = new \Kendo\Data\DataSourceSchemaModelField('meetingID');
$meetingIDField->type('number');
$meetingIDField->from('MeetingID');

$titleField = new \Kendo\Data\DataSourceSchemaModelField('title');
$titleField->from('Title');
$titleField->defaultValue('No title');
$titleField->type('string');
$titleField->validation(array('required' => true));

$startField = new \Kendo\Data\DataSourceSchemaModelField('start');
$startField->type('date');
$startField->from('Start');

$startTimezoneField = new \Kendo\Data\DataSourceSchemaModelField('startTimezone');
$startTimezoneField->from('StartTimezone');

$endField = new \Kendo\Data\DataSourceSchemaModelField('end');
$endField->type('date');
$endField->from('End');

$endTimezoneField = new \Kendo\Data\DataSourceSchemaModelField('endTimezone');
$endTimezoneField->from('EndTimezone');

$isAllDayField = new \Kendo\Data\DataSourceSchemaModelField('isAllDay');
$isAllDayField->type('boolean');
$isAllDayField->from('IsAllDay');

$descriptionField = new \Kendo\Data\DataSourceSchemaModelField('description');
$descriptionField->type('string');
$descriptionField->from('Description');

$recurrenceIdField = new \Kendo\Data\DataSourceSchemaModelField('recurrenceId');
$recurrenceIdField->from('RecurrenceID');

$recurrenceRuleField = new \Kendo\Data\DataSourceSchemaModelField('recurrenceRule');
$recurrenceRuleField->from('RecurrenceRule');

$recurrenceExceptionField = new \Kendo\Data\DataSourceSchemaModelField('recurrenceException');
$recurrenceExceptionField->from('RecurrenceException');

$roomIdField = new \Kendo\Data\DataSourceSchemaModelField('roomId');
$roomIdField->from('RoomID')
            ->nullable(true);

$atendeesField = new \Kendo\Data\DataSourceSchemaModelField('atendees');
$atendeesField->from('Atendees');
$atendeesField->nullable(true);

$model->id('meetingID');
$model->addField($meetingIDField);
$model->addField($titleField);
$model->addField($startField);
$model->addField($endField);
$model->addField($startTimezoneField);
$model->addField($endTimezoneField);
$model->addField($descriptionField);
$model->addField($recurrenceIdField);
$model->addField($recurrenceRuleField);
$model->addField($recurrenceExceptionField);
$model->addField($roomIdField);
$model->addField($isAllDayField);

$schema = new \Kendo\Data\DataSourceSchema();
$schema->model($model);

$dataSource = new \Kendo\Data\DataSource();
$dataSource->transport($transport);
$dataSource->schema($schema);
$dataSource->batch(true);

$schedule = new \Kendo\UI\Scheduler('schedule');
$schedule->timezone("Etc/UTC");
$schedule->date(new DateTime('2013/6/13'));
$schedule->editable(false);
$schedule->startTime(new DateTime("2013/6/13 07:00 AM"));
$schedule->endTime(new DateTime("2013/6/13 08:00 PM"));
$schedule->addView('day', 'week', 'month');
$schedule->dataSource($dataSource);
$schedule->attr('class','ra-section');


echo $schedule->render();
?>