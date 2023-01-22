import axios from 'axios';
import fields from './fields';

function cancel() {
    window.location.href = '/';
}
window.cancel = cancel;

function save() {
    axios.post(`/api/animal`, {
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
        if (response.status === 201) {
            alert('Resource successfully created');

            window.location.href = '/';
        }
    })
    .catch((error) => {
        alert(error.response.statusText);
    });
}
window.save = save;