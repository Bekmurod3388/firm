<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
            [
                'head_ru' => 'Cистемы хранения данных',
                'head2_ru' => 'Комплекс аппаратных и программных средств, который предназначен для хранения и оперативной обработки информации любого объема. ',
                'description_ru' => 'Система хранения данных — представляет собой архитектурное решение для подключения внешних устройств хранения данных, таких как дисковые массивы, ленточные библиотеки, оптические приводы к серверам таким образом, чтобы операционная система распознала подключённые ресурсы как локальные.',
                'head_en' => 'Storage systems',
                'head2_en' => 'A complex of hardware and software, which is designed for storage and operational processing of information of any volume.',
                'description_en' => 'Storage system is an architectural solution for connecting external storage devices such as disk arrays, tape libraries, optical drives to servers so that the operating system recognizes the connected resources as local.',
                'img'=>'database.svg',
                'img2'=>'storage.jpg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
           [
               'head_ru' => 'Сетевое оборудование',
               'head2_ru' => 'Устройства, необходимые для работы компьютерной сети, например: маршрутизатор, коммутатор, концентратор, патч-панель и др. ',
               'description_ru' => 'Сетевое (телекоммуникационное) оборудование — устройства, необходимые для работы компьютерной сети, например: маршрутизатор, коммутатор, концентратор, коммутационная панель и др. Можно выделить активное и пассивное сетевое оборудование.',
               'head_en' => 'NETWORK HARDWARE',
               'head2_en' => 'Devices required for the operation of a computer network, for example: a router, switch, hub, patch panel, etc.',
               'description_en' => 'Network (telecommunication) equipment - devices necessary for the operation of a computer network, for example: a router, switch, hub, patch panel, etc. Active and passive network equipment can be distinguished.',
               'img'=>'network_hardware.svg',
               'img2'=>'network.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Серверное оборудование ',
               'head2_ru' => 'Специализированный программно-аппаратный комплекс, предназначенный для обслуживания сети организации. ',
               'description_ru' => 'Сервер – это специализированный программно-аппаратный комплекс, предназначенный для обслуживания сети организации. Серверы решают множество различных задач: начиная с простого файлового хранилища с защитой от потери информации или управлением доступа к сети Интернет, до задач по обработке данных.',
               'head_en' => 'Server equipment',
               'head2_en' => 'A specialized hardware and software complex designed to service the organization\'s network.',
               'description_en' => 'A server is a specialized hardware and software complex designed to service the organization\'s network. Servers solve many different tasks: from simple file storage with protection against information loss or control of access to the Internet, to data processing tasks.',
               'img'=>'server_hardware.svg',
               'img2'=>'server.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Информационная безопасность ',
               'head2_ru' => 'Комплексные решения для обеспечения современной защиты предприятий от известных и неизвестных угроз. ',
               'description_ru' => 'Информационная безопасность — практика предотвращения несанкционированного доступа, использования, раскрытия, искажения, изменения, исследования, записи или уничтожения информации. Это универсальное понятие применяется вне зависимости от формы, которую могут принимать данные (электронная или, например, физическая). Основная задача информационной безопасности — сбалансированная защита конфиденциальности, целостности и доступности данных[1], с учётом целесообразности применения и без какого-либо ущерба производительности организации[2]. Это достигается, в основном, посредством многоэтапного процесса управления рисками, который позволяет идентифицировать основные средства и нематериальные активы, источники угроз, уязвимости, потенциальную степень воздействия и возможности управления рисками. Этот процесс сопровождается оценкой эффективности плана по управлению рисками.',
               'head_en' => 'Information Security',
               'head2_en' => 'Comprehensive solutions to provide modern enterprise protection against known and unknown threats.',
               'description_en' => 'Information security is the practice of preventing unauthorized access, use, disclosure, distortion, modification, research, recording or destruction of information. This universal concept applies regardless of the form that the data can take (electronic or, for example, physical). The main task of information security is a balanced protection of confidentiality, integrity and availability of data [1], taking into account the appropriateness of the application and without any damage to the productivity of the organization [2]. This is achieved primarily through a multi-step risk management process that identifies fixed assets and intangible assets, sources of threats, vulnerabilities, potential exposure and risk management capabilities. This process is accompanied by an assessment of the effectiveness of the risk management plan.',
               'img'=>'wireless.svg',
               'img2'=>'security.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Видеоконференцсвязь и телефония ',
               'head2_ru' => 'Решения для одновременной передачи видео и звука на расстоянии с помощью аппаратно-программных средств коммуникации. ',
               'description_ru' => 'Видео-конференц-связь (ВКС) — это телекоммуникационная технология интерактивного взаимодействия трех и более удалённых абонентов, при которой между ними возможен обмен аудио- и видеоинформацией в реальном времени, с учётом передачи управляющих данных.
IP-телефония — телефонная связь по протоколу IP. Под IP-телефонией подразумевается набор коммуникационных протоколов, технологий и методов, обеспечивающих традиционные для телефонии набор номера, дозвон и двустороннее голосовое общение, а также видеообщение по сети Интернет или любым другим IP-сетям. Сигнал по каналу связи передаётся в цифровом виде и, как правило, перед передачей преобразовывается (сжимается), чтобы удалить избыточность информации и снизить нагрузку на сеть передачи данных.
',
               'head_en' => 'Video conferencing and telephony',
               'head2_en' => 'Solutions for the simultaneous transmission of video and sound at a distance using hardware and software communications.',
               'description_en' => 'Video conferencing (VCS) is a telecommunication technology for the interactive interaction of three or more remote subscribers, in which it is possible between them to exchange audio and video information in real time, taking into account the transfer of control data.

IP telephony - IP telephony. IP telephony means a set of communication protocols, technologies and methods that provide traditional telephony dialing, dialing and two-way voice communication, as well as video communication over the Internet or any other IP networks. The signal through the communication channel is transmitted in digital form and, as a rule, is converted (compressed) before transmission in order to remove the redundancy of information and reduce the load on the data transmission network.',
               'img'=>'video_call.svg',
               'img2'=>'video_call.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Системы видеонаблюдения',
               'head2_ru' => 'Обеспечение безопасности предприятий и организаций, включая решения по видео аналитике и управлению системами видеонаблюдения. ',
               'description_ru' => 'Система видеонаблюдения (закрытые системы кабельного телевидения, CCTV) — система аппаратно-программных средств, предназначенная для осуществления видеонаблюдения.

Локальная система — система, область действия и применения которой ограничена географически территорией здания, предприятия, организации и т. п. Централизованная система имеет один центр и некоторое количество видеокамер. Децентрализованная система представляет себя как совокупность нескольких централизованных, объединенных логически в одну структуру, но физически разделенных и способных функционировать независимо.
',
               'head_en' => 'CCTV systems',
               'head2_en' => 'Ensuring the security of enterprises and organizations, including solutions for video analytics and video surveillance systems management.',
               'description_en' => 'A video surveillance system (closed cable television systems, CCTV) is a hardware and software system designed for video surveillance.

Local system is a system, the scope and application of which is geographically limited by the territory of a building, enterprise, organization, etc. The centralized system has one center and a number of video cameras. A decentralized system presents itself as a collection of several centralized ones, logically united into one structure, but physically separated and capable of functioning independently.',
               'img'=>'camera.svg',
               'img2'=>'camera.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Визуализация',
               'head2_ru' => 'Решения средств отображения информации для заказчиков и розничных потребителей (Digital Signage). ',
               'description_ru' => 'Визуализация (Digital Signage)- это форма наружной рекламы, в которой контент и сообщения отображаются на электронных экранах с целью донесения целевого сообщения в определенное место и определенное время. Digital signage предлагает лучшее возврата инвестиций по сравнению с традиционными средствами рекламы. Элементами digital signage могут быть жидкокристаллические или плазменные панели, электронные билборды, проекционные или другие типы экранов, которые могут контролироваться компьютером или другим устройством, позволяя пользователю или группам пользователей отдаленно менять и контролировать контент (обычно через Интернет).',
               'head_en' => 'Visualization',
               'head2_en' => 'Solutions for displaying information for customers and retail consumers (Digital Signage).',
               'description_en' => 'Visualization (Digital Signage) is a form of outdoor advertising in which content and messages are displayed on electronic screens in order to deliver a targeted message at a specific place and time. Digital signage offers a better return on investment than traditional advertising media. Digital signage elements can be LCD or plasma panels, electronic billboards, projection or other types of screens that can be controlled by a computer or other device, allowing a user or groups of users to remotely change and control content (usually over the Internet).',
               'img'=>'view.svg',
               'img2'=>'view.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Виртуализация',
               'head2_ru' => 'Решения для эффективного сокращения расходов на поддержку ИТ-инфраструктуры за счет экономии физических ресурсов, повышения уровня автоматизации процессов, адаптивности и масштабируемости бизнеса с повышением надёжности и безопасности хранения данных. ',
               'description_ru' => 'Виртуализация — это процесс создания программного (или виртуального) представления чего-либо, например, виртуальных приложений, серверов, хранилищ и сетей на базе физического ресурса (сервера) Виртуализация позволяет сократить количество серверов благодаря консолидации, то есть там, где раньше требовалось несколько серверов – теперь можно поставить один сервер, и запустить нужное число гостевых ОС в виртуальной среде. Это позволит сэкономить на стоимости приобретения оборудования, а также снизить энергопотребление, а значит и тепловыделение системы – и, следовательно, можно использовать менее мощные, и, соответственно – более дешевые системы охлаждения. Виртуализация северов позволяет до предела упростить администрирование IT-инфраструктуры. В нашем портфеле представлены лидеры в сфере виртуализации Citrix, Microsоft, VMware',
               'head_en' => 'Virtualization',
               'head2_en' => 'Solutions to effectively reduce the cost of maintaining IT infrastructure by conserving physical resources, increasing the level of process automation, adaptability and business scalability, while increasing the reliability and security of data storage.',
               'description_en' => 'Virtualization is the process of creating a software (or virtual) representation of something, for example, virtual applications, servers, storage and networks based on a physical resource (server) Virtualization allows you to reduce the number of servers through consolidation, that is, where several servers were previously required - now you can install one server and run the required number of guest operating systems in a virtual environment. This will save on the cost of purchasing equipment, as well as reduce power consumption, and hence the heat dissipation of the system - and, therefore, you can use less powerful, and, accordingly, cheaper cooling systems. Server virtualization allows you to simplify the administration of your IT infrastructure to the limit. Our portfolio includes the leaders in the field of virtualization Citrix, Microsоft, VMware',
               'img'=>'virtualization.svg',
               'img2'=>'virtualization.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Электропитание и Центры Обработки Данных (ЦОД) ',
               'head2_ru' => 'Активное и пассивное оборудование для ЦОДов, включая решения по источникам бесперебойного питания, прецизионному кондиционированию, полному набору систем для инфраструктуры ЦОД. ',
               'description_ru' => '

Дата-центр или центр обработки данных (ЦОД/ЦХОД) — это специализированное здание для размещения (хостинга) серверного и сетевого оборудования и подключения абонентов к каналам сети Интернет.

Дата-центр исполняет функции обработки, хранения и распространения информации, как правило, в интересах корпоративных клиентов — он ориентирован на решение бизнес-задач путём предоставления информационных услуг. Консолидация вычислительных ресурсов и средств хранения данных в ЦОД позволяет сократить совокупную стоимость владения IT-инфраструктурой за счёт возможности эффективного использования технических средств, например, перераспределения нагрузок, а также за счёт сокращения расходов на администрирование.
',
               'head_en' => 'Power Supply and Data Centers (DPC)',
               'head2_en' => 'Active and passive equipment for data centers, including solutions for uninterruptible power supplies, precision air conditioning, a complete set of systems for data center infrastructure.',
               'description_en' => 'A data center or data processing center (DPC / DPC) is a specialized building for hosting (hosting) server and network equipment and connecting subscribers to the Internet.

The data center performs the functions of processing, storing and distributing information, as a rule, in the interests of corporate clients - it is focused on solving business problems by providing information services. Consolidating computing and storage resources in a data center can reduce the total cost of ownership of an IT infrastructure through the ability to efficiently use technical means, such as redistribution of workloads, as well as by reducing administration costs.',
               'img'=>'battery.svg',
               'img2'=>'battery.jpg',
               'category_id'=>'1',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Фото и Видео техника ',
               'head2_ru' => 'Совершенствование техники и одновременное упрощение и удешевление фотосъёмки привело к широкому распространению фотографии. ',
               'description_ru' => 'Фотоаппарат— устройство для регистрации неподвижных изображений (получения фотографий). Запись изображения в фотоаппарате осуществляется фотохимическим способом при воздействии света на светочувствительный фотоматериал. Получаемое таким способом скрытое изображение преобразуется в видимое при лабораторной обработке. В цифровом фотоаппарате фотофиксация происходит путём фотоэлектрического преобразования оптического изображения в электрический сигнал, цифровые данные о котором сохраняются на энергонезависимом носителе.

Видео — электронная технология формирования, записи, обработки, передачи, хранения и воспроизведения подвижного изображения, основанная на принципах телевидения, а также аудиовизуальное произведение, записанное на физическом носителе (видеокассете, видеодиске и т. п.).
',
               'head_en' => 'Photo and video equipment',
               'head2_en' => 'The improvement of technology and the simultaneous simplification and cheapening of photography has led to the widespread use of photography.',
               'description_en' => 'Camera — a device for registering still images (taking photographs). The recording of an image in a camera is carried out by a photochemical method when light is applied to a photosensitive photographic material. The latent image obtained in this way is converted into a visible one during laboratory processing. In a digital camera, photographic recording occurs by photoelectric conversion of an optical image into an electrical signal, digital data about which is stored on a non-volatile medium.

Video is an electronic technology for the formation, recording, processing, transmission, storage and reproduction of a moving image based on the principles of television, as well as an audiovisual work recorded on a physical medium (video cassette, videodisc, etc.).',
               'img'=>'photo.svg',
               'img2'=>'photo.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Компьютерная техника ',
               'head2_ru' => 'Весь спектр производимых компьютерных систем, от небольшого наладонника до сверхмощного суперкомпьютера. В последнее время часто этим понятием обобщают также периферийное и офисное оборудование, а иногда даже комплектующие для различных типов компьютеров, описываемые иначе, как аппаратное обеспечение. Тем не менее, чаще всего, говоря о компьютерной технике, подразумевают сами компьютеры или отдельно стоящее оборудование, которое работает совместно с компьютерами и обеспечивает некоторую дополнительную функциональность (печать или сканирование документов, доступ к Сети, защиту от сбоев питания и т. п.). ',
               'description_ru' => 'Компьютерная техника — весь спектр производимых компьютерных систем, от небольшого наладонника до сверхмощного суперкомпьютера. В последнее время часто этим понятием обобщают также периферийное и офисное оборудование, а иногда даже комплектующие для различных типов компьютеров, описываемые иначе, как аппаратное обеспечение. Тем не менее, чаще всего, говоря о компьютерной технике, подразумевают сами компьютеры или отдельно стоящее оборудование, которое работает совместно с компьютерами и обеспечивает некоторую дополнительную функциональность (печать или сканирование документов, доступ к Сети, защиту от сбоев питания и т. п.).',
               'head_en' => 'Computer technology',
               'head2_en' => 'The whole range of manufactured computer systems, from a small handheld to a super-powerful supercomputer. Recently, this concept is often generalized as peripheral and office equipment, and sometimes even components for various types of computers, described otherwise as hardware. However, most often speaking of computer technology, we mean computers themselves or stand-alone equipment that works in conjunction with computers and provides some additional functionality (printing or scanning documents, access to the Network, protection against power failures, etc.) ...',
               'description_en' => 'Computer hardware - the entire range of manufactured computer systems, from a small handheld device to a super-powerful supercomputer. Recently, this concept is often generalized as peripheral and office equipment, and sometimes even components for various types of computers, described otherwise as hardware. However, most often speaking of computer technology, we mean computers themselves or stand-alone equipment that works in conjunction with computers and provides some additional functionality (printing or scanning documents, access to the Network, protection against power failures, etc.) ...',
               'img'=>'desktop-computer.svg',
               'img2'=>'notebook.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Бытовая техника',
               'head2_ru' => 'Электрические механические приборы, которые выполняют некоторые бытовые функции, такие как приготовление пищи или чистка. ',
               'description_ru' => '

Бытовая техника — электрические механические приборы, которые выполняют некоторые бытовые функции, такие как приготовление пищи или чистка. Бытовые приборы могут быть разделены на:

    Крупная бытовая техника или предметы домашнего обихода
    Мелкая бытовая техника
    Бытовая электроника

',
               'head_en' => 'Appliances',
               'head2_en' => 'Electrical mechanical appliances that perform some household functions such as cooking or cleaning.',
               'description_en' => 'Household appliances are electrical mechanical appliances that perform some household functions such as cooking or cleaning. Household appliances can be divided into:

     Large household appliances or household items
     Small household appliances
     Consumer electronics',
               'img'=>'appliances.svg',
               'img2'=>'appliances.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Аудиотехника и наушники ',
               'head2_ru' => 'Сoвoкупнocть paзличныx тexничecкиx ayдиo ycтpoйcтв, ocнoвнoй зaдaчeй кoтopыx являeтcя вocпpoизвeдeниe и зaпиcь звyкa (мyзыки, ayдиoкниг, нoвocтeй и пp.). Oгpoмнoe paзнooбpaзиe coвpeмeннoй ayдиo тexники пoзвoлит Baм пoдoбpaть ycтpoйcтвa, oтвeчaющиe Baшим тpeбoвaниям. ',
               'description_ru' => '

Ayдиoтexникa – coвoкyпнocть paзличныx тexничecкиx ayдиo ycтpoйcтв, ocнoвнoй зaдaчeй кoтopыx являeтcя вocпpoизвeдeниe и зaпиcь звyкa (мyзыки, ayдиoкниг, нoвocтeй и пp.). Oгpoмнoe paзнooбpaзиe coвpeмeннoй ayдиo тexники пoзвoлит Baм пoдoбpaть ycтpoйcтвa, oтвeчaющиe Baшим тpeбoвaниям.

Наушники — устройство для персонального прослушивания музыки, речи или иных звуковых сигналов. В комплекте с микрофоном могут служить головной гарнитурой — средством для ведения переговоров по телефону или иному средству голосовой связи. Кроме того, наушники используются в звукозаписывающих студиях для точного контроля записываемого трека музыкальной композиции.
',
               'head_en' => 'Audio equipment and headphones',
               'head2_en' => 'Amount of various technical audio devices, the main task of which is to play and record sound (music, audio books), and new The wide variety of state-of-the-art audio technology will allow you to find a device that meets your needs.',
               'description_en' => 'Audio technology - the availability of various technical audio devices, the main task of which is to play and record sound (music). The wide variety of state-of-the-art audio technology will allow you to find a device that meets your needs.

Headphones are a device for personal listening to music, speech or other sound signals. Complete with a microphone, they can serve as a headset - a means for conducting negotiations on the phone or other means of voice communication. In addition, headphones are used in recording studios for precise control of the recorded track of a musical composition.',
               'img'=>'headphones.svg',
               'img2'=>'headphones.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Принтеры',
               'head2_ru' => 'Внешнее периферийное устройство компьютера, предназначенное для вывода текстовой или графической информации, хранящейся в компьютере, на твёрдый физический носитель, обычно бумагу или полимерную плёнку, малыми тиражами. ',
               'description_ru' => 'Принтер — это внешнее периферийное устройство компьютера, предназначенное для вывода текстовой или графической информации, хранящейся в компьютере, на твёрдый физический носитель, обычно бумагу или полимерную плёнку, малыми тиражами.',
               'head_en' => 'Printers',
               'head2_en' => 'An external peripheral device of a computer designed to display text or graphic information stored in a computer on a hard physical medium, usually paper or plastic film, in small quantities.',
               'description_en' => 'A printer is an external peripheral device of a computer designed to output text or graphic information stored in a computer onto a solid physical medium, usually paper or plastic film, in small quantities.',
               'img'=>'briefcase.svg',
               'img2'=>'printer.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Аксессуары',
               'head2_ru' => 'Колоссальный ассортимент самых разнообразных товаров: компьютерные мыши, USB-накопители, сетевые фильтры, картриджи для принтеров и многое другое. ',
               'description_ru' => 'Аксессуары — это просто колоссальный ассортимент самых разнообразных товаров: компьютерные мыши, USB-накопители, сетевые фильтры, картриджи для принтеров и многое другое.',
               'head_en' => 'Accessories',
               'head2_en' => 'A colossal assortment of a wide variety of products: computer mice, USB drives, surge protectors, printer cartridges and much more.',
               'description_en' => 'Accessories are just a colossal assortment of a wide variety of products: computer mice, USB drives, surge protectors, printer cartridges and much more.',
               'img'=>'safety.svg',
               'img2'=>'safety.jpg',
               'category_id'=>'2',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Смартфоны',
               'head2_ru' => 'Мобильный телефон, дополненный функциональностью карманного персонального компьютера. ',
               'description_ru' => '

Смартфон— мобильный телефон (современный — как правило, с сенсорным экраном), дополненный функциональностью карманного персонального компьютера.

Также коммуникатор — карманный персональный компьютер, дополненный функциональностью мобильного телефона.

Хотя в мобильных телефонах практически всегда были дополнительные функции (калькулятор, календарь), со временем выпускались всё более и более интеллектуальные модели. С целью подчеркнуть возросшую функциональность и вычислительную мощность таких моделей был введён термин «смартфон». В эру роста популярности КПК они стали выпускаться с функциями мобильного телефона, такие устройства были названы коммуникаторами. В настоящее время разделение на смартфоны и коммуникаторы неактуально, оба термина обозначают одно и то же — миниатюрный универсальный компьютер с полноценными пользовательскими интерфейсами и развитыми радио-интерфейсами мобильного телефона, сам термин «коммуникатор» практически перестал использоваться.
',
               'head_en' => 'Smartphones',
               'head2_en' => 'Mobile phone supplemented with the functionality of a pocket personal computer.',
               'description_en' => 'Smartphone - a mobile phone (modern - as a rule, with a touch screen), supplemented with the functionality of a pocket personal computer.

Also, a communicator is a pocket personal computer supplemented with the functionality of a mobile phone.

Although mobile phones almost always had additional functions (calculator, calendar), more and more intelligent models were released over time. In order to emphasize the increased functionality and computing power of such models, the term "smartphone" was introduced. In the era of the growing popularity of PDAs, they began to be produced with the functions of a mobile phone, such devices were called communicators. Currently, the division into smartphones and communicators is irrelevant, both terms mean the same thing - a miniature universal computer with full-fledged user interfaces and advanced radio interfaces of a mobile phone, the term "communicator" has practically ceased to be used.',
               'img'=>'phone.svg',
               'img2'=>'phone.jpg',
               'category_id'=>'3',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'head_ru' => 'Аксессуары',
               'head2_ru' => 'Аксессуары для мобильного телефона - это большая группа товаров самого разного назначения. Например, при помощи правильно подобранного аксессуара в виде чехла можно защитить корпус и экран мобильного устройства от повреждений. Различные портативные колонки, проводные и Bluetooth-наушники помогут вам оставаться с любимой музыкой в любой ситуации. При помощи сменных декоративных панелей можно кардинально изменить дизайн вашего телефона, а автомобильные зарядки помогут забыть о проблеме внезапно севшего аккумулятора во время поездки в машине.',
               'description_ru' => 'Аксессуары для мобильного телефона - это большая группа товаров самого разного назначения. Например, при помощи правильно подобранного аксессуара в виде чехла можно защитить корпус и экран мобильного устройства от повреждений. Различные портативные колонки, проводные и Bluetooth-наушники помогут вам оставаться с любимой музыкой в любой ситуации. При помощи сменных декоративных панелей можно кардинально изменить дизайн вашего телефона, а автомобильные зарядки помогут забыть о проблеме внезапно севшего аккумулятора во время поездки в машине.',
               'head_en' => 'Accessories',
               'head2_en' => 'Mobile phone accessories are a large group of products for various purposes. For example, using a properly selected accessory in the form of a case, you can protect the body and screen of your mobile device from damage. A variety of portable speakers, wired and Bluetooth headphones will help you stay with your favorite music in any situation. With removable decorative panels, you can radically change the design of your phone, and car chargers will help you to forget about the problem of a suddenly dead battery while driving.',
               'description_en' => 'Mobile phone accessories are a large group of products for various purposes. For example, using a properly selected accessory in the form of a case, you can protect the body and screen of your mobile device from damage. A variety of portable speakers, wired and Bluetooth headphones will help you stay with your favorite music in any situation. With removable decorative panels, you can radically change the design of your phone, and car chargers will help you to forget about the problem of a suddenly dead battery while driving.',
               'img'=>'earbuds.svg',
               'img2'=>'earbuds.jpg',
               'category_id'=>'3',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
        ]);
    }
}
