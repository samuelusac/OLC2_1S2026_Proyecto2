<?php

abstract class Instr {}

class AssignConst extends Instr {
    public $target;
    public $value;

    public function __construct($target, $value) {
        $this->target = $target;
        $this->value = $value;
    }
}

class Add extends Instr {
    public $result;
    public $left;
    public $right;

    public function __construct($result, $left, $right) {
        $this->result = $result;
        $this->left = $left;
        $this->right = $right;
    }
}

class Label extends Instr {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class GotoInstr extends Instr {
    public $label;

    public function __construct($label) {
        $this->label = $label;
    }
}

class IfGoto extends Instr {
    public $left;
    public $op;
    public $right;
    public $label;

    public function __construct($left, $op, $right, $label) {
        $this->left = $left;
        $this->op = $op;
        $this->right = $right;
        $this->label = $label;
    }
}

class PrintStr extends Instr {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }
}

class PrintInt extends Instr {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }
}

class FuncStart extends Instr {
    public $name;
    public $params;

    public function __construct($name, $params = []) {
        $this->name = $name;
        $this->params = $params;
    }
}

class FuncEnd extends Instr {}

class CallInstr extends Instr {
    public $name;
    public $args;
    public $result;

    public function __construct($name, $args, $result = null) {
        $this->name = $name;
        $this->args = $args;
        $this->result = $result;
    }
}

class ReturnInstr extends Instr {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }
}