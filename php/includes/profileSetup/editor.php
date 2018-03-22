<div class="form-horizontal form-widgets col-sm-12">
    <div class="form-group">
        <label class="control-label col-sm-2" for="bio">Short bio</label>
        <div class="col-sm-10">
            <?php
                $bio = new \Kendo\UI\Editor('bio');

                $bio->addTool(
                    "formatting",
                    "bold", "italic", "underline",
                    "strikethrough", "subscript", "superscript",
                    "justifyLeft", "justifyCenter", "justifyRight", "justifyFull",
                    "insertUnorderedList", "insertOrderedList", "indent", "outdent"
                );
                
                echo $bio->render();
            ?>
        </div>
    </div>
</div>