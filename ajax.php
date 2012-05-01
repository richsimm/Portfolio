<?php

    $project = isset($_GET['project']) ? $_GET['project'] : null;

    if(!$project) {
        echo 'Woops!';
        die;
    }

    require_once('__project_config.php');
    $data = isset($project_config[$project]) ? $project_config[$project] : null;

    if(!$data) {
        echo 'Woops!';
        die;
    }

    include('__article.php');
?>