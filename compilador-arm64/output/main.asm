.section .text

.global suma
suma:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // store parameter a
    str w0, [x29, #-8]
    // store parameter b
    str w1, [x29, #-16]

    // return
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load a
    ldr w0, [x29, #-8]
    // store left operand temp
    str w0, [x29, #-200]
    // evaluate right operand
    // load b
    ldr w0, [x29, #-16]
    // load left operand temp
    ldr w1, [x29, #-200]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    add sp, sp, #256
    ldp x29, x30, [sp], 16
    ret

    // default return 0
    mov w0, #0
    // liberar stack frame
    add sp, sp, #256
    // epilogue
    ldp x29, x30, [sp], 16
    ret

.global factorial
factorial:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // store parameter n
    str w0, [x29, #-8]

    // if condition goto L0
    // load n
    ldr w0, [x29, #-8]
    str w0, [x29, #-200]
    // const 1
    mov w0, #1
    ldr w1, [x29, #-200]
    cmp w1, w0
    b.le L0

    // goto L1
    b L1


L0:
    // return
    // const 1
    mov w0, #1
    add sp, sp, #256
    ldp x29, x30, [sp], 16
    ret

    // goto L2
    b L2


L1:

L2:
    // return
    // BEGIN BINARY OPERATION (*)
    // evaluate left operand
    // load n
    ldr w0, [x29, #-8]
    // store left operand temp
    str w0, [x29, #-208]
    // evaluate right operand
    // BEGIN CALL factorial
    // evaluate argument 0
    // BEGIN BINARY OPERATION (-)
    // evaluate left operand
    // load n
    ldr w0, [x29, #-8]
    // store left operand temp
    str w0, [x29, #-216]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    ldr w1, [x29, #-216]
    // w0 = w1 - w0
    sub w0, w1, w0
    // END BINARY OPERATION (-)
    str w0, [x29, #-200]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // call factorial
    bl factorial
    // END CALL factorial
    // load left operand temp
    ldr w1, [x29, #-208]
    // w0 = w1 * w0
    mul w0, w1, w0
    // END BINARY OPERATION (*)
    add sp, sp, #256
    ldp x29, x30, [sp], 16
    ret

    // default return 0
    mov w0, #0
    // liberar stack frame
    add sp, sp, #256
    // epilogue
    ldp x29, x30, [sp], 16
    ret

.global cuadrado
cuadrado:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // store parameter x
    str w0, [x29, #-8]

    // return
    // BEGIN BINARY OPERATION (*)
    // evaluate left operand
    // load x
    ldr w0, [x29, #-8]
    // store left operand temp
    str w0, [x29, #-200]
    // evaluate right operand
    // load x
    ldr w0, [x29, #-8]
    // load left operand temp
    ldr w1, [x29, #-200]
    // w0 = w1 * w0
    mul w0, w1, w0
    // END BINARY OPERATION (*)
    add sp, sp, #256
    ldp x29, x30, [sp], 16
    ret

    // default return 0
    mov w0, #0
    // liberar stack frame
    add sp, sp, #256
    // epilogue
    ldp x29, x30, [sp], 16
    ret

.global main
main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

    // fmt.Println
    ldr x0, =msg0
    bl puts

    // a := expr
    // const 10
    mov w0, #10
    str w0, [x29, #-8]

    // b := expr
    // const 20
    mov w0, #20
    str w0, [x29, #-16]

    // fmt.Println
    // load a
    ldr w0, [x29, #-8]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // fmt.Println
    // load b
    ldr w0, [x29, #-16]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // c := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load a
    ldr w0, [x29, #-8]
    // store left operand temp
    str w0, [x29, #-200]
    // evaluate right operand
    // load b
    ldr w0, [x29, #-16]
    // load left operand temp
    ldr w1, [x29, #-200]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-24]

    // fmt.Println
    // load c
    ldr w0, [x29, #-24]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // d := expr
    // BEGIN CALL suma
    // evaluate argument 0
    // load a
    ldr w0, [x29, #-8]
    str w0, [x29, #-200]
    // evaluate argument 1
    // load b
    ldr w0, [x29, #-16]
    str w0, [x29, #-208]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // load argument 1 into w1
    ldr w1, [x29, #-208]
    // call suma
    bl suma
    // END CALL suma
    str w0, [x29, #-32]

    // fmt.Println
    // load d
    ldr w0, [x29, #-32]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // e := expr
    // BEGIN CALL cuadrado
    // evaluate argument 0
    // const 5
    mov w0, #5
    str w0, [x29, #-200]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // call cuadrado
    bl cuadrado
    // END CALL cuadrado
    str w0, [x29, #-40]

    // fmt.Println
    // load e
    ldr w0, [x29, #-40]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // f := expr
    // BEGIN CALL factorial
    // evaluate argument 0
    // const 5
    mov w0, #5
    str w0, [x29, #-200]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // call factorial
    bl factorial
    // END CALL factorial
    str w0, [x29, #-48]

    // fmt.Println
    // load f
    ldr w0, [x29, #-48]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // g := expr
    // BEGIN CALL suma
    // evaluate argument 0
    // BEGIN CALL suma
    // evaluate argument 0
    // const 1
    mov w0, #1
    str w0, [x29, #-200]
    // evaluate argument 1
    // const 2
    mov w0, #2
    str w0, [x29, #-208]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // load argument 1 into w1
    ldr w1, [x29, #-208]
    // call suma
    bl suma
    // END CALL suma
    str w0, [x29, #-200]
    // evaluate argument 1
    // BEGIN CALL suma
    // evaluate argument 0
    // const 3
    mov w0, #3
    str w0, [x29, #-200]
    // evaluate argument 1
    // const 4
    mov w0, #4
    str w0, [x29, #-208]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // load argument 1 into w1
    ldr w1, [x29, #-208]
    // call suma
    bl suma
    // END CALL suma
    str w0, [x29, #-208]
    // load argument 0 into w0
    ldr w0, [x29, #-200]
    // load argument 1 into w1
    ldr w1, [x29, #-208]
    // call suma
    bl suma
    // END CALL suma
    str w0, [x29, #-56]

    // fmt.Println
    // load g
    ldr w0, [x29, #-56]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // if condition goto L3
    // load g
    ldr w0, [x29, #-56]
    str w0, [x29, #-208]
    // const 5
    mov w0, #5
    ldr w1, [x29, #-208]
    cmp w1, w0
    b.gt L3

    // goto L4
    b L4


L3:
    // fmt.Println
    // const 999
    mov w0, #999
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // goto L5
    b L5


L4:

L5:
    // contador := expr
    // const 3
    mov w0, #3
    str w0, [x29, #-64]


L6:
    // if condition goto L7
    // load contador
    ldr w0, [x29, #-64]
    str w0, [x29, #-216]
    // const 0
    mov w0, #0
    ldr w1, [x29, #-216]
    cmp w1, w0
    b.gt L7

    // goto L8
    b L8


L7:
    // fmt.Println
    // load contador
    ldr w0, [x29, #-64]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf

    // contador := expr
    // BEGIN BINARY OPERATION (-)
    // evaluate left operand
    // load contador
    ldr w0, [x29, #-64]
    // store left operand temp
    str w0, [x29, #-224]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    ldr w1, [x29, #-224]
    // w0 = w1 - w0
    sub w0, w1, w0
    // END BINARY OPERATION (-)
    str w0, [x29, #-0]

    // goto L6
    b L6


L8:
    // fmt.Println
    ldr x0, =msg1
    bl puts

    // default return 0
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
    .asciz "\"=== PRUEBA BACKEND ARM64 ===\""
msg1:
    .asciz "\"=== FIN ===\""
