<?php

// Language definitions used in admin-options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Неверный HTTP_REFERER. Если вы переместили форум из одного места расположения в другое или сменили доменное имя, вам необходимо вручную обновить значение <em>Основного URL-адреса</em> в базе данных (смотрите значение <b>o_base_url</b> в таблице <b>config</b>). После внесения изменений в базу данных очистите ото всех .php файлов директорию <b>/cache</b>, в корневом каталоге форума.',
'Must enter title message'			=>	'Необходимо указать название форума.',
'Invalid e-mail message'			=>	'Введенный email-адрес администратора неверен.',
'Invalid webmaster e-mail message'	=>	'Введенный email-адрес веб-мастера неверен.',
'SMTP passwords did not match'		=>	'Для смены пароля на SMTP необходимо дважды указать одни и те же данные.',
'Enter announcement here'			=>	'Введите текст объявления.',
'Enter rules here'					=>	'Введите текст правил.',
'Default maintenance message'		=>	'Форум закрыт на техническое обслуживание. Повторите попытку через несколько минут.',
'Timeout error message'				=>	'Значение "Timeout online" должно быть меньше значения "Timeout visit".',
'Options updated redirect'			=>	'Опции обновлены. Идет перенаправление …',
'Options head'						=>	'Опции',

// Essentials section
'Essentials subhead'				=>	'Основное',
'Board title label'					=>	'Название форума',
'Board title help'					=>	'Название текущего форума (выводится в заголовке каждой страницы). Поле <strong>не</strong> должно содержать HTML-разметки.',
'Board desc label'					=>	'Описание форума',
'Board desc help'					=>	'Короткое описание текущего форума (выводится вверху каждой страницы). Поле может содержать HTML-разметку.',
'Base URL label'					=>	'Основной URL-адрес',
'Base URL help'						=>	'Полный URL не должен содержать завершающего символа косой черты (например, http://www.mydomain.com/forums). Это <strong>обязательное</strong> требования для корректной работы всех администраторских и модераторских функций. Если вы получаете ошибку "Bad referer", то значение поля указано неверно.',
'Timezone label'					=>	'Часовой пояс по умолчанию',
'Timezone help'						=>	'Часовой пояс для гостей и пользователей, пытающихся зарегистрироваться на форуме.',
'DST label'							=>	'Переход на летнее время',
'DST help'							=>	'Отметьте, если хотите активировать поправку на летнее время (сдвигает время на 1 час).',
'Language label'					=>	'Язык по умолчанию',
'Language help'						=>	'Язык по умолчанию для гостей и пользователей, которые не изменили его в своих профилях. Если удалить языковой пакет, то данные автоматически обновятся.',
'Default style label'				=>	'Стиль оформленния по умолчанию',
'Default style help'				=>	'Стиль оформления по умолчанию для гостей и пользователей, которые не изменили его в своих профилях.',

