<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <title><?php $this->titleArchive(array(
            'post' => _t('%s'),
            'page' => _t('%s'),
        ), '', ' - '); ?><?php $this->option->title(); ?></title>
    <link rel="stylesheet"
          href="<?php $this->option->themeUrl("dynamic_index.css?version=1.3&time=2020.07.21.18") ?>"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <?php $this->header(); ?>
</head>
<body>
<div id="process-container"></div>
<div class="container" id="pjax-container">
    <div class="nav">
        <a href="<?php $this->option->siteUrl(); ?>"><?php $this->options->title() ?> &nbsp;&raquo;</a>
    </div>
