.section .text

.global main
main:
    // prologue
    stp x29, x30, [sp, -16]!
    mov x29, sp
    // reservar stack frame
    sub sp, sp, #256

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

    // varInt := expr
    // const 42
    mov w0, #42
    str w0, [x29, #-8]


    // varFloat := expr
    ldr x0, =msg2
    str x0, [x29, #-16]


    // varBool := expr
    // const true
    mov w0, #1
    str w0, [x29, #-24]


    // varRune := expr
    // rune 'G'
    mov w0, #71
    str w0, [x29, #-32]


    // varString := expr
    // const string
    ldr x0, =msg3
    str x0, [x29, #-40]


    // fmt.Println
    // load varInt
    ldr w0, [x29, #-8]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x1, [x29, #-16]
    ldr x0, =fmt_string
    bl printf
    ldr w1, [x29, #-24]
    cmp w1, #0
    ldr x1, =true_str
    ldr x2, =false_str
    csel x1, x2, x1, eq
    ldr x0, =fmt_bool
    bl printf
    ldr w1, [x29, #-32]
    ldr x0, =fmt_char
    bl printf
    ldr x1, [x29, #-40]
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg4
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // varInt := expr
    // const 120
    mov w0, #120
    str w0, [x29, #-8]


    // varFloat := expr
    ldr x0, =msg5
    str w0, [x29, #-16]


    // varBool := expr
    // const false
    mov w0, #0
    str w0, [x29, #-24]


    // varRune := expr
    // rune 'Z'
    mov w0, #90
    str w0, [x29, #-32]


    // varString := expr
    // const string
    ldr x0, =msg6
    str w0, [x29, #-40]


    // fmt.Println
    // load varInt
    ldr w0, [x29, #-8]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x1, [x29, #-16]
    ldr x0, =fmt_string
    bl printf
    ldr w1, [x29, #-24]
    cmp w1, #0
    ldr x1, =true_str
    ldr x2, =false_str
    csel x1, x2, x1, eq
    ldr x0, =fmt_bool
    bl printf
    ldr w1, [x29, #-32]
    ldr x0, =fmt_char
    bl printf
    ldr x1, [x29, #-40]
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg7
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // identificador := expr
    // const 1
    mov w0, #1
    str w0, [x29, #-48]


    // Identificador := expr
    // const 2
    mov w0, #2
    str w0, [x29, #-56]


    // fmt.Println
    ldr x1, =msg8
    ldr x0, =fmt_string
    bl printf
    // load identificador
    ldr w0, [x29, #-48]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load Identificador
    ldr w0, [x29, #-56]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg9
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // cInt := expr
    // const 7
    mov w0, #7
    str w0, [x29, #-64]


    // cFloat := expr
    ldr x0, =msg10
    str w0, [x29, #-72]


    // cBool := expr
    // const true
    mov w0, #1
    str w0, [x29, #-80]


    // cRune := expr
    // rune 'X'
    mov w0, #88
    str w0, [x29, #-88]


    // cString := expr
    // const string
    ldr x0, =msg11
    str w0, [x29, #-96]


    // fmt.Println
    // load cInt
    ldr w0, [x29, #-64]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load cFloat
    ldr w0, [x29, #-72]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load cBool
    ldr w0, [x29, #-80]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load cRune
    ldr w0, [x29, #-88]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load cString
    ldr w0, [x29, #-96]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg12
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // defInt := expr
    // const 0
    mov w0, #0
    str w0, [x29, #-104]


    // defFloat := expr
    // const 0
    mov w0, #0
    str x0, [x29, #-112]


    // defBool := expr
    // const 0
    mov w0, #0
    str w0, [x29, #-120]


    // defRune := expr
    // const 0
    mov w0, #0
    str w0, [x29, #-128]


    // defString := expr
    ldr x0, =empty_str
    str x0, [x29, #-136]


    // fmt.Println
    // load defInt
    ldr w0, [x29, #-104]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x1, [x29, #-112]
    ldr x0, =fmt_string
    bl printf
    ldr w1, [x29, #-120]
    cmp w1, #0
    ldr x1, =true_str
    ldr x2, =false_str
    csel x1, x2, x1, eq
    ldr x0, =fmt_bool
    bl printf
    ldr w1, [x29, #-128]
    ldr x0, =fmt_char
    bl printf
    ldr x1, [x29, #-136]
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg13
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // m1 := expr
    // const 10
    mov w0, #10
    str w0, [x29, #-144]


    // m2 := expr
    // const 20
    mov w0, #20
    str w0, [x29, #-152]


    // m3 := expr
    // const string
    ldr x0, =msg14
    str w0, [x29, #-160]


    // m4 := expr
    // const string
    ldr x0, =msg15
    str w0, [x29, #-168]


    // fmt.Println
    // load m1
    ldr w0, [x29, #-144]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load m2
    ldr w0, [x29, #-152]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load m3
    ldr w0, [x29, #-160]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    // load m4
    ldr w0, [x29, #-168]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg16
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, [x29, #-176]
    ldr x0, =fmt_string
    bl printf
    // load MAX
    ldr w0, [x29, #-184]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg17
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg18
    ldr x0, =fmt_string
    bl printf
    ldr x1, =msg19
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg20
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (==)
    // evaluate left operand
    // const nil
    mov w0, #0
    // store left operand temp
    str w0, [x29, #-200]
    // evaluate right operand
    // const nil
    mov w0, #0
    // load left operand temp
    ldr w1, [x29, #-200]
    // compare w1 == w0
    cmp w1, w0
    cset w0, eq
    // END BINARY OPERATION (==)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg21
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg22
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // const 15
    mov w0, #15
    // store left operand temp
    str w0, [x29, #-208]
    // evaluate right operand
    // const 25
    mov w0, #25
    // load left operand temp
    ldr w1, [x29, #-208]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg23
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (-)
    // evaluate left operand
    // const 50
    mov w0, #50
    // store left operand temp
    str w0, [x29, #-216]
    // evaluate right operand
    // const 18
    mov w0, #18
    // load left operand temp
    ldr w1, [x29, #-216]
    // w0 = w1 - w0
    sub w0, w1, w0
    // END BINARY OPERATION (-)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg24
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (*)
    // evaluate left operand
    // const 7
    mov w0, #7
    // store left operand temp
    str w0, [x29, #-224]
    // evaluate right operand
    // const 8
    mov w0, #8
    // load left operand temp
    ldr w1, [x29, #-224]
    // w0 = w1 * w0
    mul w0, w1, w0
    // END BINARY OPERATION (*)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg25
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (/)
    // evaluate left operand
    // const 100
    mov w0, #100
    // store left operand temp
    str w0, [x29, #-232]
    // evaluate right operand
    // const 3
    mov w0, #3
    // load left operand temp
    ldr w1, [x29, #-232]
    // w0 = w1 / w0
    sdiv w0, w1, w0
    // END BINARY OPERATION (/)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg26
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (%)
    // evaluate left operand
    // const 17
    mov w0, #17
    // store left operand temp
    str w0, [x29, #-240]
    // evaluate right operand
    // const 5
    mov w0, #5
    // load left operand temp
    ldr w1, [x29, #-240]
    // w2 = w1 / w0
    sdiv w2, w1, w0
    // w0 = w1 - (w2 * w0)
    msub w0, w2, w0, w1
    // END BINARY OPERATION (%)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg27
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // r1 := expr
    // const 10
    mov w0, #10
    str w0, [x29, #-192]


    // r2 := expr
    // const 20
    mov w0, #20
    str w0, [x29, #-200]


    // fmt.Println
    ldr x1, =msg28
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (==)
    // evaluate left operand
    // load r1
    ldr w0, [x29, #-192]
    // store left operand temp
    str w0, [x29, #-248]
    // evaluate right operand
    // load r2
    ldr w0, [x29, #-200]
    // load left operand temp
    ldr w1, [x29, #-248]
    // compare w1 == w0
    cmp w1, w0
    cset w0, eq
    // END BINARY OPERATION (==)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg29
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (!=)
    // evaluate left operand
    // load r1
    ldr w0, [x29, #-192]
    // store left operand temp
    str w0, [x29, #-256]
    // evaluate right operand
    // load r2
    ldr w0, [x29, #-200]
    // load left operand temp
    ldr w1, [x29, #-256]
    // compare w1 != w0
    cmp w1, w0
    cset w0, ne
    // END BINARY OPERATION (!=)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg30
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (<)
    // evaluate left operand
    // load r1
    ldr w0, [x29, #-192]
    // store left operand temp
    str w0, [x29, #-264]
    // evaluate right operand
    // load r2
    ldr w0, [x29, #-200]
    // load left operand temp
    ldr w1, [x29, #-264]
    // compare w1 < w0
    cmp w1, w0
    cset w0, lt
    // END BINARY OPERATION (<)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg31
    ldr x0, =fmt_string
    bl printf
    // BEGIN BINARY OPERATION (>)
    // evaluate left operand
    // load r1
    ldr w0, [x29, #-192]
    // store left operand temp
    str w0, [x29, #-272]
    // evaluate right operand
    // load r2
    ldr w0, [x29, #-200]
    // load left operand temp
    ldr w1, [x29, #-272]
    // compare w1 > w0
    cmp w1, w0
    cset w0, gt
    // END BINARY OPERATION (>)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg32
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // t := expr
    // const true
    mov w0, #1
    str w0, [x29, #-208]


    // f := expr
    // const false
    mov w0, #0
    str w0, [x29, #-216]


    // fmt.Println
    ldr x1, =msg33
    ldr x0, =fmt_string
    bl printf
    // BEGIN SHORT-CIRCUIT (&&)
    // load t
    ldr w0, [x29, #-208]
    cmp w0, #0
    b.eq bool_false_0
    // load f
    ldr w0, [x29, #-216]
    cmp w0, #0
    b.eq bool_false_0
    mov w0, #1
    b bool_end_2
bool_false_0:
    mov w0, #0
bool_end_2:
    // END SHORT-CIRCUIT (&&)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg34
    ldr x0, =fmt_string
    bl printf
    // BEGIN SHORT-CIRCUIT (||)
    // load t
    ldr w0, [x29, #-208]
    cmp w0, #0
    b.ne bool_true_4
    // load f
    ldr w0, [x29, #-216]
    cmp w0, #0
    b.ne bool_true_4
    mov w0, #0
    b bool_end_5
bool_true_4:
    mov w0, #1
bool_end_5:
    // END SHORT-CIRCUIT (||)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg35
    ldr x0, =fmt_string
    bl printf
    // BEGIN UNARY OPERATION (!)
    // load t
    ldr w0, [x29, #-208]
    // logical not
    cmp w0, #0
    cset w0, eq
    // END UNARY OPERATION (!)
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg36
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // divisor := expr
    // const 0
    mov w0, #0
    str w0, [x29, #-224]


    // ccAnd := expr
    // BEGIN SHORT-CIRCUIT (&&)
    // const false
    mov w0, #0
    cmp w0, #0
    b.eq bool_false_6
    // BEGIN BINARY OPERATION (==)
    // evaluate left operand
    // BEGIN BINARY OPERATION (/)
    // evaluate left operand
    // const 100
    mov w0, #100
    // store left operand temp
    str w0, [x29, #-280]
    // evaluate right operand
    // load divisor
    ldr w0, [x29, #-224]
    // load left operand temp
    ldr w1, [x29, #-280]
    // w0 = w1 / w0
    sdiv w0, w1, w0
    // END BINARY OPERATION (/)
    // store left operand temp
    str w0, [x29, #-288]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    ldr w1, [x29, #-288]
    // compare w1 == w0
    cmp w1, w0
    cset w0, eq
    // END BINARY OPERATION (==)
    cmp w0, #0
    b.eq bool_false_6
    mov w0, #1
    b bool_end_8
bool_false_6:
    mov w0, #0
bool_end_8:
    // END SHORT-CIRCUIT (&&)
    str w0, [x29, #-232]


    // ccOr := expr
    // BEGIN SHORT-CIRCUIT (||)
    // const true
    mov w0, #1
    cmp w0, #0
    b.ne bool_true_10
    // BEGIN BINARY OPERATION (==)
    // evaluate left operand
    // BEGIN BINARY OPERATION (/)
    // evaluate left operand
    // const 100
    mov w0, #100
    // store left operand temp
    str w0, [x29, #-296]
    // evaluate right operand
    // load divisor
    ldr w0, [x29, #-224]
    // load left operand temp
    ldr w1, [x29, #-296]
    // w0 = w1 / w0
    sdiv w0, w1, w0
    // END BINARY OPERATION (/)
    // store left operand temp
    str w0, [x29, #-304]
    // evaluate right operand
    // const 1
    mov w0, #1
    // load left operand temp
    ldr w1, [x29, #-304]
    // compare w1 == w0
    cmp w1, w0
    cset w0, eq
    // END BINARY OPERATION (==)
    cmp w0, #0
    b.ne bool_true_10
    mov w0, #0
    b bool_end_11
bool_true_10:
    mov w0, #1
bool_end_11:
    // END SHORT-CIRCUIT (||)
    str w0, [x29, #-240]


    // fmt.Println
    ldr x1, =msg37
    ldr x0, =fmt_string
    bl printf
    // load ccAnd
    ldr w0, [x29, #-232]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg38
    ldr x0, =fmt_string
    bl printf
    // load ccOr
    ldr w0, [x29, #-240]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg39
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // asig := expr
    // const 50
    mov w0, #50
    str w0, [x29, #-248]


    // asig := expr
    // BEGIN BINARY OPERATION (+)
    // evaluate left operand
    // load asig
    ldr w0, [x29, #-248]
    // store left operand temp
    str w0, [x29, #-312]
    // evaluate right operand
    // const 10
    mov w0, #10
    // load left operand temp
    ldr w1, [x29, #-312]
    // w0 = w1 + w0
    add w0, w1, w0
    // END BINARY OPERATION (+)
    str w0, [x29, #-248]


    // asig := expr
    // BEGIN BINARY OPERATION (-)
    // evaluate left operand
    // load asig
    ldr w0, [x29, #-248]
    // store left operand temp
    str w0, [x29, #-320]
    // evaluate right operand
    // const 5
    mov w0, #5
    // load left operand temp
    ldr w1, [x29, #-320]
    // w0 = w1 - w0
    sub w0, w1, w0
    // END BINARY OPERATION (-)
    str w0, [x29, #-248]


    // asig := expr
    // BEGIN BINARY OPERATION (*)
    // evaluate left operand
    // load asig
    ldr w0, [x29, #-248]
    // store left operand temp
    str w0, [x29, #-328]
    // evaluate right operand
    // const 2
    mov w0, #2
    // load left operand temp
    ldr w1, [x29, #-328]
    // w0 = w1 * w0
    mul w0, w1, w0
    // END BINARY OPERATION (*)
    str w0, [x29, #-248]


    // asig := expr
    // BEGIN BINARY OPERATION (/)
    // evaluate left operand
    // load asig
    ldr w0, [x29, #-248]
    // store left operand temp
    str w0, [x29, #-336]
    // evaluate right operand
    // const 5
    mov w0, #5
    // load left operand temp
    ldr w1, [x29, #-336]
    // w0 = w1 / w0
    sdiv w0, w1, w0
    // END BINARY OPERATION (/)
    str w0, [x29, #-248]


    // fmt.Println
    ldr x1, =msg40
    ldr x0, =fmt_string
    bl printf
    // load asig
    ldr w0, [x29, #-248]
    mov w1, w0
    ldr x0, =fmt_int
    bl printf
    ldr x0, =newline
    bl printf

    // fmt.Println
    ldr x1, =msg41
    ldr x0, =fmt_string
    bl printf
    ldr x0, =newline
    bl printf

    // default return 0
    mov w0, #0
    // liberar stack frame
    add sp, sp, #256
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
    .asciz "=== INICIO DE CALIFICACION: FUNCIONALIDADES BASICAS ==="
msg1:
    .asciz "\\n--- 1.1 DECLARACION LARGA ---"
msg2:
    .asciz "3.14"
msg3:
    .asciz "Golampi"
msg4:
    .asciz "\\n--- 1.2 ASIGNACION DE VARIABLES ---"
msg5:
    .asciz "9.75"
msg6:
    .asciz "Actualizado"
msg7:
    .asciz "\\n--- 1.3 FORMATO DE IDENTIFICADORES ---"
msg8:
    .asciz "Case sensitive:"
msg9:
    .asciz "\\n--- 1.4 DECLARACION CORTA ---"
msg10:
    .asciz "2.5"
msg11:
    .asciz "Inferencia"
msg12:
    .asciz "\\n--- 1.5 DECLARACION LARGA SIN INICIALIZAR ---"
msg13:
    .asciz "\\n--- 1.6 DECLARACION MULTIPLE ---"
msg14:
    .asciz "Hola"
msg15:
    .asciz "Mundo"
msg16:
    .asciz "\\n--- 1.7 CONSTANTES ---"
msg17:
    .asciz "\\n--- 1.8 MANEJO DE NIL ---"
msg18:
    .asciz "Impresion de nil:"
msg19:
    .asciz "nil"
msg20:
    .asciz "Comparacion nil == nil:"
msg21:
    .asciz "\\n--- 1.11 OPERACIONES ARITMETICAS ---"
msg22:
    .asciz "+:"
msg23:
    .asciz "-:"
msg24:
    .asciz "*:"
msg25:
    .asciz "/:"
msg26:
    .asciz "%:"
msg27:
    .asciz "\\n--- 1.12 OPERACIONES RELACIONALES ---"
msg28:
    .asciz "==:"
msg29:
    .asciz "!=:"
msg30:
    .asciz "<:"
msg31:
    .asciz ">:"
msg32:
    .asciz "\\n--- 1.13 OPERACIONES LOGICAS ---"
msg33:
    .asciz "true && false:"
msg34:
    .asciz "true || false:"
msg35:
    .asciz "!true:"
msg36:
    .asciz "\\n--- 1.14 CORTO CIRCUITO ---"
msg37:
    .asciz "AND:"
msg38:
    .asciz "OR:"
msg39:
    .asciz "\\n--- 1.15 OPERADORES DE ASIGNACION ---"
msg40:
    .asciz "Resultado final:"
msg41:
    .asciz "\\n=== FIN DE CALIFICACION: FUNCIONALIDADES BASICAS ==="
