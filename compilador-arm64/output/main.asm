.data
int_buffer: .space 32
int_buffer_end:
newline: .ascii "\n"
.text
.global _start
.text
_start:
    sub sp, sp, #1024
    mov x19, sp
    // === PROGRAM START ===
    // i = 0
    mov x0, #0
    str x0, [x19, #0]
L0:
    // if i >= 3
    ldr x0, [x19, #0]
    mov x1, #3
    cmp x0, x1
    b.ge L1
    // j = 0
    mov x0, #0
    str x0, [x19, #8]
L2:
    // if j >= 2
    ldr x0, [x19, #8]
    mov x1, #2
    cmp x0, x1
    b.ge L3
    // print int j
    ldr x0, [x19, #8]
    adr x1, int_buffer_end
    cmp x0, #0
    b.ne conv_0
zero_0:
    mov x3, #48
    strb w3, [x1, #-1]!
    b print_0
conv_0:
    mov x2, #10
    udiv x4, x0, x2
    msub x5, x4, x2, x0
    add x5, x5, #48
    strb w5, [x1, #-1]!
    mov x0, x4
    cbnz x0, conv_0
print_0:
    mov x0, #1
    mov x8, #64
    svc #0
    mov x0, #1
    adr x1, newline
    mov x2, #1
    mov x8, #64
    svc #0
    // j = j + 1
    ldr x0, [x19, #8]
    mov x1, #1
    add x2, x0, x1
    str x2, [x19, #8]
    b L2
L3:
    // i = i + 1
    ldr x0, [x19, #0]
    mov x1, #1
    add x2, x0, x1
    str x2, [x19, #0]
    b L0
L1:
    mov x0, #0
    mov x8, #93
    svc #0