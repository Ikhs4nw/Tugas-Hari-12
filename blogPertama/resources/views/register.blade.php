
@extends('layouts/main')

@section('body')
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="register/proses" method="post">
        {{ csrf_field() }}
        <label>First Name:</label><br>
        <input type="text" name="First_Name" style="margin: 12px 0" required><br>
        <label>Last Name:</label><br>
        <input type="text" name="Last_Name" style="margin: 12px 0;" required><br>
        <label>Gender:</label><br>
        <label><input type="radio" name="Gender" value="Male" style="margin-top: 12px;"> Male</label><br>
        <label><input type="radio" name="Gender"> Female</label><br>
        <label><input type="radio" name="Gender" style="margin-bottom: 12px;"> Other</label><br>
        <label>Nationality:</label><br>
        <select name="kenegaraan" style="margin: 12px 0" required>
            <option value="" disabled selected>Choose Nationality</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Imigran">Imigran</option>
        </select><br>
        <label>Language Spoken:</label><br>
        <label><input type="checkbox" name="Bahasa" value="Bahasa Indonesia" style="margin-top: 12px;"> Bahasa Indonesia</label><br>
        <label><input type="checkbox" name="Bahasa" value="English"> English</label><br>
        <label><input type="checkbox" name="Bahasa" value="Other" style="margin-bottom: 12px;"> Other</label><br>
        <label>Bio:</label><br>
        <textarea name="bio" cols="30" rows="10" style="margin-top: 12px;" required></textarea><br>
        <input type="submit" name="daftar" value="Sign Up">
    </form>
@endsection

