@extends('layouts/main')
@section('body')
    <h1>Garuda Cyber Institute</h1>
    <h3>Jadilah Programmer Handal Bersama GC-INS</h3>
    <p>Grow Together With Garuda Cyber Institute</p>
    <h3>Syarat dan Ketentuan</h3>
    <ul>
        <li>Tamatan SMA/SMK</li>
        <li>Tamatan Perguruan Tinggi</li>
        <li>Pekerja IT</li>
        <li>Freelancer</li>
    </ul>
    <h3>Cara Bergabung</h3>
    <ol>
        <li><a href= {{ 'register' }}>Kunjungi website GC-INS</a></li>
        <li>Register</li>
        <li>Lakukan Pembayaran</li>
    </ol>
@endsection
