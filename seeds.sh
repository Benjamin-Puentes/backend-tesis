#!/bin/bash

# Generar modelos
php artisan make:model Usuario -m || true
php artisan make:model Compra -m || true
php artisan make:model Documento -m || true
php artisan make:model Almacen -m || true
php artisan make:model Herramienta -m || true
php artisan make:model HerramientaSolicitud -m || true
php artisan make:model Region -m || true
php artisan make:model Venta -m || true
php artisan make:model EstadoVenta -m || true
php artisan make:model MetodoDespacho -m || true
php artisan make:model MetodoPago -m || true
php artisan make:model VentaDiscoDuro -m || true
php artisan make:model Provincia -m || true
php artisan make:model SolicitudResiduos -m || true
php artisan make:model HerramientaEstado -m || true
php artisan make:model LoteResiduos -m || true
php artisan make:model DiscoDuro -m || true
php artisan make:model Ram -m || true
php artisan make:model Periferico -m || true
php artisan make:model TipoEntrada -m || true
php artisan make:model TipoPeriferico -m || true
php artisan make:model Direccion -m || true
php artisan make:model Ciudad -m || true
php artisan make:model VentaRam -m || true
php artisan make:model VentaPeriferico -m || true
php artisan make:model TamanoDiscoDuro -m || true
php artisan make:model Tamano -m || true
php artisan make:model TamanoRam -m || true
php artisan make:model TipoRam -m || true
php artisan make:model VelocidadRam -m || true
php artisan make:model Estado -m || true
php artisan make:model Disponibilidad -m || true
php artisan make:model Descuento -m || true
php artisan make:model Marca -m || true

# Generar seeders
php artisan make:seeder UsuarioSeeder || true
php artisan make:seeder CompraSeeder || true
php artisan make:seeder DocumentoSeeder || true
php artisan make:seeder AlmacenSeeder || true
php artisan make:seeder HerramientaSeeder || true
php artisan make:seeder HerramientaSolicitudSeeder || true
php artisan make:seeder RegionSeeder || true
php artisan make:seeder VentaSeeder || true
php artisan make:seeder EstadoVentaSeeder || true
php artisan make:seeder MetodoDespachoSeeder || true
php artisan make:seeder MetodoPagoSeeder || true
php artisan make:seeder VentaDiscoDuroSeeder || true
php artisan make:seeder ProvinciaSeeder || true
php artisan make:seeder SolicitudResiduosSeeder || true
php artisan make:seeder HerramientaEstadoSeeder || true
php artisan make:seeder LoteResiduosSeeder || true
php artisan make:seeder DiscoDuroSeeder || true
php artisan make:seeder RamSeeder || true
php artisan make:seeder PerifericoSeeder || true
php artisan make:seeder TipoEntradaSeeder || true
php artisan make:seeder TipoPerifericoSeeder || true
php artisan make:seeder DireccionSeeder || true
php artisan make:seeder CiudadSeeder || true
php artisan make:seeder VentaRamSeeder || true
php artisan make:seeder VentaPerifericoSeeder || true
php artisan make:seeder TamanoDiscoDuroSeeder || true
php artisan make:seeder TamanoSeeder || true
php artisan make:seeder TamanoRamSeeder || true
php artisan make:seeder TipoRamSeeder || true
php artisan make:seeder VelocidadRamSeeder || true
php artisan make:seeder EstadoSeeder || true
php artisan make:seeder DisponibilidadSeeder || true
php artisan make:seeder DescuentoSeeder || true
php artisan make:seeder MarcaSeeder || true

# Generar factories
php artisan make:factory UsuarioFactory --model=Usuario || true
php artisan make:factory CompraFactory --model=Compra || true
php artisan make:factory DocumentoFactory --model=Documento || true
php artisan make:factory AlmacenFactory --model=Almacen || true
php artisan make:factory HerramientaFactory --model=Herramienta || true
php artisan make:factory HerramientaSolicitudFactory --model=HerramientaSolicitud || true
php artisan make:factory RegionFactory --model=Region || true
php artisan make:factory VentaFactory --model=Venta || true
php artisan make:factory EstadoVentaFactory --model=EstadoVenta || true
php artisan make:factory MetodoDespachoFactory --model=MetodoDespacho || true
php artisan make:factory MetodoPagoFactory --model=MetodoPago || true
php artisan make:factory VentaDiscoDuroFactory --model=VentaDiscoDuro || true
php artisan make:factory ProvinciaFactory --model=Provincia || true
php artisan make:factory SolicitudResiduosFactory --model=SolicitudResiduos || true
php artisan make:factory HerramientaEstadoFactory --model=HerramientaEstado || true
php artisan make:factory LoteResiduosFactory --model=LoteResiduos || true
php artisan make:factory DiscoDuroFactory --model=DiscoDuro || true
php artisan make:factory RamFactory --model=Ram || true
php artisan make:factory PerifericoFactory --model=Periferico || true
php artisan make:factory TipoEntradaFactory --model=TipoEntrada || true
php artisan make:factory TipoPerifericoFactory --model=TipoPeriferico || true
php artisan make:factory DireccionFactory --model=Direccion || true
php artisan make:factory CiudadFactory --model=Ciudad || true
php artisan make:factory VentaRamFactory --model=VentaRam || true
php artisan make:factory VentaPerifericoFactory --model=VentaPeriferico || true
php artisan make:factory TamanoDiscoDuroFactory --model=TamanoDiscoDuro || true
php artisan make:factory TamanoFactory --model=Tamano || true
php artisan make:factory TamanoRamFactory --model=TamanoRam || true
php artisan make:factory TipoRamFactory --model=TipoRam || true
php artisan make:factory VelocidadRamFactory --model=VelocidadRam || true
php artisan make:factory EstadoFactory --model=Estado || true
php artisan make:factory DisponibilidadFactory --model=Disponibilidad || true
php artisan make:factory DescuentoFactory --model=Descuento || true
php artisan make:factory MarcaFactory --model=Marca || true

