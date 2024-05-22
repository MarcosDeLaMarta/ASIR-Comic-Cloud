<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            [
                'titulo' => 'AQUAMAN ESPECIAL 80 ANIVERSARIO',
                'autor' => 'BALDEMAR RIVAS - BRANDON THOMAS',
                'precio' => 19.99,
                'imagen' => 'dc/aquaman.jpg',
                'genero' => 'DC',
                'descripcion' => 'Libro de historietas encuadernado en cartoné de 192 páginas interiores en color más cubiertas que contiene la traducción de los cómic books originales Aquaman 80th Anniversary 100-Page Super Spectacular, DC Nuclear Winter Special (Extracto Follow the Water), DC The Doomed and the Damned',
            ],
            [
                'titulo' => 'BATMAN # 119 FRONTERA INFINITA 6',
                'autor' => 'AMES TYNION IV - JORGE JIMÉNEZ - RICARDO LÓPEZ ORTIZ',
                'precio' => 9.99,
                'imagen' => 'dc/batman.jpg',
                'genero' => 'DC',
                'descripcion' => 'Cuaderno de historietas grapado de 72 páginas interiores en color más cubiertas que contiene la traducción de los comic books originales Batman número 111 y Batman: Fear State Alpha número 1 publicado en USA por DC Comics.El Espantapájaros hace su movimiento... ¡y desencadena el Estado de miedo!',
            ],
            [
                'titulo' => 'BATMAN CATWOMAN # 09',
                'autor' => 'LIAM SHARP - TOM KING',
                'precio' => 12.50,
                'imagen' => 'dc/catwoman.jpg',
                'genero' => 'DC',
                'descripcion' => 'Cuaderno de historietas grapado de 24 páginas interiores en color más cubiertas que contiene la traducción del comic book original Batman/Catwoman número 9 publicado en USA por DC Comics. Serie de 12 volúmenes.Batman y Catwoman vuelven a estar juntos, ¡pero el Joker está a punto de complicar las cos',
            ],
            [
                'titulo' => 'SUPERMAN # 41',
                'autor' => 'JOHN ROMITA JR',
                'precio' => 4.99,
                'imagen' => 'dc/PorIdentida.jpg',
                'genero' => 'DC',
                'descripcion' => 'Cuaderno de historietas grapado de 24 páginas interiores en color más cubiertas que contiene la traducción del comic book original Superman número 40 publicado en USA por DC Comics. Aunque muy pronto daremos la bienvenida al sustituto de Geoff Johns como guionista regular de Superman, este mes John ...',
            ],
            [
                'titulo' => 'DAREDEVIL # 29',
                'autor' => 'CHIP ZDARSKY - MANUEL GARCÍA',
                'precio' => 7.99,
                'imagen' => 'marvel/daredevil.jpg',
                'genero' => 'Marvel',
                'descripcion' => 'Cuaderno de historietas grapado de 32 páginas interiores en color más cubiertas que contiene la traducción del comic book original Daredevil número 36 publicado en USA por Marvel Comics.¡Último número! Después de un romance que ha florecido a lo largo de los dos últimos años, el Alcalde Fisk y María...',
            ],
            [
                'titulo' => 'MASACRE SAMÚRAI # 01',
                'autor' => 'SANSHIRO KASAMA - HIKARU UESUGI',
                'precio' => 8.95,
                'imagen' => 'marvel/deadpool.jpg',
                'genero' => 'Marvel',
                'descripcion' => 'Libro de historietas de estilo manga y de género shonen (dirigido al púnlico juvenil) encuadernado en rústica de 232 páginas interiores en blanco y negro más cubiertas con sobrecubierta y sentido de lectura oriental. Sanshiro Kasama y Hikaru Uesugi escriben e ilustran este manga protagonizado por e...',
            ],
            [
                'titulo' => 'EL ASOMBROSO SPIDERMAN TOMO # 01',
                'autor' => 'JOE M. STRACZYNSKI - JOHN ROMITA JR.',
                'precio' => 22.95,
                'imagen' => 'marvel/spiderman.jpg',
                'genero' => 'Marvel',
                'descripcion' => 'Libro de historietas encuadernado en cartoné de 208 páginas interiores en color más cubiertas que contiene la traducción de los comic books originales Amazing Spider-Man Volume 2 números 30 al 35, 37, 38 publicados en USA por Marvel Comics. ¡Arranca la única serie abierta dentro de Marvel Saga! ',
            ],
            [
                'titulo' => 'SPIDERWOMAN DE HOPELESS',
                'autor' => 'DENNIS HOPELESS - ROBBIE THOMPSON',
                'precio' => 47.95,
                'imagen' => 'marvel/spiderwoman.jpg',
                'genero' => 'Marvel',
                'descripcion' => 'Libro de historietas encuadernado en rústica de 696 páginas interiores en color más cubiertas con solapas que contiene la traducción de los comic books originales Spiderwoman Volume 4 números 5 a 20, Spider-Woman Volume 5 números 1 a 17, Spider-Women Alpha y Omega, Spider-Gwen números 7 a 8,',
            ],
            [
                'titulo' => 'LA BLANCANIEVES PELIRROJA # 10',
                'autor' => 'SORATA AKIDUKI',
                'precio' => 7.60,
                'imagen' => 'manga/pelirroja.jpg',
                'genero' => 'Manga',
                'descripcion' => 'Libro de historietas de estilo manga y de género shojo (orientado al público juvenil) femenino encuadernado en rústica de 188 páginas interiores en blanco y negro más cubiertas con sobrecubierta y sentido de lectura oriental. Serie de 22 volúmenes.ESTE VOLUMEN INCLUYE UNA SAGA ESPECIAL DONDE DESCUBR.',
            ],
            [
                'titulo' => 'DRAGON BALL # 01 ULTIMATE EDITION',
                'autor' => 'AKIRA TORIYAMA',
                'precio' => 8.50,
                'imagen' => 'manga/Dragon-ball.jpg',
                'genero' => 'Manga',
                'descripcion' => 'Libro de historietas de estilo manga y de género shonen (orientado al público juvenil) encuadernado en rústica de 240 páginas interiores en blanco más cubiertas con sobrecubierta y sentido de lectura oriental. Serie de 34 volúmenes Son Goku es un chico muy especial que, tras la muerte de su abuelo',
            ],
            [
                'titulo' => 'NII-CHAN',
                'autor' => 'HARADA',
                'precio' => 9.45,
                'imagen' => 'manga/nilchan.jpg',
                'genero' => 'Manga',
                'descripcion' => 'Libro de historietas de estilo manga y de género shonen (orientado al público juvenil) encuadernado en rústica de 240 páginas interiores en blanco más cubiertas con sobrecubierta y sentido de lectura oriental. Serie de 34 volúmenes Son Goku es un chico muy especial que, tras la muerte de su abuelo',
            ],
            [
                'titulo' => 'TOKYO REVENGERS # 04',
                'autor' => 'KEN WAKUI',
                'precio' => 16.60,
                'imagen' => 'manga/tokyo.jpg',
                'genero' => 'Manga',
                'descripcion' => 'Libro de historietas de estilo manga y de género shonen (orientado al público juvenil) encuadernado en rústica de 400 páginas interiores en blanco y negro más cubiertas con sobrecubierta y sentido de lectura oriental. DA COMIENZO LA BATALLA ENTRE LA TOMAN Y LA WALHALLA: EL HALLOWEEN SANGRIENTO!.',
            ],
        ]);
    }
}
