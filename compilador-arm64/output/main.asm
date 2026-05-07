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

    // if condition goto L0
    // BEGIN BINARY OPERATION (>)
    // evaluate left operand
    // load a
    ldr w0, [x29, #-16]
    // push left operand
    str w0, [sp, #-16]!
    // evaluate right operand
    // const 5
    mov w0, #5
    // pop left operand into w1
    ldr w1, [sp], #16
    // compare w1 > w0
    cmp w1, w0
    cset w0, gt
    // END BINARY OPERATION (>)
    cmp w0, #1
    b.eq L0

    // goto L1
    b L1


L0:
    // fmt.Println("CONDICION VERDADERA")
    ldr x0, =msg0
    bl puts


L1:
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

msg0:
    .asciz "CONDICION VERDADERA"
