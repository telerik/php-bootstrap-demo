
<?php
$read = new \Kendo\Data\DataSourceTransportRead();
$read->url('https://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders');

$transport = new \Kendo\Data\DataSourceTransport();
$transport->read($read);

$dataSource = new \Kendo\Data\DataSource();
$dataSource->type("odata");
$dataSource->transport($transport);
$dataSource->pageSize(10);
$dataSource->serverFiltering(true);
$dataSource->serverSorting(true);
$dataSource->serverPaging(true);

$grid = new \Kendo\UI\Grid('orders');

$orderID = new \Kendo\UI\GridColumn();
$orderID->field('OrderID');
$orderID->width("70px");
$orderID->title('Order ID');

$shipCountry = new \Kendo\UI\GridColumn();
$shipCountry->field('ShipCountry');
$shipCountry->width("20%");
$shipCountry->title('Ship Country');

$shipAddress = new \Kendo\UI\GridColumn();
$shipAddress->field('ShipAddress');
$shipAddress->title('Ship Address');

$grid->addColumn($orderID);
$grid->addColumn($shipCountry);
$grid->addColumn($shipAddress);
$grid->dataSource($dataSource);
$grid->sortable(true);
$grid->scrollable(false);
$grid->groupable(true);
$grid->pageable(true);
$grid->attr('class','ra-section');

echo $grid->render();
?>