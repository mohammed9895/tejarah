<?php

return [
    /*
        |--------------------------------------------------------------------------
        | الحقول
        |--------------------------------------------------------------------------
    */
    'fields.root' => 'الجذر',
    'fields.name' => 'الاسم',
    'fields.title' => 'العنوان',
    'fields.slug' => 'المعرف',
    'fields.url' => 'الرابط',
    'fields.created_by' => 'تم الإنشاء بواسطة',
    'fields.updated_by' => 'تم التحديث بواسطة',
    'fields.created_at' => 'تاريخ الإنشاء',
    'fields.updated_at' => 'تاريخ التحديث',
    'fields.published_at' => 'آخر نشر في',
    'fields.publish_until' => 'نشر حتى',

    'fields.seo.title' => 'عنوان SEO',
    'fields.seo.description' => 'وصف الـ Meta',
    'fields.seo.keywords' => 'الكلمات الدلالية لـ Meta',
    'fields.seo.feature_image' => 'صورة الميزة',
    'fields.seo.author' => 'المؤلف',

    'fields.cms_page.content' => 'المحتوى',
    'fields.cms_page.status' => 'الحالة',
    'fields.cms_page.author' => 'المؤلف',
    'fields.cms_page.is_live' => 'مباشر؟',
    'fields.cms_page.parent' => 'الأب',
    'fields.cms_page.template' => 'القالب',

    'fields.cms_page.block-template.content' => 'المحتوى',
    'fields.cms_page.block-template.level' => 'المستوى',
    'fields.cms_page.block-template.image' => 'الصورة',
    'fields.cms_page.block-template.alt' => 'نص بديل',

    'fields.cms_page.resource-type-template.page' => 'صفحة',
    'fields.cms_page.resource-type-template.view' => 'عرض',

    'fields.cms_page_navigation.title' => 'العنوان',
    'fields.cms_page_navigation.category' => 'الفئة',
    'fields.cms_page_navigation.parent' => 'الأب',
    'fields.cms_page_navigation.type' => 'النوع',
    'fields.cms_page_navigation.page' => 'الصفحة',
    'fields.cms_page_navigation.url' => 'الرابط',
    'fields.cms_page_navigation.target' => 'الهدف',

    'fields.cms_tag.name' => 'الاسم',
    'fields.cms_tag.title' => 'العنوان',
    'fields.cms_tag.slug' => 'المعرف',
    'fields.cms_tag.category_type' => 'نوع الفئة',
    'fields.cms_tag.page_counts' => 'عدد الصفحات',
    'fields.cms_tag.published_page_counts' => 'عدد الصفحات المنشورة',

    'fields.audits.user_name' => 'المستخدم',
    'fields.audits.event' => 'الحدث',
    'fields.audits.attributes' => 'الخصائص',
    'fields.audits.new' => 'جديد',
    'fields.audits.old' => 'قديم',
    'fields.audits.value_changes.key.label' => 'الخاصية',
    'fields.audits.value_changes.value.label' => 'القيمة',

    /*
        |--------------------------------------------------------------------------
        | التسميات
        |--------------------------------------------------------------------------
    */
    'labels.preview' => 'معاينة',
    'labels.published' => 'منشور',

    /*
        |--------------------------------------------------------------------------
        | الإجراءات
        |--------------------------------------------------------------------------
    */
    'action.save_and_publish' => 'حفظ ونشر',
    'action.unpublish' => 'إلغاء النشر',
    'action.schedule_published' => 'جدولة النشر',
    'action.preview' => 'معاينة',
    'action.view_published_page' => 'مشاهدة الصفحة المنشورة',
    'action.delete.multiple_page.index_content_type_warn' => 'لا يمكن حذف الصفحات التالية',
    'action.publish.multiple.label' => 'نشر المحدد',
    'action.publish.multiple.modal.heading' => 'نشر المحدد :label',
    'action.publish.multiple.modal.actions.publish.label' => 'نشر',
    'action.publish.multiple.messages.published' => 'تم النشر',
    'action.unpublish.multiple.label' => 'إلغاء نشر المحدد',
    'action.unpublish.multiple.modal.heading' => 'إلغاء نشر المحدد :label',
    'action.unpublish.multiple.modal.actions.unpublish.label' => 'إلغاء النشر',
    'action.unpublish.multiple.messages.unpublished' => 'غير منشور',
    'action.rollback' => 'التراجع',
    'action.viewDetail' => 'التفاصيل',

    'section.seo' => 'SEO',

    /*
        |--------------------------------------------------------------------------
        | التنقل
        |--------------------------------------------------------------------------
    */
    'navigation.group.cms' => 'نظام إدارة المحتوى',
    'navigation.group.data_type' => 'أنواع البيانات',

    /*
        |--------------------------------------------------------------------------
        | الألسنة
        |--------------------------------------------------------------------------
    */
    'tab.general' => 'عام',
    'tab.seo' => 'SEO',
    'tab.seo.general' => 'عام',
    'tab.tags' => 'الوسوم',

    /*
        |--------------------------------------------------------------------------
        | الكتل
        |--------------------------------------------------------------------------
    */
    'blocks.heading' => 'العنوان',
    'blocks.paragraph' => 'الفقرة',
    'blocks.image' => 'الصورة',

    /*
        |--------------------------------------------------------------------------
        | الرسائل
        |--------------------------------------------------------------------------
    */
    'messages.save_and_published' => 'تم الحفظ والنشر',
    'messages.unpublished' => 'غير منشور',
    'messages.schedule_published' => 'مجدول',
    'messages.not_created' => 'لم يتم الإنشاء',
    'messages.rolled_back' => 'تم التراجع',
    'messages.unchanged' => 'بدون تغيير',

    /*
        |--------------------------------------------------------------------------
        | صيغ العرض
        |--------------------------------------------------------------------------
    */
    'display-formats.published_at' => 'd. M Y',
    'display-formats.publish_until' => 'd. M Y H:i:s',

];
