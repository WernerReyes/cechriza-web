<?php
require_once 'classes/equipment.php';

$equipment_functions = array(
    new EquipmentFunction("6", "Valorizadoras"),
    new EquipmentFunction("1", "Clasificadoras"),
    new EquipmentFunction("2", "Sistema de Depósito"),
    new EquipmentFunction("3", "Recicladoras"),
    new EquipmentFunction("4", "Contadoras"),
    new EquipmentFunction("5", "Sistemas de Protección de Efectivo"),
);


$equipments = array(
    new Equipment(
        "1",
        "kisan - Newton 30",
        "Clasificadora de billetes de alta velocidad y tamaño compacto.",
        "Clasificadora de billetes de alta velocidad y tamaño compacto. La Newton 30 maneja grandes volúmenes de efectivo (billetes, cheques, vales y cupones TITO), admite reconocimiento de número de serie a doble cara y mejora la eficiencia del manejo diario de efectivo.",
        "img/equipments/kisan/newton_30.png",
        1,
        [
            "Bolsillos" => "2 de salida + 1 de rechazo",
            "Capacidad de tolva" => "600 billetes",
            "Capacidad de apiladores" => "2×200 billetes (cada bolsillo de salida)",
            "Capacidad de rechazo" => "100 billetes",
            "Velocidad" => "Hasta 1.000 billetes/min en conteo libre, por valor, clasificación fitness o lectura de serie",
            "Sensores" => "Doble CIS a color, UV, MG (18 canales), IR y ultrasónico",
            "Funciones" => "Maneja hasta 48 divisas; lectura dual de números de serie (OCR); detección de billetes deteriorados (fitness tipo “F”); detección de cara y orientación",
            "Conectividad" => "Puerto serial, LAN y USB",
            "Pantalla" => "Táctil de 4,3″ a color",
        ]
    ),
    new Equipment("2", "Kisan - K5-A", "Clasificadora de billetes de 5 bolsillos (4 de clasificación + 1 de rechazo) de alta velocidad.", "Clasificadora de billetes de 5 bolsillos (4 de clasificación + 1 de rechazo) de alta velocidad. La Kisan K5A, con su diseño vertical compacto, es ideal para tesorerías y empresas de transporte de valores, permitiendo contar, autenticar y clasificar billetes por denominación y estado de forma rápida y eficiente.", "img/equipments/kisan/k5_a.png", 1, [
        "Bolsillos" => "4 de salida + 1 de rechazo",
        "Capacidad de tolva" => "1.000 billetes",
        "Capacidad de apilado" => "200 billetes por bolsillo (salida)",
        "Capacidad de rechazo" => "100 billetes",
        "Velocidad" => "Hasta 1.000 billetes/min en conteo (libre, por valor, fitness o lectura de serie)",
        "Sensores" => "Doble CIS a color, UV, MG (18 canales), IR, ultrasónico",
        "Funciones" => "Hasta 48 divisas; lectura de número de serie (OCR); clasificación fitness (tipo F); detección de cara y orientación; modo automático/mix hasta 20 denominaciones simultáneas",
        "Conectividad" => "Serial x3, LAN x2, USB (puerto OP)",
        "Pantalla" => "Panel táctil externo de 7″ (800×480)"
    ]),
    new Equipment("3", "Kisan - K6", "Clasificadora de billetes modular de alto volumen.", "
    Clasificadora de billetes modular de alto volumen. La Kisan K6 es una sorter multipocket (configuración base 4+2 bolsillos, expandible hasta 16+2) diseñada para procesar grandes cantidades de billetes con rapidez y precisión, autenticando y clasificando por estado de uso (fitness) para operaciones de tesorería intensivas.
    ", "img/equipments/kisan/k6.png", 1, [
        "Bolsillos" => "4 de salida + 2 de rechazo (expandible hasta 16+2 con módulos adicionales de 2 bolsillos c/u)",
        "Capacidad de tolva" => "1.000 billetes",
        "Capacidad de apiladores" => "500 billetes por bolsillo (salidas)",
        "Capacidad de rechazo" => "2 bolsillos: 100 billetes y 200 billetes respectivamente",
        "Velocidad" => "Hasta 1.000 billetes/min en todos los modos (conteo libre, por valor, fitness, lectura de serie)",
        "Sensores" => "Dual CIS a color, UV, MG (18 canales), IR, ultrasónico (21 canales)",
        "Funciones" => "Soporta ~48 divisas; modo auto/multi-moneda hasta 20 mezcladas; lectura OCR de números de serie; clasificación de billetes deteriorados (fitness tipo F); detección de cara/orientación; soporte de tarjetas de lote (Batch)",
        "Conectividad" => "Serial x4, LAN x2, USB x1",
        "Pantalla" => "Táctil de 7″ a color (800×480)",
        "Modularidad" => "Diseño ampliable con módulos de 2 bolsillos; mantenimiento sencillo"
    ]),
    new Equipment("4", "Kisan - K6 con Enfajado", "Sistema automático de clasificación y enfajado de billetes Kisan (K6 Strapper).", "Sistema automático de clasificación y enfajado de billetes Kisan (K6 Strapper). Esta solución integra una clasificadora Kisan de múltiples bolsillos con un módulo de centrado y un módulo de flejado (enfajadora) de billetes. La Kisan K6 Strapper aumenta la productividad, permitiendo clasificar billetes a 1.000 por minuto y empaquetarlos en fajos de 100 unidades a una velocidad de hasta 10 fajos/minuto, todo en un proceso continuo y automatizado. Es ideal para centros de procesamiento que requieren preparar paquetes de billetes listos para distribución con mínima intervención manual.", "img/equipments/kisan/k6_strapper.png", 1, [
        "Composición modular" => "Consta de 3 módulos principales acoplados: 
        1. Módulo de clasificación (K6): Clasifica billetes por denominación/estado en 4 bolsillos de salida + 2 de rechazo (expandible hasta 16+2 con módulos adicionales).
        2. Módulo de centrado: Alinea perfectamente los billetes provenientes de la clasificadora antes del enfajado, minimizando atascos y rechazos en el flejado al asegurar pilas uniformes.
        3. Módulo de enfajado (Strapper): Agrupa y fleja automáticamente billetes en paquetes de 100 unidades con cinta termo-sellada, a razón de hasta 10 fajos por minuto; impresión en la faja disponible (p. ej., denominación, fecha, operador).",
        "Capacidad de conteo" => "1.000 billetes/minuto en conteo/clasificación (mantiene la velocidad del K6 base).",
        "Capacidad de enfajado" => "Cada fajo contiene 100 billetes; velocidad de flejado ~10 fajos/minuto; admite hasta 6 módulos de enfajado en serie si se requiere ampliar (cada módulo adicional aumenta producción de fajos).",
        "Tolva y apiladores" => "Tolva de 1.000 billetes; apiladores de clasificación 4×500 billetes; 2 rechazos (100 y 200 billetes). El centrador garantiza que cada lote de 100 esté perfectamente alineado antes de flejar.",
        "Sensores y autenticidad" => "En la parte clasificadora, mismos sensores que K6 (Dual CIS, UV, MG, IR, ultrasónico) garantizando que solo billetes auténticos y dentro de criterios avanzan al enfajado; billetes sospechosos/deteriorados se desvían a rechazos, asegurando calidad uniforme en fajos finales.",
        "Interfaz y control" => "Pantalla táctil centralizada para controlar todo el sistema (clasificación + enfajado); permite seleccionar denominación a procesar, configurar criterios de fitness si aplica, y monitorear conteos y estado de enfajado (incluyendo alertas de fin de cinta, etc.).",
        "Salida final" => "Fajos de billetes perfectamente flejados, listos para empaque en cajas o bolsas; reduce dramáticamente el tiempo de preparación de remesas bancarias.",
        "Conectividad" => "Puertos LAN/USB para enlace con sistema de gestión de efectivo (registro de series por fajo, etc.); diseño preparado para entornos industriales CIT, integrable en líneas de producción de efectivo."
    ]),
    new Equipment("5", "Magner - VC525 Mini", "Contadora de billetes de alta velocidad por sistema de succión en formato compacto.", "Contadora de billetes de alta velocidad por sistema de succión en formato compacto. Muy duradera y capaz de contar hasta 3.000 billetes por minuto. Ofrece inicio automático, velocidades de conteo ajustables y un diseño ligero con mejoras en motor y electrónica, ideal para conteos rápidos de grandes lotes de billetes con máxima precisión.", "img/equipments/magner/vc525_mini.png", 4, [
        "Sistema de conteo" => "Contador de billetes por vacío (sistema de succión de 7 orificios) que garantiza el conteo suave incluso de billetes desgastados.",
        "Velocidades" => "5 velocidades seleccionables (aprox. 1.000, 1.200, 1.500, 2.000 y 3.000 billetes por minuto) para adaptarse a la calidad de los billetes y necesidades del usuario.",
        "Capacidad de tolva" => "~200 billetes por carga (alimentador superior con alineador de billetes mediante peine).",
        "Pantallas" => "Doble pantalla LED de 4 dígitos (frontal y trasera) para mostrar conteo y configuración, facilitando la visibilidad al operador y al cliente.",
        "Características especiales" => "Motor de corriente directa (DC) nuevo de alta durabilidad; placa electrónica mejorada; cubierta antipolvo incluida; lámpara UV integrada para purificar/esterilizar billetes durante el conteo.",
        "Funciones" => "Arranque automático al cargar billetes; modos de conteo libre, suma acumulativa y por lotes predefinidos; ajuste de grosor y tamaño de billete compatible con todas las divisas dentro de rango (ancho 90–300 mm, alto 55–130 mm, espesor 0,06–0,12 mm).",
        "Conectividad" => "Puerto RS232 para conexión a impresora o PC (exportar resultados).",
        "Dimensiones/Peso" => "Aprox. 26 × 26 × 28,5 cm; 18 kg.",
        "Alimentación" => "100–240 V AC, 50/60 Hz (consumo ~380 W)."
    ]),
    new Equipment("8", "Cima - SDM 504", "Recicladora de billetes compacta, diseñada para manejar volúmenes medios de efectivo en el sector retail y bancario.", "Recicladora de billetes compacta, diseñada para manejar volúmenes medios de efectivo en el sector retail y bancario. Permite realizar depósitos seguros y reciclar billetes para preparar fondos de caja en un solo equipo, optimizando tiempos y reduciendo costos operativos en un espacio reducido.", "img/equipments/cima/sdm_504.png", 3, [
        "Capacidad de reciclaje" => "4 tambores (RSM) con hasta 500 billetes cada uno (≈ 2.000 billetes reciclables).",
        "Capacidad total de depósito" => "Hasta 5.000 billetes (reciclaje + bolsa de almacenamiento).",
        "Alimentación de billetes" => "Tolva de entrada de 200 billetes en alimentación continua.",
        "Velocidad" => "Hasta 6 billetes/seg en depósito (~360/min) y hasta 5 billetes/seg en dispensación (~300/min).",
        "Validador" => "Sensor BV5000 con certificación de Bancos Centrales (incluye ECB); soporta múltiples divisas y cheques/vales.",
        "Opciones de almacenamiento" => "Bolsa de lona de hasta ~4.000 billetes o bolsa autoadhesiva sellada de hasta ~3.000 billetes.",
        "Funciones adicionales" => "Escrow de 64 billetes por tambor; posibilidad de dedicar un tambor a billetes falsos/sospechosos; preparación de fondos de apertura de caja.",
        "Seguridad" => "Caja fuerte (safe) estándar StrongBox 8 mm; opciones UL291 24h, CEN L, CEN III o CEN IV.",
        "Dimensiones/Peso" => "455×685×1005 mm; 220–450 kg según configuración.",
        "Pantalla" => "Táctil TFT de 7″ a color (opcional 5,7″).",
        "Impresora" => "Térmica de 58 mm.",
        "Conectividad" => "RS-232, USB y Ethernet.",
        "Gestión remota (C-LINK)" => "Actualizaciones de firmware y sensores; monitoreo de estado, niveles y estadísticas en tiempo real.",
        "Mantenimiento" => "Bastidor extraíble con ruedas; puertas magnéticas de acceso rápido; componentes transparentes para visibilidad del flujo de billetes."
    ]),
    new Equipment("7", "Cima - AST 7000", "Recicladora de billetes compacta.", "Recicladora de billetes compacta. La CIMA AST 7000 es un módulo de reciclaje de efectivo que permite almacenar y dispensar billetes en 8 tambores de reciclaje, optimizando la gestión del efectivo. Diseñada para garantizar un alto rendimiento, asegurando la seguridad y confiabilidad.", "img/equipments/cima/ast_7000.png", 3, [
        "Capacidad de reciclaje" => "Hasta 8 tambores de reciclaje (NT5) para billetes, con aproximadamente 500 billetes por tambor, totalizando cerca de 4.000 billetes reciclables; adicionalmente puede incorporar cassettes de excedentes para almacenar entre 3.000 y 4.000 billetes no reciclados.",
        "Velocidad" => "Depósito de billetes a aproximadamente 5–6 billetes por segundo; dispensación a cerca de 4 billetes por segundo, permitiendo transacciones rápidas en recarga de cajeros automáticos de caja (tellers) o autoservicio.",
        "Funciones" => "Depósito mixto de billetes con reconocimiento de denominación y autenticidad; dispensación de billetes específicos (suma y denominaciones solicitadas) para preparación de remesas o entrega a cajeros; reciclaje cerrado que utiliza los mismos billetes depositados para futuras dispensaciones, reduciendo reposiciones externas.",
        "Seguridad" => "Mueble de seguridad con cerradura electrónica y registro de aperturas; sensores anti-intrusión (vibración, puerta); validación de billetes con sensor BV5000 o similar (cumple normas de banco central para detección de falsos y aptitud circulatoria).",
        "Integración TI" => "Interfaz con sistema bancario (middleware CIMA, protocolo XFS) para permitir que cajeros automáticos o sistemas de sucursal ordenen dispensaciones/depósitos de forma transparente; monitorización remota de niveles por denominación para planificar transporte de valores eficiente.",
        "Módulos expandibles" => "Diseño modular que permite ampliación en campo agregando más tambores o combinándose con módulos de monedas (CDS series) para solución completa; mantenimiento modular con reemplazo rápido de tambores en caso de obstrucciones.",
        "Uso típico" => "Típicamente instalado en bóvedas de sucursal o grandes tiendas; posibilita que varios cajeros humanos depositen su recaudación directamente en la máquina en sobres o fajos y ésta los valide y almacene; asimismo, provee efectivo a cajeros o cajeros automáticos recicladores sin intervención humana, cerrando el ciclo de efectivo internamente."
    ]),
    new Equipment("6", "Cima - AST 7008", "Recicladora de billetes compacta de alta capacidad.", "Recicladora de billetes compacta de alta capacidad. La CIMA AST 7008 es un módulo de reciclaje de efectivo que permite almacenar y dispensar billetes en 8 tambores de reciclaje. Adcionalmente cuenta con una bolsa con capacidad de almacenar hasta 10,000 billetes, optimizando la gestión del efectivo. Es ideal para el back office de agencias bancarias y comercios retail, ya que reduce los reabastecimientos y facilita depósitos y retiros de billetes de manera rápida, segura y eficiente.", "img/equipments/cima/ast_7008.png", 3, [
        "Configuración de reciclaje" => "8 tambores de reciclaje para billetes, cada uno con capacidad de aprox. 500–700 billetes (dependiendo de la denominación), totalizando almacenamiento para miles de billetes reciclables.",
        "Funciones" => "Acepta depósitos de billetes mixtos (multi-denominación) y clasifica automáticamente en tambores; dispensa billetes para retiros o provisionamiento de caja con las mismas unidades recicladas (reduce necesidad de efectivo externo).",
        "Velocidad" => "Procesamiento rápido de billetes en depósito (~6 billetes/seg) y dispensación (~4–5 billetes/seg), según especificaciones de la serie AST7000.",
        "Capacidad de depósito" => "Puede aceptar fajos de hasta 200 billetes en la ranura de entrada, con alimentación continua hasta completar depósito; mecanismo de rechazo para billetes no reconocidos o sospechosos (a cassette de rechazo).",
        "Seguridad" => "Cofre/seguridad certificada (safe de acero, grosor típico 8 mm puerta) protegiendo los tambores; sensores antifraude (UV, MG, IR, tamaño) para verificar autenticidad y estado (fitness) de los billetes antes de reciclarlos.",
        "Integración" => "Interfaz para conexión a sistemas bancarios o kioscos; protocolo CEN/XFS disponible para integración con software de sucursal; monitoreo remoto del estado de cada tambor (nivel de llenado, incidencias).",
        "Beneficios" => "Reduce recargos de transporte al reutilizar billetes depositados para dispensar (ciclo cerrado de efectivo); agiliza la tesorería interna liberando al personal de tareas manuales de conteo/clasificación; provee huella compacta con alta capacidad, ideal para espacios reducidos en bóvedas o áreas de autoservicio."
    ]),
    new Equipment("7", "Cima - AST 7016", "Recicladora de billetes de alta capacidad para gran volumen de efectivo.", "Recicladora de billetes de alta capacidad para gran volumen de efectivo. La CIMA AST 7016 es un sistema modular que cuenta con 16 tambores de reciclaje, ofreciendo una de las mayores capacidades de almacenamiento y dispensación de billetes en su clase. Diseñada para bancos y grandes retailers, este equipo maneja flujos muy altos de efectivo, garantizando seguridad, velocidad y una drástica reducción de costos operativos al reciclar el efectivo.", "img/equipments/cima/ast_7016.png", 3, [
        "Configuración de reciclaje" => "16 tambores de reciclaje de billetes (posiblemente en 2 módulos de 8 cada uno), con capacidad individual de aproximadamente 500–700 billetes por tambor; capacidad total de reciclaje de 8.000–11.000 billetes (según calidad y espesor).",
        "Almacenamiento adicional" => "Puede incluir tambores o cassettes dedicados a excedentes (billetes que no se reciclan por sobrecupo o por no cumplir criterios de estado) con capacidad de varios miles de billetes extras, asegurando continuidad en depósitos aunque los tambores estén llenos.",
        "Velocidad y rendimiento" => "Similar a la AST7008 en velocidad (aprox. 6 billetes/seg en entrada, 4–5 billetes/seg en salida), pero con el doble de denominaciones reciclables, permitiendo manejar hasta 8–10 denominaciones distintas (según configuración) en modo reciclaje.",
        "Seguridad y fiabilidad" => "Safe de alta seguridad (cumple normativas de bóveda, usualmente UL-291 o CEN IV); sensores avanzados de autenticidad (BV5000 o similar) para detectar billetes falsos o dañados; mecanismo de pick-and-place robusto para minimizar atascos incluso con billetes deteriorados.",
        "Integración y gestión" => "Plataforma CAOS/C-Link de CIMA para monitoreo remoto de niveles de efectivo en tiempo real, gestión de usuarios, reportes de depósitos y retiros; comunicación con sistemas de tienda o banco vía protocolos estándar (XFS, web services).",
        "Uso típico" => "Back office de grandes tiendas para automatizar cierre y apertura de cajas (los cajeros depositan al final del turno y retiran cambio al inicio, todo vía la recicladora); en bancos de gran afluencia para dispensar efectivo a cajeros humanos o ATMs de autoservicio con depósitos integrados."
    ]),
    new Equipment("10", "Kisan - KD-10", "La KD-10 es una maquina compacta de velocidad media, diseñado para puntos de venta.", "La KD-10 es una maquina comapacta de velocidad media, diseñado para puntos de venta. Una caja fuerte inteligente ('smart safe') de front-office, ideal para tiendas, gasolineras, hoteles, restaurantes, etc. Maximiza la eficiencia y protege el efectivo contra mermas y errores humanos con tecnología de conteo inteligente a 5 billetes/seg, permitiendo a los cajeros realizar depósitos parciales seguros durante el día y agilizando el cierre de caja. Diseñada para integrarse a fácilmente a los sistemas del cliente.", "img/equipments/kisan/kd_10.png", 2, [
        "Velocidad de procesamiento" => "Hasta ~5 billetes/segundo (aprox. 300 billetes/minuto) en modo depósito continuo, con aceptación de billetes uno a uno o fajos pequeños.",
        "Capacidad de entrada" => "Boca de depósito con alimentador de hasta 100 billetes por inserción; auto-arrastre de billetes en lote con lectura individual rápida.",
        "Capacidad de almacenamiento" => "Opciones de almacenamiento internas: cassette rígido apilador de 2.000 billetes o bolsa flexible (canvas) de hasta ~4.500 billetes, según configuración elegida (permite elegir entre mayor seguridad vs mayor capacidad).",
        "Validación" => "Sensor validador de alta performance que verifica autenticidad (UV, MG, IR) y denomina cada billete, sumando el valor total depositado; captura números de serie (OCR) en tiempo real para control y auditoría.",
        "Operación fácil" => "Interfaz de usuario simple con pantalla táctil a color de 4.3″ para indicaciones (por ejemplo, confirmación de depósito, mensajes de error); abertura de inserción con auto-start al detectar billetes; mensajería de alarmas en pantalla (atascos, puerta abierta, etc.).",
        "Seguridad física" => "Caja fuerte integrada (espesor 6–8 mm) con puerta frontal para recolección con llave de seguridad electrónica; opciones de anclaje al piso/mostrador; múltiples sensores antimanipulación (vibración, puerta, bandeja) que disparan alarmas al sistema.",
        "Conectividad y control" => "Puertos USB y LAN, además de conectividad inalámbrica (WiFi/3G) para enviar datos a plataforma central; integración con sistemas POS/ERP para conciliación automática; plataforma remota permite monitorear estado, niveles de efectivo y enviar alertas de recogida necesarias.",
        "Alimentación eléctrica" => "100–240 V AC (universal); batería UPS opcional para respaldar breves cortes de energía sin interrumpir operación.",
        "Dimensiones compactas" => "~27 × 58 × 70 cm, peso ~46 kg, adecuado para instalación debajo o al lado de cajas registradoras."
    ]),
    new Equipment("11", "Kisan - KD-20", "Solución de depósito de billetes de tamaño mediano para back-office.", "Solución de depósito de billetes de tamaño mediano para back-office. La Kisan KD20 es una caja fuerte inteligente ideal para trastienda de comercios, almacenes y restaurantes, que combina sensores de alto rendimiento, velocidad de conteo de 300 billetes/min y alimentación continua para depósitos ininterrumpidos. Su diseño mediano ofrece gran capacidad de depósito de hasta 10,000 billetes. Diseñada para integrarse fácilmente a los sistemas del cliente.", "img/equipments/kisan/kd_20.png", 2, [
        "Velocidad de procesamiento" => "~300 billetes/minuto (5 billetes/segundo) con alimentación continua (depósitos sin pausa gracias a su trayectoria simplificada de transporte).",
        "Capacidad de entrada" => "Acepta lotes de hasta 100 billetes por inserción; alimentación “bulk” ininterrumpida con entrada continua (el equipo puede tomar más billetes mientras procesa los anteriores).",
        "Capacidad de almacenamiento" => "Dos opciones de bolsa interna intercambiables: bolsa “pequeña” (hasta ~4.000 billetes) en formato canvas para menor huella, o bolsa “grande” (hasta ~10.000 billetes) extendiendo la altura del equipo. Permite adaptar la capacidad según la necesidad de cada sitio.",
        "Rechazo y seguridad" => "Compartimento de rechazo para ~100 billetes no reconocidos o sospechosos (separado del depósito principal); sensor anti-fraude multi-espectral (UV, MG, IR, RGB) y captura de serie de cada billete; cerradura electrónica y opción de clave dual para apertura de cofre.",
        "Pantalla y controles" => "Pantalla táctil a color de 7″ para el operador (interfaz intuitiva para iniciar sesión, ver totales depositados, imprimir comprobantes); impresora térmica de 2″ integrada para recibos de depósito; acceso frontal para recoger bolsas y realizar mantenimiento.",
        "Gestión remota" => "Conectividad USB, LAN y WiFi para integración con software de gestión de efectivo; actualizaciones remotas de firmware; reporte automático de depósitos al sistema central o banco (facilita acreditación de fondos).",
        "Dimensiones" => "Dos versiones según bolsa: configuración estándar (~45×58×70 cm) para bolsa pequeña, y versión alta (~45×58×100 cm) para bolsa de 10k; peso ~76 kg (2mm safe + 8mm puerta).",
        "Identificación de usuarios" => "Compatible con lectores de banda magnética, códigos de barras 2D y NFC para registrar quién realiza cada depósito; registro detallado de cada transacción almacenado en memoria para auditoría."
    ]),
    new Equipment("12", "Kisan - KDL-100", "Sistema de depósito de billetes de alto volumen para entornos de back office en negocios retail medianos y grandes.", "Sistema de depósito de billetes de alto volumen para entornos de back office en negocios retail medianos y grandes. El KDL-100 está diseñado para operaciones con alto manejo de efectivo, ofreciendo validación de billetes a gran velocidad y monitoreo en tiempo real . Permite a los operadores realizar depósitos no supervisados en cualquier momento, almacenando de inmediato el efectivo validado en una caja fuerte, lo que reduce significativamente la exposición a pérdidas o robos y disminuye los costos de manejo de efectivo.", "img/equipments/kisan/kdl_100.png", 2, [
        "Tipo" => "Recicladora inteligente de billetes (depósito y dispensación en la misma unidad), permitiendo depósitos seguros y dispensación de efectivo reutilizando billetes aceptados.",
        "Dimensiones/Peso" => "Aprox. 45×50×122 cm; peso ~120 kg (caja fuerte integrada).",
        "Funciones clave" => "Depósito inteligente de billetes mixtos; reconocimiento automático de divisas (5 por defecto, ampliable hasta ~40); depósito manual de elementos no procesables (sobres) separado; autenticación de usuario mediante tarjeta magnética/chip, código de barras o credencial contactless para operaciones seguras.",
        "Detección y autenticidad" => "Sensores CIS dual para lectura de serie y validación de billetes (UV, MG, IR, detección de tinta magnética, etc.); clasificación por estado (fitness) para decidir reciclaje o envío a rechazos; sistema de entintado/neutralización de billetes en caso de apertura forzada (opcional IBNS) para protección anti-robo.",
        "Capacidad de tolva" => "Inserción de hasta ~400 billetes por lote (entrada de gran volumen).",
        "Velocidad de conteo" => "Hasta 1.000 billetes/minuto en modo depósito; dispensación de billetes reciclados a alta velocidad (simultánea en denominaciones múltiples).",
        "Almacenamiento interno" => "Combinación de bolsas y cassettes: bolsa de lona de gran capacidad (~10.000 billetes) para almacenamiento global y hasta 2 cassettes/tambores de reciclaje para dispensación (capacidad típica total combinada ~10.000 billetes); diseño flexible para adaptarse a distintas operaciones (ya sea puro depósito o con recirculación).",
        "Pantalla e interfaz" => "Pantalla táctil a color de ~10″ para guiado de usuarios y personal; impresora de recibos integrada 2″ para comprobantes de depósito/retiro; sistema de llave digital (Digital Key) en reemplazo de llaves físicas para aperturas seguras administradas centralmente.",
        "Integración y reporte" => "Conectividad LAN, USB, WiFi; plataforma remota RemotePlanet/KBMS para monitoreo en tiempo real, generación de informes de transacciones, y compatibilidad con sistemas bancarios (protocolos XFS, SOAP/XML) para acreditación inmediata; soporta ciclo cerrado con ATM y CIT (reporte para transporte con anticipación)."
    ]),
    new Equipment("9", "Kisan - KD-100", "La KD-100 es un sistema de depósito de billetes de alta capacidad.", "La KD-100 es un sistema de depósito de billetes de alta capacidad.  Es una una caja fuerte inteligente ('smart safe')  que permite depositar grandes volúmenes de billetes a alta velocidad, optimizando las operaciones de gestión de efectivo en agencias bancarias y entornos de alto flujo. Gracias a su sistema operativo, está preparada para integrarse fácilmente con los sistemas del banco.", "img/equipments/kisan/kd_100.png", 2, [
        "Velocidad de procesamiento" => "Hasta 1.000 billetes/minuto en depósito continuo (procesamiento de alta velocidad).",
        "Capacidad de entrada" => "Alimentador automático de billetes con bandeja de inserción de ~200 billetes por vez; admite alimentación de fajos múltiples en secuencia (escalonada) para depósitos masivos.",
        "Validación y seguridad" => "Detección de billetes falsos integrada (sensores multi-scan); lectura de números de serie (OCR) para trazabilidad; cámara dual integrada (una enfocada al usuario y otra al módulo de depósito) para grabar cada transacción y contenido depositado.",
        "Almacenamiento interno" => "Opciones de almacenamiento flexible: hasta 15.000 billetes en bolsa de lona de gran capacidad, o uso de doble bolsa de 10.000 c/u (según configuración, también soporta modalidad de apilado semi-apilado). Billetes quedan asegurados en un cofre de acero (espesor 2–5 mm) con cerraduras de seguridad.",
        "Escrow y sobre" => "Capacidad de escrow de 200 billetes (mantiene temporalmente billetes antes de confirmación final de depósito); bandeja de sobre/devolución con capacidad ~30 billetes para devolver documentos no procesables o sobres depositados.",
        "Pantalla y recibo" => "Pantalla LCD táctil de 12,3″ en formato amplio (8:3) para guía al usuario y resumen de depósito; impresora térmica integrada de 2″ (opcional 3″) para emitir comprobantes de depósito.",
        "Conectividad y gestión" => "Puertos USB, LAN y conectividad inalámbrica (WiFi/3G) para reportar en tiempo real las transacciones a sistemas centralizados; servidor web interno y capacidad de gestión remota (actualizaciones de software, monitoreo de estado).",
        "Opcionales de identificación" => "Lector de tarjetas magnéticas o chip, teclado PIN y NFC para identificación segura de usuarios; módulo GSM para comunicaciones móviles redundantes.",
        "Sistema operativo" => "Windows 10 IoT Enterprise, brindando plataforma robusta y actualizable para software de caja fuerte inteligente."
    ]),

    // TODO: Complete using official descriptions from Secure Innovation
    new Equipment('25', 'Ibox 547', 'Contenedor inteligente de alta seguridad para billetes.', 'Recoja y entregue efectivo de forma segura con esta caja inteligente de protección de efectivo de alta capacidad. La tecnología de degradación de tinta iBox protege a sus activos y su personal, además que mantiene a los ladrones sin oportunidad y sin peligro para los transeuntes.', 'img/equipments/secure_innovation/ibox_547.png', 5, [
        'Procedencia' => 'Inglaterra',
        'Dimensiones (Ancho/Alto/Profundidad)' => '31.7x16.2x54.7 cm',
        'Peso' => '8 kg',
        'Capacidad' => '6,000 billetes',
        'Seguridad' => 'Degradado del contenido con tinta
Revestimiento anticortes,
Detección de líquidos,
Sensores de movimiento,
Temporizadores de transporte y
Grabación por caja negra con
Registro de fecha y hora',
        'Opcionales' => 'Rastreo: seguimiento completo del iBox por satélite, GSM y RF.
Marcadores por trazas y ADN: suministrados previa petición.
Control remoto: por RF y GSM.',

    ]),

    new Equipment(
        "40",
        "Ibox 617",
        "Contenedor inteligente de alta seguridad para billetes de gran capacidad.",
        "Proteja su efectivo en tránsito y proteja a sus empleados de amenazas. Diseñadas para detectar y responder a ataques físicos, las cajas de protección de efectivo de iBox mancharán el efectivo con tinta de seguridad permanente. Su personal de efectivo en tránsito puede reducir el riesgo de ser herido, sabiendo que a los ladrones se les negará cualquier recompensa por su delito.",
        "img/equipments/secure_innovation/ibox_617.png",
        5,
        [
            "Procendencia" => "Inglaterra",
            "Dimensiones (Ancho/Alto/Profundidad)" => "31.7x16.2x61.7 cm",
            "Peso" => "9 kg",
            "Capacidad" => "8,000 billetes",
            "Seguridad" => "Degradado del contenido con tinta
Revestimiento anticortes,
Detección de líquidos,
Sensores de movimiento,
Temporizadores de transporte y
Grabación por caja negra con
Registro de fecha y hora",
            "Opcionales" => "Rastreo: seguimiento completo del iBox por satélite, GSM y RF.
Marcadores por trazas y ADN: suministrados previa petición.
Control remoto: por RF y GSM."
        ],
    ),

    new Equipment(
        "123",
        "Ibox RDS",
        "Recolecciones múltiples y seguras de efectivo. iBox RDS es una caja/valija de seguridad inteligente de doble propósito.",
        "Con los sistemas de protección de efectivo de Spinnaker®, cualquier ataque físico a las cajas iBox resultará en la liberación de la tinta de seguridad sobre los billetes y/o valores contenidos en ella. Con esto se disminuye en gran medida el riesgo de los operadores al manejar y entregar cajas con valores, ya que cualquier intento de apertura no autorizada activará la tinta en la caja, dejando todo su contenido inservible.",
        "img/equipments/secure_innovation/ibox_rds.png",
        5,
        [
            "Doble compartimento" => "Dos compartimentos independientes en una sola unidad: uno para depósitos (recolección de billetes) y otro para transporte seguro (almacenamiento protegido).",
            "Depósito seguro" => "El compartimento de depósito permite a los usuarios realizar múltiples recolecciones de billetes durante el día, asegurando que cada depósito quede protegido inmediatamente tras su inserción.",
            "Transporte protegido" => "El compartimento de transporte está diseñado para almacenar el efectivo recolectado de manera segura hasta su entrega en bóveda o centro de procesamiento, con mecanismos de seguridad avanzados.",
            "Tecnología IBNS" => "Incorpora un sistema IBNS (Intelligent Banknote Neutralization System) que mancha/entinta los billetes con tinta de seguridad indeleble ante aperturas no autorizadas, inutilizando su valor y desincentivando robos.",
            "Seguridad electrónica" => "Utiliza llaves digitales criptográficas (“Digital Key”) para su apertura legítima; elimina llaves físicas y sus riesgos. Cada caja iBox solo se abre con autorización remota o con códigos de un solo uso.",
            "Sensores integrados" => "Detectan golpes, vibraciones, intentos de taladro o corte, variaciones de ambiente; cualquier intento de manipulación fuera de protocolo activa inmediatamente los mecanismos de neutralización y puede emitir alarmas al centro de control vía comunicación inalámbrica.",
            "Construcción física" => "Maleta/cassette blindado altamente resistente (materiales compuestos y acero endurecido) pero ligero para transporte; a prueba de fuego y agua en grado moderado para proteger contenido; equipados con cerraduras electrónicas y precintos electrónicos que registran cualquier apertura.",
            "Conectividad y seguimiento" => "Módulos GSM/GPS integrados que permiten rastreo en tiempo real de la unidad durante tránsito; reporte en vivo del estado (cerrado/abierto, armado/desarmado) a una plataforma central de monitoreo (posibilidad de integración con Remote Planet de Secure Innovation).",
            "Beneficios operativos" => "Optimiza la logística CIT al permitir múltiples depósitos seguros durante el día sin necesidad de abrir la caja; reduce riesgos asociados a manejo interno y transporte; mejora la seguridad del personal y del valor transportado."
        ]
    ),

    new Equipment("13", "A2M ATM Cash Protection", "Sistema avanzado de protección y transporte de efectivo.", "Sistema avanzado de protección y transporte de efectivo. La iBox de Secure Innovation es un contenedor inteligente de alta seguridad para billetes, utilizado en transporte de caudales y cajeros automáticos. Previene fraudes internos, robos y asaltos a transportadores mediante tecnología de neutralización de billetes (por entintado) y apertura controlada digitalmente. Es la forma más segura de almacenar o mover efectivo, asegurando que en caso de intento de apertura no autorizada, el contenido quede inutilizado y los delincuentes disuadidos.", "img/equipments/secure_innovation/a2m.png", 5, [
        "Protección activa de billetes" => "Incorpora un sistema IBNS (Intelligent Banknote Neutralization System) que mancha/entinta los billetes con tinta de seguridad indeleble ante aperturas no autorizadas, inutilizando su valor y desincentivando robos (hasta 100% de billetes manchados en caso de ataque).",
        "Seguridad electrónica" => "Utiliza llaves digitales criptográficas (“Digital Key”) para su apertura legítima; elimina llaves físicas y sus riesgos. Cada caja iBox solo se abre con autorización remota o con códigos de un solo uso, reduciendo drásticamente el riesgo de conspiración interna o coacción.",
        "Sensores integrados" => "Detectan golpes, vibraciones, intentos de taladro o corte, variaciones de ambiente; cualquier intento de manipulación fuera de protocolo activa inmediatamente los mecanismos de neutralización y puede emitir alarmas al centro de control vía comunicación inalámbrica.",
        "Construcción física" => "Maleta/cassette blindado altamente resistente (materiales compuestos y acero endurecido) pero ligero para transporte; a prueba de fuego y agua en grado moderado para proteger contenido; equipados con cerraduras electrónicas y precintos electrónicos que registran cualquier apertura.",
        "Conectividad y seguimiento" => "Módulos GSM/GPS integrados que permiten rastreo en tiempo real de la unidad durante tránsito; reporte en vivo del estado (cerrado/abierto, armado/desarmado) a una plataforma central de monitoreo (posibilidad de integración con Remote Planet de Secure Innovation).",
        "Uso en cajeros automáticos (ATM)" => "La iBox puede funcionar como cassette inteligente dentro del ATM, protegiendo el efectivo almacenado con neutralización activa (“a2m active” de Secure Innovation) o como dispositivo de despliegue rápido (“a2m passive”) instalable en cajeros existentes para elevar su seguridad sin modificar la máquina completamente.",
        "Beneficios operativos" => "Reduce drásticamente robos en tránsito y manipulación interna no autorizada; optimiza la logística CIT al permitir apertura remota sincronizada (se abre solo al llegar a bóveda, etc.); su uso disuade ataques violentos, mejorando la seguridad del personal y del valor transportado.",
        "Modelos disponibles" => "Modelo cerrado para transporte y modelo con boqueta para recaudaciones, adaptándose a distintas necesidades de operación y logística."
    ]),
    // TODO


    new Equipment("17", "Magner - 2000", "Discriminadora de billetes de doble bolsillo para conteo por valor.", "Discriminadora de billetes de doble bolsillo para conteo por valor. La Magner 2000 es una clasificadora 1.5-pocket (1 bolsillo de salida + 1 de rechazo) multicurrency, robusta y compacta. Permite contar, autenticar y separar billetes por denominación de forma rápida y fiable, con detección avanzada de billetes falsos. Su construcción de alta resistencia (fabricada en Corea) sin bandas de goma la hace durable y de bajo mantenimiento, ideal para cajas y tesorerías con volúmenes considerables de efectivo.", "img/equipments/magner/2000.png", 6, [
        "Bolsillos" => "1 de apilación principal + 1 de rechazo continuo (permite operación ininterrumpida al desviar billetes sospechosos o de moneda distinta al bolsillo de rechazo).",
        "Capacidad de tolva" => "~500 billetes; apilador principal ~250 billetes; rechazo ~50–100 billetes.",
        "Velocidad" => "Típicamente 1.000 billetes/minuto en modo conteo por valor o clasificación; mantiene velocidad aun con funciones de detección activas, gracias a su mecanismo de rodillos robusto.",
        "Detección de falsificaciones" => "Métodos multi-sensor: UV (ultravioleta), MG (tinta magnética), IR (infrarrojo), detección de tamaño, densidad y color; algoritmo actualizado para nuevas generaciones de billetes (soporta actualización de firmware para nuevos signos de falsificación).",
        "Modos de conteo" => "Auto-currency (detecta la divisa automáticamente), multi-currency (puede mezclar y reportar hasta 3–5 monedas distintas simultáneamente), modo mixto (suma por valor), modo clasificación (separa denominaciones una a una), modo fitness (versión 2000F evalúa calidad física de billete), modo orientación/facing.",
        "Divisas manejadas" => "Soporta hasta ~30 divisas en memoria; selección automática o manual; con reconocimiento instantáneo al insertar mezcladas (en modo auto).",
        "Pantalla y controles" => "Pantalla LCD (monocroma) clara con menú intuitivo; teclas de selección rápida para denominaciones y funciones; menú disponible en múltiples idiomas.",
        "Conectividad" => "Puertos LAN y USB para conexión a sistemas de caja/PC, volcado de datos y actualizaciones; puerto RS232 adicional para impresora de reportes o pantalla externa.",
        "Mantenimiento" => "Diseño heavy-duty con solo rodillos (sin correas de arrastre), reduciendo recambios y costos; tapas de acceso rápido para limpieza de sensores; autoregulación de rodillos para un transporte suave de billetes desgastados."
    ]),
    new Equipment("15", "Kisan - Newton 3", "Valorizadora de billetes compacta y eficiente.", "Valorizadora de billetes compacta y eficiente. La Kisan Newton 3 es una discriminadora de billetes multicurrencia diseñada para contar y autenticar billetes mezclados con rapidez en un formato de escritorio pequeño. Ideal para sucursales bancarias y cajas de comercio, la Newton 3 procesa billetes a 1.000 por minuto, detectando falsificaciones con sensores CIS a doble cara y mejorando la productividad diaria en el conteo de efectivo.", "img/equipments/kisan/newton_3.png", 6, [
        "Bolsillos" => "1 bolsillo de apilado (salida) + 1 bolsillo de rechazo (1+1 configuración)",
        "Capacidad de tolva" => "~500 billetes; capacidad de apilador ~200 billetes; rechazo ~50–100 billetes",
        "Velocidad" => "Hasta 1.000 billetes/minuto en conteo libre o por valor (moneda única o mezclada)",
        "Sensores" => "Doble CIS (escaneo simultáneo anverso/reverso a color), UV, MG, IR, sensores de tamaño/espesor; asegura autenticación completa (detección de falsos de última generación) y lectura de número de serie OCR dual",
        "Funciones" => "Maneja varias divisas (tipicamente hasta 5–8 en memoria, expandible); auto-detección de moneda (modo multicurrency mix); modo de conteo por denominación con totalización por valor; orientación/faceamiento automático; clasificación básica de calidad (detecta billetes deteriorados tipo “F”)",
        "Operación" => "Pantalla a color touch (aprox. 3,5–4″) para mostrar resultados, cantidades por denominación y menús; interfaz sencilla con botones de acceso rápido a modos (Mixed, Single, Count, Batch)",
        "Conectividad" => "Puertos USB y RS232 para actualización de software, conexión a PC/impresora; LAN para gestión en red si aplica (KBMS – Kisan Banknote Management System)",
        "Aplicación" => "Apta para conteo de ventanilla o tesorería interna con volúmenes medianos; su tamaño reducido y alta precisión la hacen una de las valorizadoras más populares para iniciar la automatización del conteo en pequeñas sucursales."
    ]),
    new Equipment("14", "Hyundai - MIB-11", "Valorizadora y clasificadora de billetes “fitness” de 2 bolsillos.", "Valorizadora y clasificadora de billetes “fitness” de 2 bolsillos. La Hyundai MIB-11 es una máquina discriminadora con 1 bolsillo de apilado y 1 de rechazo, que combina conteo por valor multicurrencia con evaluación del estado físico de los billetes. Procesa hasta 1200 billetes/minuto, con doble CIS para lectura de series, capaz de separar billetes por denominación, orientación y calidad (aptos vs inaptos), lo que la hace ideal para bancos que requieran cumplir estándares de recirculación de efectivo de bancos centrales.", "img/equipments/hyundai/mib_11.png", 6, [
        "Velocidad de conteo" => "Hasta 1.200 billetes/minuto en modo valorización y clasificación.",
        "Bolsillos" => "1 de apilado y 1 de rechazo, permitiendo separar billetes aptos/inaptos o por denominación.",
        "Detección de billetes" => "Sensores CIS dobles a color para lectura de serie, UV, MG, IR y detección de tamaño.",
        "Funciones" => "Conteo por valor multicurrencia, clasificación por denominación, orientación y estado físico (fitness); separación automática de billetes sospechosos o deteriorados.",
        "Pantalla" => "Táctil a color de 4,3″ para operación intuitiva y visualización de resultados.",
        "Conectividad" => "Puertos USB y LAN para exportación de datos y actualización de software.",
        "Aplicaciones" => "Ideal para bancos y empresas que requieren cumplir normativas de recirculación de bancos centrales, con registro de series y reporte detallado de operaciones.",
        "Dimensiones/Peso" => "Compacta y ligera, adecuada para uso en mostrador o back office."
    ]),
    new Equipment(
        "16",
        "Kisan - K2-A",
        "Valorizadora de billetes ultracompacta de 1 bolsillo",
        "Valorizadora de billetes ultracompacta de 1 bolsillo. La Kisan K2A es una de las discriminadoras de billetes más pequeñas del mercado, ideal para oficinas y departamentos con espacio limitado. Permite contar billetes mezclados por valor, detectando falsificaciones con sensores avanzados, a la vez que ofrece un rendimiento ágil (alrededor de 1000 billetes/min). Es la solución perfecta para quienes necesitan un equipo de conteo de valor confiable en un tamaño reducido.",
        "img/equipments/kisan/k2_a.png",
        6,
        [
            "Bolsillos" => "1 bolsillo de salida (sin bolsillo de rechazo dedicado, los billetes sospechosos detienen el conteo o se rechazan de forma visual para retiro manual dado el diseño compacto).",
            "Velocidad" => "~1.000 billetes/minuto en conteo por valor (velocidad alta considerando su tamaño portátil).",
            "Detección de falsos" => "Sensores CIS (probablemente simple o dual dependiendo de versión) para lectura de imagen, más UV, MG, IR integrados que verifican la autenticidad de cada billete; alerta y detención automática ante billete sospechoso con indicación en pantalla.",
            "Modos de conteo" => "Conteo por valor multicurrency (puede manejar varias divisas programadas); modo denominación única; modo conteo simple (piezas); sumatoria acumulativa y por lotes configurables.",
            "Capacidad de alimentación" => "Tolva de aprox. 200–300 billetes; apilador similar (~200 billetes).",
            "Pantalla e interfaz" => "Pantalla LCD/LED clara para mostrar valor total, código de divisa y código de error de falsificación; teclado simple para seleccionar moneda y funciones; indicadores LED de estado.",
            "Dimensiones y peso" => "Diseño muy compacto (aprox. 26 cm ancho, 28 cm profundidad, 26 cm alto); peso ligero (~7–8 kg) para fácil reubicación o transporte entre oficinas.",
            "Conectividad" => "Usualmente incluye puerto USB para actualizaciones de software (nuevas emisiones de billetes) y quizás RS232 para impresora de reportes; simple de integrar a PC mediante software complementario si se requiere exportar datos."
        ]
    ),
    // new Equipment("19", "DP-8150", "Valorizadora de billetes ultracompacta de 1 bolsillo", "Discriminadora de billetes de doble bolsillo para conteo por valor. La Magner 2000 es una clasificadora 1.5-pocket (1 bolsillo de salida + 1 de rechazo) multicurrency, robusta y compacta. Permite contar, autenticar y separar billetes por denominación de forma rápida y fiable, con detección avanzada de billetes falsos. Su construcción de alta resistencia (fabricada en Corea) sin bandas de goma la hace durable y de bajo mantenimiento, ideal para cajas y tesorerías con volúmenes considerables de efectivo.", "https://lebaneseequipment.com/wp-content/uploads/2024/09/11-Pocket-Banknote-Value-Sorter-PNG.png", 6, [ 

    // ]),
    new Equipment("18", "Magner - 125", "Contadora/discriminadora de billetes compacta, silenciosa y fácil de usar.", "Contadora/discriminadora de billetes compacta, silenciosa y fácil de usar. La Magner 125 ofrece un rendimiento confiable en un equipo portátil y resistente, ideal para oficinas, cajas y sucursales que buscan agilizar el conteo por piezas o por valor con detección de falsificaciones integrada.", "img/equipments/magner/125.png", 6, [
        "Modos y velocidades" => "Conteo por valor a 800/1.000/1.200 billetes/min; conteo por piezas a 1.500 billetes/min; lectura de número de serie a 800/1.000 billetes/min.",
        "Tolvas" => "Capacidad de alimentación 600 billetes; apilador 200 billetes.",
        "Detección de falsificación" => "MG, MT, UV, IR; imagen Dual RGB CIS.",
        "Pantalla" => "TFT-LCD táctil 3,5″ a color.",
        "Funciones" => "Auto-reconocimiento de moneda y conteo mixto (multidivisa); hasta 5 monedas configuradas (máx. 20).",
        "Rango de billetes" => "Tamaño 100–175 mm (ancho) × 50–90 mm (alto); espesor 0,05–0,12 mm.",
        "Sistema de alimentación" => "Rodillo por fricción.",
        "Conectividad y actualización" => "USB, RS232, RJ12, WLAN; actualización por USB/WLAN.",
        "Dimensiones/Peso" => "280×310×280 mm; 5,9 kg.",
        "Alimentación" => "110/220 V, 50/60 Hz; consumo 60 W."
    ]),
);


?>