#!/bin/bash

mkdir -p build

aarch64-linux-gnu-as main.asm -o build/main.o

aarch64-linux-gnu-gcc build/main.o -o build/main

qemu-aarch64 -L /usr/aarch64-linux-gnu build/main