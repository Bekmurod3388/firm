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
                'head_ru' => 'СЕТЕВОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Сетевое (телекоммуникационное) оборудование — устройства, необходимые для работы компьютерной сети, например: маршрутизатор, коммутатор, концентратор, коммутационная панель и др. Можно выделить активное и пассивное сетевое оборудование.',
                'head_en' => 'NETWORK HARDWARE',
                'description_en' => 'Network (telecommunication) equipment - devices necessary for the operation of a computer network, for example: a router, switch, hub, patch panel, etc. Active and passive network equipment can be distinguished.',
                'img'=>'network_hardware.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СЕРВЕРНОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Сервер – это специализированный программно-аппаратный комплекс, предназначенный для обслуживания сети организации. Серверы решают множество различных задач: начиная с простого файлового хранилища с защитой от потери информации или управлением доступа к сети Интернет, до задач по обработке данных.',
                'head_en' => 'SERVER EQUIPMENT',
                'description_en' => 'A server is a specialized hardware and software complex designed to service the organization\'s network. Servers solve many different tasks: from simple file storage with protection against information loss or control of access to the Internet, to data processing tasks.',
                'img'=>'server_hardware.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ХРАНЕНИЯ ДАННЫХ',
                'description_ru' => 'Система хранения данных — представляет собой архитектурное решение для подключения внешних устройств хранения данных, таких как дисковые массивы, ленточные библиотеки, оптические приводы к серверам таким образом, чтобы операционная система распознала подключённые ресурсы как локальные.',
                'head_en' => 'STORAGE SYSTEMS',
                'description_en' => 'Storage system is an architectural solution for connecting external storage devices such as disk arrays, tape libraries, optical drives to servers so that the operating system recognizes the connected resources as local.',
                'img'=>'database.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'БЕСПРОВОДНОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Комплексные решения для обеспечения современной защиты предприятий от известных и неизвестных угроз.',
                'head_en' => 'WIRELESS EQUIPMENT',
                'description_en' => 'Comprehensive solutions to provide modern enterprise protection against known and unknown threats.',
                'img'=>'wireless.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИДЕО-КОНФЕРЕНЦ-СВЯЗЬ',
                'description_ru' => 'Видео-конференц-связь (ВКС) — это телекоммуникационная технология интерактивного взаимодействия трех и более удалённых абонентов, при которой между ними возможен обмен аудио- и видеоинформацией в реальном времени, с учётом передачи управляющих данных.

IP-телефония — телефонная связь по протоколу IP. Под IP-телефонией подразумевается набор коммуникационных протоколов, технологий и методов, обеспечивающих традиционные для телефонии набор номера, дозвон и двустороннее голосовое общение, а также видеообщение по сети Интернет или любым другим IP-сетям. Сигнал по каналу связи передаётся в цифровом виде и, как правило, перед передачей преобразовывается (сжимается), чтобы удалить избыточность информации и снизить нагрузку на сеть передачи данных.',
                'head_en' => 'VIDEO-CONFERENCE-COMMUNICATION',
                'description_en' => 'Video conferencing (VCS) is a telecommunication technology for the interactive interaction of three or more remote subscribers, in which it is possible between them to exchange audio and video information in real time, taking into account the transfer of control data.

IP telephony - telephone communication over the IP protocol. IP telephony means a set of communication protocols, technologies and methods that provide traditional telephony dialing, dialing and two-way voice communication, as well as video communication over the Internet or any other IP networks. The signal through the communication channel is transmitted in digital form and, as a rule, is converted (compressed) before transmission in order to remove the redundancy of information and reduce the load on the data transmission network.',
                'img'=>'video_call.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ВИДЕОНАБЛЮДЕНИЯ',
                'description_ru' => 'Система видеонаблюдения (закрытые системы кабельного телевидения, CCTV) — система аппаратно-программных средств, предназначенная для осуществления видеонаблюдения.

