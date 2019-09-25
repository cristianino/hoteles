<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotel = new Hotel ();
        $hotel->name = "Cocoplum Beach";
        $hotel->description = "El hotel Cocoplum Beach tiene su principal atractivo en su privilegiada ubicación frente al Caribe, en la colombiana isla de San Andrés. Sus habitaciones se encuentran equipadas con televisor, caja fuerte, aire acondicionado, minibar, escritorio, sofá y balcón, incluyendo además baño privado con ducha y albornoz. También existe la posibilidad de hospedarse en habitaciones familiares con capacidad para seis personas distribuidas en dos dormitorios. El alojamiento cuenta con piscina, parque infantil, salón de belleza y spa. Además, ofrece servicio de recepción las 24 horas, lavandería, wifi, personal de cuidado infantil, alquiler de bicicletas, consigna de equipaje y cambio de divisas. El hotel Cocoplum Beach ofrece una amplia gama de servicios gastronómicos en sus cinco ambientes, pudiéndose elegir entre platos regionales e internacionales. Asimismo, el bar que se ubica en la playa brinda la posibilidad de disfrutar diferentes licores. La playa se encuentra a escasos 100 metros, mientras que el Cayo Rocoso se ubica a menos de 500 metros.";
        $hotel->price = "388.157";
        $hotel->address = "Via a SanLuis 43-39";
        $hotel->country = "Colombia";
        $hotel->city = "San Andrés";
        $hotel->stars = 3;
        $hotel->image = "https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/56/99/569901_v1.jpeg";
        $hotel->save();

        $hotel = new Hotel ();
        $hotel->name = "Sol Caribe San Andres";
        $hotel->description = "El hotel Sol Caribe San Andres destaca por su ubicación a menos de cinco minutos caminando de la playa, así como por su proximidad al centro de la población isleña. Todas las habitaciones disponen de baño privado y están climatizadas con aire acondicionado. Asimismo, tienen televisor, minibar y caja fuerte. Los huéspedes pueden disfrutar en el hotel Sol Caribe San Andres de piscina al aire libre, así como de un gimnasio y de una discoteca situada en la azotea. También cuenta con centro de negocios y conexión wifi. Por otro lado, hay personal de animación y un mostrador de información turística desde el que se organizan actividades acuáticas y excursiones. El hotel dispone de restaurantes en los que se sirve comida internacional y regional, así como de servicio de bar. La Punta Norte se encuentra a poco más de diez minutos de trayecto en automóvil. Por otro lado, se puede llegar al aeropuerto caminando solo un cuarto de hora.";
        $hotel->price = "657.637";
        $hotel->address = "Avenida Coĺon";
        $hotel->country = "Colombia";
        $hotel->city = "San Andrés";
        $hotel->stars = 4;
        $hotel->image = "https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/59/06/590686_v3.jpeg";
        $hotel->save();

        $hotel = new Hotel ();
        $hotel->name = "Hosteria Mar Y Sol";
        $hotel->description = "La Hosteria Mar Y Sol se destaca por su arquitectura tradicional y por estar rodeado de la exuberante naturaleza del Caribe. Sus luminosas habitaciones están equipadas con televisor de pantalla plana, aire acondicionado, escritorio, minibar y baño privado con ducha y amenities. También disponen de terraza con hamaca y sillas. En la Hosteria Mar Y Sol se ofrece wifi, parking y transporte gratuitos. Sumado a esto, cuenta con piscina, jardines, sala de lectura, juegos de mesa, lavandería, alquiler de vehículos e información turística. El desayuno buffet, los platos típicos de la región Caribe, así como cócteles y bebidas de frutos autóctonos, se degustan en su restaurante Maná, desde el cual, además, se observa el bello jardín del establecimiento. La playa Charquitos está a diez minutos a pie del hotel, en tanto que el Hoyo Soplador y la Cueva de Morgan, se encuentran a cinco y 15 minutos en automóvil, respectivamente.";
        $hotel->price = "162.539";
        $hotel->address = "Punta Sur, km 17";
        $hotel->country = "Colombia";
        $hotel->city = "San Andrés";
        $hotel->stars = 3;
        $hotel->image = "https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/20/09/2009731_v8.jpeg";
        $hotel->save();

        $hotel = new Hotel ();
        $hotel->name = "Hotel Casablanca";
        $hotel->description = "El Hotel Casablanca es un alojamiento de 4 estrellas situado en primera línea de playa y comprometido con la conservación del medio ambiente. Dispone de habitaciones estándar, superiores y cabañas, con capacidades de entre dos y cuatro personas. Todas ellas están equipadas con aire acondicionado, televisor de pantalla plana, caja fuerte y minibar. Cuentan además con baño propio y secador de cabello. Desde algunas es posible contemplar el océano. El Hotel Casablanca es un establecimiento libre de humos que ofrece a sus huéspedes conexión wifi gratuita, así como servicio de traslado y alquiler de automóviles. Cuenta con piscina al aire libre, jardín, terraza, solárium, sala de reuniones y recepción abierta las 24 horas. El hotel dispone de cinco restaurantes temáticos, entre los que destaca el Casablanca, que ofrece un amplio menú de platos internacionales. Por su parte, el restaurante Mahi-Mahi está especializado en cocina asiática. La Bahía Sardina y Punta Norte quedan a menos de un kilómetro del alojamiento.";
        $hotel->price = "733.984";
        $hotel->address = "Avenida Colombia con Avenida Costa Rica, 3- 59";
        $hotel->country = "Colombia";
        $hotel->city = "San Andrés";
        $hotel->stars = 4;
        $hotel->image = "https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/55/92/559286_v4.jpeg";
        $hotel->save();

    }
}
