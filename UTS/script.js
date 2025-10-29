const form = document.getElementById('formMahasiswa');
const tabel = document.getElementById('tabelMahasiswa').getElementsByTagName('tbody')[0];
const dataMahasiswa = [
  { nama: "Galih Pratama", prodi: "TI", semester: 3 },
  { nama: "Kirana Saputri", prodi: "SI", semester: 4 }
];

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const nama = document.getElementById('nama').value;
  const nim = document.getElementById('nim').value;
  const semester = document.getElementById('semester').value;
  const prodi = document.getElementById('prodi').value;
  const email = document.getElementById('email').value;

  const newData = { nama, nim, semester, prodi, email };

  // 1️⃣ Data tampil di console
  console.log("Data Mahasiswa Baru:", newData);

  // 2️⃣ Data disimpan di array
  dataMahasiswa.push(newData);

  // 3️⃣ Update tabel
  updateTable();

  // 4️⃣ Form dikosongkan
  form.reset();
});

function updateTable() {
  tabel.innerHTML = "";
  dataMahasiswa.forEach((mhs, index) => {
    const row = tabel.insertRow();
    row.insertCell(0).innerText = index + 1;
    row.insertCell(1).innerText = mhs.nama;
    row.insertCell(2).innerHTML = `Prodi: ${mhs.prodi} <br> Semester: ${mhs.semester}`;
  });
}
