.section .text

.global main
main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #16384

    // fmt.Println
    ldr x1, =msg0
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // nota1 := expr
    // const 85
    mov w0, #85
    str w0, [x29, #-8]


    // nota2 := expr
    // const 92
    mov w0, #92
    str w0, [x29, #-16]


    // estudiante := expr
    // const string
    ldr x0, =msg1
    str x0, [x29, #-24]


    // fmt.Println
    ldr x1, =msg2
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // if condition goto L0
    // load nota1
    ldr w0, [x29, #-8]
    str w0, [x29, #-200]
    // const 80
    mov w0, #80
    ldr w1, [x29, #-200]
    cmp w1, w0
    b.gt L0

    // goto L1
    b L1


L0:
    // fmt.Println
    ldr x1, =msg3
    ldr x0, =fmt_string
    bl printf
    ldr x1, [x29, #-24]
    ldr x0, =fmt_string
    bl printf
    ldr x1, =msg4
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L2
    b L2


L1:

L2:
    // fmt.Println
    ldr x1, =msg5
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // if condition goto L3
    // load nota2
    ldr w0, [x29, #-16]
    str w0, [x29, #-208]
    // const 95
    mov w0, #95
    ldr w1, [x29, #-208]
    cmp w1, w0
    b.ge L3

    // goto L4
    b L4


L3:
    // fmt.Println
    ldr x1, =msg6
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L5
    b L5


L4:
    // if condition goto L6
    // load nota2
    ldr w0, [x29, #-16]
    str w0, [x29, #-216]
    // const 90
    mov w0, #90
    ldr w1, [x29, #-216]
    cmp w1, w0
    b.ge L6

    // goto L7
    b L7


L6:
    // fmt.Println
    ldr x1, =msg7
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L8
    b L8


L7:
    // fmt.Println
    ldr x1, =msg8
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf


L8:

L5:
    // fmt.Println
    ldr x1, =msg9
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // codigoCategoria := expr
    // const 2
    mov w0, #2
    str w0, [x29, #-32]


    // if condition goto L10
    // load codigoCategoria
    ldr w0, [x29, #-32]
    str w0, [x29, #-224]
    // const 1
    mov w0, #1
    ldr w1, [x29, #-224]
    cmp w1, w0
    b.eq L10

    // if condition goto L11
    // load codigoCategoria
    ldr w0, [x29, #-32]
    str w0, [x29, #-232]
    // const 2
    mov w0, #2
    ldr w1, [x29, #-232]
    cmp w1, w0
    b.eq L11

    // if condition goto L12
    // load codigoCategoria
    ldr w0, [x29, #-32]
    str w0, [x29, #-240]
    // const 3
    mov w0, #3
    ldr w1, [x29, #-240]
    cmp w1, w0
    b.eq L12

    // goto L13
    b L13


L10:
    // fmt.Println
    ldr x1, =msg10
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L9
    b L9


L11:
    // fmt.Println
    ldr x1, =msg11
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L9
    b L9


L12:
    // fmt.Println
    ldr x1, =msg12
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L9
    b L9


L13:
    // fmt.Println
    ldr x1, =msg13
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf


L9:
    // fmt.Println
    ldr x1, =msg14
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // i := expr
    // const 1
    mov w0, #1
    str w0, [x29, #-40]



L14:
    // if condition goto L15
    // load i
    ldr w0, [x29, #-40]
    str w0, [x29, #-248]
    // const 5
    mov w0, #5
    ldr w1, [x29, #-248]
    cmp w1, w0
    b.le L15

    // goto L16
    b L16


L15:
    // fmt.Println
    ldr x1, =msg15
    ldr x0, =fmt_string
    bl printf
    // load i
    ldr w0, [x29, #-40]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf


L17:
    // i := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load i
    ldr w0, [x29, #-40]
    // store left operand temp
    mov x9, #256
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    mov x9, #256
    sub x9, x29, x9
    ldr w1, [x9]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-40]


    // goto L14
    b L14


L16:
    // fmt.Println
    ldr x1, =msg16
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // contador := expr
    // const 10
    mov w0, #10
    str w0, [x29, #-48]



L18:
    // if condition goto L19
    // load contador
    ldr w0, [x29, #-48]
    mov x9, #264
    sub x9, x29, x9
    str w0, [x9]
    // const 0
    mov w0, #0
    mov x9, #264
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.gt L19

    // goto L20
    b L20


L19:
    // fmt.Println
    ldr x1, =msg17
    ldr x0, =fmt_string
    bl printf
    // load contador
    ldr w0, [x29, #-48]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // contador := expr
    // BEGIN BINARY OPERATION (-)
    // evaluate left operand
    // load contador
    ldr w0, [x29, #-48]
    // store left operand temp
    mov x9, #272
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 3
    mov w0, #3
    // load left operand temp
    mov x9, #272
    sub x9, x29, x9
    ldr w1, [x9]
    // w0 = w1 - w0
    sub w0, w1, w0
    // END BINARY OPERATION (-)
    str w0, [x29, #-48]


    // goto L18
    b L18


L20:
    // fmt.Println
    ldr x1, =msg18
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // intentos := expr
    // const 0
    mov w0, #0
    str w0, [x29, #-56]



L21:
    // intentos := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load intentos
    ldr w0, [x29, #-56]
    // store left operand temp
    mov x9, #280
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    mov x9, #280
    sub x9, x29, x9
    ldr w1, [x9]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-56]


    // fmt.Println
    ldr x1, =msg19
    ldr x0, =fmt_string
    bl printf
    // load intentos
    ldr w0, [x29, #-56]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // if condition goto L23
    // load intentos
    ldr w0, [x29, #-56]
    mov x9, #288
    sub x9, x29, x9
    str w0, [x9]
    // const 3
    mov w0, #3
    mov x9, #288
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.eq L23

    // goto L24
    b L24


L23:
    // goto L22
    b L22

    // goto L25
    b L25


L24:

L25:
    // goto L21
    b L21


L22:
    // fmt.Println
    ldr x1, =msg20
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // y := expr
    // const 1
    mov w0, #1
    str w0, [x29, #-64]



L26:
    // if condition goto L27
    // load y
    ldr w0, [x29, #-64]
    mov x9, #296
    sub x9, x29, x9
    str w0, [x9]
    // const 20
    mov w0, #20
    mov x9, #296
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.le L27

    // goto L28
    b L28


L27:
    // if condition goto L30
    // load y
    ldr w0, [x29, #-64]
    mov x9, #304
    sub x9, x29, x9
    str w0, [x9]
    // const 7
    mov w0, #7
    mov x9, #304
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.eq L30

    // goto L31
    b L31


L30:
    // fmt.Println
    ldr x1, =msg21
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // goto L28
    b L28

    // goto L32
    b L32


L31:

L32:
    // fmt.Println
    // load y
    ldr w0, [x29, #-64]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf


L29:
    // y := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load y
    ldr w0, [x29, #-64]
    // store left operand temp
    mov x9, #312
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    mov x9, #312
    sub x9, x29, x9
    ldr w1, [x9]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-64]


    // goto L26
    b L26


L28:
    // fmt.Println
    ldr x1, =msg22
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // j := expr
    // const 1
    mov w0, #1
    str w0, [x29, #-72]



L33:
    // if condition goto L34
    // load j
    ldr w0, [x29, #-72]
    mov x9, #320
    sub x9, x29, x9
    str w0, [x9]
    // const 6
    mov w0, #6
    mov x9, #320
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.le L34

    // goto L35
    b L35


L34:
    // if condition goto L37
    // BEGIN BINARY OPERATION (%)
    // evaluate left operand
    // load j
    ldr w0, [x29, #-72]
    // store left operand temp
    mov x9, #328
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 2
    mov w0, #2
    // load left operand temp
    mov x9, #328
    sub x9, x29, x9
    ldr w1, [x9]
    // w2 = w1 / w0
    sdiv w2, w1, w0
    // w0 = w1 - (w2 * w0)
    msub w0, w2, w0, w1
    // END BINARY OPERATION (%)
    mov x9, #336
    sub x9, x29, x9
    str w0, [x9]
    // const 0
    mov w0, #0
    mov x9, #336
    sub x9, x29, x9
    ldr w1, [x9]
    cmp w1, w0
    b.eq L37

    // goto L38
    b L38


L37:
    // goto L36
    b L36

    // goto L39
    b L39


L38:

L39:
    // fmt.Println
    ldr x1, =msg23
    ldr x0, =fmt_string
    bl printf
    // load j
    ldr w0, [x29, #-72]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf


L36:
    // j := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load j
    ldr w0, [x29, #-72]
    // store left operand temp
    mov x9, #344
    sub x9, x29, x9
    str w0, [x9]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    mov x9, #344
    sub x9, x29, x9
    ldr w1, [x9]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-72]


    // goto L33
    b L33


L35:
    // fmt.Println
    ldr x1, =msg24
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // default return 0
    mov w0, #0
    // liberar stack frame
    add sp, sp, #16384
    // epilogue
    ldp x29, x30, [sp], 16
    ret

.section .rodata
empty_str:
    .asciz ""

fmt_int:
    .asciz "%d "

fmt_string:
    .asciz "%s "

fmt_bool:
    .asciz "%s "

fmt_char:
    .asciz "%c "

newline:
    .asciz "\n"

true_str:
    .asciz "true"

false_str:
    .asciz "false"


msg0:
    .asciz "=== INICIO DE CALIFICACION: ESTRUCTURAS DE CONTROL ==="
msg1:
    .asciz "Ana"
msg2:
    .asciz "\\n--- 2.2 IF ---"
msg3:
    .asciz "El estudiante"
msg4:
    .asciz "tiene una nota mayor a 80"
msg5:
    .asciz "\\n--- 2.3 IF ELSE ---"
msg6:
    .asciz "Clasificacion: SOBRESALIENTE"
msg7:
    .asciz "Clasificacion: EXCELENTE"
msg8:
    .asciz "Clasificacion: REGULAR"
msg9:
    .asciz "\\n--- 2.4 SWITCH CASE DEFAULT ---"
msg10:
    .asciz "Categoria 1: Principiante"
msg11:
    .asciz "Categoria 2: Intermedio"
msg12:
    .asciz "Categoria 3: Avanzado"
msg13:
    .asciz "Categoria Desconocida"
msg14:
    .asciz "\\n--- 2.5 FOR CLASICO ---"
msg15:
    .asciz "Iteracion:"
msg16:
    .asciz "\\n--- 2.6 FOR CONDICIONAL ---"
msg17:
    .asciz "Cuenta regresiva:"
msg18:
    .asciz "\\n--- 2.7 FOR INFINITO ---"
msg19:
    .asciz "Intento:"
msg20:
    .asciz "\\n--- 2.8 BREAK ---"
msg21:
    .asciz "Se encontro 7, se aplica break"
msg22:
    .asciz "\\n--- 2.9 CONTINUE ---"
msg23:
    .asciz "Impar:"
msg24:
    .asciz "\\n=== FIN DE CALIFICACION: ESTRUCTURAS DE CONTROL ==="
