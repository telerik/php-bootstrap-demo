<section id="faq" class="well">
    <h2 class="ra-well-title"><abbr title="Frequently Asked Questions">FAQ</abbr></h2>

    <?php
    $panelbar = new \Kendo\UI\PanelBar('panelbar');

    $whatIsKendoUI = new \Kendo\UI\PanelBarItem();
    $whatIsKendoUI->text("What is Kendo UI?");
    $whatIsKendoUI->expanded(true);
    $whatIsKendoUI->startContent();
    ?>
    <div>
        <p>Kendo UI is a HTML5, jQuery-based framework for building modern HTML apps. Kendo UI combines the best of emerging HTML5, CSS3, and JavaScript technologies with robust, cross-browser techniques to deliver a framework that is both powerfully rich and broadly compatible with older browsers.</p>
        <p>Kendo UI combines everything that a developer needs to build a rich JavaScript app, eliminating the traditional challenge of manually researching and combining all of the needed plug-ins, frameworks, and libraries needed to build apps. Kendo UI includes rich UI controls for desktop, mobile and data vizualization, a JavaScript DataSource, fast Templates, cross-device Drag and Drop API, Globalization, Validation and MVVM framework extensions, and more.</p>
        <p><a href="http://www.telerik.com/download/kendo-ui-complete">Download Kendo UI</a> and experience the difference today</p>
    </div>
    <?php
    $whatIsKendoUI->endContent();

    $whyShouldUseKendoUI = new \Kendo\UI\PanelBarItem();
    $whyShouldUseKendoUI->text("Who should use Kendo UI?");
    $whyShouldUseKendoUI->startContent();
    ?>
    <div>
        <p>Kendo UI is for all HTML developers. Kendo UI can be used with (or without) any server-side technology, making it the perfect front-end for every modern, browser-based HTML app. Kendo UI only requires jQuery. After that, everything that's needed is included.</p>
    </div>
    <?php
    $whyShouldUseKendoUI->endContent();

    $whatAreKendoUIWidgets = new \Kendo\UI\PanelBarItem();
    $whatAreKendoUIWidgets->text("What are Kendo UI widgets?");
    $whatAreKendoUIWidgets->startContent();
    ?>
    <div>
        <p>Kendo UI widgets are part of the Kendo UI Framework. Kendo UI widgets are grouped into three collections:</p>
        <ul>
            <li>Kendo UI Web for touch-enabled desktop development</li>
            <li>Kendo UI DataViz for desktop and mobile data vizualizations</li>
            <li>Kendo UI Mobile for mobile app development, including PhoneGap deployment</li>
        </ul>
        <p>All widgets complement the tooling you need for modern HTML5 and JavaScript development.<br /> <br /> The Kendo UI Framework provides more than UI, and in the future Kendo UI will offer additional tools to modern HTML developers.</p>
    </div>
    <?php
    $whatAreKendoUIWidgets->endContent();

    $howDoYouUseKendoUI = new \Kendo\UI\PanelBarItem();
    $howDoYouUseKendoUI->text("How do you use Kendo UI?");
    $howDoYouUseKendoUI->startContent();
    ?>
    <div>
        <p>Kendo UI is a pure JavaScript framework, so using Kendo UI is as simple as referencing JavaScript and CSS resources on your page. Once Kendo UI is configured on your page, the rich API gives you everything you need to initialize and configure an application.</p>
        <p>To learn more about using and installing Kendo UI, visit the Kendo UI&nbsp;<a href="http://demos.telerik.com/kendo-ui">online demos</a>.</p>
    </div>
    <?php
    $howDoYouUseKendoUI->endContent();

    $panelbar->addItem($whatIsKendoUI);
    $panelbar->addItem($whyShouldUseKendoUI);
    $panelbar->addItem($whatAreKendoUIWidgets);
    $panelbar->addItem($howDoYouUseKendoUI);
    $panelbar->attr('class','ra-well-overlay');
    
    echo $panelbar->render();
    ?>
</section>