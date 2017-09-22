jQuery.validator.addMethod("telefone", function (value, element) {
    return this.optional(element) || /\([0-9]{2}\) [0-9]{4}-[0-9]{4}$/.test(value) || /\([0-9]{2}\) [0-9]{4}-[0-9]{5}$/.test(value);
}, "Insira um telefone válido");
