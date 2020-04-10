<?php

return [

    'company' => [
        'description'       => 'কোম্পানির নাম, ই-মেইল, ঠিকানা, ট্যাক্স নম্বর ইত্যাদি পরিবর্তন কর',
        'name'              => 'নাম',
        'email'             => 'ই-মেইল',
        'phone'             => 'ফোন',
        'address'           => 'ঠিকানা',
        'logo'              => 'লোগো',
    ],

    'localisation' => [
        'description'       => 'অর্থ বছর, সময় এলাকা, তারিখের ফর্ম্যাট এবং আরও স্থানীয়করণ নির্ধারণ কর',
        'financial_start'   => 'অর্থবছরের শুরু',
        'timezone'          => 'সময় এলাকা',
        'date' => [
            'format'        => 'তারিখ ফরম‍্যাট',
            'separator'     => 'তারিখ বিভাজক',
            'dash'          => 'ড্যাস (-)',
            'dot'           => 'বিন্দু (.)',
            'comma'         => 'কমা (,)',
            'slash'         => 'স্ল্যাস (/)',
            'space'         => 'স্পেস ( )',
        ],
        'percent' => [
            'title'         => 'শতাংশের (%) অবস্থান',
            'before'        => 'সংখ্যার পূর্বে',
            'after'         => 'সংখ্যার পর',
        ],
        'discount_location' => [
            'name'          => 'ছাড়/রেয়াতের অবস্থান',
            'item'          => 'লাইন',
            'total'         => 'মোটের জায়গায়',
            'both'          => 'লাইন এবং সর্বমোটের দুই জায়গাতেই',
        ],
    ],

    'invoice' => [
        'description'       => 'ইনভয়েসের প্রেফিক্স, সংখ্যা, শর্তাবলী, ফুটার ইত্যাদি কাস্টমাইজ কর',
        'prefix'            => 'নম্বরের প্রেফিক্স',
        'digit'             => 'নম্বরের ডিজিট',
        'next'              => 'পরবর্তী সংখ্যা',
        'logo'              => 'লোগো',
        'custom'            => 'পছন্দমতন',
        'item_name'         => 'আইটেমের নাম',
        'item'              => 'আইটেমগুলো',
        'product'           => 'পণ্যসমূহ',
        'service'           => 'সেবাসমূহ',
        'price_name'        => 'মূল্যের নাম',
        'price'             => 'মূল্য',
        'rate'              => 'হার',
        'quantity_name'     => 'পরিমাণের নাম',
        'quantity'          => 'পরিমাণ',
        'payment_terms'     => 'পেমেন্টের শর্তাবলী',
        'title'             => 'শিরোনাম',
        'subheading'        => 'উপ-শিরোনাম',
        'due_receipt'       => 'রশিদ প্রাপ্তির দিনেই বকেয়া পরিশোধের তারিখ',
        'due_days'          => 'বকেয়া  :days দিনের মধ্যে পরিশোধতব্য',
        'choose_template'   => 'ইনভয়েসের টেমপ্লেট বেছে নিন',
        'default'           => 'পূর্বনির্ধারিত',
        'classic'           => 'ধ্রুপদী',
        'modern'            => 'আধুনিক',
    ],

    'default' => [
        'description'       => 'আপনার কোম্পানির পূর্বনির্ধারিত একাউন্ট, মুদ্রা ও ভাষা',
        'list_limit'        => 'পৃষ্ঠা প্রতি ভুক্তিসংখ্যা',
        'use_gravatar'      => 'গ্রাভাতর ব্যবহার করুন',
    ],

    'email' => [
        'description'       => 'প্রেরণ প্রোটোকল এবং ই-মেইল ছাঁচ পরিবর্তন কর',
        'protocol'          => 'প্রোটোকল',
        'php'               => 'PHP মেইল',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP হোস্ট',
            'port'          => 'SMTP পোর্ট',
            'username'      => 'SMTP ব্যবহারকারি নাম',
            'password'      => 'SMTP  কূটশব্দ',
            'encryption'    => 'SMTP নিরাপত্তা',
            'none'          => 'কোনটিই নয়',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail  পাথ',
        'log'               => 'ই-মেইলগুলোর লগ তৈরি কর',

        'templates' => [
            'subject'                   => 'বিষয়',
            'body'                      => 'গর্ভাংশ',
            'tags'                      => '<strong>উপলভ্য ট্যাগ গুলোঃ</strong> :tag_list',
            'invoice_new_customer'      => 'নতুন ইনভয়েস ছাঁচ (ক্রেতাকে প্রেরিত)',
            'invoice_remind_customer'   => 'ইনভয়েস অনুস্মারক ছাঁচ (ক্রেতাকে প্রেরিত)',
            'invoice_remind_admin'      => 'ইনভয়েস অনুস্মারক ছাঁচ (প্রশাসককে প্রেরিত)',
            'invoice_recur_customer'    => 'ইনভয়েস আবর্তক ছাঁচ (ক্রেতাকে প্রেরিত)',
            'invoice_recur_admin'       => 'ইনভয়েস আবর্তক ছাঁচ (প্রশাসককে প্রেরিত)',
            'invoice_payment_customer'  => 'পেমেন্ট প্রাপ্তির ছাঁচ (ক্রেতাকে প্রেরিত)',
            'invoice_payment_admin'     => 'পেমেন্ট প্রাপ্তির ছাঁচ (প্রশাসককে প্রেরিত)',
            'bill_remind_admin'         => 'বিল অনুস্মারক ছাঁচ (প্রশাসককে প্রেরিত)',
            'bill_recur_admin'          => 'বিল আবর্তক ছাঁচ (প্রশাসককে প্রেরিত)',
        ],
    ],

    'scheduling' => [
        'name'              => 'শিডিউলিং',
        'description'       => 'আবর্তকের  জন্য স্বয়ংক্রিয় অনুস্মারক এবং কমান্ড',
        'send_invoice'      => 'ইনভয়েস অনুস্মারক পাঠাও',
        'invoice_days'      => 'নির্দিষ্ট দিনের পর পাঠাও',
        'send_bill'         => 'বিল অনুস্মারক পাঠাও',
        'bill_days'         => 'নির্দিষ্ট দিনের পূর্বেই পাঠাও',
        'cron_command'      => 'Cron  নির্দেশ',
        'schedule_time'     => 'চালানোর সময়',
    ],

    'categories' => [
        'description'       => 'আয়, ব্যয় এবং আইটেম এর জন্য অসীম ক্যাটেগরি সংখ্যা',
    ],

    'currencies' => [
        'description'       => 'মুদ্রা তৈরি এবং ব্যবস্থাপনা কর এবং তাদের লেনদেনের হার নির্ধারণ কর',
    ],

    'taxes' => [
        'description'       => 'ট্যাক্সের স্থায়ী, সাধারণ, অন্তর্ভুক্ত এবং যৌগিক হার',
    ],

];
