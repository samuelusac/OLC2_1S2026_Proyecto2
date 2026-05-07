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

    // fmt.Println
    ldr x1, =msg1
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // ARRAY ASSIGN matrizNoInit
    // const 0
    mov w0, #0
    lsl w0, w0, #2
    mov x1, x0
    // const 0
    mov w0, #0
    mov w3, w0
    sub x2, x29, #16
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizNoInit
    // const 1
    mov w0, #1
    lsl w0, w0, #2
    mov x1, x0
    // const 0
    mov w0, #0
    mov w3, w0
    sub x2, x29, #16
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizNoInit
    // const 2
    mov w0, #2
    lsl w0, w0, #2
    mov x1, x0
    // const 0
    mov w0, #0
    mov w3, w0
    sub x2, x29, #16
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizNoInit
    // const 3
    mov w0, #3
    lsl w0, w0, #2
    mov x1, x0
    // const 0
    mov w0, #0
    mov w3, w0
    sub x2, x29, #16
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizInit
    // const 0
    mov w0, #0
    lsl w0, w0, #2
    mov x1, x0
    // const 1
    mov w0, #1
    mov w3, w0
    sub x2, x29, #32
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizInit
    // const 1
    mov w0, #1
    lsl w0, w0, #2
    mov x1, x0
    // const 2
    mov w0, #2
    mov w3, w0
    sub x2, x29, #32
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizInit
    // const 2
    mov w0, #2
    lsl w0, w0, #2
    mov x1, x0
    // const 3
    mov w0, #3
    mov w3, w0
    sub x2, x29, #32
    add x2, x2, x1
    str w3, [x2]
    // ARRAY ASSIGN matrizInit
    // const 3
    mov w0, #3
    lsl w0, w0, #2
    mov x1, x0
    // const 4
    mov w0, #4
    mov w3, w0
    sub x2, x29, #32
    add x2, x2, x1
    str w3, [x2]
    // fmt.Println
    ldr x1, =msg2
    ldr x0, =fmt_string
    bl printf
    // ARRAY ACCESS matrizNoInit
    // const 1
    mov w0, #1
    mov w1, #2
    mul w0, w0, w1
    // const 1
    mov w0, #1
    mov w2, w0
    str w2, [x29, #-200]
    // const 1
    mov w0, #1
    mov w1, #2
    mul w0, w0, w1
    ldr w2, [x29, #-200]
    add w0, w0, w2
    lsl w0, w0, #2
    mov x1, x0
    sub x2, x29, #16
    add x2, x2, x1
    ldr w0, [x2]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg3
    ldr x0, =fmt_string
    bl printf
    // ARRAY ACCESS matrizInit
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    // const 0
    mov w0, #0
    mov w2, w0
    str w2, [x29, #-208]
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    ldr w2, [x29, #-208]
    add w0, w0, w2
    lsl w0, w0, #2
    mov x1, x0
    sub x2, x29, #32
    add x2, x2, x1
    ldr w0, [x2]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg4
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg5
    ldr x0, =fmt_string
    bl printf
    // ARRAY ACCESS matrizNoInit
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    // const 1
    mov w0, #1
    mov w2, w0
    str w2, [x29, #-216]
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    ldr w2, [x29, #-216]
    add w0, w0, w2
    lsl w0, w0, #2
    mov x1, x0
    sub x2, x29, #16
    add x2, x2, x1
    ldr w0, [x2]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // ARRAY ASSIGN matrizNoInit
    // const 0
    mov w0, #0
    str w0, [x29, #-224]
    ldr w1, [x29, #-224]
    mov w2, #2
    mul w1, w1, w2
    // const 1
    mov w0, #1
    add w0, w1, w0
    lsl w0, w0, #2
    mov x1, x0
    // const 77
    mov w0, #77
    mov w3, w0
    sub x2, x29, #16
    add x2, x2, x1
    str w3, [x2]
    // fmt.Println
    ldr x1, =msg6
    ldr x0, =fmt_string
    bl printf
    // ARRAY ACCESS matrizNoInit
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    // const 1
    mov w0, #1
    mov w2, w0
    str w2, [x29, #-232]
    // const 0
    mov w0, #0
    mov w1, #2
    mul w0, w0, w1
    ldr w2, [x29, #-232]
    add w0, w0, w2
    lsl w0, w0, #2
    mov x1, x0
    sub x2, x29, #16
    add x2, x2, x1
    ldr w0, [x2]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg7
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
    .asciz "=== INICIO DE CALIFICACION: ARREGLOS ==="
msg1:
    .asciz "\\n--- 5.1 DECLARACION MULTIDIMENSIONAL ---"
msg2:
    .asciz "Matriz no inicializada [1][1]:"
msg3:
    .asciz "Matriz inicializada [0][0]:"
msg4:
    .asciz "\\n--- 5.2 ACCESO Y MODIFICACION MULTIDIMENSIONAL ---"
msg5:
    .asciz "Original matrizNoInit[0][1]:"
msg6:
    .asciz "Modificado matrizNoInit[0][1]:"
msg7:
    .asciz "\\n=== FIN DE CALIFICACION: ARREGLOS ==="
