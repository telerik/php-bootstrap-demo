<div class="form-horizontal form-widgets col-sm-6">
    <div class="form-group">
        <label class="control-label col-sm-4" for="name">Name</label>
        <div class="col-sm-8 col-md-6">
            <input class="k-textbox" id="name" value="Johnatan Dodsworth" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="birthday">Birthday</label>
        <div class="col-sm-8 col-md-6">
            <?php
                $datePicker = new \Kendo\UI\DatePicker('datepicker');
                $datePicker->value(new DateTime('10/09/1979', new DateTimeZone('UTC')));
                $datePicker->attr('style', 'width: 100%');
                $datePicker->attr('title', 'datepicker');

                echo $datePicker->render();
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="gender">Gender</label>
        <div class="col-sm-8 col-md-6">
            <?php
                $gender = new \Kendo\UI\DropDownList('gender');

                $gender->value(1);
                $gender->dataTextField('text');
                $gender->dataValueField('value');
                $gender->dataSource(array(
                        array('text' => 'Male', 'value' => 1),
                        array('text' => 'Female', 'value' => 2)
                ));
                $gender->attr('style', 'width: 100%');

                echo $gender->render();
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="language">Language</label>
        <div class="col-sm-8 col-md-6">
            <?php
                $language = new \Kendo\UI\DropDownList('language');

                $language->value(1);
                $language->dataTextField('text');
                $language->dataValueField('value');
                $language->dataSource(array(
                        array('text' => 'English', 'value' => 1),
                        array('text' => 'German', 'value' => 2)
                ));
                $language->attr('style', 'width: 100%');

                echo $language->render();
            ?>
        </div>
    </div>
</div>