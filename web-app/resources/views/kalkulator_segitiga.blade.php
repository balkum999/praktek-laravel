<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Segitiga Dinamis</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e9ecef; padding: 20px; display: flex; justify-content: center; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); width: 320px; }
        h2 { color: #007bff; text-align: center; margin-top: 0; }
        
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #333; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        
        .result-box { margin-top: 20px; padding: 15px; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: 5px; text-align: center; }
        .result { font-size: 20px; font-weight: bold; color: #155724; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Hitung Luas Segitiga</h2>
        
        <!-- Form input menggunakan method GET yang mengarah ke route yang sama -->
        <form action="{{ url('/kalkulator/segitiga') }}" method="GET">
            <div class="form-group">
                <label for="alas">Nilai Alas (cm):</label>
                <!-- value="{{ $alas }}" digunakan agar angka tidak hilang setelah disubmit -->
                <input type="number" name="alas" id="alas" step="any" value="{{ $alas }}" required placeholder="Masukkan alas...">
            </div>
            
            <div class="form-group">
                <label for="tinggi">Nilai Tinggi (cm):</label>
                <input type="number" name="tinggi" id="tinggi" step="any" value="{{ $tinggi }}" required placeholder="Masukkan tinggi...">
            </div>
            
            <button type="submit">Hitung Luas</button>
        </form>

        <!-- Blok hasil ini hanya akan tampil jika variabel $luas sudah terisi / dihitung -->
        @if($luas !== null)
        <div class="result-box">
            <div>Rumus: &frac12; &times; {{ $alas }} &times; {{ $tinggi }}</div>
            <div class="result">Luas = {{ $luas }} cm&sup2;</div>
        </div>
        @endif
    </div>
</body>
</html>