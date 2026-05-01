.text
.global _start
_start:
sub sp, sp, #1024
// ===== INICIO PROGRAMA =====

// ===== FUNC suma =====
suma:
stp x29, x30, [sp, #-16]!
mov x29, sp
sub sp, sp, #128
str x0, [sp, #0]   // param a
str x1, [sp, #8]   // param b
// --- t1 = a + b ---
ldr x0, [sp, #0]
ldr x1, [sp, #8]
add x2, x0, x1
str x2, [sp, #16]
// --- end t1 ---
// --- return t1 ---
ldr x0, [sp, #16]
add sp, sp, #128
ldp x29, x30, [sp], #16
ret
// ===== END FUNC =====
// --- x = 2 ---
mov x0, #2
str x0, [sp, #24]
// --- end x ---
// --- y = 3 ---
mov x0, #3
str x0, [sp, #32]
// --- end y ---
// --- call suma ---
ldr x0, [sp, #24]
ldr x1, [sp, #32]
bl suma
str x0, [sp, #40]
// --- end call ---
// --- print_int res ---
ldr x0, [sp, #40]
bl print_int
// --- end print_int ---
// ===== FIN PROGRAMA =====
mov x0, #0
mov x8, #93
svc #0

// ===== print_int function =====
print_int:
stp x29, x30, [sp, #-16]!
mov x29, sp
sub sp, sp, #32
mov x1, sp
mov x2, #0
convert_loop:
mov x3, #10
udiv x4, x0, x3
msub x5, x4, x3, x0
add x5, x5, #48
strb w5, [x1, x2]
add x2, x2, #1
mov x0, x4
cbz x0, convert_done
b convert_loop
convert_done:
mov x0, #1
mov x2, x2
mov x8, #64
svc #0
add sp, sp, #32
ldp x29, x30, [sp], #16
ret