Локальная система — система, область действия и применения которой ограничена географически территорией здания, предприятия, организации и т. п. Централизованная система имеет один центр и некоторое количество видеокамер. Децентрализованная система представляет себя как совокупность нескольких централизованных, объединенных логически в одну структуру, но физически разделенных и способных функционировать независимо.',
                'head_en' => 'VIDEO SURVEILLANCE SYSTEMS',
                'description_en' => 'A video surveillance system (closed cable television systems, CCTV) is a hardware and software system designed for video surveillance.

Local system is a system, the scope and application of which is limited geographically by the territory of a building, enterprise, organization, etc. The centralized system has one center and a number of video cameras. A decentralized system presents itself as a collection of several centralized ones, logically united into one structure, but physically separated and capable of functioning independently.',
                'img'=>'camera.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИЗУАЛИЗАЦИЯ',
                'description_ru' => 'Визуализация (Digital Signage)- это форма наружной рекламы, в которой контент и сообщения отображаются на электронных экранах с целью донесения целевого сообщения в определенное место и определенное время. Digital signage предлагает лучшее возврата инвестиций по сравнению с традиционными средствами рекламы. Элементами digital signage могут быть жидкокристаллические или плазменные панели, электронные билборды, проекционные или другие типы экранов, которые могут контролироваться компьютером или другим устройством, позволяя пользователю или группам пользователей отдаленно менять и контролировать контент (обычно через Интернет).',
                'head_en' => 'VISUALIZATION',
                'description_en' => 'Visualization (Digital Signage) is a form of outdoor advertising in which content and messages are displayed on electronic screens in order to deliver a targeted message at a specific place and time. Digital signage offers a better return on investment than traditional advertising media. Digital signage elements can be LCD or plasma panels, electronic billboards, projection or other types of screens that can be controlled by a computer or other device, allowing a user or groups of users to remotely change and control content (usually over the Internet).',
                'img'=>'view.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИРТУАЛИЗАЦИЯ',
                'description_ru' => 'Виртуализация — это процесс создания программного (или виртуального) представления чего-либо, например, виртуальных приложений, серверов, хранилищ и сетей на базе физического ресурса (сервера) Виртуализация позволяет сократить количество серверов благодаря консолидации, то есть там, где раньше требовалось несколько серверов – теперь можно поставить один сервер, и запустить нужное число гостевых ОС в виртуальной среде. Это позволит сэкономить на стоимости приобретения оборудования, а также снизить энергопотребление, а значит и тепловыделение системы – и, следовательно, можно использовать менее мощные, и, соответственно – более дешевые системы охлаждения. Виртуализация северов позволяет до предела упростить администрирование IT-инфраструктуры. В нашем портфеле представлены лидеры в сфере виртуализации Citrix, Microsоft, VMware',
                'head_en' => 'VIRTUALIZATION',
                'description_en' => 'Virtualization is the process of creating a software (or virtual) representation of something, for example, virtual applications, servers, storage and networks based on a physical resource (server) Virtualization allows you to reduce the number of servers through consolidation, that is, where several servers were previously required - now you can install one server and run the required number of guest operating systems in a virtual environment. This will save on the cost of purchasing equipment, as well as reduce energy consumption, and hence the heat dissipation of the system - and, therefore, you can use less powerful, and, accordingly, cheaper cooling systems. Server virtualization allows you to simplify the administration of your IT infrastructure to the limit. Our portfolio includes the leaders in the field of virtualization Citrix, Microsоft, VMware',
                'img'=>'virtualization.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ЭЛЕКТРОСНАБЖЕНИЯ',
                'description_ru' => 'Активное и пассивное оборудование для ЦОДов, включая решения по источникам бесперебойного питания, дизель генераторов и прецизионному кондиционированию.',
                'head_en' => 'POWER SUPPLY SYSTEMS',
                'description_en' => 'Active and passive equipment for data centers, including solutions for uninterruptible power supplies, diesel generators and precision air conditioning.',
                'img'=>'battery.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ФОТО И ВИДЕО ТЕХНИКА',
                'description_ru' => 'Фотоаппарат— устройство для регистрации неподвижных изображений (получения фотографий). Запись изображения в фотоаппарате осуществляется фотохимическим способом при воздействии света на светочувствительный фотоматериал. Получаемое таким способом скрытое изображение преобразуется в видимое при лабораторной обработке. В цифровом фотоаппарате фотофиксация происходит путём фотоэлектрического преобразования оптического изображения в электрический сигнал, цифровые данные о котором сохраняются на энергонезависимом носителе.

