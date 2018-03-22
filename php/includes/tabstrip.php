<?php
    $tabstrip = new \Kendo\UI\TabStrip('tabstrip');

    $revenue = new \Kendo\UI\TabStripItem();
    $revenue->text("<span class='km-icon revenue'></span><span class='hidden-xs'>Revenue</span>");
    $revenue->selected(true);
    $revenue->startContent();
?>
        <div><?php include 'charts/revenueChart.php';?></div>
<?php
    $revenue->endContent();

    $salesDay = new \Kendo\UI\TabStripItem();
    $salesDay->text("<span class='km-icon spd'></span><span class='hidden-xs'>Sales / day</span>");
    $salesDay->startContent();
?>
        <div><?php include 'charts/salesPerDayChart.php';?></div>
<?php
    $salesDay->endContent();

    $salesRegion = new \Kendo\UI\TabStripItem();
    $salesRegion->text("<span class='km-icon spr'></span><span class='hidden-xs'>Sales / region</span>");
    $salesRegion->startContent();
?>
        <div><?php include 'charts/salesPerRegionChart.php';?></div>
<?php
    $salesRegion->endContent();

    $marketShare = new \Kendo\UI\TabStripItem();
    $marketShare->text("<span class='km-icon share'></span><span class='hidden-xs'>Market share</span>");
    $marketShare->startContent();
?>
    <div>
        <div class="market-donut"><?php include 'charts/marketAliceMuttonChart.php';?></div>
        <div class="market-donut"><?php include 'charts/marketGravadLaxChart.php';?></div>
        <div class="market-donut"><?php include 'charts/marketInlagdSillChart.php';?></div>
        <div class="market-donut"><?php include 'charts/marketSpegesildChart.php';?></div>
    </div>
<?php
    $marketShare->endContent();

    $tabstrip->addItem($revenue);
    $tabstrip->addItem($salesDay);
    $tabstrip->addItem($salesRegion);
    $tabstrip->addItem($marketShare);

    $animation = new \Kendo\UI\TabStripAnimation();
    $openAnimation = new \Kendo\UI\TabStripAnimationOpen();
    $openAnimation->effects("fadeIn");
    $animation->open($openAnimation);

    $tabstrip->animation($animation);

    echo $tabstrip->render();
?>
<script>
    function resizeTabStripContent() {
        kendo.resize("#tabstrip");
    }

    $(window).resize(resizeTabStripContent);
</script>