<center>
    <h1>Data Pendidikan</h1>
<img src="{{ asset('images/vio.jpeg') }}" class="foto-profil">
 <h3>
       <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        Titis Alvio
    </h3>
    <div style="background-color:#b39; padding:10px;">
        <a href="/education" style="color:white; margin-right:20px; text-decoration:none;">
            Education
        </a>
        <a href="/skills" style="color:pink; text-decoration:none;">
            Skills
        </a>
    </div>
</center>

<table>
    <tr>
        <th>Sekolah</th>
        <th>Jurusan</th>
        <th>Tahun Mulai</th>
        <th>Tahun Selesai</th>
    </tr>

    @foreach($educations as $edu)
    <tr>
        <td>{{ $edu->school_name }}</td>
        <td>{{ $edu->degree }}</td>
        <td>{{ $edu->start_year }}</td>
        <td>{{ $edu->end_year }}</td>
    </tr>
    @endforeach
</table>
    <footer style="text-align:center; margin-top:30px; padding:10px; background-color:#B39; color:pink;">
     © {{ date('Y') }} Titis Alvio- All Rights Reserved
</footer>
<style>
h3 {
    font-family: 'Great Vibes', cursive;
    text-align: center;
    font-size: 30px;
     margin: 5px auto; 
}
.foto-profil {
    width: 90px;           /* ukuran kecil */
    height: 100x;
    border-radius: 100%;    /* bikin bulat */
    object-fit: cover;     /* biar gak gepeng */
    display: block;
    margin: 10px auto;     /* tengah */
    border: 2px solid #333; /* bingkai */
    box-shadow: 0 0 5px rgba(0,0,0,0.5);
}
body {
        font-family: Times New Roman, Times, serif;
        margin: 0;
    }

    .navbar {
        background-color: #333;
        padding: 12px;
        text-align: center;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-size: 16px;
        font-weight: bold;
        padding: 8px 12px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .navbar a:hover {
        background-color: #4CAF50;
        color: white;
    }

    .navbar a.active {
        background-color: #4CAF50;
    }

table {
        border-collapse: collapse;
        width: 60%;
        margin: 20px auto;
    }

    th {
        background-color: #d993bf;
        color: white;
    }

    td, th {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
footer {
    text-align: center;
    margin-top: 30px;
    padding: 10px;
    background-color: #B39;
    color: white;
}
</style>