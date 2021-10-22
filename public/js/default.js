function ajax(url, callback) {
    $.ajax({
        url: url,
        dataType: 'json',
        success: function(data) {
            callback(data);
        }
    });
}

let count = 0;
let equips = $('#links');
let submit = $('#submit');
let links = [];
class Link {
    constructor() {
        this.path = '';
        this.header_ru = '';
        this.header_en = '';
        this.text_ru = '';
        this.text_en = '';
    }
}

function addEquipment(update_data = new Link()) { // update_data - for select necessary options and input fields
    submit.attr('disabled', false);
    create(update_data);
}

function create(data) {
    links.push(new Link());
    let link_part = $('#links-part');
    let row = document.createElement('div');
    let col = document.createElement('div');
    let col2 = document.createElement('div');
    let row1 = document.createElement('div');
    let row2 = document.createElement('div');
    let row3 = document.createElement('div');

    let link = document.createElement('input');
    let header_ru = document.createElement('input');
    let header_en = document.createElement('input');
    let text_ru = document.createElement('input');
    let text_en = document.createElement('input');
    let btn = document.createElement('button');

    append(row1, link, 'path', "Ссылок");
    append(row2, header_ru, 'header_ru', "Заголовок (ru)");
    append(row2, header_en, 'header_en', "Заголовок (en)");
    append(row3, text_ru, 'text_ru', "Текст (ru)");
    append(row3, text_en, 'text_en', "Текст (en)");
    append(col2, btn, '', '', 'btn btn-danger');


    count ++;
    row.id = `row-${count}`;
    row.classList.add('row', 'align-items-center', 'mb-3');
    row.style.display = "none";

    col.classList.add('col-11');
    col2.classList.add('col-1');

    row1.classList.add('row');
    row2.classList.add('row', 'pt-2');
    row3.classList.add('row', 'pt-2');
    row.append(col, col2);
    col.append(row1, row2, row3);
    link_part.append(row);
    $(`#row-${count}`).show(300);

    function append(root, element, title, label, classes = 'form-control') {
        let div = document.createElement('div');

        setProperty(element, title, data);

        if (label) {
            div.classList.add(title === 'path' ? 'col-12' : 'col-6');
            let l = document.createElement('label');
            l.textContent = label;
            l.htmlFor = title;
            div.append(l);
        }

        for (let cls of classes.split(' ')) {
            element.classList.add(cls);
        }

        div.append(element);
        root.append(div);
    }
}

function setProperty(element, title, data = {}) {
    if (title) {
        element.type = 'text';
        element.id = title + '_' + (count + 1);
        element.title = title;
        element.hint = count;
        links[element.hint][title] = data[title];
        element.value = data[title];
        element.onkeyup = function() {
            links[element.hint][title] = element.value;
            Stringify(links);
        }

        return;
    }

    element.type = 'button';
    element.id = count + 1;
    element.innerHTML = '<i class="fas fa-minus"></i>';
    element.title = "Elashtirmang";
    element.onclick = function() {
        if (count === parseInt(element.id)) {
            $(`#row-${element.id}`).hide(300, function() {
                $(this).remove();
                links.pop();
                count --;
                Stringify(links);
            });

        } else {
            Swal.fire({
                icon: 'warning',
                title: "Hay",
                confirmButtonText: "<i class='fas fa-check'></i>"
            });
        }

        if (count === 1) {
            submit.attr('disabled', true);
        }
    }
}

function changeEquips() {
    let data = JSON.parse(equips.val());
    data.forEach(equip => {
        addEquipment(equip);
    });
    if (data.length) {
        submit.attr('disabled', false);
    }
}

function Stringify(data) {
    equips.val(JSON.stringify(data));
}
