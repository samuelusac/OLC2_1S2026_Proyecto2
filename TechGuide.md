El compilador maneja: 

1. expreciones
2. impreciones
3. etiquetas
4. saltos condicionales
5. print de enteros
6. while
7. GUI
8. Conectando ANTLR
9. Tabla simbolos
10. Scopes
11. Parametros
12. Return
13. Stack Frame
15. Arreglos
16. ARM

Estructura del proyecto: 

│
├── index.php
├── compile.php
├── download.php
│
├── /core
│   ├── Compiler.php          # Orquestador
│   ├── AntlrRunner.php       # Punto de integración con ANTLR
│
├── /storage
│   ├── last_code.txt         # Código enviado
│   ├── output.txt            # (placeholder futuro)
│   ├── errors.json
│
├── /partials
│   ├── toolbar.php
│   ├── editor.php
│   ├── console.php
│   ├── reports.php
│
├── /assets
│   ├── styles.css
│   ├── app.js
│
└── /uploads