// Essentials section timezone options
'UTC-12:00'					=>	'(UTC-12:00) Западная международная линия перемены дат',
'UTC-11:00'					=>	'(UTC-11:00) Ниуэ, Самоа',
'UTC-10:00'					=>	'(UTC-10:00) Гавайи и Алеутские острова, Острова Кука',
'UTC-09:30'					=>	'(UTC-09:30) Маркизские о-ва',
'UTC-09:00'					=>	'(UTC-09:00) Аляска, о-ва Гамбье',
'UTC-08:30'					=>	'(UTC-08:30) Питкэрн',
'UTC-08:00'					=>	'(UTC-08:00) Североамериканское тихоокеанское время',
'UTC-07:00'					=>	'(UTC-07:00) Горное время (США и Канада)',
'UTC-06:00'					=>	'(UTC-06:00) Центральное время (США и Канада), Мехико',
'UTC-05:00'					=>	'(UTC-05:00) Восточное время (США и Канада), Богота, Лима',
'UTC-04:00'					=>	'(UTC-04:00) Атлантическое время (Канада), Каракас, Ла Пас',
'UTC-03:30'					=>	'(UTC-03:30) Ньюфаундленд',
'UTC-03:00'					=>	'(UTC-03:00) Бразилия, Буэнос-Айрес, Джорджтаун',
'UTC-02:00'					=>	'(UTC-02:00) Среднеатлантическое время',
'UTC-01:00'					=>	'(UTC-01:00) Азорские о-ва, о-ва Зеленого мыса',
'UTC'						=>	'(UTC) Западноевропейское время, Гринвич',
'UTC+01:00'					=>	'(UTC+01:00) Центральноевропейское время, Западноафриканское время',
'UTC+02:00'					=>	'(UTC+02:00) Восточноевропейское время, Центральноафриканское',
'UTC+03:00'					=>	'(UTC+03:00) Калининград, Минск, Тбилиси, Восточноафриканское время',
'UTC+03:30'					=>	'(UTC+03:30) Тегеран',
'UTC+04:00'					=>	'(UTC+04:00) Москва, Самара, Ереван, Баку, ОАЭ',
'UTC+04:30'					=>	'(UTC+04:30) Афганистан',
'UTC+05:00'					=>	'(UTC+05:00) Ташкент, Карачи, Исламабад',
'UTC+05:30'					=>	'(UTC+05:30) Индия, Шри-Ланка',
'UTC+05:45'					=>	'(UTC+05:45) Непал',
'UTC+06:00'					=>	'(UTC+06:00) Екатеринбург, Алматы, Бангладеш, Бутан',
'UTC+06:30'					=>	'(UTC+06:30) Кокосовые о-ва, Мьянма',
'UTC+07:00'					=>	'(UTC+07:00) Новосибирск, Индокитай',
'UTC+08:00'					=>	'(UTC+08:00) Красноярск, Китай, Сингапур, Западноавстралийское время',
'UTC+08:45'					=>	'(UTC+08:45) Время Юго-Западной Австралии',
'UTC+09:00'					=>	'(UTC+09:00) Чита, Иркутск, Япония, Корея,',
'UTC+09:30'					=>	'(UTC+09:30) Центральноавстралийское время',
'UTC+10:00'					=>	'(UTC+10:00) Восточноавстралийское время',
'UTC+10:30'					=>	'(UTC+10:30) о-в Лорд-Хау (Австралия)',
'UTC+11:00'					=>	'(UTC+11:00) Владивосток, Соломоновы о-ва',
'UTC+11:30'					=>	'(UTC+11:30) о-в Норфолк',
'UTC+12:00'					=>	'(UTC+12:00) Магадан, Новая Зеландия, Фиджи',
'UTC+12:45'					=>	'(UTC+12:45) о-ва Чатем',
'UTC+13:00'					=>	'(UTC+13:00) Камчатка, Тонга, о-ва Феникс',
'UTC+14:00'					=>	'(UTC+14:00) о-ва Лайн',

// Timeout Section
'Timeouts subhead'					=>	'Время и тайм-ауты',
'Time format label'					=>	'Формат времени',
'PHP manual'						=>	'PHP руководство',
'Time format help'					=>	'[Текущий формат: %s]. Смотрите %s для ознакомления с возможными вариантами.',
'Date format label'					=>	'Формат даты',
'Date format help'					=>	'[Текущий формат: %s]. Смотрите %s для ознакомления с возможными вариантами.',
'Visit timeout label'				=>	'Тайм-аут посещений',
'Visit timeout help'				=>	'Количество секунд бездействия пользователя до того момента, как его «время последнего визита» будет изменено (влияет на индикатор новых сообщений).',
'Online timeout label'				=>	'Online тайм-аут',
'Online timeout help'				=>	'Количество секунд бездействия пользователя до того момента, как он будет удалён из списка online.',
'Redirect time label'				=>	'Время переадресации',
'Redirect time help'				=>	'Количество секунд ожидания до того момента, как произойдет перенаправление. Если установлено значение 0, страница с перенаправлением не будет показываться (не рекомендуется).',

