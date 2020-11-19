function init() {
	//вычитуем файл goods.json
    $.getJSON("kamolino.json", kamolino);
}

function kamolino(data) {
    // вывод на страницу
    console.log(data);
    var out='';
    for (var key in data) {
        out +='<div class="kamolino">';
        out +=`<p class="name">${data[key].name}</p>`;
        out +=`<img src="images/${data[key].img}" alt="">`;
        out +=`<div class="cost">${data[key].description}</div>`;
        out +='</div>';
    }
    $('.kamolino').html(out);
}

$(document).ready(function () {
    init();

});
