console.log('script dashboard access');
function show(ids) {
  const div = ['players', 'nationality', 'club', 'GKs'];
  div.forEach((id) => {
    const element = document.getElementById(id);
    if (element) {
      element.style.display = id === ids ? 'block' : 'none';
    }
  });
}

const addClub = document.querySelector('.add_club');
console.log(addClub);
const modalClub = document.querySelector('.modalClub');
const CancelClub = document.querySelector('.CancelClub');
const addClubForm = document.querySelector('#addClubForm');

addClub.addEventListener('click', () => {
  modalClub.classList.remove('hidden');
});
CancelClub.addEventListener('click', () => {
  modalClub.classList.add('hidden');
  addClubForm.reset();
});

const addNationality = document.querySelector('.add_nationality');
const modalNationality = document.querySelector('.modalNationality');
const CancelNationality = document.querySelector('.CancelNationality');
const addNationalityForm = document.querySelector('#addNationalityForm');

addNationality.addEventListener('click', () => {
  modalNationality.classList.remove('hidden');
});

CancelNationality.addEventListener('click', () => {
  modalNationality.classList.add('hidden');
  addNationalityForm.reset();
});

const addPlayers = document.querySelector('.add_player');
const modalPlayers = document.querySelector('.modalPlayer');
const cancelPlayerModal = document.querySelector('.CancelPlayer');
const addPlayerModal = document.querySelector('#addPlayerModal');

addPlayers.addEventListener('click', () => {
  modalPlayers.classList.remove('hidden');
});

cancelPlayerModal.addEventListener('click', () => {
  modalPlayers.classList.add('hidden');
  addPlayerModal.reset();
});

const addGK = document.querySelector('.add_GK');
const modalGK = document.querySelector('.modalGK');
const cancelGKModal = document.querySelector('.CancelGK');
const addGKModal = document.querySelector('#addGKModal');

addGK.addEventListener('click', () => {
  modalGK.classList.remove('hidden');
});

cancelGKModal.addEventListener('click', () => {
  modalGK.classList.add('hidden');
  addGKModal.reset();
});

// function deleteRecord(id, table, idColumn) {
//   if (confirm('Are you sure you want to delete this record?')) {
//     $.ajax({
//       url: 'delete.php',
//       type: 'POST',
//       data: { id: id, table: table, idColumn: idColumn },
//       success: function (response) {
//         alert(response);
//         $('#row-' + id).remove();
//       },
//     });
//   }
// }
