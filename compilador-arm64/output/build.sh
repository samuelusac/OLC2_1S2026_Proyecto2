#!/bin/bash

# crear carpeta build
mkdir -p build

# ensamblar
aarch64-linux-gnu-as -o build/main.o main.asm

# linkear (IMPORTANTE: entrypoint _start)
aarch64-linux-gnu-ld -o build/main build/main.o -e _start

# ejecutar
qemu-aarch64 build/main