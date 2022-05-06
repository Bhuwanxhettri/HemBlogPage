<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('List of Products') }}
            </h2>

        </div>
    </x-slot>
    <main>

        <div class="max-w-7xi mx-auto py-6 sm:px-6 lg:px-8 bg-slate-100">
            <div class="md:grid md:grid-cols-3 md:gap-6 px-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-16">
                        <h1 class="text-2xl	 font-bold text-gray-900">Add Products</h1>
                        <p class="mt-1 text-md text-justify	  text-gray-600">A product description is the
                            marketing copy that explains what a product is and why it’s worth purchasing. The
                            purpose of a product description is to supply customers with important information about
                            the features and benefits of the product so they’re compelled to buy.</p>
                    </div>

                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div>
                        @if (session()->has('message'))
                        <div class="p-3 bg-green-600 text-greenfa-rotate-180 text-white font-bold rounded shadow-sm">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div wire:submit.prevent="save">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <!-- Name -->
                                    <div>
                                        <label class="block font-bold text-lg text-gray-600" for="name">
                                            Name
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" name="title" wire:model="title" autocomplete="name">
                                        @error('name')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        Short Description</label>
                                        <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="short_description" wire:model="short_description" rows="4">
                                    </textarea>
                                        @error('short_description')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        Description</label>
                                        <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="description" wire:model="description" rows="4">
                                    </textarea>
                                        @error('short_description')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                    </div>





                                    <div class=" justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md col-span-2">
                                        <button type="submit" class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full" wire:click="save()">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div wire.submit.prevent="postImg">
                        <div>
                            <label for="postId" class="block font-bold text-lg text-gray-600">Enter
                                Image For Post
                            </label><br>
                        
                            <label>Choose a Image:</label>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-96">
                                    <select class="form-select appearance-none
                                         block
                                         px-3
                                         py-1.5
                                        text-base
                                         font-normal
                                       text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                                  rounded
                                               transition
                                                ease-in-out
                                                 m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="blog_id" wire:model="blog_id" >
                                      @foreach($posts as $post)
                                        <option value="{{$post->id}}">{{$post->title}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div>
                                        <label class="block font-bold text-lg text-gray-600" for="image">
                                            Image of product
                                        </label>

                                        <input type="file" id="img" name="src" wire:model="src" class="form-control
                                       block
                                       px-3
                                        w-full
                                      
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                        @error('image')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror

                                    </div>
                            </div>
                        </div>
                        <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                            <button type="submit" class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full" wire:click="postImg()">
                                Save
                            </button>
                        </div>
                    </div>
                    <div wire.submit.prevent="postVideo">
                        <div>
                            <label for="postId" class="block font-bold text-lg text-gray-600">Enter
                                Image For Post
                            </label><br>
                        
                            <label>Choose a Image:</label>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-96">
                                    <select class="form-select appearance-none
                                         block
                                         px-3
                                         py-1.5
                                        text-base
                                         font-normal
                                       text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                                  rounded
                                               transition
                                                ease-in-out
                                                 m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="blog_id" wire:model="blog_id" >
                                      @foreach($posts as $post)
                                        <option value="{{$post->id}}">{{$post->title}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div>
                                        <label class="block font-bold text-lg text-gray-600" for="name">
                                            Name
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" name="src" wire:model="src" autocomplete="name">
                                        @error('name')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                            <button type="submit" class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full" wire:click="postVideo()">
                                Save
                            </button>
                        </div>
                    </div>
                </div>

            </div>
    </main>
</div>