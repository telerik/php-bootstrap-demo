<section id="gallery" class="well">
    <h2 class="ra-well-title">Latest photo uploads</h2>

    <script id="listview-template" type="x-kendo-template">
        <li class="col-xs-6 col-md-4 col-lg-2">
            <figure>
                <img src="assets/photos/#= id #.jpg" class="img-responsive" />
                <figcaption class="hidden-xs">
                    <h4>#: title #</h4>
                    <p class="hidden-sm">
                        #: description #
                    </p>
                </figcaption>
            </figure>
        </li>
    </script>
    <?php
    $data = array(
        array("id"=>1, "title"=>"Sunrise", "description"=>"And what a great July morning it was..."),
        array("id"=>2, "title"=>"Fisherman", "description"=>"Fishing on the north shore"),
        array("id"=>3, "title"=>"Green Forest", "description"=>"Summer is everywhere"),
        array("id"=>4, "title"=>"Cactus", "description"=>"A yellow one..."),
        array("id"=>5, "title"=>"Moss", "description"=>"Nice mossy green"),
        array("id"=>6, "title"=>"Red Boat", "description"=>"In the middle of nowhere"),
        array("id"=>7, "title"=>"Country Road", "description"=>"On my way home"),
        array("id"=>8, "title"=>"Bloom", "description"=>"Cherry blossoms in full bloom"),
        array("id"=>9, "title"=>"San Francisco", "description"=>"San Francisco by sunset"),
        array("id"=>10, "title"=>"Peaks", "description"=>"Was a great holiday"),
        array("id"=>11, "title"=>"Thunderstorm", "description"=>"Midnight storm on its way"),
        array("id"=>12, "title"=>"Leafs", "description"=>"Autumn leafs on the patio")
    );
    $dataSource = new \Kendo\Data\DataSource();
    $dataSource->data($data);

    $listview = new \Kendo\UI\ListView('listview');
    $listview->dataSource($dataSource);
    $listview->templateId('listview-template');
    $listview->pageable(false);
    $listview->attr('class','ra-well-overlay row');

    echo $listview->render();
    ?>
</section>