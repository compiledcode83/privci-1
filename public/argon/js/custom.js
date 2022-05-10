var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        console.log(panel);
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

var acc = document.getElementsByClassName("faq-accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("faq-active");
        var panel = document.getElementsByClassName("faq-panel")[0];
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

function onAddDocument() {
    var question = document.getElementById("doc_question");
    var answer = document.getElementById("doc_answer");
    document.getElementById("documents_uploaded").innerHTML +=
        "<div class='d-flex align-items-center theme-color'><p class='mr-2 theme-color'>" +
        question.value +
        "</p><i class='mr-1 fa fa-edit'></i><i class='fa fa-trash'></i></div>";
    question.value = "";
    answer.value = "";

    document.getElementsByClassName("faq-panel")[0].style.maxHeight = null;
}
