.section .text
.global main

main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // i := expr
    // const 1
    mov w0, #1
    str w0, [x29, #-16]


L0:
    // if condition goto L1
    // load i
    ldr w0, [x29, #-16]
    str w0, [sp, #-16]!
    // const 5
    mov w0, #5
    ldr w1, [sp], #16
    cmp w1, w0
    b.le L1

    // goto L2
    b L2


L1:
    // fmt.Println(i)
    ldr x0, =fmt_int
    ldr w1, [x29, #-16]
    bl printf

    // i := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load i
    ldr w0, [x29, #-16]
    // push left operand
    str w0, [sp, #-16]!
    // evaluate right operand
    // const 1
    mov w0, #1
    // pop left operand into w1
    ldr w1, [sp], #16
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-16]

    // goto L0
    b L0


L2:
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