// Display Section
'Display subhead'					=>	'Отображение информации',
'Version number label'				=>	'Версия форума',
'Version number help'				=>	'Выводить версию FluxBB в нижнем колонтитуле страниц.',
'Info in posts label'				=>	'Информация о пользователе',
'Info in posts help'				=>	'Выводить дополнительную информацию о пользователе в темах под его именем. Дополнительная информация состоит из местоположения, даты регистрации, количества сообщений и контактных ссылок (email и URL).',
'Post count label'					=>	'Счетчик сообщений',
'Post count help'					=>	'Выводить число сообщений пользователя в темах, профиле, списке пользователей.',
'Smilies label'						=>	'Смайлики в сообщениях',
'Smilies help'						=>	'Конвертировать смайлики в маленькие графические иконки.',
'Smilies sigs label'				=>	'Смайлики в подписях',
'Smilies sigs help'					=>	'Конвертировать смайлики в подписях пользователей в маленькие графические иконки.',
'Clickable links label'				=>	'Активные ссылки',
'Clickable links help'				=>	'Когда опция включена, FluxBB автоматически распознает все URL-адреса в сообщениях и делает ссылки активными.',
'Topic review label'				=>	'Обзор сообщений в теме',
'Topic review help'					=>	'Максимальное количество сообщений для вывода на странице формы полного ответа. 0 &#8212; отключение опции.',
'Topics per page label'				=>	'Кол-во тем на страницу',
'Topics per page help'				=>	'Количество выводимых тем на одной странице форума. Пользователи могут самостоятельно настраивать параметр.',
'Posts per page label'				=>	'Кол-во сообщений на страницу',
'Posts per page help'				=>	'Количество выводимых сообщений на одной странице темы. Пользователи могут самостоятельно настраивать параметр.',
'Indent label'						=>	'Размер отступа',
'Indent help'						=>	'Если указать значение 8, внутри тега [code][/code] будет использоваться обычная табуляция, в противном случае &#8212; пробелы.',
'Quote depth label'					=>	'Глубина цитирования',
'Quote depth help'					=>	'Максимальный уровень вложенности цитат [quote] в публикуемых сообщениях, лишние цитаты будут игнорироваться и вырезаться.',

// Features section
'Features subhead'					=>	'Дополнительные возможности',
'Quick post label'					=>	'Быстрый ответ',
'Quick post help'					=>	'Если опция активирована, то внизу каждой страницы с открытой темой появится форма быстрого ответа. Пользователи смогут напрямую, не покидая темы, публиковать новые сообщения.',
'Users online label'				=>	'Пользователи в онлайне',
'Users online help'					=>	'Показывать информацию на главной странице о гостях и пользователях просматривающих форум.',
'Censor words label'				=>	'Система цензуры',
'Censor words help'					=>	'Опция позволяет фильтровать определенные слова в сообщениях пользователей. Смотрите раздел %s для тонкой настройки инструмента.',
'Signatures label'					=>	'Подписи',
'Signatures help'					=>	'Разрешать пользователям прикреплять к своим сообщениям подписи.',
'User ranks label'					=>	'Система рангов',
'User ranks help'					=>	'Включение системы рангов позволяет пользователям по мере увеличения количества сообщений получать новые ранги. Смотрите раздел %s для настройки инструмента.',
'User has posted label'				=>	'Метка о собственных сообщениях',
'User has posted help'				=>	'Опция выводит маленькую точку-метку перед темами (в viewforum.php), в которых пользователь ранее оставлял сообщения. Отключите, если испытываете проблемы с производительностью форума.',
'Topic views label'					=>	'Просмотры темы',
'Topic views help'					=>	'Отслеживать и выводить число обращений к темам. Отключите, если испытываете проблемы с производительностью форума.',
'Quick jump label'					=>	'Быстрый переход',
'Quick jump help'					=>	'Включает возможность быстрого перехода по категориям с любой страницы форума.',
'GZip label'						=>	'GZip сжатие ',
'GZip help'							=>	'Если включено, FluxBB будет использовать сжатие gzip и отдавать содержимое страниц в оптимизированном виде. Это уменьшает траффик, но увеличивает нагрузку на процессор (CPU). Для работы необходима поддержка пакета zlib (--with-zlib) в PHP. Замечание: Если вы уже используете один из модулей Apache <em>mod_gzip</em> или <em>mod_deflate</em> для сжатия страниц, то не включайте эту опцию.',
'Search all label'					=>	'Поиск по всем форумам',
'Search all help'					=>	'Если выбрана опция «Нет», то поиск будет проводиться только по одному из выбранных пользователем форумов. Отключайте опцию, если испытываете проблемы с производительностью форума из-за чрезмерной нагрузки от поиска.',
'Menu items label'					=>	'Дополнительные пункты меню',
'Menu items help'					=>	'Текстовое поле используется для создания дополнительных пунктов верхнего навигационного меню. Формат оформления новых ссылок: X = &lt;a href="URL"&gt;ТЕКСТ ССЫЛКИ&lt;/a&gt;, где X &#8212; это позиция, куда будет вставлена новая ссылка (например, 0 &#8212; ссылка будет выведена в самом начале меню, 2 &#8212; после "Списка пользователей"). Каждый новый пункт меню должен начинаться с новой строки.',

