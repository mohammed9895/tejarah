<?php

return [
    /*
        |--------------------------------------------------------------------------
        | Fields
        |--------------------------------------------------------------------------
    */
    'fields.root' => 'Root',
    'fields.name' => 'Name',
    'fields.title' => 'Title',
    'fields.slug' => 'Slug',
    'fields.url' => 'URL',
    'fields.created_by' => 'Created by',
    'fields.updated_by' => 'Updated by',
    'fields.created_at' => 'Created at',
    'fields.updated_at' => 'Updated at',
    'fields.published_at' => 'Last published at',
    'fields.publish_until' => 'Publish until',

    'fields.seo.title' => 'SEO Title',
    'fields.seo.description' => 'Meta description',
    'fields.seo.keywords' => 'Meta keywords',
    'fields.seo.feature_image' => 'Feature Image',
    'fields.seo.author' => 'Author',

    'fields.cms_page.content' => 'Content',
    'fields.cms_page.status' => 'Status',
    'fields.cms_page.author' => 'Author',
    'fields.cms_page.is_live' => 'Live?',
    'fields.cms_page.parent' => 'Parent',
    'fields.cms_page.template' => 'Template',

    'fields.cms_page.block-template.content' => 'Content',
    'fields.cms_page.block-template.level' => 'Level',
    'fields.cms_page.block-template.image' => 'Image',
    'fields.cms_page.block-template.alt' => 'Alt text',

    'fields.cms_page.resource-type-template.page' => 'page',
    'fields.cms_page.resource-type-template.view' => 'View',

    'fields.cms_page_navigation.title' => 'Title',
    'fields.cms_page_navigation.category' => 'Category',
    'fields.cms_page_navigation.parent' => 'Parent',
    'fields.cms_page_navigation.type' => 'Type',
    'fields.cms_page_navigation.page' => 'Page',
    'fields.cms_page_navigation.url' => 'URL',
    'fields.cms_page_navigation.target' => 'Target',

    'fields.cms_tag.name' => 'Name',
    'fields.cms_tag.title' => 'Title',
    'fields.cms_tag.slug' => 'Slug',
    'fields.cms_tag.category_type' => 'Category type',
    'fields.cms_tag.page_counts' => 'Page count',
    'fields.cms_tag.published_page_counts' => 'Published Page count',

    'fields.audits.user_name' => 'User',
    'fields.audits.event' => 'Event',
    'fields.audits.attributes' => 'Attributes',
    'fields.audits.new' => 'New',
    'fields.audits.old' => 'Old',
    'fields.audits.value_changes.key.label' => 'Attribute',
    'fields.audits.value_changes.value.label' => 'Value',

    /*
        |--------------------------------------------------------------------------
        | Labels
        |--------------------------------------------------------------------------
    */
    'labels.preview' => 'Preview',
    'labels.published' => 'Published',

    /*
        |--------------------------------------------------------------------------
        | Actions
        |--------------------------------------------------------------------------
    */
    'action.save_and_publish' => 'Save and Publish',
    'action.unpublish' => 'Unpublish',
    'action.schedule_published' => 'Schedule publish',
    'action.preview' => 'Preview',
    'action.view_published_page' => 'View Published',
    'action.delete.multiple_page.index_content_type_warn' => 'Can not delete following page(s)',
    'action.publish.multiple.label' => 'Publish selected',
    'action.publish.multiple.modal.heading' => 'Publish selected :label',
    'action.publish.multiple.modal.actions.publish.label' => 'Publish',
    'action.publish.multiple.messages.published' => 'Published',
    'action.unpublish.multiple.label' => 'Unpublish selected',
    'action.unpublish.multiple.modal.heading' => 'Unpublish selected :label',
    'action.unpublish.multiple.modal.actions.unpublish.label' => 'Unpublish',
    'action.unpublish.multiple.messages.unpublished' => 'Unpublished',
    'action.rollback' => 'Rollback',
    'action.viewDetail' => 'Detail',

    'section.seo' => 'SEO',

    /*
        |--------------------------------------------------------------------------
        | Navigation
        |--------------------------------------------------------------------------
    */
    'navigation.group.cms' => 'CMS',
    'navigation.group.data_type' => 'Data Types',

    /*
        |--------------------------------------------------------------------------
        | Tabs
        |--------------------------------------------------------------------------
    */
    'tab.general' => 'General',
    'tab.seo' => 'SEO',
    'tab.seo.general' => 'General',
    'tab.tags' => 'Tags',

    /*
        |--------------------------------------------------------------------------
        | Blocks
        |--------------------------------------------------------------------------
    */
    'blocks.heading' => 'Heading',
    'blocks.paragraph' => 'Paragraph',
    'blocks.image' => 'Image',

    /*
        |--------------------------------------------------------------------------
        | Messages
        |--------------------------------------------------------------------------
    */
    'messages.save_and_published' => 'Save and Published',
    'messages.unpublished' => 'Unpublished',
    'messages.schedule_published' => 'Scheduled',
    'messages.not_created' => 'Not created',
    'messages.rolled_back' => 'Rolled back',
    'messages.unchanged' => 'Unchanged',

    /*
        |--------------------------------------------------------------------------
        | Display Formats
        |--------------------------------------------------------------------------
    */
    'display-formats.published_at' => 'd. M Y',
    'display-formats.publish_until' => 'd. M Y H:i:s',

];
