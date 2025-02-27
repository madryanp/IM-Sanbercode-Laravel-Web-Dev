@extends('layout.master')
@section('title')
    Registrasi
@endsection

@section('content')
    
    <!-- <form action="/home" method="POSt">
        @csrf
        <label>nama depan</label>
        <input type="text" name="firstname"><br><br>
        <label>nama belakang</label>
        <input type="text" name="lastname"><br><br>
        <labe">Biodata</label>
        <textarea name="bio" cols="30" rows="10"></textarea> <br><br>
        <input type="submit" value="kirim">
    </form> -->


    <form action="/home" method="POST">
    @csrf
        <!-- Text Input -->
        <label for="name">first Name:</label>
        <input type="text" name="firstname">
        <br><br>

        <label for="name">last Name:</label>
        <input type="text" name="lastname">
        <br><br>

      
        <!-- Radio Button -->
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Laki2</label>
        <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Perempuan</label>
        <br><br>

         <!-- Dropdown Select -->
         <label for="country">Nasioanlity : </label>
         <select id="negara" name="negara">
             <option value="Indonesia">Indonesia</option>
             <option value="Inggris">Inggris</option>
             <option value="Arab">Arab</option>
         </select>
         <br><br>


        <!-- Checkbox -->
        <p>Language spoken :</p>
        <label><input type="checkbox" name="bahasa" value="Indonesia"> Indonesia</label><br>
        <label><input type="checkbox" name="bahasa" value="Inggris"> Inggris</label><br>
        <label><input type="checkbox" name="bahasa" value="Arab"> Arab</label><br>
        <br><br>

    
        <!-- Textarea -->
        <label for="message">Bio:</label>
        <br>
        <textarea name="bio" cols="30" rows="10"></textarea> <br><br>
        <br><br>


        <!-- Submit Button -->

        <input type="submit" value="kirim">
    </form>

    @endsection