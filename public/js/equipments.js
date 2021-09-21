let count = 0;
let equips_input = $('#equips');
let submit = $('#submit');
let equips = [];
class Link {
    constructor() {
        this.path = '';
        this.header = '';
        this.text = '';
    }
}

function ajax(url, callback) {
    $.ajax({
        url: url,
        dataType: 'json',
        success: function(data) {
            callback(data);
        }
    });
}

function addEquipment(equips_data = new Equipment()) { // equips_data - for select necessary options and input fields
    submit.attr('disabled', false);
    ajax("{{route('admin.equipment.add')}}", function(data) {
        create(data, equips_data);
    });
}

function create(data, equips_data) {
    equips.push(new Equipment());
    let equipments = $('#equipments');
    let row = document.createElement('div');
    let row2 = document.createElement('div');
    let col = document.createElement('div');
    let col2 = document.createElement('div');

    let path = document.createElement('input');
    let header = document.createElement('input');
    let text = document.createElement('input');
    let btn = document.createElement('button');
    append(row2, path, 'path', 'text', "Ссылок", "Ссылок");
    append(row2, header, 'header', 'text', "Заголовок", "Заголовок");
    append(row2, text, 'text', 'text', "Текст", "Текст");
    append(col2, btn, '', null, '', '', 'btn btn-danger');

    count ++;
    row.id = `row-${count}`;
    row.classList.add('row', 'align-items-end', 'mb-3');
    row.style.display = "none";
    col.classList.add('col-11');
    col2.classList.add('col-1');
    row2.classList.add('row');

    row.append(col, col2);
    col.append(row2);
    equipments.append(row);
    $(`#row-${count}`).show(300);

    /* For updating data */
    change(true);

    function append(root, element, name, type, label, placeholder, classes = 'form-control') {
        let div = document.createElement('div');
        div.classList.add('col-3');

        setProperty(element, name, type, placeholder, equips_data);
        if (label) {
            let l = document.createElement('label');
            l.textContent = label;
            l.htmlFor = name;
            div.append(l);
        }

        for (let cls of classes.split(' ')) {
            element.classList.add(cls);
        }

        if (!label) {
            div.classList.remove('col-3');
            div.classList.add('row', 'justify-content-end', 'pr-3');
        }

        div.append(element);
        root.append(div);
    }
}

function setProperty(element, name, type, placeholder, data = {}) {
    if (type) {
        element.type = type;
        element.value = data[name];
        element.onkeyup = function() {
            if (type === 'number') {
                equips[element.hint][name] = parseInt(element.value);
            } else {
                equips[element.hint][name] = element.value;
            }
            Stringify(equips);
        }
    }

    if (name) {
        element.id = name + '-' + (count + 1);
        element.name = name;
        element.placeholder = placeholder;
        element.hint = count;
        element.required = true;
        element.onchange = function() {
            equips[element.hint][name] = parseInt(element.value);
            Stringify(equips);
        }

        equips[element.hint][name] = data[name];
    } else {
        element.type = 'button';
        element.id = count + 1;
        element.innerHTML = '<i class="fas fa-minus"></i>';
        element.title = "@lang('global.btn_del')";
        element.onclick = function() {
            if (count === parseInt(element.id)) {
                $(`#row-${element.id}`).hide(300, function() {
                    $(this).remove();
                    equips.pop();
                    count --;
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: "@lang('table.equipment.warning')",
                    confirmButtonText: "<i class='fas fa-check'></i>"
                });
            }

            if (count === 1) {
                submit.attr('disabled', true);
            }
        }
    }
}
// You must rewrite this code!

function fillSelect(element, data, first, value = '') {
    let option = document.createElement('option');
    option.value = '';
    option.text = first;
    element.append(option);

    let j = 0;
    for (let i in data) {
        j = i;
        option = document.createElement('option');
        option.value = i;
        option.text = data[j];
        if (i === value.toString()) {
            option.selected = true;
        }
        element.append(option);
    }
}

function changeEquips() {
    let data = JSON.parse(equips_input.val());
    data.forEach(equip => {
        addEquipment(equip);
    });

    if (data.length) {
        submit.attr('disabled', false);
    }
}

function Stringify(data) {
    equips_input.val(JSON.stringify(data));
}

$(function() {
    if ('{{$type}}' === 'accept') {
        submit.attr('disabled', true);
    }

    setTimeout(() => {
        changeEquips();
    })
});
