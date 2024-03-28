<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:  #ffffff; ;
}

tfoot {
  background-color: #76b852;
}

h2 {
  color: #333;
}

</style>
</head>
<body>

<h2>Nilai Mahasiswa</h2>

<table id="gradesTable">
  <thead>
  <tr>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>NIM</th>
    <th>Grade</th>
    <th>Keterangan</th>
    <th>Predikat</th>
  </tr>
  </thead>
  <tbody>

  </tbody>
  <tfoot>
  <tr>
    <td colspan="6">Nilai Tertinggi: <span id="highestGrade"></span></td>
  </tr>
  <tr>
    <td colspan="6">Nilai Terendah: <span id="lowestGrade"></span></td>
  </tr>
  <tr>
    <td colspan="6">Nilai Rata-rata: <span id="averageGrade"></span></td>
  </tr>
  <tr>
    <td colspan="6">Jumlah Mahasiswa: <span id="totalStudents"></span></td>
  </tr>
  <tr>
    <td colspan="6">Total Keseluruhan Nilai: <span id="totalGradePoints"></span></td>
  </tr>
  <tr>
    <td colspan="6" style="text-align: center; font-style: italic; color: #333;">&copy; Sarah Khoirunnisa 2024 Universitas Kuningan</td>
  </tr>
  </tfoot>
</table>

<script>
var students = [
  {no: 1, name: 'Sarah Khoirunnisa', nim: '12345', grade: 85},
  {no: 2, name: 'Lita Novita', nim: '54321', grade: 75},
  {no: 3, name: 'Tiara Rachma', nim: '67890', grade: 90},
  {no: 4, name: 'Melani Agustia', nim: '09876', grade: 60},
  {no: 5, name: 'Sri Devi', nim: '45678', grade: 70},
  {no: 6, name: 'Pani Puja', nim: '13579', grade: 55},
  {no: 7, name: 'Zafira Fatysa', nim: '98765', grade: 80},
  {no: 8, name: 'Sophia Taylor', nim: '56789', grade: 95},
  {no: 9, name: 'Alexander Martinez', nim: '98765', grade: 65},
  {no: 10, name: 'Isabella Anderson', nim: '54321', grade: 45}
];

function calculateGrades() {
  var totalGradePoints = 0;
  var highestGrade = 0;
  var lowestGrade = 100;
  var gradesTable = document.getElementById('gradesTable').getElementsByTagName('tbody')[0];

  for (var i = 0; i < students.length; i++) {
    var student = students[i];
    totalGradePoints += student.grade;
    highestGrade = Math.max(highestGrade, student.grade);
    lowestGrade = Math.min(lowestGrade, student.grade);

    var row = gradesTable.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);

    cell1.innerHTML = student.no;
    cell2.innerHTML = student.name;
    cell3.innerHTML = student.nim;
    cell4.innerHTML = student.grade;
    cell5.innerHTML = student.grade >= 65 ? 'Lulus' : 'Tidak Lulus';
    cell6.innerHTML = getPredikat(student.grade);
  }

  document.getElementById('highestGrade').innerText = highestGrade;
  document.getElementById('lowestGrade').innerText = lowestGrade;
  document.getElementById('averageGrade').innerText = (totalGradePoints / students.length).toFixed(2);
  document.getElementById('totalStudents').innerText = students.length;
  document.getElementById('totalGradePoints').innerText = totalGradePoints;
}

function getPredikat(grade) {
  switch (true) {
    case grade >= 85:
      return 'Memuaskan';
    case grade >= 70:
      return 'Bagus';
    case grade >= 60:
      return 'Cukup';
    case grade >= 50:
      return 'Kurang';
    default:
      return 'Buruk';
  }
}

calculateGrades();
</script>

</body>
</html>
