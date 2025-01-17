<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Kategori') }}
        </h2>
    </x-slot>



    <div class="pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">            
                <div id='recipients' class="p-8 mt-6 lg:mt-0 text-white bg-red-600 dark:bg-gray-800 rounded shadow ">
                    
                    <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-white font-bold md:text-left mb-3 md:mb-0 pr-4"
                                    for="my-textfield">
                                    Nama
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="form-input block w-full text-black focus:bg-gray-500 rounded-md"
                                    id="nama" name="nama" type="text"
                                    value="{{ old('nama', $kategori->nama) }}">
                                <p class="py-2 text-sm text-gray-600">Masukan nama kategori</p>
                                @error('nama')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-white font-bold  md:text-left mb-3 md:mb-0 pr-4"
                                    for="my-textfield">
                                    keterangan
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="form-input block w-full text-black focus:bg-gray-500 rounded-md"
                                    id="keterangan" name="keterangan" type="text"
                                    value="{{ old('keterangan', $kategori->keterangan) }}">
                                <p class="py-2 text-sm text-gray-600">Masukan Keterangan kategori</p>
                                @error('keterangan')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-white font-bold md:text-left mb-3 md:mb-0 pr-4"
                                    for="my-select">
                                    Status
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select id="status" class="form-select text-black block w-full rounded-md focus:bg-gray-500" name="status">
                                    <option value="aktif"
                                        {{ old('status', $kategori->status) == 'aktif' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="nonaktif"
                                        {{ old('status', $kategori->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                    </option>
                                </select>
                                <p class="py-2 text-sm text-gray-600">Pilih status kategori</p>
                                @error('status')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button type="submit"
                                    class="shadow bg-gray-200  hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded">
                                    Update
                                </button>
                                <a href="{{ route('kategori.index') }}">
                                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>


</x-app-layout>