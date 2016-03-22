<?php if(!defined('KIRBY')) exit ?>

title: Product Category

icon: folder
pages:
    hide: true
    template:
        - subcategory

files:
    sortable: true
    type: image

fields:
    subcategories:
        label: Subcategories
        type: subpagelist
    featured_image:
        label: Featured Image
        type: selector
        mode: single
        types:
            - image
    text:
        label: Category Description
        type: textarea
        buttons: false
    tags:
        label: Category Tags
        type: tags
