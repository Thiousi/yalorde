<?php if(!defined('KIRBY')) exit ?>

title: Product

pages: false
files:
    sortable: true
    type: image

fields:
    title:
        label: Product title
        type: text
        width: 3/4
    sku:
        label: Style/SKU
        type: text
        help: Unique product identifier
        width: 1/4
    price:
        label: Price
        type: text
        validate: num
        width: 1/4
        help: Numbers only
        required: true
    saleprice:
        label: Sale price
        type: text
        validate: num
        width: 1/4
    bulkdiscount:
        label: Bulk discount
        type: toggle
        text: yes/no
        width: 1/2
        help: Offer bulk discount on this product?
    featured_image:
        label: Featured image
        help: Select the image you would like to be displayed as the main image.
        type: selector
        mode: single
        types:
            - image
    tags:
        label: Tags
        type: tags
    relatedproducts:
        label: Related products
        type: structure
        entry: >
            {{product}}
        fields:
            product:
                label: Related product
                type: select
                options: query
                query:
                    page: shop
                    fetch: pages
                    template: product