// Feeds section
'Feed subhead'						=>	'Ленты тем и сообщений',
'Default feed label'				=>	'Тип лент по умолчанию',
'Default feed help'					=>	'Выберите механизм для генерации лент. Замечание: Выбрав опцию «Отключено» ссылка на ленты выводиться не будет, но останется непрямой доступ к их чтению.',
'None'								=>	'Отключено',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Время кеширования лент',
'Feed TTL help'						=>	'Ленты будут кешироваться для снижения потребления ресурсов сервера.',
'No cache'							=>	'Не кешировать',
'Minutes'							=>	'%d минут',

// Reports section
'Reports subhead'					=>	'Жалобы',
'Reporting method label'			=>	'Методы доставки жалоб',
'Internal'							=>	'Внутренний',
'By e-mail'							=>	'Email',
'Both'								=>	'Оба',
'Reporting method help'				=>	'Выберите метод, с помощью которого будут доставляться жалобы на темы и сообщения до администрации. Используя <em>Внутренний метод</em>, все жалобы будут собираться в одном разделе. Используя <em>Email</em> &#8212; доставляться прямиком на почтовые ящики, указанные в списке рассылки. Для удобства можно совмещать оба метода, выбрав соответствующую опцию.',
'Mailing list label'				=>	'Список рассылки',
'Mailing list help'					=>	'Адреса подписчиков должны разделяться запятыми. Люди, указанные в списке, будут получать уведомления о жалобах.',

// Avatars section
'Avatars subhead'					=>	'Аватары',
'Use avatars label'					=>	'Использовать аватары',
'Use avatars help'					=>	'Включенная опция позволяет пользователям загружать и устанавливать собственные аватары.',
'Upload directory label'			=>	'Папка для загрузки',
'Upload directory help'				=>	'Папка для загрузки и хранения пользовательских аватаров (относительно корневой папки FluxBB). PHP должен иметь права на запись в эту директорию.',
'Max width label'					=>	'Макс. ширина',
'Max width help'					=>	'Максимально разрешенная ширина аватаров в пикселах (60 &#8212; рекомендуемое значение).',
'Max height label'					=>	'Макс. высота',
'Max height help'					=>	'Максимально разрешенная высота аватаров в пикселах (60 &#8212; рекомендуемое значение).',
'Max size label'					=>	'Макс. размер',
'Max size help'						=>	'Максимально разрешенный размер аватаров в байтах (10240 &#8212; рекомендуемое значение).',

// E-mail section
'E-mail subhead'					=>	'Email',
'Admin e-mail label'				=>	'Email администратора',
'Admin e-mail help'					=>	'Почтовый адрес администратора форума.',
'Webmaster e-mail label'			=>	'Email веб-мастера',
'Webmaster e-mail help'				=>	'Почтовый адрес, от лица которого будет производиться рассылка всех писем.',
'Forum subscriptions label'			=>	'Подписка на форум',
'Forum subscriptions help'			=>	'Позволять пользователям подписываться на форумы. Письма с оповещениями о создании новых тем будут приходить на почту.',
'Topic subscriptions label'			=>	'Подписка на темы',
'Topic subscriptions help'			=>	'Позволять пользователям подписываться на темы.  Письма с оповещениями о появлении новых сообщений в темах будут приходить на почту.',
'SMTP address label'				=>	'Адрес SMTP сервера',
'SMTP address help'					=>	'Адрес внешнего SMTP сервера для отправки писем. Вы можете самостоятельно указать номер порта, если он отличается от стандартного (например, mail.myhost.com:3580). Стандартным считается порт номер 25. Оставьте поле пустым для использования локального почтового механизма.',
'SMTP username label'				=>	'Имя пользователя SMTP',
'SMTP username help'				=>	'Имя пользователя SMTP сервера. Вводите имя пользователя, если оно требуется для идентификации на SMTP сервере (большинство серверов <strong>не</strong> требуют аутентификации).',
'SMTP password label'				=>	'Пароль SMTP',
'SMTP change password help'			=>	'Выберите, если вы хотите сменить или удалить текущий сохраненный пароль.',
'SMTP password help'				=>	'Пароль для подключения к SMTP серверу. Вводите пароль, если он требуется для идентификации на SMTP сервере (большинство серверов <strong>не</strong> требуют аутентификации). Пароль для подтверждения следует ввести дважды.',
'SMTP SSL label'					=>	'Шифрование SMTP через SSL',
'SMTP SSL help'						=>	'Шифровать соединение с SMTP сервером через протокол SSL. Активировать опцию, если соединение с SMTP требует шифрования. Для корректной работы нужна поддержка протокола SSL в установленной версии PHP.',