Видео — электронная технология формирования, записи, обработки, передачи, хранения и воспроизведения подвижного изображения, основанная на принципах телевидения, а также аудиовизуальное произведение, записанное на физическом носителе (видеокассете, видеодиске и т. п.).',
                'head_en' => 'PHOTO AND VIDEO EQUIPMENT',
                'description_en' => 'Camera — a device for registering still images (taking photographs). The recording of an image in a camera is carried out by a photochemical method when light is applied to a photosensitive photographic material. The latent image obtained in this way is converted into a visible one during laboratory processing. In a digital camera, photographic recording occurs by photoelectric conversion of an optical image into an electrical signal, digital data about which is stored on a non-volatile medium.

Video is an electronic technology for the formation, recording, processing, transmission, storage and reproduction of a moving image based on the principles of television, as well as an audiovisual work recorded on a physical medium (video cassette, videodisc, etc.).',
                'img'=>'photo.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АКСЕССУАРЫ',
                'description_ru' => 'Аксессуары — это просто колоссальный ассортимент самых разнообразных товаров: компьютерные мыши, USB-накопители, сетевые фильтры, картриджи для принтеров и многое другое.',
                'head_en' => 'ACCESSORIES',
                'description_en' => 'Accessories are just a colossal assortment of a wide variety of products: computer mice, USB drives, surge protectors, printer cartridges and much more.',
                'img'=>'headphones.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'БЫТОВАЯ ТЕХНИКА АККУМУЛЯТОРЫ',
                'description_ru' => 'Бытовая техника — электрические механические приборы, которые выполняют некоторые бытовые функции, такие как приготовление пищи или чистка. Бытовые приборы могут быть разделены на:
                Крупная бытовая техника или предметы домашнего обихода
Мелкая бытовая техника
Бытовая электроника',
                'head_en' => 'HOUSEHOLD APPLIANCES BATTERIES',
                'description_en' => 'Household appliances are electrical mechanical appliances that perform some household functions such as cooking or cleaning. Household appliances can be divided into:

Large household appliances or household items
Small household appliances
Consumer electronics',
                'img'=>'appliances.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'КОМПЬЮТЕРНАЯ ТЕХНИКА',
                'description_ru' => 'Компьютерная техника — весь спектр производимых компьютерных систем, от небольшого наладонника до сверхмощного суперкомпьютера. В последнее время часто этим понятием обобщают также периферийное и офисное оборудование, а иногда даже комплектующие для различных типов компьютеров, описываемые иначе, как аппаратное обеспечение. Тем не менее, чаще всего, говоря о компьютерной технике, подразумевают сами компьютеры или отдельно стоящее оборудование, которое работает совместно с компьютерами и обеспечивает некоторую дополнительную функциональность (печать или сканирование документов, доступ к Сети, защиту от сбоев питания и т. п.).',
                'head_en' => 'COMPUTER TECHNOLOGY',
                'description_en' => 'Computer hardware - the whole range of computer systems produced, from a small handheld device to a super-powerful supercomputer. Recently, this concept is often also generalized by peripheral and office equipment, and sometimes even components for various types of computers, described otherwise as hardware. Nevertheless, most often, speaking of computer technology, we mean computers themselves or stand-alone equipment that works in conjunction with computers and provides some additional functionality (printing or scanning documents, access to the Network, protection against power failures, etc.) ...',
                'img'=>'desktop-computer.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИДЕО-ПАНЕЛИ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'VIDEO PANELS',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'screen-ratio.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АУДИОТЕХНИКА И НАУШНИКИ',
                'description_ru' => 'Ayдиoтexникa – coвoкyпнocть paзличныx тexничecкиx ayдиo ycтpoйcтв, ocнoвнoй зaдaчeй кoтopыx являeтcя вocпpoизвeдeниe и зaпиcь звyкa (мyзыки, ayдиoкниг, нoвocтeй и пp.). Oгpoмнoe paзнooбpaзиe coвpeмeннoй ayдиo тexники пoзвoлит Baм пoдoбpaть ycтpoйcтвa, oтвeчaющиe Baшим тpeбoвaниям.

