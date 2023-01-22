import axios from 'axios';
import fields from './fields';

function cancel() {
    window.location.href = '/';
}
window.cancel = cancel;

function save() {
    axios.put(`/api/animal/${getUrlId()}`, {
        name: fields.name.value,
        nickname: fields.nickname.value,
        weight: fields.weight.value,
        height: fields.height.value,
        gender: fields.gender.value,
        friendliness: fields.friendliness.value,
        color: fields.color.value,
        date_of_birth: fields.date_of_birth.value,
    })
    .then((response) => {
        if (response.status === 200) {
            alert('Resource successfully updated');

            window.location.href = '/';
        }
    })
    .catch((error) => {
        alert(error.response.statusText);
    });
}
window.save = save;

function getUrlId() {
    const url = window.location.href;
    return url.substring(url.lastIndexOf('/') + 1);
}

axios.get(`/api/animal/${getUrlId()}/edit`).then((response) => {
    const data = response.data;

    fields.name.value = data.name;
    fields.nickname.value = data.nickname;
    fields.weight.value = data.weight;
    fields.height.value = data.height;
    fields.gender.value = data.gender;
    fields.friendliness.value = data.friendliness;
    fields.color.value = data.color;
    fields.date_of_birth.value = data.date_of_birth;
});