<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public static function getServices()
    {
        return [
            'avm-guvenligi' => [
                'title' => 'Alışveriş Merkezi Güvenliği',
                'slug' => 'avm-guvenligi',
                'image' => 'https://images.unsplash.com/photo-1519567241046-7f570eee3c9e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'content' => 'AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ; AVM güvenliği konusunda uzman bir güvenlik şirketi olup; Alışveriş merkezi, mağaza gibi tesislerde işletmenin talepleri doğrultusunda işletmeyi, çalışanlarını, müşteri ve ziyaretçilerini her türlü tehdide karşı korumak üzere gerekli önleyici tedbirler alıp, geniş kapsamlı bir güvenlik ağı oluşturarak hizmet vermekteyiz.

Profesyonel AVM Güvenliği Şu Başlıklarla sağlanır;
Alışveriş merkezi giriş güvenliği
Otopark güvenliği
Katların güvenliği
Mağaza güvenliği
Müşteri ve personel güvenliği

Başlıca Tehdit Unsurları :
Hırsızlık
Gasp
Sorunlu müşteri

Sektörün Zaafları :
– Müşteri ilişkileri
– Personel ilişkileri
– Sorunlu müşterilere karşı yanlış müdahele

AVM güvenliği gerek toplumsal olaylar, gerekse terör olayları yönünden çok ciddi bir iş olup, gerek can ve gerekse mal yönünden büyük kayıpların yaşanabileceği alışveriş merkezlerinde güvenlik konusunda son derece uzmanız.

Alışveriş merkezlerinde güvenlik konusundaki kritik ve prensiplerimiz :
“Giriş ve çıkışların yoğun olduğu kalabalık yerleşkelerin güvenliği” ile “giriş ve çıkışların yetkilendirildiği kuruluşların güvenliğini” temin etmek arasında önemli farklılıklar bulunmaktadır. Alışveriş merkezlerinde “işletme kurallarına aykırı hareket eden müşteri” dahi kendisine en üst düzeyde muhatap bulabilme ve ayrıntılı bir şekilde bilgilendirilme şansına sahip olup, genel davranış şekli açısından müşteri memnun edilmeye çalışılır.

Bununla birlikte sınırları belirlenmiş ve girişlerin yetkilendirildiği kuruluşların güvenliğini sağlarken, nezaket sınırları çerçevesinde hiçbir hareketin kuralların önüne geçmesine izin vermemelisiniz. Halka açık işletmelerde, “işveren statüsündeki AVM yönetimi, güvenlik politikaları ve güvenlik anlayışları biribirinden farklı olan kiracılar ve mağazalar, alışveriş amacıyla gelen ziyaretçiler, dolaşmak amacıyla gelenler ve AVM’ne bağlı personel (temizlik, teknik vs…)” gibi “yaptığınız işten memnun olması” gereken birçok grupla aynı mekanda altında çalışılır. Bu nevi karmaşık bir yapının güvenliğini sağlamak için özel güvenlik firması tarafından çalıştırılan güvenlik görevlilerinin konsantrasyon sorunu yaşamayan, soğukkanlı ve kendini çok iyi ifade edebilen kişiler arasından seçilmesi gerekir. AVM’lerinde konuk ile ilk temas noktası olan güvenlik noktalarında görevlendirilen güvenlik ekibinin, AVM’nin imajına ve kurum kültürüne uygun kişilerden oluşması gerekir.

Müşterinin kapıdan girerken edindiği yargı, AVM ile ilgili düşüncelerinin olumlu ya da olumsuz olarak şekillenmesine sebep olduğu, AVM’ye gelen konukların ağırlıklı bir bölümü, giriş güvenlik önlemlerini ve üst kontrollerini “sevimsiz” bulması ve “sabırsız” davranması tecrübelerimiz ile sabit bir olgudur. Fakat beden dilini iyi kullanabilen profesyonel bir özel güvenlik görevlisi, ziyaretçiyi kurallara uygun bir biçimde kontrolden geçirip sorunsuz bir şekilde çarşıya girişini sağlamak ve güvenliğin yanısıra müşteri memnuniyetine de odaklanmak durumundadır. Kaldı ki çoğu alışveriş merkezinde güvenlik personelinin müşteriye danışmanlık fonksiyonu olduğu da gözardı edilmemelidir.

Bu Neden ile AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ; yönetimi olarak; AVM sektöründe iyi güvenlik sağlamak için, standartların NET olarak belirlenmesini ve görevde uzmanlık seviyesine gelmiş (sertifikasyon) personelle çalışmak gerektiğini düşünüyoruz. Buna ek olarak; AVM’lerinde oluşturduğumuz Güvenlik Kontrol Merkezlerinde “suçla mücadele” ve “kalabalık yönetimi” konularında uzman ve tecrübeli profesyonel personeller ile çalışmayı uygun görüyor, bu konuda çalışanlarımıza gerekli görülen Profesyonel AVM güvenliği oryantasyon eğitimini titizlikle veriyoruz.'
            ],
            'plaza-guvenligi' => [
                'title' => 'Plaza Güvenliği',
                'slug' => 'plaza-guvenligi',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'content' => 'İş Merkezi ve Plaza güvenlik hizmetleri modern iş merkezleri olarak tanımlanabilecek plazalar için uzmanlık gereken özel güvenlik hizmeti türüdür. Plaza güvenliği alanında uzman güvenlik firması olan AB KORUMA Özel Güvenlik, teknoloji çağının modern ticaret ve iş merkezi olan plazalardaki güvenlik anlayışı yönünden teknik ve profesyonel bir yaklaşım sergiler.

İçinde çalışanlara kaliteli hizmet, çeşitli teknolojik olanaklar ve özel güvenlik sağlayan ve lüks ticari alan projeleri olan “Plaza”lar özellikleri nedeniyle etkili bir “özel güvenlik çemberi” gereksinimi duyarlar. Bunlar; Fiziksel , Elektronik, Personelli güvenlik hizmeti olarak sıralanabilir.

Plaza güvenlik hizmetleri, sağlanması ve bu güvenliğin sürdürülebilir olması açısından önemli bir konudur. Can ve mal güvenliği açısından çoğunlukla yüksek inşai yapılar olan plazalarda klasik ve standart özel güvenlik anlayışının üstüne çıkılmalıdır.

Plaza güvenlik hizmetleri
Kompakt özel güvenlik anlayışı kapsamında plaza güvenliği hizmeti çerçevesinde; Konuk karşılama ve refakat, ilk yardım, yangın vs. özel güvenlik eğitimleri ile donatılmış özel güvenlik elemanlarımız fiziki güvenlik olarak hizmet verirken aynı zamanda otomasyon personeli görev tanımlı güvenlik kamera ve alarm sistemlerini kullanma konusunda profesyonel güvenlik güvenlik görevlileri tayin edilir.

AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ , İçişleri Bakanlığı tarafından kendisine verilen izin ve yetki gereğince 5188 sayılı kanun çerçevesinde iş merkezi iç ve dış güvenliği konusunda gerekli risk analizi değerlendirmesi yaparak, muhtemel güvenlik senaryosuna uygun bir plan çerçevesinde 7 gün 24 saat hizmet verir.

Şirketimiz bu ilke ve plan çerçevesinde:
Sürekli risk değerlendirmesi
Plaza Giriş – Çıkış Kontrolleri,
Danışma, Yönlendirme ve refakat hizmeti,
Posta, kargo ve kurye teslimatlarının kontrolü,
Plaza içi devriye hizmeti,
İş merkezi çevresi koruma ve kontrol,
Plaza içerisinde meydana gelen olaylara müdahale,
Otopark giriş-çıkış kontrolü
Garaj katları, plaza çevresi, resepsiyon girişi CCTV kameralarının 24 saat izlenmesi,
Ortak ve bağımsız yerlerdeki hırsızlık, yangın ve gaz alarm sistemlerini izleme
hizmetleri vermektedir.

Firmamız tarafından Total güvenlik, total koruma prensibiyle görevlendirilen Plaza güvenliği konusunda uzman güvenlik elemanları ve güvenlik amiri;

Her gün, her dakika , gizlice veya açıkça gözetleme ve koruma görevini yaparak; Soygun, vandalizm, saldırı , adam kaçırma ya da suikast ihtimali, hırsızlık, mala zarar, yağma, kapkaç gibi ceza kanunlarınca suç olarak tayin edilen fiillere karşı her zaman tetikte bulunur.

AB KORUMA Özel Güvenlik ve Koruma Hizmetleri, residence güvenliği konusunda 24 saat tehdit algılaması yöntemi ile hem gizli, hem de açık güvenlik yönetimi sunarak riski en aza indirmek için gerekli bir takım önlemleri yüksek eğitimli , alanında deneyimli özel güvenlik kimlik kartlı görevliler ve otomasyon operatörleri ile sağlar. Bu kapsamda çalışacağı projeye ve kullanılacak teknolojiye uygun oryantasyon eğitiminden geçirilen özel güvenlik personeli; Projeye ilişkin giriş çıkış kontrol sistemi, raporlama sistemi, izleme sistemi ve alarm izleme sistemleri gibi konularda eğitilir.

PLAZA GÜVENLİĞİ HAKKINDA GENEL İLKELER:
İş veya ziyaret amacı ile gelen kişiler ziyaretçi defterine kaydedilir. Kimlik belgeleri karşılığında ziyaretçi kartı verilir. Görüşecekleri bölümün yetkilisi veya görüşeceği işyeri yetkilisinin onayı alınarak girişe izin verilir.
Ziyaret maksadı veya iş için gelen şahıslar güvenlik açısından önemli ve hassas yerlere hiçbir şekilde sokulmaz.
Tamirat veya bakım amacıyla gelen servis görevlisi, tamirci vs. kişiler Plaza yönetiminin izni olmadan giriş yapmasına izin verilmez.
İş merkezi ile ilişkisi olmayan 3.cü şahıslar (satıcı, pazarlamacı vs.) izinsiz olarak içeri alınmaz. Böyle bir durumda yönetime bilgi verilerek, gelen talimata göre giriş izni verilir veya nazikçe reddedilir.
Ziyaretçiler veya kuryeler tarafından getirilen, kargo, koli, paket, valiz, çanta vs. eşyalar gözle ve dedektör ile kontrol edilerek, sakıncalı hallerde vardiya amirine ve ilgili idari birime haber verilir. Güvenlik görevlisi herhangi bir kişiye teslim edilmesi isteğiyle kapalı eşya, malzeme veya emanet teslim alamaz.
Plaza içerisinde terkedilmiş çanta, koli, bavul, poşet, çuval gibi kapalı ve şüpheli eşyalar, patlayıcı madde olması rizikosuna binaen derhal vardiya amiri ve yönetime bildirilir.
Resepsiyon veya güvenlik noktası güvenlik görevlisi karşılama alanına yabancı kişiler alınmaz.
* Plaza nedir, (residence ve iş merkezi arasındaki farklar nelerdir)?

Plazalar modern iş merkezleri olup, residence güvenliği konusunda da belirttiğimiz gibi, rezidanslar konut, mesken , plazalar ise iş yeri olarak kullanılan genellikle yüksek katlı yapılardır. Plazalar sözlük anlamı açısından; İş yerlerinin yoğun olarak bulunduğu bölge, bir ticari işletmenin yönetildiği yer, birçok satış merkezinin toplu olarak bulunduğu yer, belli bir ürünün tüm çeşitleri ile sergilenerek satışının yapıldığı yer, iş hanı veya genel kelime kullanım anlamıyla toplum için ayrılmış geniş alan (meydan, çarşı yeri) olarak tanımlanabilir. Bir mağazalar kompleksi, içinde restaurantlar ve özel park alanlarının bulunduğu, geleneksel market ve pazar yerlerinin modern versiyonudur plazalar.

Türkiye’deki plazalar genellikle yüksek kalitede inşaat teknolojileri ile yapılmış, yüksek katlı yapılar olup, klasik iş merkezlerinden ayrılırlar.'
            ],
            'insaat-guvenligi' => [
                'title' => 'İnşaat ve Şantiye Güvenliği',
                'slug' => 'insaat-guvenligi',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'content' => 'İnşaat güvenliği ve şantiye güvenliği konusunda uzman şirketimiz, inşaat sektörünün faaliyette bulunduğu köprü, yol, baraj, liman, petrol tesisi, toplu konut, alışveriş merkezi, fabrika, hastane, okul gibi tesis ve sanayi kuruluşlarının şantiye güvenlik hizmetini başarıyla karşılayan bir firmadır.

AB KORUMA ÖZEL GÜVENLİK ekibi olarak, gerek kamu inşaat sektörü ve gerekse özel inşaat sektöründe yer aldığı güvenlik faaliyetlerinde yapının etüt ve proje aşamasından sonra inşaat safhasına geçilmesini takiben gerekli fizibilite durumu ve risk analizlerini tespit etmekte ve gerekli özel güvenlik stratejilerini oluşturmayı ilke edinmiştir.

Şantiye ve inşaat güvenliği
Gerek can güvenliği, gerekse inşaat malzeme ve ekipmanlarını hırsızlık, yağma, sabotaj, mala zarar verme gibi suç ve hareketlerden koruma amacı ile AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ Ekibi tarafından verilen inşaat ve şantiye güvenliği hizmetlerinde dikkat edilmesine özen gösterdiğimiz bazı hususlar şunlardır;

Sahanın rölevesi temin edilerek, çalışma sahası ve şantiye sınırları tespit edilerek, sahaya giriş çıkış noktaları kontrol altında tutulmalı, şantiyenin çevre güvenliğini sağlayacak önlemler alınmalıdır.
İnşaat çevre çitinin tipi ve güzergahı tespit edilerek bu alanlarda rutin devriye hizmetleri verilmelidir.
Şantiye enerji hattı, elektrik ile çalışacak güvenlik sistemleri de dikkate alınarak o kontrol edilmelidir.
İnşaat sahasının altyapı hatları araştırılmalı, su, telefon ve güvenlik açısından gerekli ise internet bağlantıları dahi kontrol edilmelidir.
Araçlar için oto park, tamirhane, yedek parça deposu gibi ayrılacak yerler ve şantiye içi yollar ile şantiyede kullanılacak iş makinaları kontrol edilmelidir.
Şantiyede ortalama kaç işçi ve teknik elamanın çalışacağı, bunlardan ne kadarının şantiyede kalacağı öğrenilmeli ve işçilerin dinlenme tesisleri, yemekhane, kantin, soyunup giyinme, yatakhane, tuvalet yerleri, varsa lojmanlar belirlenmeli, bu yerler için gerekli güvenlik kontrolleri uygulanmalıdır.
Tüm tesisatlar, kanalizasyon ve foseptik yerleri belirlenerek periyodik kontroller yapılmalıdır.
Beton santralı, kule, vinç, kantar binası gibi sabit tesislerin yerleri, çöp ve atık malzeme toplama noktaları, tespit edilerek, güvenlik altında tutulmalıdır.
İş kazalarında müraacaat edilecek sigorta hastanesi, acil durumlarda gidilebilecek en yakın poliklinik ve eczane tespit edilmelidir.'
            ],
            'site-guvenligi' => [
                'title' => 'Site ve Konut Güvenliği',
                'slug' => 'site-guvenligi',
                'image' => 'https://images.unsplash.com/photo-1560518883-ce09059ee971?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'content' => 'Site, villa, toplu konutlarda ve özel konutlarda yaşayan insanların huzur ve güvenliği ön planda tutularak gerekli güvenlik önlemlerinin alınmasında AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ olarak hizmet vermekteyiz.

Firmamızca; Apartman, Site ve konutların sabotaj, hırsızlık, terör, saldırı gibi tehditlere karşı tehdit ve güvenlik analizi çıkartılır. İşbu site güvenlik testi ile site güvenlik açıkları tesbit edildikten sonra gerekli görevli sayısı teklif edilir. Proje, toplu konut yönetimi veya site yönetimi tarafından kabul gördüğü takdirde eğer yoksa site güvenlik sertifikası alımı için çalışmalar başlatılıp, Valilik iznini müteakip, fiziki olarak emlak ve site güvenliği hizmetine başlanır.

Kontrol ve izleme merkezi
Fiziki güvenlik hizmetlerimizin yanısıra ve fiziki güvenliği desteklemek amacıyla sitelere ve toplu konutlara bir paket dahilinde uygulayabilme bilgi ve donanımına sahip olduğumuz elektronik site güvenlik sistemleri tavsiye edilir. Bunlar özetle şunlardır;

Kapı telefonu
Yangın alarm sistemleri
Cam kırılma detektörü
CCTV kamera sistemleri
Vitrin izleme detektörü
Bahçe/Site Giriş kapı sistemleri
Araç giriş çıkış bariyer düzenekleri … gibi

Site güvenliği bariyer uygulamaları
AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ  özel site güvenlik programı çerçevesinde; Personelimize bu teknolojik cihazları kolay bir şekilde kullanabilme uzmanlığı firmamızca verilen meslek içi site güvenliği eğitimi ile kazandırılmış olup, gerek insan gücü ve gerekse teknoloji kullanarak evinizi, ailenizi ve tüm site sakinlerini güvende hissettirecek özel site güvenliği hizmetini profesyonelce vermekteyiz.'
            ],
            'hastane-guvenligi' => [
                'title' => 'Hastane Güvenlik Hizmetleri',
                'slug' => 'hastane-guvenligi',
                'image' => 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'content' => 'AB KORUMA ÖZEL GÜVENLİK HİZMETLERİ olarak; Sağlık sektörü çalışanları ile Hasta ihtiyaç ve beklentileri gözönüne alınıp , hasta yakınlarının psikolojisi düşünülüp, gerekli tedbirleri alarak hizmet vermekteyiz.

Etkili Hastane güvenliği ve hasta güvenliği konularında kullanıldığımız yöntemler;

1- Giriş çıkış noktalarını kontrol, çalışanların, hasta ve yakınlarının huzurunu korumak için Hastane iç bölümlerinde düzeni bozacak hasta ve yakınlarına müdahale etmek, şüpheli kişileri süzebilmek, sabotaja karşı alınacak önlemler, bomba ve sair tehditlere karşı alınacak tedbirler, toplu eylemler karşısında uygulanacak hareket tarzı ile ilgili eğitimli ve tecrübeli kadro oluşturmak, bu konuda personele hastane güvenlik oryantasyonu verilerek konusunda tecrübeli özel güvenlik görevlileri yetiştirmek.

2- Özel güvenlik ekibine ek olarak hastane girişleri ve çıkışları, acil servis, poliklinikler idari katlar ve koridorların 24 saat kameralar ile izlenip, kayıt altına alınması, bu teknolojik güvenlik sistemleri sayesinde hastanelerin çeşitli bölümlerinde oluşabilecek hırsızlık ve dolandırıcılık gibi suçların önlenmesi ve faillerinin yakalanması daha kolay bir şekilde sağlanmaktadır.

3- Sağlık kuruluşunda firmamızca görevlendirilen özel güvenlik görevlisi gerekli psikolojik değerlendirme, meslek içi eğitim ve bir dizi testten geçerek göreve başlamaktadır. Firmamıza özel hastane güvenliği oryantasyon uygulamaları ile bu şekilde risk ve tehlike karşısında hazır özel güvenlik görevlileri yetiştirilmektedir.

AB KORUMA ÖZEL GÜVENLİK ; Özel Hastane güvenliği-Tüm bu ilkeler dahilinde Hastane yönetimince alınan karar ve kuralların uygulanabilmesi için, öngörülen bölge ve belirlenen saatler arasında gözetim, denetim ve kontrol görevi firmamızca büyük bir hassasiyetle yerine getirilmektedir.'
            ]
        ];
    }

    public function index()
    {
        return view('services');
    }

    public function show($slug)
    {
        $services = self::getServices();

        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        $service = (object) $services[$slug];

        return view('services.show', compact('service'));
    }
}
