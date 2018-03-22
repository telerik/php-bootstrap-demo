<div class="form-horizontal form-widgets col-sm-6">
    <div class="form-group">
        <label class="control-label col-sm-4" for="occupation">Occupation</label>
        <div class="col-sm-8 col-md-6">
            <input class="k-textbox" id="occupation" placeholder="e.g. Developer" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="skills">Skills</label>
        <div class="col-sm-8 col-md-6">
            <?php
                $skills = new \Kendo\UI\MultiSelect('skills');
                $skills->dataSource(array('C',
                                        'C++',
                                        'C#',
                                        'JavaScript',
                                        'jQuery',
                                        'Git',
                                        'Node.js',
                                        'Ruby',
                                        'Ruby on Rails',
                                        'Kendo UI',
                                        'PHP'))
                    ->placeholder('Select skills...')
                    ->value(array('C++','PHP'));

                echo $skills->render();
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="experience">Experience</label>
        <div class="col-sm-8 col-md-6">
            <?php
                $experience = new \Kendo\UI\NumericTextBox('experience');  

                $experience->format('0 years');
                $experience->value(4);
                $experience->attr('style', 'width: 100%');
                $experience->attr('title', 'experience');

                echo $experience->render();
            ?>
        </div>
    </div>
</div>