.section .text
.global main

main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // x := 42
    // const 42
    mov w0, #42
    str w0, [x29, #-16]

    // fmt.Println(x)
    ldr x0, =fmt_int
    ldr w1, [x29, #-16]
    bl printf

    // return 0
    mov w0, #0

    // liberar stack frame
    add sp, sp, #256
    // epilogue
    ldp x29, x30, [sp], 16
    ret

.section .rodata
fmt_int:
    .asciz "%d\n"

