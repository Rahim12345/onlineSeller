function call() {
    var number = document.querySelector("input[name=tel]").value;
    window.open('tel:' + number);
}