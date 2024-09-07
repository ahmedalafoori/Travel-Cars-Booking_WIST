# Travel-Cars-Booking_WIST# نظام حجز السيارات (Travel Cars Booking System)

## ميزات النظام:

- **نظام حجز سيارات متكامل:**  
  يوفر إمكانية حجز السيارات لفترات محددة مع حساب تلقائي للسعر بناءً على مدة الحجز.

- **نظام المستخدمين والأدوار:**  
  - يستخدم حزمة [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v5/introduction) لإدارة الأدوار والصلاحيات.  
  - دور "admin" للوصول الكامل إلى لوحة التحكم.  
  - دور "user" للمستخدمين العاديين بدون صلاحيات لوحة التحكم.

- **إدارة السيارات:**  
  - إمكانية إضافة، تعديل، وحذف السيارات.  
  - كل سيارة لها تفاصيل مثل الاسم، الموديل، سنة الصنع، السعر اليومي، والفئة.

- **نظام الحجوزات:**  
  - يمكن للمستخدمين حجز السيارات لفترة محددة.  
  - حالات الحجز تشمل: معلق، مؤكد، ملغي.  
  - السعر الإجمالي للحجز يتم حسابه تلقائيًا بناءً على مدة الحجز.

- **نظام المراجعات والتقييمات:**  
  - يمكن للمستخدمين ترك تقييمات ومراجعات للسيارات المستأجرة.  
  - التقييمات تكون بنظام النجوم من 1 إلى 5.

- **نظام العروض:**  
  - يمكن إنشاء عروض خاصة على السيارات.  
  - كل عرض يتضمن نسبة خصم وتاريخ بداية ونهاية.

- **نظام المدفوعات:**  
  - يتتبع جميع المدفوعات المرتبطة بالحجوزات.  
  - يسجل طرق الدفع وحالة الدفع.

-- **نظام الإشعارات:**
 
  - **يوجد واجهتان لإرسال الإشعارات:**
    1. **واجهة لإرسال رسائل مجدولة:** تقوم بإرسال إشعار عبر البريد الإلكتروني قبل موعد استلام أو تسليم السيارة بساعتين. يتم تفعيل هذه الواجهة باستخدام نظام الجدولة في Laravel.
    2. **واجهة لإرسال الرسائل الفورية:** ترسل إشعارًا في نفس وقت تنفيذ العملية (مثل إتمام الحجز أو إلغاء الحجز) لإبلاغ المستخدم فورًا.
  - يوجد سجل للإشعارات لتتبع جميع الإشعارات المرسلة.
  - يدعم الإشعارات عبر البريد الإلكتروني ويمكن تخصيصه حسب الحاجة.


- **واجهة برمجة التطبيقات (API):**  
  - توفر نقاط نهاية (endpoints) لجميع العمليات الرئيسية.  
  - تستخدم Laravel Sanctum للمصادقة وتأمين الوصول.

- **لوحة التحكم (Filament):**  
  - لوحة تحكم إدارية متكاملة .  
  - تتضمن إحصائيات ورسوم بيانية تعرض البيانات الهامة مثل الحجوزات والمدفوعات.

- **الأمان:**  
  - يطبق النظام التحقق من صحة المدخلات لمنع الهجمات.  
  - يتضمن التحكم في الوصول على جميع العمليات الحساسة.

## لتنزيل وتشغيل النظام:

1. **نسخ المستودع:**
   ```bash
   git clone https://github.com/ahmedalafoori/Travel-Cars-Booking_WIST.git

انتقل إلى مجلد المشروع:


cd Travel-Cars-Booking_WIST
قم بتثبيت التبعيات:


composer install
انسخ ملف البيئة:


cp .env.example .env

انشى قاعده جديده اسمها : travelcars
اعمل لها Importing into the database القاعده موجوده بين الملفات travelcars.sql

قم بإنشاء مفتاح التطبيق:


php artisan key:generate
قم بتكوين قاعدة البيانات في ملف .env.

قم بتشغيل الترحيلات:


php artisan migrate
قم بتشغيل الخادم المحلي:


php artisan serve

لتشغيل نظام سجلات الإشعارات:
قم بتكوين إعدادات البريد الإلكتروني في ملف .env.

استخدم الأمر التالي لإرسال الإشعارات:


php artisan schedule:work
يمكنك جدولة هذا الأمر في ملف Kernel.php لإرسال الإشعارات تلقائيًا. الى الايميل حق العميل بموعد استلام او تسليم السياره 

واجهه تسجيل الدخول :Email : Ahmedalafoori@gmail.com
password:123456789








![Screenshot (407)](https://github.com/user-attachments/assets/49ec90f3-3845-4198-9997-8eb4f5a4c881)
![Screenshot (406)](https://github.com/user-attachments/assets/aa7882bc-6edb-4b8a-9190-7459a38db082)
![Screenshot (405)](https://github.com/user-attachments/assets/44e86013-f163-4b04-96ee-e58a5be7178c)
![Screenshot (404)](https://github.com/user-attachments/assets/65e3941c-6dd0-470f-acb1-9930f7d2ca3e)
![Screenshot (403)](https://github.com/user-attachments/assets/59c51017-886a-4010-b486-2efae4f4fb6b)
![Screenshot (402)](https://github.com/user-attachments/assets/78d68ce2-5cde-4ae5-93f2-93d4f5e68e7a)
![Screenshot (401)](https://github.com/user-attachments/assets/2df6ac26-21e5-4857-bd8a-0d54cd9a7cb0)
![Screenshot (400)](https://github.com/user-attachments/assets/45320b16-bd58-45d3-9b94-b0d93ec904bd)
![Screenshot (399)](https://github.com/user-attachments/assets/6415a534-e876-44b4-b6a7-68647e8c8e0e)
![Screenshot (398)](https://github.com/user-attachments/assets/4da6b567-4053-4dbb-b93e-c0647b079b65)
![Screenshot (397)](https://github.com/user-attachments/assets/e5a3babc-b7ff-499f-8762-237e4d1f9893)
![Screenshot (427)](https://github.com/user-attachments/assets/447f40a7-1e87-4148-97e4-c5b49a09da91)
![Screenshot (426)](https://github.com/user-attachments/assets/a8d39dd4-1012-41bc-804a-673da061abd8)
![Screenshot (425)](https://github.com/user-attachments/assets/0b261975-c866-433c-8046-0bf9ee2eae4e)
![Screenshot (424)](https://github.com/user-attachments/assets/dc07c628-9ead-4bfc-b2ce-edc49b6d9664)
![Screenshot (423)](https://github.com/user-attachments/assets/993471ef-93aa-4244-b1dd-5e982a1a1772)
![Screenshot (422)](https://github.com/user-attachments/assets/4ba76910-dd12-4228-b128-72852e86b197)
![Screenshot (421)](https://github.com/user-attachments/assets/82e4fd6e-3cbb-42bb-bda0-b3bead0317ac)
![Screenshot (420)](https://github.com/user-attachments/assets/0f8e5ac0-53d0-4463-9f51-0aa369f2e318)
![Screenshot (419)](https://github.com/user-attachments/assets/3d211621-a763-4a2a-af37-e1e61c332c1f)
![Screenshot (418)](https://github.com/user-attachments/assets/13e1fb61-8007-487c-a2cb-b9766dccdade)
![Screenshot (417)](https://github.com/user-attachments/assets/0d4d02b9-8051-435a-b78e-0b28b0b5ceb2)
![Screenshot (416)](https://github.com/user-attachments/assets/dbeee6d1-74ac-4a19-9724-a0e0386099dc)
![Screenshot (415)](https://github.com/user-attachments/assets/ca5e1423-ed88-4abf-913b-cb728707764e)
![Screenshot (414)](https://github.com/user-attachments/assets/62b0f6e3-27b4-425f-bf18-463835663dfa)
![Screenshot (413)](https://github.com/user-attachments/assets/ada9e332-41b1-4791-b90c-5805e246c20d)
![Screenshot (412)](https://github.com/user-attachments/assets/41f199a2-cfc7-48aa-896f-a83d9730788a)
![Screenshot (411)](https://github.com/user-attachments/assets/c69cfc22-9bfe-46c6-99a8-2e029acc30c9)
![Screenshot (410)](https://github.com/user-attachments/assets/34507b1a-018f-4ca0-8cd1-93d37061e297)
![Screenshot (409)](https://github.com/user-attachments/assets/defdb115-a1d2-4e67-9da4-ca28ef5ec4a8)
![Screenshot (408)](https://github.com/user-attachments/assets/a8a1bfe3-d3c3-4e6c-9f5c-e0dce01c2851)
