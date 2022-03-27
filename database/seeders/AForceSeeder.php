<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Comando para solucionar el error a la hoa de cargar la BD
use Illuminate\Support\Facades\DB;

class AForceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Contenido que llevara la BD (28)

        DB::table('aforce')->insert([
            //1.	F-35 Lightning II
            [
                'Nombre'=>'F-35 Lightning II',
                'Parrafo1'=>'El F-35 Lightning II es el exclusivo caza polivalente de quinta generación correspondiente a un programa de desarrollo mundial. Su destreza extrema y habilidades de sigilo, junto con el paquete incluido de sensores y modernas armas, dan al F-35 una clara virtud estrategia sobre lo demás de los aviones de enfrentamiento en el planeta. La aeronave de tipo monoplaza, está equipada con una extensa gama de sistemas armamentísticos, como el Sidewinder, Storm Shadow, y Municiones de Ataque Directo Grupo (JDAMs, por sus siglas en inglés).',
                'Parrafo2'=>'El F-35, que completó exitosamente su primer vuelo en el último mes del año de 2006, fue creado primordialmente por los ingenieros de Lockheed Martin, contando a la vez con la participación de las compañías Northrop Grumman, BAE Systems y Pratt & Whitney. Las 3 versiones existentes del F-35, incluyendo el modelo CTOL (Despegue y Aterrizaje Convencionales), el STOVL (Despegue Corto y Aterrizaje Vertical) y el CV (Versión para Portaaviones), sustituirá a los A-10, F-16, F/A-18 y AV-8B Harrier del Ejército de los Estados Unidos, así como otros tipos de cazas de generación anterior de las naciones aliadas.',
                'Imagen1'=>'https://i0.wp.com/aeronauticapy.com/wp-content/uploads/2021/12/thumb2-lockheed-martin-f-35-lightning-ii-f-35a-american-fighter-military-aircraft-f-35.jpg?fit=710%2C444&ssl=1',
                'Imagen2'=>'https://fullfatthings-keyaero.b-cdn.net/sites/keyaero/files/inline-images/Lockheed%20Martin%20F-35A%20Lightning%20II%20%5BUSAF%20-%20SA%20Alexander%20Cook%5D%20%231.jpg',
                'slug'=>'f15_lightning_ii',
            ],
            //2.	F-22 Raptor
            [
                'Nombre'=>'F-22 Raptor',
                'Parrafo1'=>'El F-22 Raptor, desarrollado conjuntamente por los ingenieros de Lockheed Martin y Boeing, es un monoplaza de combate táctico bimotor altamente avanzado de quinta generación. Su rendimiento, habilidades de sigilo y la aviónica incorporada, hacen que el F-22 sea un caza de enorme maniobrabilidad y versatilidad. El Raptor, hizo su primer vuelo exitosamente en septiembre de 1997, siendo adoptado por la Fuerza Aérea de EE.UU. (USAF) como un caza de supremacía aérea multimisión. La primera serie de la producción del F-22 ha sido entregada a la Base Aérea de Nellis en el primer mes del año de 2003, entrando formalmente en servicio de la Fuerza Aérea en el último mes del año de 2005.',
                'Parrafo2'=>'El F-22 Raptor puede usar sofisticados misiles aire-aire y tierra-aire. Las nuevas tecnologías integradas a bordo de la aeronave, la convierten en una plataforma óptima para una amplia variedad de misiones, incluyendo vigilancia, reconocimiento, ataque, guerra electrónica e inteligencia de señales.',
                'Imagen1'=>'https://fotos.perfil.com/2019/07/29/0729avion233-759911.jpg',
                'Imagen2'=>'https://imgsrv2.voi.id/Er1PhB68EqimphuedcCSMEUakbhV3pNZx7UQnfUcpsg/auto/1280/853/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy82NzkwOC8yMDIxMDcxNjIxMDYtbWFpbi5jcm9wcGVkXzE2MjY0NDQ0MTMuanBn.jpg',
                'slug'=>'f22_raptor',
            ],
            //3.	Eurofighter Typhoon
            [
                'Nombre'=>'Eurofighter Typhoon',
                'Parrafo1'=>'El Eurofighter Typhoon es un caza polivalente de nueva generación cuyas prestaciones le sitúan en lo máximo de nuestra categorización. Con un diseño de ala en delta-cantilever, la aeronave integra la última tecnología en aviónica y sensores, incluyendo el Defensive Aids Sub System (DASS) y una vasta gama de armamento como el cañón Mauser BK-27 de 27 mm, misiles aire-aire, aire-tierra, anti-buques y proyectiles guiados de precisión.',
                'Parrafo2'=>'El desarrollo del Eurofighter Typhoon es el más grande esfuerzo de la participación militar transnacional europea gestionada por NATO Eurofighter y Tornado Management Agency (NETMA), ofreciendo tecnologías de vanguardia para la industria de defensa europea. Typhoon hizo su debut en enfrentamiento en 2011 para misiones de reconocimiento y ataque terrestre en Libia por la Royal Air Force (RAF) y la Fuerza Aérea Italiana.',
                'Imagen1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/RAF_Eurofighter_EF-2000_Typhoon_F2_Lofting-1.jpg/1200px-RAF_Eurofighter_EF-2000_Typhoon_F2_Lofting-1.jpg',
                'Imagen2'=>'http://4everstatic.com/imagenes/850xX/aviacion/aviones-de-caza/eurofighter-typhoon,-misiles-232056.jpg',
                'slug'=>'eurofighter_typhoon',
            ],
            //4.	Sukhoi Su-35
            [
                'Nombre'=>'Sukhoi Su-35',
                'Parrafo1'=>'El Sukhoi Su-35 es una versión enormemente avanzada del caza Su-27, incorporando tecnologías de quinta generación que lo sitúan en el rango de aviones de 4++ y, cuyas habilidades, le permiten ser superior al resto de la mayoría de los competidores de cuarta generación que se están desarrollando en todo el mundo.',
                'Parrafo2'=>'El primer primer modelo del Su-35 ha sido construido por los ingenieros rusos de KnAAPO (Asociación para la Producción de Aeronaves de Komsomolsk del Amur) en 2007, llevando a cabo exitosamente su primer vuelo en febrero de 2008. El Su-35 es capaz de desplegar misiles de largo y corto alcance aire-aire, aire-tierra y diversos tipos de armas guiadas de precisión. Los 14 aspectos de anclaje de la aeronave le posibilitan mover una carga eficaz máxima de armamento de hasta 8 toneladas.',
                'Imagen1'=>'https://www.ecured.cu/images/thumb/8/8e/Su35s_principal.jpg/1200px-Su35s_principal.jpg',
                'Imagen2'=>'https://images.ecestaticos.com/U4Ijs4o7tOKa92Tiwh_TRSzTRYA=/0x0:2272x1401/1440x810/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fadf%2F8fa%2F2f4%2Fadf8fa2f42590ae23b6d3e82a9fdceaf.jpg',
                'slug'=>'sukhoi_su35',
            ],
            //5.	F/A-18E/F Super Hornet
            [
                'Nombre'=>'F/A-18E/F Super Hornet',
                'Parrafo1'=>'El F/A-18E/F Super Hornet es un cazabombardero multiuso de probada capacidad de combate de nueva generación, con un rediseño más grande y mejorado con relación a su versión anterior, el F/A-18C/D Hornet. Actualmente, la aeronave está en servicio activo para la Armada de EE.UU. y la Real Fuerza Aérea Australiana (RAAF), sustituyendo a los Grumman F-14 Tomcat una vez que entró en operación militar en 1999.',
                'Parrafo2'=>'La suite de sistemas integrados y redes del Super Hornet ofrece una mayor interoperabilidad y un apoyo estratégico fundamental para las tropas en tierra, logrando manejar una extensa variedad de armamento inteligente aire-aire y aire-tierra, así como bombas guiadas por láser. Las habilidades de enfrentamiento del caza fueron puestas a prueba a lo largo de la Operación Libertad para Irak, la Operación Libertad Duradera, la Operación Southern Watch y la guerra en Afganistán.',
                'Imagen1'=>'https://meta-defense.fr/wp-content/uploads/2021/12/super-hornet-boeing-2-e1639748008577.jpeg',
                'Imagen2'=>'https://www.elradar.es/wp-content/uploads/2017/06/F18-1.jpg',
                'slug'=>'super_hornet',
            ],
            //6.	Dassault Rafale
            [
                'Nombre'=>'Dassault Rafale',
                'Parrafo1'=>'Desarrollado por los ingenieros de la compañía francesa Dassault Aviation, Rafale es un caza polivalente bimotor capaz de realizar misiones de autonomía aérea, despliegue veloz, reconocimiento y funcionalidades de disuasión nuclear en el viento. La aeronave, en la actualidad estan en servicio por la Fuerza Aérea y la Marina Francesa, cuenta con una destacada aviónica y avanzados sistemas de sensores inteligentes.',
                'Parrafo2'=>'Rafale puede integrar un cañón de 30 mm, misiles aire-aire, aire-tierra, una vasta gama de bombas guiadas por láser, así como misiles de interceptación nuclear y anti-buque entre otros. Su primer despliegue en enfrentamiento sucedió en 2002 a lo largo de la Operación Libertad Duradera, siendo usado después en otra serie de misiones de enfrentamiento en Afganistán, Libia y Malí (Operación Serval). El caza está disponible en 3 versiones: RAFALE C para la versión monoplaza, RAFALE M para la versión adaptada a portaaviones y RAFALE B para la versión biplaza.',
                'Imagen1'=>'https://i0.wp.com/www.transponder1200.com/wp-content/uploads/2020/09/Rafale_-_RIAT_2012_7852045796.jpg?fit=2048%2C1365&ssl=1',
                'Imagen2'=>'https://fly-news.es/wp-content/uploads/Dassault-Rafale-vuelo.jpg',
                'slug'=>'dassault_rafale',
            ],
            //7.	Boeing F-15E Strike Eagle
            [
                'Nombre'=>'Boeing F-15E Strike Eagle',
                'Parrafo1'=>'El F-15E Strike Eagle es una totalmente nueva generación de cazabombardero polivalente de supremacía aérea desarrollado desde el F-15 A/D, considerado actualmente como la columna vertebral de la Fuerza Aérea de EE.UU. (USAF). La última tecnología con la que cuenta sus sistemas de aviónica, provee al Strike Eagle de la función de llevar a cabo misiones aire-tierra y aire-aire en toda clase de condiciones meteorológicas a lo largo del día o la noche.',
                'Parrafo2'=>'El F-15E, capaz de duplicar la velocidad del sonido a máxima potencia, puede llevar más de 10 toneladas de carga útil, incluyendo Munición de Ataque Directo Conjunto (JDAM), Sistemas de Armas Standoff AGM-130, Misiles Aire-Aire de Rango Medio Avanzado AIM-120 (AMRAAM), Sidewinder AIM-9X y una amplia variedad de bombas. El Strike Eagle fue desplegado extensamente por la USAF en las operaciones Escudo del Desierto y Tormenta del Desierto, así como en las Operaciones Southern Watch y Northern Watch. Otros despliegues en enfrentamiento integran la operación Deny Flight, Operación Libertad Duradera, Operación Libertad Iraquí y la Operación Amanecer de la Odisea.',
                'Imagen1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/F-15E_Strike_Eagle_over_Afghanistan.jpg/1200px-F-15E_Strike_Eagle_over_Afghanistan.jpg',
                'Imagen2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/USAF_Boeing_F-15E_Strike_Eagle_Lofting-1.jpg/1024px-USAF_Boeing_F-15E_Strike_Eagle_Lofting-1.jpg',
                'slug'=>'boeing_f15e_strike_eagle',
            ],
            //8.	Su-30MKI (Flanker-H)
            [
                'Nombre'=>'Su-30MKI (Flanker-H)',
                'Parrafo1'=>'El Su-30MKI (Flanker-H) es un caza polivalente biplaza de extenso alcance en servicio activo con la Fuerza Aérea India (IAF). Diseñado por la rusa Sukhoi, es en la actualidad fabricado bajo licencia por la compañía india Hindustan Aeronautics Limited (HAL). La primera variante del Su-30MKI de construcción rusa entró en servicio con la IAF en 2002, en lo que el primer avión fabricado por la India se incorporó a su batallón en 2004. El caza cuenta con elementos, aviónica y subsistemas de desarrollo universal, suministrados por 14 fabricantes de 6 naciones.',
                'Parrafo2'=>'El Su-30MKI puede llevar una secuencia de misiles aire-tierra y aire-aire, así como misiles crucero supersónicos BrahMos, un cañón GSh-30-1 de 30 mm y una extensa diversidad de bombas.',
                'Imagen1'=>'https://cdnnmundo1.img.sputniknews.com/img/108896/34/1088963486_0:118:3072:2048_1920x0_80_0_0_e6b8aa4a120285b82d0e14e489d2379a.jpg',
                'Imagen2'=>'https://cdnnmundo1.img.sputniknews.com/img/104015/18/1040151806_0:83:3015:1978_1920x0_80_0_0_e6cac56820d4398c8fa656a20c08373d.jpg',
                'slug'=>'su30mki',
            ],
            //9.	Saab JAS 39 Gripen
            [
                'Nombre'=>'Saab JAS 39 Gripen',
                'Parrafo1'=>'El Saab JAS 39 Gripen forma parte de una totalmente nueva generación de cazas ligeros multiusos capaces de realizar una extensa gama de misiones aire-aire, aire-tierra y reconocimiento. La aeronave está diseñada en una mezcla de vuelo “Delta-canard” para dar una alta maniobrabilidad en combates cerrados o dogfight, entrando en servicio por primera ocasión con la Fuerza Aérea Sueca en 1997 y en la actualidad usado por los ejércitos del aire de la República Checa, Hungría, Suiza, Suecia, Sudáfrica y Tailandia.',
                'Parrafo2'=>'Gripen NG, la nueva versión basada en el Gripen C/D, puede ser armado con METEOR, AMRAAM, IRIS-T y misiles AIM-9. Esta nueva generación de aviones añade un enlace multifrecuencia de datos, sistema de misión de aviónica plenamente incluido, radar multimodo de extenso alcance PS05 y fusión de sensores. En medio de las misiones más destacadas realizadas por los Gripens, cabe resaltar las operaciones de enfrentamiento en Libia para ayudar la Operación Protector Unificado en 2011.',
                'Imagen1'=>'https://1.bp.blogspot.com/-8Pbe8dOtbYA/X00FQHr5gBI/AAAAAAAAZEs/r0htL6I-mUURQexcBYRx-ht15Ors9MCXwCLcBGAsYHQ/s1600/1600px-Saab_JAS_39_Gripen_at_Kaivopuisto_Air_Show%252C_June_2017_%2528altered%2529_copy.jpg',
                'Imagen2'=>'http://4everstatic.com/imagenes/850xX/aviacion/aviones-de-caza/saab-jas-39-gripen-170487.jpg',
                'slug'=>'saab_jas39_gripen',
            ],
            //10.	 F-16 Fighting Falcon
            [
                'Nombre'=>'F-16 Fighting Falcon',
                'Parrafo1'=>'El F-16 Fighting Falcon es un caza polivalente monomotor de probada efectividad en enfrentamiento, diseñado al inicio por los ingenieros de Gral. Dynamics para realizar misiones de superioridad aérea para la Fuerza Aérea de EE.UU. (USAF). A pesar del curso del tiempo, el F-16 se convirtió en un avión multiusos de primer grado en todo su lapso en servicio activo debido a la continua evolución de sus tecnologías.',
                'Parrafo2'=>'El programa del F-16 ha conseguido un enorme triunfo en el mercado a grado universal, siendo adquirido por 26 territorios con bastante más de 4.500 cazas fabricados hasta la fecha, con otros 54 más en orden para 15 consumidores. El avión hizo acto de presencia en enfrentamiento por primera ocasión a lo largo de la Operación Tormenta del Desierto en 1991. A partir de entonces, los F-16 se han usado extensamente en distintas misiones de enfrentamiento en Irak, Afganistán y Libia. Las últimas variantes del F-16, Block 50/52 y Block 60, unen modernas tecnologías y mejoras fundamentadas en la extensa experiencia de combate obtenida. Como resultado, las nuevas versiones del caza se entregan con aviónica avanzada, cabina de vuelo e instrumentación de última generación, así como nuevos sensores y paquetes de armas.',
                'Imagen1'=>'https://cdn.britannica.com/57/91857-050-466A0AD2/US-Air-Force-formation-F-16-Fighting-Falcons.jpg',
                'Imagen2'=>'https://i.pinimg.com/originals/99/96/26/9996266020467d13d92a0ad1d0540638.jpg',
                'slug'=>'f16_fighting_falcon',
            ],
            //Aviones de la segunda guerra mundial
            //1.	MESSERSCHMITT BF109
            [
                'Nombre'=>'MESSERSCHMITT BF109',
                'Parrafo1'=>'El caza por excelencia de la Luftwaffe contabilizó cerca de una decena de variantes desde el inicio hasta el final de la guerra, aunque las más populares serían las versiones Emil de 1938 y Bf 109G Gustav de 1941. En total, se produjeron unos 32.000 aparatos. El primer prototipo despegó en mayo de 1935 equipado con motores Rolls-Royce, aunque más tarde serían sustituidos por Daimler Benz, y su bautismo de fuego llegó con la Guerra Civil española. Su diseño, basado en combinar un tamaño reducido con una gran potencia, potenció su trepada para superar a sus adversarios. El BF-109 E, utilizado durante la Batalla de Inglaterra, alcanzaba los 570 kilómetros por hora y tenía un radio de acción de 560 kilómetros.',
                'Parrafo2'=>'Fue suministrado a varios Estados de menor importancia del Eje durante la Segunda Guerra Mundial, y sirvió en varios países durante muchos años después de la guerra. El Bf 109 fue el avión militar más extensamente producido de la Segunda Guerra Mundial, con 30 573 ejemplares construidos durante la guerra, y el avión de caza más producido de la historia, con un total de 33 984 unidades producidas hasta abril de 1945.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire01.jpg',
                'Imagen2'=>'https://live.staticflickr.com/65535/51675213933_27fea834ae_b.jpg',
                'slug'=>'messerschmitt_bf109',
            ],
            //2.	HAWKER HURRICANE
            [
                'Nombre'=>'HAWKER HURRICANE',
                'Parrafo1'=>'El Spitfire se llevó la fama, pero el Hurricane se apuntó el 80% de las bajas enemigas en la Batalla de Inglaterra, la mayor parte bombarderos mientras su compañero de ala se anotaba los derribos de cazas alemanes. Monoplaza equipado con ocho ametralladoras Browning en sus alas, podía alcanzar los 523 kilómetros por hora frente a los 650 del Spitfire. No obstante, era más barato y sencillo de pilotar, por lo que su número también era superior.',
                'Parrafo2'=>'En total fueron construidas 14.231 unidades hasta que finalizó la Segunda Guerra Mundial (1945), incluyendo cerca de 1400 aviones fabricados en Canadá por la empresa Canadian Car and Foundry, unos 3000 entregados a la Unión Soviética y unos 1200 convertidos a Sea Hurricane. Y también entregó unas 1808 cargas en Europa',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire02.jpg',
                'Imagen2'=>'https://upload.wikimedia.org/wikipedia/commons/d/de/Hawker_Hurricane%2C_Battle_of_Britain_Memorial_Flight_Members%27_day_2018_%28cropped%29.jpg',
                'slug'=>'hawker_hurricane',
            ],
            //3.	JU87 STUKA
            [
                'Nombre'=>'JU87 STUKA',
                'Parrafo1'=>'El sonido de las trompetas de Jericó de estos escuadrones marcó una época de terror en Europa. Lentos y vulnerables, los Stuka estaban equipados con una sirena que hacía un sonido infernal en sus ataques en picado, un sonido cuyo único objetivo era provocar miedo. Aunque fueron puestos a prueba en la Guerra Civil española, no participaron en el bombardeo de Guernica, creencia bastante común por su pertenencia a la Legión Condor. Estos aviones tuvieron bastante éxito al principio de la guerra como apoyo contra objetivos concretos en la guerra relampago, como columnas blindadas o puentes, aunque a partir de la Batalla de Inglaterra se quedaron muy desfasados. Eran biplazas con piloto y artillero.',
                'Parrafo2'=>'Aunque resistente, preciso y bastante efectivo en sus ataques, el Ju 87 era vulnerable a los entonces modernos aviones de caza, al igual que varios otros bombarderos en picado de la guerra. Sus deficiencias se hicieron evidentes a lo largo de la lucha de Inglaterra; su pobre maniobrabilidad, baja rapidez y poco armamento defensivo significaba que el Stuka necesitaba un profundo escolta de cazas para operar eficientemente.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire03.jpg',
                'Imagen2'=>'https://www.revell.de/out/pictures/master/product/1/9362420.jpg',
                'slug'=>'ju87 stuka',
            ],
            //4.	B17 Flying Fortress 'FORTALEZA VOLANTE'
            [
                'Nombre'=>'B17 Flying Fortress "Fortaleza Volante"',
                'Parrafo1'=>'La Fortaleza Volante fue la columna vertebral de los bombarderos estadounidenses durante la guerra. Cada avión contaba incluso con más de una docena de ametralladoras -con sus correspondientes artilleros- repartidas por todo el fuselaje para no dejar ningún punto muerto, y en los raid volaban en formación decenas y cientos de bombarderos para protegerse unos a otros de los ataques de los cazas. A pesar de ello, las pérdidas llegaron a superar una cuarta parte de los aviones por misión durante los ataques a Alemania, donde la Octava Fuerza Aérea de Estados Unidos los utilizó para bombardeos de alfombra contra complejos de fábricas y ciudades.',
                'Parrafo2'=>'Cada torreta está equipada con ametralladoras de 0.50 cal que mejoran las habilidades defensivas del B-17, haciendo de la «Fortaleza Voladora» un objetivo difícil para los cazas enemigos. Si bien no podía mover la misma carga de bombas que el Lancaster del Reino Unido, el B17 poseía miras de puntería de bombas muchísimo más exactas, ideales para bombardeos estratégicos.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire04.jpg',
                'Imagen2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Color_Photographed_B-17E_in_Flight.jpg/1200px-Color_Photographed_B-17E_in_Flight.jpg',
                'slug'=>'b17_flying_fortress',
            ],
            //5.	P51 MUSTANG
            [
                'Nombre'=>'P51 MUSTANG',
                'Parrafo1'=>'Otro de los aviones emblemáticos de la Segunda Guerra Mundial. Este caza de largo alcance, hasta casi 4.000 kilómetros, entró a mediados de la guerra, siendo uno de los más rápidos, reactores aparte: podía alcanzar los 12.000 metros de altura, aunque su efectividad era mínima en estas cotas, y su velocidad superaba los 700 kilómetros por hora. Además de caza de apoyo a bombarderos, también actuó como cazabombardero equipado con cohetes.',
                'Parrafo2'=>'Las fuerzas aéreas aliadas en Europa necesitaban una escolta de caza de largo alcance para las formaciones de bombarderos vulnerables, NAA diseñó y produjo el P51 para este papel. Inicialmente se descubrió que carecía de rendimiento a gran altitud, el motor Allison V-1710 fue reemplazado por la unidad Rolls-Royce Merlin más potente.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire05.jpg',
                'Imagen2'=>'https://www.ventos.site/wp-content/uploads/2020/12/p51-mustang.jpg',
                'slug'=>'p51_mustang',
            ],
            //6.	IL2 STURMOVIK
            [
                'Nombre'=>'IL2 STURMOVIK',
                'Parrafo1'=>'El avión más producido de la historia, unas 36.000 unidades en combinación con su sucesor el Il-10, fue el verdugo de los tanques alemanes en el frente del Este. Este bombardero táctico, conocido como el Tanque Volador, era tan resistente a los impactos que algunos pilotos alemanes se dejaron los cargadores en ellos sin derribarlos, aunque ello también su talón de Aquiles: era uno de los aviones más lentos de la guerra. No obstante, sirvió con creces hasta el final de la contienda, siendo equipado con cañones más potentes cuando Alemania puso en servicios sus mejores tanques, como el Tiger I. Este bombardero tuvo numerosas variantes, incluidos monoplazas y biplazas con artillero.',
                'Parrafo2'=>'La URSS continuamente consideró al poder aéreo como un instrumento de apoyo a las fuerzas terrestres, y a lo largo de los años treinta dedicó enorme atención a la construcción de un avión poderosamente salvaguardado y especializado en ataque y apoyo cercano. Entre otros varios proyectos, la organización dedicada al armamento aeronáutico, el NII-AV, se centró en el diseño de las superiores armas aéreas de todo el mundo, integrados cañones de grueso calibre, pesados cañones sin retroceso y bombas perforantes de carga hueca, así como en la instalación de cabezas de guerra semejantes en cohetes aire-superficie.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire06.jpg',
                'Imagen2'=>'https://vintageaviationecho.com/wp-content/uploads/2017/08/STVK01.09.jpg',
                'slug'=>'il2_sturmovik',
            ],
            //7.	MITSUBISHI A6M ZERO
            [
                'Nombre'=>'MITSUBISHI A6M ZERO',
                'Parrafo1'=>'Concebido para las operaciones aeronavales, este avión sirvió con eficacia hasta 1942, cuando los estadounidenses introdujeron el F4U Corsair y el F6F Hellcat en el teatro del Pacífico. Fue concebido como la punta de lanza de la armada japonesa, aunque acabó siendo el arma de los kamikaze en el desesperado intento de ganar una guerra perdida.',
                'Parrafo2'=>'La construcción única de una pieza para las alas y el fuselaje junto con un fuselaje más ligero contribuyó a la exitosa tasa de muertes del A6M. A medida que continuaba el conflicto, los aviones y la estrategia aliados rápidamente hicieron que el A6M Zero quedara obsoleto, y muchos de ellos se utilizaron como aviones kamikaze en los últimos días de la guerra.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire07.jpg',
                'Imagen2'=>'https://www.mozaweb.com/es/mozaik3D/TOR/modernkor/mitsubishi_zero/960.jpg',
                'slug'=>'mitsubishi_a6m_zero',
            ],
            //8.	MESSERSCHMITT ME262
            [
                'Nombre'=>'MESSERSCHMITT ME262',
                'Parrafo1'=>'Rusos, aliados y alemanes desarrollaron sus propios reactores, aunque el más conocido fue éste, con cientos de aparatos al final de la guerra y un escuadrón mítico, el Jagdgeschwader 7 del as Walter Nowotny. Una de las armas secretas de Hitler, era capaz de alcanzar los 900 kilómetros por hora y tenía un radio de acción de 1.000 kilómetros. Entró en servicio a mediados de 1944 para combatir en el frente Occidental contra las formaciones de bombarderos de los Aliados y sus protectores P51 Mustang, aunque su potencial para acabar con su supremacía del aire fue desaprovechado cuando Hitler pensó que era más útil como cazabombardero.',
                'Parrafo2'=>'Un diseño realmente innovador, con el potencial de modificar el resultado de la segunda guerra mundial, el Me 262 arribó bastante tarde para contrarrestar los números superiores de la fuerza aérea aliada. Acreditado por ser el primer caza a reacción operativo, trayendo consigo los beneficios de un mayor rendimiento y también un armamento más pesado que los cazas aliados. Impulsado por 2 turboventiladores Junker Jumo 004B le otorgó al Me262 una rapidez máxima de 560 mph, tal era la virtud, la mejor táctica de los pilotos aliados ha sido eliminar el Me262 a medida que aún estaban en tierra.',
                'Imagen1'=>'https://e00-elmundo.uecdn.es/especiales/2009/09/internacional/segunda_guerra_mundial/img/armas/aire08.jpg',
                'Imagen2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Me_262_flight_show_at_ILA_2006_%28cropped%29.jpg/1200px-Me_262_flight_show_at_ILA_2006_%28cropped%29.jpg',
                'slug'=>'messerschmitt_me262',
            ],
            //9.	Douglas SBD Dauntless
            [
                'Nombre'=>'Douglas SBD Dauntless',
                'Parrafo1'=>'El ataque a Pearl Harbor ha cambiado la igualdad del poder naval a partir del acorazado hasta el portaaviones. Formando la base de la capacidad de ataque basada en portaaviones de la Armada de los EE. UU., El SBD (bombardero-explorador Douglas) Dauntless jugó un papel esencial en la Contienda de Midway, importante en la devastación de los portaaviones de la Armada japonesa.',
                'Parrafo2'=>'Capaz de arrojar bombas con exactitud con un alcance operativo de bastante más de 850 millas, el SBD ha sido el bombardero en picado más efectivo de la Segunda Guerra Mundial.',
                'Imagen1'=>'https://www.patriotspoint.org/news-and-events/wp-content/uploads/2009/12/sbdmidway1.jpg',
                'Imagen2'=>'https://www.ventos.site/wp-content/uploads/2021/05/Screenshot_36.png',
                'slug'=>'douglas_sbd_dauntless',
            ],
            //10.	Focke Wulf FW190
            [
                'Nombre'=>'Focke Wulf FW190',
                'Parrafo1'=>'Arribó al servicio operativo en 1941, luego de un rediseño para acomodar el motor BMW más enorme y potente, proporcionando una rapidez máxima de 410 mph. El FW-190 lleva un armamento formidable, con ametralladoras montadas en la nariz, cañones de 0,8 pulgadas en las raíces de las alas y otros 2 cañones montados en el ala central.',
                'Parrafo2'=>'Es la integración de dichos cañones lo cual hizo del FW-190 un avión de enfrentamiento aéreo tan devastador y un riesgo en especial para las formaciones de bombarderos aliados. Pasaría un año más a partir de su introducción hasta que los socios recuperaran la virtud.',
                'Imagen1'=>'https://www.asisbiz.com/il2/Fw-190A/SG3/images/Focke-Wulf-Fw-190A-5.SG3-Black-2-WNr-0461-begins-its-mission-at-Immola-2nd-Jul-1944-12.jpg',
                'Imagen2'=>'https://www.ventos.site/wp-content/uploads/2021/05/Screenshot_39.png',
                'slug'=>'focke_wulf_fw190',
            ],
            //11.	B-29 Superfortress
            [
                'Nombre'=>'B-29 Superfortress',
                'Parrafo1'=>'Con el objeto de sustituir al B17, el B29 Superfortress entró en servicio alrededor de 1944 en el teatro del Pacífico desplegado contra objetivos en Japón continental. Por primera ocasión en un bombardero, la tripulación gozó de un fuselaje presurizado, con la parte delantera y trasera del avión conectadas por un túnel presurizado.',
                'Parrafo2'=>'Elaborado para operar a altitudes más altas y rangos más largos ofrecía una mejor defensa contra los militares enemigos. Un efecto colateral bastante visible de los motores Wright Cyclone son las estelas reveladoras que quedan en la estela del avión, algo que los pilotos de enfrentamiento enemigos utilizarían para cazar B29.',
                'Imagen1'=>'https://es-academic.com/pictures/eswiki/66/B29.maxwell.750pix.jpg',
                'Imagen2'=>'http://www.aerohispanoblog.com/wp-content/uploads/2013/11/4chan-hr1330531977199.jpg',
                'slug'=>'b29_superfortress',
            ],
            //12.	Supermarine Spitfire
            [
                'Nombre'=>'Supermarine Spitfire',
                'Parrafo1'=>'A menudo mal citado como el avión que ganó la Batalla de Gran Bretaña, el Supermarine Spitfire es un caza más avanzado técnicamente, pero el Hawker Hurricane estaba disponible en cantidades mucho mayores. Desarrollado por RJ Mitchell del Supermarine S6B ganador del trofeo Schneider, el Spitfire presentaba una construcción monocasco de acero reforzado y el famoso diseño de ala elíptica.',
                'Parrafo2'=>'Equipado con los motores Rolls-Royce V12 Merlin, lo que le dio al Spitfire una velocidad máxima de 367 mph, aunque la falta de inyección de combustible causó falta de combustible en maniobras de picado empinadas. Los aviones posteriores fueron equipados con el restrictor RAE para evitar tales incidentes.',
                'Imagen1'=>'https://cdn.britannica.com/09/60709-050-6AF133CD/Supermarine-Spitfire-fighter-plane-Britain-World-War-1938.jpg',
                'Imagen2'=>'https://www.ventos.site/wp-content/uploads/2021/05/Screenshot_41.png',
                'slug'=>'supermarine_spitfire',
            ],
            //13.	Avro Lancaster
            [
                'Nombre'=>'Avro Lancaster',
                'Parrafo1'=>'Uno de los aviones más famosos de la Segunda Guerra Mundial debido a la ahora famosa incursión «Dambusters», Avro Lancaster se convirtió en el pilar del Bomber Command.',
                'Parrafo2'=>'Capaz de mover la carga de bombas más pesada de cualquier avión a lo largo de la Segunda Guerra Mundial, el tipo se asocia más popular con las bombas que rebotan usadas en las incursiones Dambuster y las armas Grand Slam de 22.000 libras. A lo largo de la Segunda Guerra Mundial se construyeron un total de 7.377 Lancaster, en la actualidad solo quedan 17 ejemplares, de los cuales solo 2 permanecen en condiciones de volar.',
                'Imagen1'=>'https://www.hispaviacion.es/wp-content/uploads/2017/02/lancaster2.jpg',
                'Imagen2'=>'https://www.ventos.site/wp-content/uploads/2021/05/Screenshot_42.png',
                'slug'=>'avro_lancaster',
            ],
            //Los dos mejores aviones de combate
            //1.	F-35 Lightning II
            /* [
                'Nombre'=>'F-35 Lightning II',
                'Parrafo1'=>'El Lockheed Martin F-35 Lightning II (rayo II en inglés) es un avión de enfrentamiento polivalente de quinta generación, monoplaza y con capacidad furtiva, desarrollado bajo el programa Joint Strike Fighter para sustituir al F-16, A-10, F/A-18 y al AV-8B en misiones de ataque a tierra, reconocimiento y custodia aérea. Este avión ha sido diseñado en 3 variantes diversas: el F-35A para despegue y aterrizaje usual (CTOL), el F-35B capaz de hacer despegues cortos y aterrizajes verticales (STOVL) y el F-35C que es una variante naval capaz de operar en portaaviones.',
                'Parrafo2'=>'El F-35 es un caza de peso medio y monomotor, parece una versión más pequeña, más convencional y con un solo motor, del Lockheed Martin F-22 Raptor pesado y bimotor, y de hecho ambos modelos comparten muchos elementos comunes.',
                'Imagen1'=>'https://i0.wp.com/aeronauticapy.com/wp-content/uploads/2021/12/thumb2-lockheed-martin-f-35-lightning-ii-f-35a-american-fighter-military-aircraft-f-35.jpg?fit=710%2C444&ssl=1',
                'Imagen2'=>'https://fullfatthings-keyaero.b-cdn.net/sites/keyaero/files/inline-images/Lockheed%20Martin%20F-35A%20Lightning%20II%20%5BUSAF%20-%20SA%20Alexander%20Cook%5D%20%231.jpg',
                'slug'=>'f35_lightning_ii',
            ], */
            //2.	Sukhoi Su-75 Checkmate
            [
                'Nombre'=>'Sukhoi Su-75 Checkmate',
                'Parrafo1'=>'Se presentó un prototipo en el MAKS (exhibición aérea) de 2021 con la asistencia del presidente de Rusia, Vladimir Putin. El vuelo inaugural de Checkmate se espera para 2023 y las entregas iniciales están previstas para 2026-2027. El Checkmate está diseñado para ser de bajo costo y para exportación, y puede competir con el Lockheed Martin F-35 Lightning II y otros aviones de la misma categoría de peso liviano a mediano. Se prevé que la producción sea de 300 aviones durante 15 años.',
                'Parrafo2'=>'Según los diseñadores del avión, el Checkmate está diseñado para volar con un alcance de hasta 3.000 km (1.864 millas), transportar una carga útil de hasta 7.400 kg (16.314 lb) y alcanzar velocidades de hasta Mach 2. El avión de combate también contará con una bahía de armas interna con 5 misiles y un cañón automático.',
                'Imagen1'=>'https://fotos.perfil.com/2021/08/26/trim/1280/720/2608avion-1222396.jpg',
                'Imagen2'=>'https://i0.wp.com/www.aviacionline.com/wp-content/uploads/2021/07/Checkmate-presentacion-al-publico.1.jpg?ssl=1',
                'slug'=>'sukhoi_su75_checkmate',
            ],
            //El avion mas rapido del mundo
            //Lockheed SR-71 Blackbird
            [
                'Nombre'=>'Lockheed SR-71 Blackbird',
                'Parrafo1'=>'Este avión, fabricado por la estadounidense Lockheed, surcó los cielos a partir del 22 de diciembre de 1964 hasta 1998, cuando fue retirado. Es, a día actual, el avión más veloz de todo el mundo y es capaz de volar a Mach 3.32. Eso equivale a 3.540 kilómetros por hora a 24.000 metros. 3 veces la velocidad del sonido.',
                'Parrafo2'=>'El Lockheed SR-71, también conocido como Blackbird, fue un avión de reconocimiento estratégico de largo alcance. Fue desarrollo por Blackheed como un "black project", es decir, un plan de elevado secreto. Por cierto, era un avión elaborado para eludir radares, aunque distaba mucho de ser del todo invisible.',
                'Imagen1'=>'https://i.blogs.es/136f0b/nasm-nasm-9a08308/1366_2000.jpeg',
                'Imagen2'=>'https://i.blogs.es/32274e/1920px-lockheed_sr-71_blackbird/1366_2000.jpeg',
                'slug'=>'lockheed_sr71_blackbird',
            ],
            //El avion mas poderoso del mundo
            //Sukhoi Su-57
            [
                'Nombre'=>'Sukhoi Su-57',
                'Parrafo1'=>'Es el resultado final del programa de la Fuerza Aérea de Rusia en el 2001 para el diseño de un nuevo avión, conocido como PAK FA. Un año luego la oficina de diseño Sukhoi presentó un primer ejemplar al programa con el nombre de T-50. En 2017 se admitió el plan y pasó a adoptar un nombre oficial, denominándose Su-57. ',
                'Parrafo2'=>'Es el primer avión de fabricación rusa en utilizar tecnología furtiva para disminuir la huella de radar y fabricado en grandes cantidades. Anteriormente, hubo varios prototipos experimentales de la Unión Soviética como el Su-47, y se anunció como una evolución tecnológica del MiG-29 y del Su-27. El primer prototipo despegó el 29 de enero de 2010 en Komsomolsk del Amur.',
                'Imagen1'=>'https://avionesdecombate.org/wp-content/uploads/2019/09/Sukhoi-Su-57-T-50-PAK-FA.jpg',
                'Imagen2'=>'https://cdni.rbth.com/rbthmedia/images/2021.04/original/60806a4215e9f97e36742e09.jpg',
                'slug'=>'sukhoi_su57',
            ],
            //Mejores fuerzas aéreas del mundo
            [
                'Nombre'=>'1°Estados Unidos, 2°Rusia, 3°China',
                'Parrafo1'=>'Rusia tiene en servicio 4.143 unidades de aeronaves, lo que supone el 8 % de la flota mundial de aviones militares, reza el texto del informe. Mientras, EE.UU. ocupa el primer lugar con 13.232 aeronaves (el 25 % de la flota mundial). ',
                'Parrafo2'=>'Rusia es seguida por China, con 3.260 aviones militares y helicópteros, la India (2.119 aeronaves) y Corea del Sur, con 1.581 aviones y helicópteros militares. Este año 1.531 aviones militares han formado parte de la aviación de combate rusa.',
                'Imagen1'=>'https://www.infodefensa.com/images/showid2/4705112?w=900&mh=700',
                'Imagen2'=>'https://cdnnmundo1.img.sputniknews.com/img/07e5/0b/08/1117974322_0:60:2400:1860_1920x0_80_0_0_0ba136c515c1c22e72f85f04e21cbdde.jpg',
                'slug'=>'mejores_fuerzas_aéreas_del_mundo',
            ]
        ]);
        //Creacion del Modelo
        //Migracion a la BD (php artisan db:seed)
    }
}
