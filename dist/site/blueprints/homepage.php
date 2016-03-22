<?php if(!defined('KIRBY')) exit ?>

title: Homepage
icon: home

pages: false
files: false

deletable: false

fields:
    top_categories:
        label: Featured categories
        type: multiselect
        help: Select the categories that you wish to be displayed at the *top* of the homepage.
        options: query
        query:
            page: shop
            fetch: children
            template: category
    bottom_categories:
        label: Categories
        type: multiselect
        help: Select the categories that you wish to be displayed at the *bottom* of the homepage.
        options: query
        query:
            page: shop
            fetch: children
            template: category
    tags:
        label: Tags
        type: tags
