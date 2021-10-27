<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <style>
        *{
            margin: 0;
        }
        body {
            margin: 0;
        }
    </style>

    <title>Membuat Undangan</title>
</head>
<body>
    <div class="container w-full mx-auto px-3 bg-gray-100 my-0 pb-5">
        @if (session()->has('message'))
            <div class="mx-auto w-1/2 rounded-sm bg-green-400 text-white mt-7 h-9">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        
        <h1 class="text-center text-2xl mt-5">Buat Undangan</h1>
        <form action="/invitation" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            {{-- cover photo --}}
            <div class="bg-white p-2 pb-4 mb-4">
                <label for="cover_image" class="block mb-2">FOTO SAMPUL</label>
                <input type="file" name="cover_image" id="cover_image" class="@error('cover_image') border-red-500 @enderror" onchange="previewCoverImage()" required>
                <p class="text-xs">*Ukuran file maksimal 2MB dengan format .jpg atau .png</p>
                @error('cover_image')
                    <p class="text-xs text-red-500">{{ $message }}</p>
                @enderror
                <img class="img-cover-preview w-full">
            </div>
            {{-- End cover photo --}}

            {{-- bride info --}}
            <div class="flex justify-between items-center mb-4">
                <div class="bg-white w-5/12 p-2">
                    <p class="mb-4">DATA MEMPELAI PRIA</p>
                    <label for="groom_image" class="block">Foto</label>
                    <input type="file" name="groom_image" id="groom_image" class="@error('groom_image') border-red-500 @enderror" onchange="previewGroomImage()" required>
                    <p class="text-xs">*Ukuran file maksimal 2MB dengan format .jpg atau .png</p>
                    @error('groom_image')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <img class="img-groom-preview">
                    <label for="groom_name" class="block">Nama</label>
                    <input type="text" name="groom_name" id="groom_name" class="@error('groom_name') border-red-500 @enderror" value="{{ old('groom_name') }}" required>
                    @error('groom_name')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="groom_full_name" class="block">Nama Lengkap</label>
                    <input type="text" name="groom_full_name" id="groom_full_name" class="@error('groom_full_name') border-red-500 @enderror" value="{{ old('groom_full_name') }}" required>
                    @error('groom_full_name')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="groom_info" class="block">Tentang mempelai pria</label>
                    <textarea name="groom_info" id="groom_info" rows="5" class="w-full @error('groom_info') border-red-500 @enderror" value="{{ old('groom_info') }}" required></textarea>
                    @error('groom_info')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-white w-5/12 p-2">
                    <p class="mb-4">DATA MEMPELAI WANITA</p>
                    <label for="bride_image" class="block">Foto</label>
                    <input type="file" name="bride_image" id="bride_image" class="@error('bride_image') border-red-500 @enderror" onchange="previewBrideImage()" required>
                    <p class="text-xs">*Ukuran file maksimal 2MB dengan format .jpg atau .png</p>
                    @error('bride_image')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <img class="img-bride-preview">
                    <label for="bride_name" class="block">Nama</label>
                    <input type="text" name="bride_name" id="bride_name" class="@error('bride_name') border-red-500 @enderror" value="{{ old('bride_name') }}" required>
                    @error('bride_name')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="bride_full_name" class="block">Nama Lengkap</label>
                    <input type="text" name="bride_full_name" id="bride_full_name" class="@error('bride_full_name') border-red-500 @enderror" value="{{ old('bride_full_name') }}" required>
                    @error('bride_full_name')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="bride_info" class="block">Tentang mempelai pria</label>
                    <textarea name="bride_info" id="bride_info" rows="5" class="w-full @error('bride_info') border-red-500 @enderror" required></textarea>
                    @error('bride_info')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- End bride info --}}

            {{-- details wedding --}}
            <div class="flex justify-between">
                <div class="bg-white p-2 w-5/12">
                    <p class="mb-3">AKAD/PEMBERKATAN</p>
                    <label for="wedding_date" class="block mb-1">Tanggal Akad/Pemberkatan</label>
                    <input type="date" name="wedding_date" id="wedding_date" class="@error('wedding_date') border-red-500 @enderror" value="{{ old('wedding_date') }}" required>
                    @error('wedding_date')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-between mt-2">
                        <div>
                            <label for="wedding_time_start" class="block">Mulai</label>
                            <input type="time" name="wedding_time_start" id="wedding_time_start" class="@error('wedding_time_start') border-red-500 @enderror" value="{{ old('wedding_time_start') }}" required>
                            @error('wedding_time_start')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="wedding_time_end" class="block">Selesai</label>
                            <input type="time" name="wedding_time_end" id="wedding_time_end" class="@error('wedding_time_end') border-red-500 @enderror" value="{{ old('wedding_time_end') }}" required>
                            @error('wedding_time_end')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="wedding_venue" class="block">Tempat Akad/Pemberkatan</label>
                        <input type="text" name="wedding_venue" id="wedding_venue" class="w-full @error('wedding_venue') border-red-500 @enderror" value="{{ old('wedding_venue') }}" required>
                        @error('wedding_venue')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="wedding_venue_address" class="block">Alamat Akad/Pemberkatan</label>
                        <input type="text" name="wedding_venue_address" id="wedding_venue_address" class="w-full @error('wedding_venue_address') border-red-500 @enderror" value="{{ old('wedding_venue_address') }}" required>
                        @error('wedding_venue_address')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="bg-white p-2 w-5/12">
                    <p class="mb-3">RESEPSI</p>
                    <label for="reseption_date" class="block mb-1">Tanggal Resepsi</label>
                    <input type="date" name="reseption_date" id="reseption_date" class="@error('reseption_date') border-red-500 @enderror" value="{{ old('reseption_date') }}" required>
                    @error('reseption_date')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-between mt-2">
                        <div>
                            <label for="reseption_time_start" class="block">Mulai</label>
                            <input type="time" name="reseption_time_start" id="reseption_time_start" class="@error('reseption_time_start') border-red-500 @enderror" value="{{ old('reseption_time_start') }}" required>
                            @error('reseption_time_start')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="reseption_time_end" class="block">Selesai</label>
                            <input type="time" name="reseption_time_end" id="reseption_time_end" class="@error('reseption_time_end') border-red-500 @enderror" value="{{ old('reseption_time_start') }}" required>
                            @error('reseption_time_end')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="reseption_venue" class="block">Tempat Akad/Pemberkatan</label>
                        <input type="text" name="reseption_venue" id="reseption_venue" class="w-full @error('reseption_venue') border-red-500 @enderror" value="{{ old('reseption_venue') }}" required>
                        @error('reseption_venue')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="reseption_venue_address" class="block">Alamat Akad/Pemberkatan</label>
                        <input type="text" name="reseption_venue_address" id="reseption_venue_address" class="w-full @error('reseption_venue_address') border-red-500 @enderror" value="{{ old('reseption_venue_address') }}" required>
                        @error('reseption_venue_address')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- End details wedding --}}

            <button type="submit" class="block bg-blue-400 mx-auto rounded-md px-2 py-1 text-white">Simpan</button>
        </form>
    </div>
    <script>
        function previewCoverImage() {
            const image = document.querySelector('#cover_image')
            const preview = document.querySelector('.img-cover-preview')

            preview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent){
                preview.src = oFREvent.target.result
            }
        }

        function previewGroomImage(){
            const image = document.querySelector('#groom_image')
            const preview = document.querySelector('.img-groom-preview')

            preview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent){
                preview.src = oFREvent.target.result
            }
        }
        
        function previewBrideImage(){
            const image = document.querySelector('#bride_image')
            const preview = document.querySelector('.img-bride-preview')

            preview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent){
                preview.src = oFREvent.target.result
            }
        }
    </script>
</body>
</html>