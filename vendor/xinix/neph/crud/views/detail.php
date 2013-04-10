<?php
use \Neph\Core\URL;
use \Neph\Core\String;
use \Neph\Core\Request;
?>

<div class="row-fluid">
    <?php echo $crud->breadcrumb(array(
        String::humanize(Request::instance()->uri->segments[1]) => '/'.Request::instance()->uri->segments[1],
        'Detail' => Request::instance()->uri->pathinfo,
    )) ?>
</div>

<?php echo $crud->detail($publish) ?>
