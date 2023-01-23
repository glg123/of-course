<?php

return [
    'accepted'             => 'يجب قبول :attribute.',
    'active_url'           => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after'                => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash'           => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array'                => 'يجب أن يكون :attribute ًمصفوفة.',
    'before'               => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean'              => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'current_password'     => 'كلمة المرور غير صحيحة.',
    'date'                 => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals'          => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format'          => 'لا يتوافق :attribute مع الشكل :format.',
    'declined'             => 'يجب رفض :attribute.',
    'declined_if'          => 'يجب رفض :attribute عندما تكون :other تساوي :value.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits'               => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between'       => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with'            => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'exists'               => 'القيمة المحددة :attribute غير موجودة.',
    'file'                 => 'الـ :attribute يجب أن يكون ملفا.',
    'filled'               => ':attribute إجباري.',
    'gt'                   => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image'                => 'يجب أن يكون :attribute صورةً.',
    'in'                   => ':attribute غير موجود.',
    'in_array'             => ':attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip'                   => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4'                 => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون :attribute نصًا من نوع JSON.',
    'lt'                   => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'multiple_of'          => ':attribute يجب أن يكون من مضاعفات :value',
    'not_in'               => 'العنصر :attribute غير صحيح.',
    'not_regex'            => 'صيغة :attribute غير صحيحة.',
    'numeric'              => 'يجب على :attribute أن يكون رقمًا.',
    'password'             => 'كلمة المرور غير صحيحة.',
    'present'              => 'يجب تقديم :attribute.',
    'regex'                => 'صيغة :attribute .غير صحيحة.',
    'required'             => ':attribute مطلوب.',
    'required_if'          => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => ':attribute مطلوب إذا توفّر :values.',
    'required_without'     => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق :attribute مع :other.',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with'          => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string'               => 'يجب أن يكون :attribute نصًا.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique'               => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded'             => 'فشل في تحميل الـ :attribute.',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid'                 => ':attribute يجب أن يكون بصيغة UUID سليمة.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                                      => 'الاسم',
        'username'                                  => 'اسم المُستخدم',
        'email'                                     => 'البريد الالكتروني',
        'first_name'                                => 'الاسم الأول',
        'last_name'                                 => 'اسم العائلة',
        'password'                                  => 'كلمة المرور',
        'password_confirmation'                     => 'تأكيد كلمة المرور',
        'city'                                      => 'المدينة',
        'country'                                   => 'الدولة',
        'address'                                   => 'العنوان',
        'phone'                                     => 'الهاتف',
        'mobile'                                    => 'الجوال',
        'age'                                       => 'العمر',
        'sex'                                       => 'الجنس',
        'gender'                                    => 'النوع',
        'day'                                       => 'اليوم',
        'month'                                     => 'الشهر',
        'year'                                      => 'السنة',
        'hour'                                      => 'ساعة',
        'minute'                                    => 'دقيقة',
        'second'                                    => 'ثانية',
        'title'                                     => 'العنوان',
        'content'                                   => 'المُحتوى',
        'description'                               => 'الوصف',
        'excerpt'                                   => 'المُلخص',
        'date'                                      => 'التاريخ',
        'time'                                      => 'الوقت',
        'available'                                 => 'مُتاح',
        'size'                                      => 'الحجم',
        'amount'                                    => 'المبلغ',
        'attachment'                                => 'المرفق',
        'available_morning_shift'                             => 'دوام الصباح المتاح',
        'available_evening_shift'                             => 'دوام المساء المتاح',
        'default_morning_shift'                               => 'دوام الصباح الافتراضي',
        'default_evening_shift'                               => 'دوام المساء الافتراضي',
        'noti_dietitian_booking_approved_ar.value'            => 'تمت الموافقة على حجز اختصاصي تغذية (باللغة العربية)',
        'noti_dietitian_booking_approved_en.value'            => 'تمت الموافقة على حجز اختصاصي تغذية (باللغة الإنجليزية)',
        'noti_dietitian_booking_completed_ar.value'           => 'اكتمل حجز اختصاصي تغذية (باللغة العربية)',
        'noti_dietitian_booking_completed_en.value'           => 'اكتمل حجز اختصاصي تغذية (باللغة الإنجليزية)',
        'noti_subscription_going_to_expire_ar.value'          => 'الاشتراك سينتهي (باللغة العربية)',
        'noti_subscription_going_to_expire_en.value'          => 'الاشتراك سينتهي (باللغة الإنجليزية)',
        'noti_subscription_expired_ar.value'                  => 'صلاحية الاشتراك (باللغة العربية)',
        'noti_subscription_expired_en.value'                  => 'صلاحية الاشتراك (باللغة الإنجليزية)',
        'noti_delivery_notification_ar.value'                 => 'إشعار التسليم (باللغة العربية)',
        'noti_delivery_notification_en.value'                 => 'إشعار التسليم (باللغة الإنجليزية)',
        'noti_disliked_ingredients_chosen_ar.value'           => 'المكونات المختارة لم تعجبهم (باللغة العربية)',
        'noti_disliked_ingredients_chosen_en.value'           => 'المكونات المختارة لم تعجبهم (باللغة الإنجليزية)',
        'noti_meal_selection_reminder_ar.value'               => 'تذكير اختيار الوجبة (باللغة العربية)',
        'noti_meal_selection_reminder_en.value'               => 'تذكير اختيار الوجبة (باللغة الإنجليزية)',
        'noti_subscription_confirmed_ar.value'                => 'الاشتراك المؤكدة (باللغة العربية)',
        'noti_subscription_confirmed_en.value'                => 'الاشتراك المؤكدة (باللغة الإنجليزية)',
        'noti_meal_reminder_ar.value'                         => 'تذكير الوجبة (باللغة العربية)',
        'noti_meal_reminder_en.value'                         => 'تذكير الوجبة (باللغة الإنجليزية)',
        'noti_customer_got_additional_days_ar.value'          => 'حصل العميل على أيام إضافية (باللغة العربية)',
        'noti_customer_got_additional_days_en.value'          => 'حصل العميل على أيام إضافية (باللغة الإنجليزية)',
        'noti_customer_credit_wallet_ar.value'                => 'محفظة ائتمان العملاء (باللغة العربية)',
        'noti_customer_credit_wallet_en.value'                => 'محفظة ائتمان العملاء (باللغة الإنجليزية)',
        'noti_plan_switch_ar.value'                           => 'تبديل الخطة (باللغة العربية)',
        'noti_plan_switch_en.value'                           => 'تبديل الخطة (باللغة الإنجليزية)',
        'enable_sms.value'                                    => 'تفعيل الرسائل القصيرة',
        'page_1_content_ar.value'                             => 'محتوي الصفحة 1 (باللغة العربية)',
        'page_1_content_en.value'                             => 'محتوي الصفحة 1 (باللغة الإنجليزية)',
        'page_2_content_ar.value'                             => 'محتوي الصفحة 2 (باللغة العربية)',
        'page_2_content_en.value'                             => 'محتوي الصفحة 2 (باللغة الإنجليزية)',
        'page_3_content_ar.value'                             => 'محتوي الصفحة 3 (باللغة العربية)',
        'page_3_content_en.value'                             => 'محتوي الصفحة 3 (باللغة الإنجليزية)',
        'question'                                            => 'السؤال',
        'answer'                                              => 'الأجابة',
        'show_order'                                          => 'رقم الترتيب',
        'status'                                              => 'الحالة',
        'general_app_store_link.value'                        => 'رابط تحميل أبل استور',
        'general_play_store_link.value'                       => 'رابط تحميل بلاي استور',
        'title_banner_home_page_ar.value'                     => 'عنوان البانر (باللغة العربية)',
        'title_banner_home_page_en.value'                     => 'عنوان البانر (باللغة الإنجليزية)',
        'description_banner_home_page_ar.value'               => 'وصف البانر (باللغة العربية)',
        'description_banner_home_page_en.value'               => 'وصف البانر (باللغة الإنجليزية)',
        'image_banner_home_page.value'                        => 'صورة البانر',
        'link_1_banner_home_page.value'                       => 'الرابط الأول للبانر',
        'text_link_1_banner_home_page_ar.value'               => 'نص الرابط الأول للبانر (باللغة العربية)',
        'text_link_1_banner_home_page_en.value'               => 'نص الرابط الأول للبانر (باللغة الإنجليزية)',
        'link_2_banner_home_page.value'                       => 'الرابط الثاني للبانر',
        'text_link_2_banner_home_page_ar.value'               => 'نص الرابط الثاني للبانر (باللغة العربية)',
        'text_link_2_banner_home_page_en.value'               => 'نص الرابط الثاني للبانر (باللغة الإنجليزية)',
        'general_phone.value'                                 => 'رقم الهاتف',
        'privacy_desc_ar.value'                               => 'سياسـة الخصوصيـة (باللغة العربية)',
        'privacy_desc_en.value'                               => 'سياسـة الخصوصيـة (باللغة الإنجليزية)',
        'about_desc_ar.value'                                 => 'من نحن (باللغة العربية)',
        'about_desc_en.value'                                 => 'من نحن (باللغة الإنجليزية)',
        'image'                                               => 'الصورة',
        'title_banner_bottom_ar.value'                        => 'عنوان البانر السفلي (باللغة العربية)',
        'title_banner_bottom_en.value'                        => 'عنوان البانر السفلي (باللغة الإنجليزية)',
        'description_banner_bottom_ar.value'                  => 'وصف البانر السفلي (باللغة العربية)',
        'description_banner_bottom_en.value'                  => 'وصف البانر السفلي (باللغة الإنجليزية)',
        'text_link_banner_bottom_ar.value'                    => 'نص رابط البانر السفلي (باللغة العربية)',
        'text_link_banner_bottom_en.value'                    => 'نص رابط البانر السفلي (باللغة الإنجليزية)',
        'link_banner_bottom.value'                            => 'رابط البانر السفلي',
        'image_banner_bottom.value'                           => 'صورة البانر السفلي',

    ],
];