Наушники — устройство для персонального прослушивания музыки, речи или иных звуковых сигналов. В комплекте с микрофоном могут служить головной гарнитурой — средством для ведения переговоров по телефону или иному средству голосовой связи. Кроме того, наушники используются в звукозаписывающих студиях для точного контроля записываемого трека музыкальной композиции.',
                'head_en' => 'AUDIO EQUIPMENT AND HEADPHONES',
                'description_en' => 'Aydiotechnics - the competence of various technical audio devices, the main task of which is to play and record sound (music). The wide variety of state-of-the-art audio technology will allow you to find a device that meets your needs.

Headphones are a device for personal listening to music, speech or other sound signals. Complete with a microphone, they can serve as a headset - a means for conducting negotiations on the phone or other means of voice communication. In addition, headphones are used in recording studios for precise control of the recorded track of a musical composition.',
                'img'=>'speaker.svg',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ТЕЛЕФОНЫ',
                'description_ru' => 'Смартфон— мобильный телефон (современный — как правило, с сенсорным экраном), дополненный функциональностью карманного персонального компьютера.

Также коммуникатор — карманный персональный компьютер, дополненный функциональностью мобильного телефона.

Хотя в мобильных телефонах практически всегда были дополнительные функции (калькулятор, календарь), со временем выпускались всё более и более интеллектуальные модели. С целью подчеркнуть возросшую функциональность и вычислительную мощность таких моделей был введён термин «смартфон». В эру роста популярности КПК они стали выпускаться с функциями мобильного телефона, такие устройства были названы коммуникаторами. В настоящее время разделение на смартфоны и коммуникаторы неактуально, оба термина обозначают одно и то же — миниатюрный универсальный компьютер с полноценными пользовательскими интерфейсами и развитыми радио-интерфейсами мобильного телефона, сам термин «коммуникатор» практически перестал использоваться.',
                'head_en' => 'PHONES',
                'description_en' => 'Smartphone - a mobile phone (modern - as a rule, with a touch screen), supplemented with the functionality of a pocket personal computer.

Also, a communicator is a pocket personal computer supplemented with the functionality of a mobile phone.

Although mobile phones almost always had additional functions (calculator, calendar), more and more intelligent models were released over time. In order to emphasize the increased functionality and computing power of such models, the term "smartphone" was introduced. In the era of the growing popularity of PDAs, they began to be produced with the functions of a mobile phone, such devices were called communicators. Currently, the division into smartphones and communicators is irrelevant, both terms mean the same thing - a miniature universal computer with full-fledged user interfaces and advanced radio interfaces of a mobile phone, the term "communicator" has practically ceased to be used.',
                'img'=>'phone.svg',
                'category_id'=>'3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АКСЕССУАРЫ',
                'description_ru' => 'Аксессуары для мобильного телефона - это большая группа товаров самого разного назначения. Например, при помощи правильно подобранного аксессуара в виде чехла можно защитить корпус и экран мобильного устройства от повреждений. Различные портативные колонки, проводные и Bluetooth-наушники помогут вам оставаться с любимой музыкой в любой ситуации. При помощи сменных декоративных панелей можно кардинально изменить дизайн вашего телефона, а автомобильные зарядки помогут забыть о проблеме внезапно севшего аккумулятора во время поездки в машине.',
                'head_en' => 'ACCESSORIES',
                'description_en' => 'Mobile phone accessories are a large group of products for various purposes. For example, using a properly selected accessory in the form of a case, you can protect the body and screen of your mobile device from damage. A variety of portable speakers, wired and Bluetooth headphones will help you stay with your favorite music in any situation. With removable decorative panels, you can radically change the design of your phone, and car chargers will help you forget about the problem of a suddenly dead battery while driving.',
                'img'=>'earbuds.svg',
                'category_id'=>'3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