// Registration Section
'Registration subhead'				=>	'Регистрация',
'Allow new label'					=>	'Разрешить регистрацию',
'Allow new help'					=>	'Инструмент для контроля над новыми регистрациями. Отключайте только в случае крайней необходимости.',
'Verify label'						=>	'Подтверждение регистрации',
'Verify help'						=>	'Если опция активирована, пользователям после завершения регистрации высылаются сгенерированные пароли. Полученные пароли они могут менять на свое усмотрение через профиль. Это действенный способ избежать массовых регистраций с использованием несуществующих почтовых адресов.',
'Report new label'					=>	'Сообщать о регистрациях',
'Report new help'					=>	'Если опция активирована, FluxBB будет рассылать уведомления указанным в списке рассылки пользователям, о появлении новых участников на форуме.',
'Use rules label'					=>	'Показывать правила форума',
'Use rules help'					=>	'Если опция активирована, то перед началом регистрации новый пользователь должен подтвердить свое согласие с правилами форума. Ссылка на правила всегда доступна в верхнем навигационном меню.',
'Rules label'						=>	'Введите текст правил',
'Rules help'						=>	'Введите правила или важную информацию, с которыми должны будут ознакомиться и согласиться все новые пользователи на странице регистрации. Если опция «Показывать правила форума» включена, то поле должно содержать хоть какой-то текст, иначе опция автоматически отключится. Текст не обрабатывается как обычное сообщение, разрешено использование HTML разметки.',
'E-mail default label'				=>	'Настройки email по умолчанию',
'E-mail default help'				=>	'Выберите настройки, устанавливающие уровень конфиденциальности для новых пользователей.',
'Display e-mail label'				=>	'Показывать почтовый адрес всем пользователям.',
'Hide allow form label'				=>	'Скрывать почтовый адрес, но разрешать отправлять письма.',
'Hide both label'					=>	'Скрывать почтовый адрес и запрещать отправлять письма.',

// Announcement Section
'Announcement subhead'				=>	'Объявления',
'Display announcement label'		=>	'Показывать объявление',
'Display announcement help'			=>	'Если опция активирована, то на страницах форума будет показываться объявление.',
'Announcement message label'		=>	'Текст объявления',
'Announcement message help'			=>	'Текст не обрабатывается как обычное сообщение, разрешено использование HTML разметки.',

// Maintenance Section
'Maintenance subhead'				=>	'Обслуживание',
'Maintenance mode label'			=>	'Режим обслуживания',
'Maintenance mode help'				=>	'Если опция активирована, то форум становится доступен только администраторам. Используйте режим в тех случаях, когда необходимо провести технические работы. <strong>ВНИМАНИЕ! Не выходите из учетной записи во время проведения технических работ. Вы не сможете авторизоваться вновь, придется менять параметры входа через базу данных.</strong>.',
'Maintenance message label'			=>	'Сообщение',
'Maintenance message help'			=>	'Сообщение, которое будет показываться всем пользователям во время проведения технических работ. Если оставить поле пустым, то будет использован текст по умолчанию. Текст не обрабатывается как обычное сообщение, разрешено использование HTML разметки.',

);
