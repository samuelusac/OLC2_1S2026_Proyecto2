.section .text
.global main

main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // a := expr
    // const 10
    mov w0, #10
    str w0, [x29, #-16]

    // b := expr
    // const 20
    mov w0, #20
    str w0, [x29, #-20]

    // c := expr
    // const 5
    mov w0, #5
    str w0, [x29, #-24]

    // r := expr
    // BEGIN BINARY OPERATION (*)
    // evaluate left operand
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load a
    ldr w0, [x29, #-16]
    // push left operand
    str w0, [sp, #-16]!
    // evaluate right operand
    // load b
    ldr w0, [x29, #-20]
    // pop left operand into w1
    ldr w1, [sp], #16
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    // push left operand
    str w0, [sp, #-16]!
    // evaluate right operand
    // load c
    ldr w0, [x29, #-24]
    // pop left operand into w1
    ldr w1, [sp], #16
    // w0 = w1 * w0
    mul w0, w1, w0
    // END BINARY OPERATION (*)
    str w0, [x29, #-28]

    // fmt.Println(r)
    ldr x0, =fmt_int
    ldr w1, [x29, #-28]
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

