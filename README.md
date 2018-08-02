# Seri_Port_LED_Kontrol


Projenin amacı, elektronik board üzerine bulunan 3 LED'i, localhostta çalışan bir web sitesinden kontrol etmektir.

LED'ler ve board, STM32 Nucleo mikrodenetleyicisine bağlıdır. STM32 modülü de seri port ile bilgisayara bağlıdır.

Localhost'ta çalışacak web sitesinde basit ve tek sayfa olacak şekilde bir tasarım yapılmıştır. HTML, CSS, Javascript teknolojileri kullanılmış ve PHP diliyle yazılmıştır.

Header dosyasında bulunan bilgilerden port numarası ve baud hızı gibi bilgiler, main.c dosyasında bulunan bilgilerle aynı olmak zorundadır. Aksi halde iletişim sağlanamaz.

Aynı zamanda modül bilgisayara bağlandığında PORT ataması, .php ve .c dosyalarındaki PORT numaralarıyla uyumlu olacak şekilde yapılmalıdır.

Kodlar tek başına indirilip çalıştırlımak istenirse verimli bir sonuç elde edilemez. STM32 modülünün bağlanması ve PORT ayarlamalarının doğru yapılmış olması şarttır. Bizim projemizde baud hızı 38400 baud, PORT numarası ise COM4'tür.
