<x-layout title="Input Data">
    
    <div class="max-w-md my-20">
        <h1 class="text-center text-white font-bold mb-4 text-2xl">Mengisi Data Mahasiswa yang Akan Diprediksi</h1>
        <form action="{{ route('students.predict') }}" method="POST">
            @csrf
            @method('POST')
        
            <!-- DONE Name -->
            <div class="mb-4">
                <label for="name" class="block font-medium text-white">Nama</label>
                <input type="text" name="name" id="name" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan nama" required>
                @error('name')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Marital Status -->
            <div class="mb-4">
                <label for="marital_status" class="block font-medium text-white">Status perkawinan</label>
                <select name="marital_status" id="marital_status" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="1">Lajang</option>
                    <option value="2">Menikah</option>
                    <option value="3">Duda</option>
                    <option value="4">Bercerai</option>
                    <option value="5">Bersatu secara fakto</option>
                    <option value="6">Berpisah secara hukum</option>
                </select>
                @error('marital_status')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- DONE Course -->
            <div class="mb-4">
                <label for="course" class="block font-medium text-white">Program studi</label>
                <select name="course" id="course" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="33">Biofuel Production Technologies</option>
                    <option value="171">Animation and Multimedia Design</option>
                    <option value="8014">Social Service (evening attendance)</option>
                    <option value="9003">Agronomy</option>
                    <option value="9070">Communication Design</option>
                    <option value="9085">Veterinary Nursing</option>
                    <option value="9119">Informatics Engineering</option>
                    <option value="9130">Equiculture</option>
                    <option value="9147">Management</option>
                    <option value="9238">Social Service</option>
                    <option value="9254">Tourism</option>
                    <option value="9500">Nursing</option>
                    <option value="9556">Oral Hygiene</option>
                    <option value="9670">Advertising and Marketing Management</option>
                    <option value="9773">Journalism and Communication</option>
                    <option value="9853">Basic Education</option>
                    <option value="9991">Management (evening attendance)</option>
                </select>                
                @error('course')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Application Mode -->
            <div class="mb-4">
                <label for="application_mode" class="block font-medium text-white">Jalur penerimaan mahasiswa</label>
                <select name="application_mode" id="application_mode" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="1">1st phase - general contingent</option>
                    <option value="2">Ordinance No. 612/93</option>
                    <option value="5">1st phase - special contingent (Azores Island)</option>
                    <option value="7">Holders of other higher courses</option>
                    <option value="10">Ordinance No. 854-B/99</option>
                    <option value="15">International student (bachelor)</option>
                    <option value="16">1st phase - special contingent (Madeira Island)</option>
                    <option value="17">2nd phase - general contingent</option>
                    <option value="18">3rd phase - general contingent</option>
                    <option value="26">Ordinance No. 533-A/99, item b2) (Different Plan)</option>
                    <option value="27">Ordinance No. 533-A/99, item b3 (Other Institution)</option>
                    <option value="39">Over 23 years old</option>
                    <option value="42">Transfer</option>
                    <option value="43">Change of course</option>
                    <option value="44">Technological specialization diploma holders</option>
                    <option value="51">Change of institution/course</option>
                    <option value="53">Short cycle diploma holders</option>
                    <option value="57">Change of institution/course (International)</option>
                </select>                
                @error('application_mode')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Previous Qualification -->
            <div class="mb-4">
                <label for="previous_qualification" class="block font-medium text-white">Kualifikasi pendidikan terakhir sebelum masuk universitas</label>
                <select name="previous_qualification" id="previous_qualification" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="1">Pendidikan Sekunder - Tahun ke-12 atau setara</option>
                    <option value="2">Pendidikan Tinggi - Gelar Sarjana</option>
                    <option value="3">Pendidikan Tinggi - Gelar</option>
                    <option value="4">Pendidikan Tinggi - Magister</option>
                    <option value="5">Pendidikan Tinggi - Doktor</option>
                    <option value="6">Frekuensi Pendidikan Tinggi</option>
                    <option value="9">Tahun ke-12 Pendidikan - Belum Selesai</option>
                    <option value="10">Tahun ke-11 Pendidikan - Belum Selesai</option>
                    <option value="12">Lainnya - Tahun ke-11 Pendidikan</option>
                    <option value="14">Tahun ke-10 Pendidikan</option>
                    <option value="15">Tahun ke-10 Pendidikan - Belum Selesai</option>
                    <option value="19">Pendidikan Dasar Siklus ke-3 (Tahun ke-9/10/11) atau setara</option>
                    <option value="38">Pendidikan Dasar Siklus ke-2 (Tahun ke-6/7/8) atau setara</option>
                    <option value="39">Kursus Spesialisasi Teknologi</option>
                    <option value="40">Pendidikan Tinggi - Gelar (Siklus ke-1)</option>
                    <option value="42">Kursus Teknik Profesional Pendidikan Tinggi</option>
                    <option value="43">Pendidikan Tinggi - Magister (Siklus ke-2)</option>
                </select>                
                @error('previous_qualification')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Tuition Fees Up to Date -->
            <div class="mb-4">
                <label for="tuition_fees_up_to_date" class="block font-medium text-white">Ketepatan waktu pembayaran uang kuliah</label>
                <select name="tuition_fees_up_to_date" id="tuition_fees_up_to_date" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">Tidak tepat waktu</option>
                    <option value="1">Tepat waktu</option>
                </select>
                @error('tuition_fees_up_to_date')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Scholarship Holder -->
            <div class="mb-4">
                <label for="scholarship_holder" class="block font-medium text-white">Status penerima beasiswa</label>
                <select name="scholarship_holder" id="scholarship_holder" class="cursor-pointer text-black bg-white placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">Tidak penerima beasiswa</option>
                    <option value="1">Penerima beasiswa</option>
                </select>
                @error('scholarship_holder')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- DONE Age at Enrollment -->
            <div class="mb-4">
                <label for="age_at_enrollment" class="block font-medium text-white">Usia mahasiswa saat pendaftaran kuliah</label>
                <input type="number" name="age_at_enrollment" id="age_at_enrollment" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Usia saat pendaftaran..." required>
                @error('age_at_enrollment')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Curricular Units 1st Sem (Credited) -->
            <div class="mb-4">
                <label for="curricular_units_1st_sem_credited" class="block font-medium text-white">Jumlah SKS semester yang diakui (terakhir kali)</label>
                <input type="number" name="curricular_units_1st_sem_credited" id="curricular_units_1st_sem_credited" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan jumlah SKS yang diakui..." required>
                @error('curricular_units_1st_sem_credited')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Curricular Units 1st Sem (Enrolled) -->
            <div class="mb-4">
                <label for="curricular_units_1st_sem_enrolled" class="block font-medium text-white">Jumlah SKS semester yang didaftarkan (terakhir kali)</label>
                <input type="number" name="curricular_units_1st_sem_enrolled" id="curricular_units_1st_sem_enrolled" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan jumlah SKS yang didaftarkan..." required>
                @error('curricular_units_1st_sem_enrolled')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Curricular Units 1st Sem (Evaluations) -->
            <div class="mb-4">
                <label for="curricular_units_1st_sem_evaluations" class="block font-medium text-white">Jumlah evaluasi mata kuliah semester (terakhir kali)</label>
                <input type="number" name="curricular_units_1st_sem_evaluations" id="curricular_units_1st_sem_evaluations" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan jumlah evaluasi semester terakhir..." required>
                @error('curricular_units_1st_sem_evaluations')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Curricular Units 1st Sem (Approved) -->
            <div class="mb-4">
                <label for="curricular_units_1st_sem_approved" class="block font-medium text-white">Jumlah mata kuliah semester yang lulus (terakhir kali)</label>
                <input type="number" name="curricular_units_1st_sem_approved" id="curricular_units_1st_sem_approved" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan jumlah mata kuliah yang lulus..." required>
                @error('curricular_units_1st_sem_approved')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Curricular Units 1st Sem (Grade) -->
            <div class="mb-4">
                <label for="curricular_units_1st_sem_grade" class="block font-medium text-white">Nilai mata kuliah semester (terakhir kali)</label>
                <input type="number" step="0.01" name="curricular_units_1st_sem_grade" id="curricular_units_1st_sem_grade" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan nilai..." required>
                @error('curricular_units_1st_sem_grade')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- DONE Inflation Rate -->
            <div class="mb-4">
                <label for="inflation_rate" class="block font-medium text-white">Tingkat Inflasi (sesuai dengan negara mahasiswa)</label>
                <input type="number" step="0.01" name="inflation_rate" id="inflation_rate" class="text-white bg-transparent placeholder-gray-400 text-sm w-full border border-white rounded-lg px-2 py-2 mt-2 focus:outline-none" placeholder="Masukkan tingkat inflasi..." required>
                @error('inflation_rate')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="w-full flex items-center justify-between">
                <div onclick="window.location.href = '/'" class="cursor-pointer mt-2 font-medium rounded-lg text-sm px-4 py-2 mb-4 focus:outline-none bg-red-500 text-white hover:bg-white hover:text-red-500 hover:border border-red-500">Kembali</div>
                <button type="submit" class="mt-2 font-medium rounded-lg text-sm px-4 py-2 mb-4 focus:outline-none bg-blue-500 text-white hover:bg-white hover:text-blue-500 hover:border border-blue-500">Prediksi</button>
            </div>
        </form>
    </div>

</x-layout>
