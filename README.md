# OLC2_1S2026_Proyecto2
/compilador-gui
│
├── index.php
├── compile.php
├── download.php
│
├── /core
│   ├── Compiler.php          # Orquestador
│   ├── AntlrRunner.php       # 🔥 Punto de integración con ANTLR
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